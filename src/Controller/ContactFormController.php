<?php

namespace App\Controller;

use App\DTO\ContactFormDTO;
use App\Entity\ContactForm;
use App\Form\ContactFormDTOType;
use App\Repository\ContactFormRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

//#[Route('/contact_form')]

class ContactFormController extends AbstractController {
    
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    #[Route('admin/user/contact_form_list', name: 'app_contact_form_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ContactFormRepository $contactFormRepository): Response {

        $contact_formsAll = $contactFormRepository->findAll();

        $maxPage = ceil(count($contact_formsAll) / 3);

        $page = $request->query->getInt('page', 1);
        $limit = 3;
        $offset = ($page - 1) * $limit;

        $contact_forms = $contactFormRepository->findPaginatedItems($limit, $offset);



        return $this->render('contact_form/index.html.twig', [
                    'contact_forms' => $contact_forms,
                    'max_page' => $maxPage,
                    'act_page' => $page
        ]);
    }

    #[Route('/', name: 'app_contact_form_new', methods: ['GET', 'POST'])]

    public function new(Request $request, ContactFormRepository $contactFormRepository): Response {

        $ret_data = array();

        $contactFormDTO = new ContactFormDTO();
        $form = $this->createForm(ContactFormDTOType::class, $contactFormDTO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactForm = new ContactForm();
            $contactFormDTO->contactFormEntity($contactForm);

            // Mentés
            $this->entityManager->persist($contactForm);
            $this->entityManager->flush();

            $ret_data['success_message'] = "Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.";

            // Újra példányosítja a formot az üres adatokkal
            $contactFormDTO = new ContactFormDTO();
            $form = $this->createForm(ContactFormDTOType::class, $contactFormDTO);

            return $this->renderForm('contact_form/new.html.twig', [
                        'contact_form' => $contactFormDTO,
                        'form' => $form,
                        'ret_data' => $ret_data
            ]);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        } else {
            $errors = $form->getErrors(true, true);
            $tmp_err = array();

            $is_mind_kitoltve = true;

            foreach ($errors as $error) {
                // Ellenőrzés, hogy melyik mezővel kapcsolatos a hiba
                $fieldName = $error->getOrigin()->getName();
                $constraint = $error->getCause()->getConstraint();

                // Ellenőrzés, hogy milyen hibaüzenetet kaptál
                $errorMessage = $error->getMessage();

                if ($constraint instanceof \Symfony\Component\Validator\Constraints\NotBlank) {
                    //ha legalább 1 ilyen típusú van akkor hiba, nem is kell tovább nézni
                    $is_mind_kitoltve = false;
                }


                if ($constraint instanceof \Symfony\Component\Validator\Constraints\Email) {
                    //ha legalább 1 ilyen típusú van akkor hiba, nem is kell tovább nézni
                    $tmp_err[] = $errorMessage;
                }
            }
            if (!$is_mind_kitoltve) {
                $tmp_err[] = "Hiba! Kérjük töltsd ki az összes mezőt!";
            }



            if (!empty($tmp_err)) {
                $ret_data['error_message'] = implode("<br>", $tmp_err);
            }
        }

        return $this->renderForm('contact_form/new.html.twig', [
                    'contact_form' => $contactFormDTO,
                    'form' => $form,
                    'ret_data' => $ret_data
        ]);
    }

    #[Route('/list/{id}', name: 'app_contact_form_show', methods: ['GET'])]

    public function show(ContactForm $contactForm): Response {
        return $this->render('contact_form/show.html.twig', [
                    'contact_form' => $contactForm,
        ]);
    }

    #[Route('/list/{id}/edit', name: 'app_contact_form_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ContactForm $contactForm, ContactFormRepository $contactFormRepository): Response {
        //erre most nem volt szükség a feladatban
        $form = $this->createForm(ContactFormType::class, $contactForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormRepository->save($contactForm, true);

            return $this->redirectToRoute('app_contact_form_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('contact_form/edit.html.twig', [
                    'contact_form' => $contactForm,
                    'form' => $form,
        ]);
    }

    #[Route('/list/{id}', name: 'app_contact_form_delete', methods: ['POST'])]

    public function delete(Request $request, ContactForm $contactForm, ContactFormRepository $contactFormRepository): Response {
        //erre most nem volt szükség a feladatban
        if ($this->isCsrfTokenValid('delete' . $contactForm->getId(), $request->request->get('_token'))) {
            $contactFormRepository->remove($contactForm, true);
        }

        return $this->redirectToRoute('app_contact_form_index', [], Response::HTTP_SEE_OTHER);
    }

    public function configureCrud(Crud $crud): Crud {
        return $crud
                        ->setPaginatorPageSize(5);
    }

}
