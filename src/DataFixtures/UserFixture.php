<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class UserFixture extends Fixture {

    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher) {
        $this->userPasswordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void {
        // $product = new Product();
        // $manager->persist($product);



        $user = new User();
        $user->setName('admin');
        $user->setPassword(
                $this->userPasswordHasher->hashPassword(
                        $user,
                        "password"
                )
        );
        $role_arr = array( 'ROLE_ADMIN' );
        $user->setRoles($role_arr);

        $manager->persist($user);

        $manager->flush();
    }

}
