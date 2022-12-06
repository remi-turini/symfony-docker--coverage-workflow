<?php

namespace App\Tests;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class LoginControllerTest extends Main
{

    public function testLogin()
    {
        $client = static::createClient();

        $this->loginUser($client, "false@domain.com");

        $client->request("GET", "/auth/login");

        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);

        $this->loginUser($client, "user@domain.com");

        $client->request("GET", "/auth/login");

        $content = $client->getResponse()->getContent();
        $jsonContent = json_decode($content, true);

        if (isset($jsonContent["data"]["token"])) {
            $this->assertNotEmpty($jsonContent["data"]["token"]);
        }
        else {
            $this->assertNotEmpty("");
        }

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}