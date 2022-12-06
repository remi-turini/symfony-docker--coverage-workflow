<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Main extends WebTestCase
{
    public function loginUser($client, $email)
    {
        /* @var UserRepository $userRepository */
        $userRepository = $client->getContainer()->get(UserRepository::class);
        $user = $userRepository->findOneBy(["email" => $email]);

        if (!empty($user)) $client->loginUser($user);
    }

    public function persistEntity($entity)
    {
        /** @var ManagerRegistry $manager */
        $manager = static::getContainer()->get(ManagerRegistry::class);
        $manager = $manager->getManager();
        $manager->persist($entity);
        $manager->flush();
    }
}