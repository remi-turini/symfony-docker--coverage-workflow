<?php

namespace App\Tests;

use App\Entity\Medication;
use App\Repository\MedicationRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class MedicationControllerTest extends Main
{
    public function findOneMedication($client)
    {
        /** @var MedicationRepository $medicationRepository */
        $medicationRepository = $client->getContainer()->get(MedicationRepository::class);
        /** @var Medication $medication */
        $medication = $medicationRepository->findOneRandom();

        return $medication;
    }

    public function testUserMedicationAdd()
    {
        $client = static::createClient();

        // unauthorized
        $this->loginUser($client, "false@domain.com");
        $client->request("GET", "/auth/medication/user/add");

        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);

        $this->loginUser($client, "user@domain.com");

        // no medication
        $medication = $this->findOneMedication($client);

        $client->request("GET", "/auth/medication/user/add");

        $this->assertResponseStatusCodeSame(Response::HTTP_NO_CONTENT);

        // no medication in medication list
        $medication = $this->findOneMedication($client);

        $client->request("GET", "/auth/medication/user/add", [
            "medicationId" => $medication?->getId(),
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_NO_CONTENT);

        // create medication
        /** @var Medication $medication */
        $medication = (new Medication());
        static::persistEntity($medication);

        $client->request("GET", "/auth/medication/user/add", [
            "medicationId" => $medication?->getId(),
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_CREATED);
    }

    public function testUserMedicationAll()
    {
        $client = static::createClient();

        // not loged
        $this->loginUser($client, "false@domain.com");
        $client->request("GET", "/auth/medication/user/all");
        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);

        // all medication
        $this->loginUser($client, "user@domain.com");
        $client->request("GET", "/auth/medication/user/all");

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testUserRequestMedication()
    {
        $client = static::createClient();

        // forbidden
        $this->loginUser($client, "user@domain.com");
        $client->request("GET", "/auth/medication/request/all");

        $this->assertResponseStatusCodeSame(Response::HTTP_FORBIDDEN);

        // all medication request
        $this->loginUser($client, "admin@domain.com");
        $client->request("GET", "/auth/medication/request/all");

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testMedicationDetail()
    {
        $client = static::createClient();

        // no medication
        $client->request("GET", "/medication/detail");

        $this->assertResponseStatusCodeSame(Response::HTTP_NO_CONTENT);

        // one medication
        $medication = $this->findOneMedication($client);
        $client->request("GET", "/medication/detail", [
            "medicationId" => $medication?->getId()
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testMedicationAddDemand()
    {
        $client = static::createClient();

        // unauthorized
        $this->loginUser($client, "false@domain.com");
        $client->request("GET", "/auth/medication/add-on-demand");

        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);

        $this->loginUser($client, "user@domain.com");

        // no name parameter
        $client->request("GET", "/auth/medication/add-on-demand");

        $this->assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);

        // no cip parameter
        $client->request("GET", "/auth/medication/add-on-demand", [
            "name" => "name"
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);

        // create medication request

        $client->request("GET", "/auth/medication/add-on-demand", [
            "name" => "nom",
            "cip" => "cip"
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_CREATED);
    }
}