<?php

namespace App\Security;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Contracts\Translation\TranslatorInterface;

class LoginAuthenticator extends AbstractAuthenticator
{
    private $translator;
    private $userRepository;
    private $passwordHasher;

    public function __construct(TranslatorInterface $translator, UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->translator = $translator;
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning `false` will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request): ?bool
    {
        $email = $request->get("email");
        $password = $request->get('password');

        if(!empty($email) && !empty($password))
            return true;
        else
            return false;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->get("email");
        $password = $request->get('password');

        if(empty($user = $this->userRepository->findOneBy(["email" => $email])))
            throw new CustomUserMessageAuthenticationException("Adresse mail invalide");

        if(!$this->passwordHasher->isPasswordValid($user, $password))
            throw new CustomUserMessageAuthenticationException("Mot de passe invalide");

        return new Passport(new UserBadge($email), new PasswordCredentials($password));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // on success, let the request continue
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $data = [
            'state' => "error user authentication",
            'message' => $this->translator->trans($exception->getMessageKey()),
            'data' => null,
        ];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }
}