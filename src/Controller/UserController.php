<?php

namespace App\Controller;

use App\Entity\User;
use App\DTO\UserDTO;
//use App\Form\UserType;
use App\Form\UserDTOType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin/user')]

class UserController extends AbstractController {

    private $userPasswordHasher;
    private $entityManager;

    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager) {
        $this->userPasswordHasher = $passwordHasher;
        $this->entityManager = $entityManager;
    }

    #[Route('/list', name: 'app_user_index', methods: ['GET'])]

    public function index(Request $request, UserRepository $userRepository): Response {


        $userAll = $userRepository->findAll();

        $maxPage = ceil(count($userAll) / 3);

        $page = $request->query->getInt('page', 1);
        $limit = 3;
        $offset = ($page - 1) * $limit;

        $user = $userRepository->findPaginatedItems($limit, $offset);


        return $this->render('user/index.html.twig', [
                    'users' => $user,
                    'max_page' => $maxPage,
                    'act_page' => $page
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]

    public function new(Request $request/* , UserRepository $userRepository */): Response {

        //$ret_data = array();


        $userDTO = new UserDTO($this->userPasswordHasher);
        $form = $this->createForm(UserDTOType::class, $userDTO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = new User();
            $userDTO->userEntity($user);

            // Mentés
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }


        return $this->renderForm('user/new.html.twig', [
                    'user' => $userDTO,
                    'form' => $form,
        ]);


    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]

    public function show(User $user): Response {
        return $this->render('user/show.html.twig', [
                    'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]

    public function edit(Request $request, User $user, UserRepository $userRepository): Response {


        $userDTO = new UserDTO($this->userPasswordHasher);
        
        
        $userDTO->loadFromEntity($user); // Betöltjük a meglévő adatokat a DTO-ba
        
        $form = $this->createForm(UserDTOType::class, $userDTO);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userDTO->userEntity($user);

            // Mentés
            $this->entityManager->flush();
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        

        return $this->renderForm('user/edit.html.twig', [
                    'user' => $user,
                    'form' => $form,
                    
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]

    public function delete(Request $request, User $user, UserRepository $userRepository): Response {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

}
