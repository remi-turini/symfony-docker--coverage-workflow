<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class LoginController extends AbstractController
{
    #[Route('/auth/login', name: 'login')]
    public function login(#[CurrentUser] ?User $user, Request $request): Response
    {
        return $this->json([
            "state" => "ok",
            'message' => 'Bienvenue ' . $user?->getLastname() . ' ' . $user?->getFirstname(),
            "data" => [
                "user" => [
                    "lastname" => $user->getLastname(),
                    "firstname" => $user->getFirstname(),
                    "email" => $user->getEmail()
                ],
                "token" => $request->getSession()->getId()
            ]
        ]);
    }

    #[Route('/register', name: 'register')]
    public function register(Request $request, ManagerRegistry $managerRegistry, UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher): Response
    {
        $manager = $managerRegistry->getManager();
        $lastname = $request->get("lastname");
        $firstname = $request->get("firstname");
        $email = $request->get("email");
        $password = $request->get("password");

        $message = null;
        if (empty($lastname))
            $message = "Le champ nom est manquant ou invalide";
        else if (empty($firstname))
            $message = "Le champ prénom est manquant ou invalide";
        else if (empty($email))
            $message = "Le champ mail est manquant ou invalide";
        else if ($userRepository->findOneBy(["email" => $email]))
            $message = "L'adresse mail est déjà utilisé";
        else if (empty($password))
            $message = "Le champ mot de passe est manquant ou invalide";

        if ($message)
        {
            return $this->json([
                "state" => "error",
                'message' => $message,
                "data" => null
            ]);
        }

        $user = new User();
        $hashedPassword = $passwordHasher->hashPassword($user, $password);

        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail($email);
        $user->setPassword($hashedPassword);

        $manager->persist($user);
        $manager->flush();

        return $this->json([
            "state" => "ok",
            'message' => 'Compte crée avec succès !',
            "data" => $user
        ]);
    }

    #[Route('/auth/logout', name: 'logout')]
    public function logout(#[CurrentUser] ?User $user): Response
    {
//        dd($logoutEvent->getToken(), $logoutEvent->getResponse(), $logoutEvent->getRequest());
        // custom log out https://symfony.com/doc/current/security.html#the-firewall
        // custom accesDenied https://symfony.com/doc/current/security/access_denied_handler.html
        if(empty($this->getUser()))
        {
            return $this->json([
                'message' => 'Vous êtes déconnecté',
            ]);
        }
        else
        {
            return $this->json([
                'message' => 'Problème de déconnexion',
            ]);
        }

    }
}
