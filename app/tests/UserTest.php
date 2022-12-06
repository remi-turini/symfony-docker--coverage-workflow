<?php

namespace App\Tests;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    public function testUserCreate()
    {
        $user = (new User)
            ->setLastname("lastname")
            ->setFirstname("firstname")
            ->setRoles(["ROLE_USER"])
            ->setPassword("password")
            ->setEmail("email@domain.com")
        ;

        $this->assertEquals("lastname", $user->getLastname());
        $this->assertEquals("firstname", $user->getFirstname());
        $this->assertEquals(["ROLE_USER"], $user->getRoles());
        $this->assertEquals("password", $user->getPassword());
        $this->assertEquals("email@domain.com", $user->getEmail());
    }
}