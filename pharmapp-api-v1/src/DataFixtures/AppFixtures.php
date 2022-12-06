<?php

namespace App\DataFixtures;

use App\Entity\Medication;
use App\Entity\MedicationUser;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager, ): void
    {
        $medication = (new Medication())
            ->setIsRequest(false)
            ;

        $manager->persist($medication);

        $user = new User();
        $hashedPassword = $this->passwordHasher->hashPassword($user, "root");

        $user->setFirstname("user")
            ->setLastname("user")
            ->setEmail("user@domain.com")
            ->setPassword($hashedPassword)
            ->setRoles(["ROLE_USER"])
            ;

        $manager->persist($user);

        $userAdmin = new User();
        $hashedPasswordAdmin = $this->passwordHasher->hashPassword($userAdmin, "root");

        $userAdmin->setFirstname("admin")
            ->setLastname("admin")
            ->setEmail("admin@domain.com")
            ->setPassword($hashedPasswordAdmin)
            ->setRoles(["ROLE_ADMIN"])
        ;

        $manager->persist($userAdmin);

        $medicationUser = (new MedicationUser())
            ->setCreatedAt(new \DateTime())
            ->setMedication($medication)
            ->setUser($user)
            ;

        $manager->persist($medicationUser);

        $manager->flush();
    }
}
