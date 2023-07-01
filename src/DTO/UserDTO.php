<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserDTO {

    /**
     * @Assert\NotBlank(message="A név mező kitöltése kötelező.")
     */
    public ?string $name = null;
    public array $roles = [];

    /**
     * @Assert\NotBlank(message="A jelszó mező kitöltése kötelező.")
     * @Assert\Length(min=6, minMessage="A jelszónak legalább 6 karakter hosszúnak kell lennie.")
     */
    public ?string $password = null;
    
    
    private $userPasswordHasher;
    
    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function userEntity(User $user): void {


        $user->setName($this->name);
        $user->setPassword($this->userPasswordHasher->hashPassword($user, $this->password));
        $user->setRoles(array('ROLE_ADMIN'));
    }

    public function loadFromEntity(User $user): void {
        $this->name = $user->getName();
        // jelszót nem adunk át
        
        
    }

}
