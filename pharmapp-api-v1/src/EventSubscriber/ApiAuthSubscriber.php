<?php

namespace App\EventSubscriber;

use App\Entity\PharmappConfiguration;
use App\Repository\PharmappConfigurationRepository;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\EventDispatcompocher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Http\Event\LogoutEvent;

class ApiAuthSubscriber implements EventSubscriberInterface
{
    private $pharmappConfigurationRepository;

    public static function getSubscribedEvents(): array
    {
        return [
            RequestEvent::class => [
                ['onKernelRequest', 100],
            ],
            LogoutEvent::class => [
                ['onLogoutEvent', 50]
            ]
        ];
    }

    public function __construct(PharmappConfigurationRepository $pharmappConfigurationRepository)
    {
        $this->pharmappConfigurationRepository = $pharmappConfigurationRepository;
    }

    public function onKernelRequest(RequestEvent $event)
    {
//        dd("hello event subscriber");
        $apiKey = $event->getRequest()->headers->get("myKey");

        $cipher = "aes-128-cbc";
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = "enf72jrv96hrc4gl";
        $passphrase = "org193zpkbz4ico562gnz34bco";

        $apiTokenKey = $this->pharmappConfigurationRepository->findOneBy(["keyName" => "api_token"]);

        if(!$encryptedToken = $apiTokenKey?->getValue())
        {
            $event->setResponse(
                new JsonResponse([
                    "state" => "error",
                    "message" => "Aucun token api configuré dans l'application",
                    "data" => null
                ], 403)
            );
        }

        $decodedToken = base64_decode($encryptedToken);
        $decryptedToken = openssl_decrypt($decodedToken, $cipher, $passphrase, 1, $iv);
        $unserializedToken = unserialize($decryptedToken);

        if (!is_array($unserializedToken) || empty($unserializedToken) || empty($apiKey) || $unserializedToken["key"] !== $apiKey)
        {
            $event->setResponse(
                new JsonResponse([
                    "state" => "error",
                    "message" => "Token api non valide",
                    "data" => null
                ], 403)
            );
        }
    }

    #[NoReturn] public function onLogoutEvent(LogoutEvent $logoutEvent)
    {
        $logoutEvent->setResponse(
                new JsonResponse([
                    "state" => "ok",
                    "message" => "Déconnexion effectuée avec succès",
                    "data" => null
                ], 200)
            );
    }
}