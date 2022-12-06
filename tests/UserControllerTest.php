<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Liip\TestFixturesBundle\Services\DatabaseTools\AbstractDatabaseTool;
use Liip\TestFixturesBundle\Services\DatabaseToolCollection;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class UserControllerTest extends WebTestCase
{
//    /** @var AbstractDatabaseTool */
//    protected $databaseTool;

    public function setUp(): void
    {
        parent::setUp();

//        $this->databaseTool = static::getContainer()->get(DatabaseToolCollection::class)->get();
    }

    public function loginUser($client, $email)
    {
        /* @var UserRepository $userRepository */
        $userRepository = $client->getContainer()->get(UserRepository::class);
        $user = $userRepository->findOneBy(["email" => $email]);

        if(!empty($user)) $client->loginUser($user);
    }

    public function testUserDetail()
    {
        $client = static::createClient();

        // unauthorized
        $this->loginUser($client, "false@domain.com");
        $client->request("GET", "/auth/user/detail");

        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);

        // one user
        $this->loginUser($client, "user@domain.com");
        $client->request("GET", "/auth/user/detail");

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testUserUpdateWrongPassword()
    {
        $client = static::createClient();

        // unauthorized
        $this->loginUser($client, "false@domain.com");
        $client->request("GET", "/auth/user/update");

        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);

        // wrong password
        $this->loginUser($client, "user@domain.com");
        $client->request("GET", "/auth/user/update", [
            "firstname" => "test",
            "lastname" => "test",
            "email" => "user@domain.com",
            "oldPassword" => "myfalsepassword",
            "newPassword" => "root",
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);

        // update user
        $this->loginUser($client, "user@domain.com");
        $client->request("GET", "/auth/user/update", [
            "firstname" => "test",
            "lastname" => "test",
            "email" => "user@domain.com"
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        // update user password
        $this->loginUser($client, "user@domain.com");
        $client->request("GET", "/auth/user/update", [
            "firstname" => "test",
            "lastname" => "test",
            "email" => "user@domain.com",
            "oldPassword" => "root",
            "newPassword" => "root",
        ]);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

//    /**
//     * Example using LiipFunctionalBundle the fixture loader.
//     */
//    public function testUserFooIndex(): void
//    {
////        $this->databaseTool->loadFixtures(['Liip\FooBundle\Tests\Fixtures\LoadUserData']);
//        $this->databaseTool->loadAliceFixture([__DIR__ . '/UserTestFixtures.yaml']);
//        $this->assertTrue(true);
//    }
//
//    protected function tearDown(): void
//    {
//        parent::tearDown();
//        unset($this->databaseTool);
//    }

}
