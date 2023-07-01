<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\ContactForm;


class ContactFormDTO {

    /**
     * @Assert\NotBlank(message="A név mező kitöltése kötelező.")
     */
    public ?string $Name = null;

    /**
     * @Assert\NotBlank(message="Az e-mail mező kitöltése kötelező.")
     * @Assert\Email(
     *      message="Hiba! Kérjük e-mail címet adjál meg!",
     *      mode = "strict"
     * )
     */
    public ?string $Email = null;

    /**
     * @Assert\NotBlank(message="Az üzenet mező kitöltése kötelező.#0001")
     */
    public ?string $Note = null;

    public function contactFormEntity(ContactForm $contactForm): void {
        $contactForm->setName($this->Name);
        $contactForm->setEmail($this->Email);
        $contactForm->setNote($this->Note);
    }

    public function loadFromEntity(ContactForm $contactForm): void {
        $this->Name = $contactForm->getName();
        $this->Email = $contactForm->getEmail();
        $this->Note = $contactForm->getNote();
    }

}
