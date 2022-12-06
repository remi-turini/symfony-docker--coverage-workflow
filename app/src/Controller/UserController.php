<?php


namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

class UserController extends AbstractController
{
    use ResetPasswordControllerTrait;

    private $resetPasswordHelper;
    private $entityManager;
    private $manager;

    public function __construct(ManagerRegistry $managerRegistry, ResetPasswordHelperInterface $resetPasswordHelper, EntityManagerInterface $entityManager)
    {
        $this->manager = $managerRegistry->getManager();
        $this->resetPasswordHelper = $resetPasswordHelper;
        $this->entityManager = $entityManager;
    }

    #[Route('/auth/user/detail')]
    public function userDetail(#[CurrentUser] ?User $user): Response
    {
        return $this->json([
            "state" => "ok",
            'message' => null,
            "data" => $user
        ]);
    }

    #[Route('/auth/user/update')]
    public function userUpdate(#[CurrentUser] ?User $user, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $firstname = $request->get("firstname");
        $lastname = $request->get("lastname");
        $email = $request->get("email");
        $newPassword = $request->get("newPassword");
        $oldPassword = $request->get("oldPassword");

        $message = null;
        if (empty($firstname))
            $message = "Le champ prénom est manquant ou invalide";
        elseif (empty($lastname))
            $message = "Le champ nom est manquant ou invalide";
        elseif (empty($email))
            $message = "Le champ mail est manquant ou invalide";

        if (!empty($message))
        {
            return $this->json([
                "state" => "error",
                'message' => $message,
                "data" => null
            ], 400);
        }

        if (!empty($newPassword) || !empty($oldPassword))
        {
            if (empty($oldPassword) || !$passwordHasher->isPasswordValid($user, $oldPassword))
            {
                return $this->json([
                    "state" => "error",
                    'message' => "Le champ ancien mot de passe est manquant ou invalide",
                    "data" => null
                ], 400);
            }

            if (empty($newPassword))
            {
                return $this->json([
                    "state" => "error",
                    'message' => "Le champ nouveau mot de passe est manquant ou invalide",
                    "data" => null
                ], 400);
            }

            $newPasswordHashed = $passwordHasher->hashPassword($user, $newPassword);
        }

        $user->setFirstname($firstname)
            ->setLastname($lastname)
            ->setEmail($email);
            if (!empty($newPasswordHashed))
                $user->setPassword($newPasswordHashed);

        $this->manager->flush();

        return $this->json([
            "state" => "ok",
            'message' => null,
            "data" => $user
        ]);
    }

    #[Route('/reset-password')]
    public function sendEmail(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        try {
//            if (null === ($resetToken = $this->getTokenObjectFromSession())) {
//                $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
//            }

            $userEmail = $request->get("email");

            $user = $this->entityManager->getRepository(User::class)->findOneBy([
                'email' => $userEmail,
            ]);

            // Do not reveal whether a user account was found or not.
            if (!$user) {
                return $this->json([
                    "state" => "error",
                    'message' => "Aucun utilisateur trouvé",
                    "data" => null
                ]);
            }

            try {
//                $resetToken = $this->resetPasswordHelper->generateResetToken($user);
            } catch (ResetPasswordExceptionInterface $e) {
                return $this->json([
                    "state" => "error",
                    'message' => "Erreur de génération du token",
                    "data" => $e->getMessage()
                ]);
            }
//            {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData,) }}
//            $urlToResetPassword = $request->getBaseUrl() . '/reset/'. $resetToken->getToken();
//            $translator->trans($resetToken->getExpirationMessageKey(), $resetToken->getExpirationMessageData(), "ResetPasswordBundle")
//            $urlToResetPassword = 'http://localhost:8080/reset-password';
//            $email = (new TemplatedEmail())
//                ->from(new Address('pharmapp@security.com', 'Pharmapp'))
//                ->to($user->getEmail())
//                ->subject('Réinitialisation de votre mot de passe Pharmapp')
//                ->html('
//                    <h1>Bonjour !</h1>
//                    <p>Pour réinitilaiser votre mot de passe, veuillez accéder à ce lien : </p>
//                    <a href="' . $urlToResetPassword . '">' . $urlToResetPassword . '</a><p>Ce lien va disparaitre</p>
//                    <p>Cheers!</p>
//                ')
//                ->context([
//                    'resetToken' => $resetToken,
//                ])
//            ;

            $email = (new Email())
                ->from('hello@example.com')
                ->to('you@example.com')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>See Twig integration for better HTML integration!</p>');

            $mailer->send($email);

            // Store the token object in session for retrieval in check-email route.
//            $this->setTokenObjectInSession($resetToken);

            return $this->json([
                "state" => "ok",
                'message' => "Mail envoyé avec succès",
                "data" => null
            ]);
        }
        catch (\Throwable $e)
        {
            return $this->json([
                "state" => "error",
                'message' => "Une erreur est survenue lors de l'envoie du mail",
                "data" => $e->getMessage()
            ]);
        }
    }

    #[Route('/reset-password/reset/{token}')]
    public function reset(Request $request, UserPasswordHasherInterface $userPasswordHasher, TranslatorInterface $translator, string $token = null): Response
    {
        if ($token) {
            // We store the token in session and remove it from the URL, to avoid the URL being
            // loaded in a browser and potentially leaking the token to 3rd party JavaScript.
            $this->storeTokenInSession($token);

//            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();
        if (null === $token) {
            throw $this->createNotFoundException('Aucune token de mot de passe trouvée.');
        }

        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            return $this->json([
                "state" => "ok",
                'message' =>
                    $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle'),
                "data" => null
            ]);
        }

        $newPassword = $request->get("newPassword");

        // A password reset token should be used only once, remove it.
        $this->resetPasswordHelper->removeResetRequest($token);

        // Encode(hash) the plain password, and set it.
        $encodedPassword = $userPasswordHasher->hashPassword(
            $user,
            $newPassword
        );

        $user->setPassword($encodedPassword);
        $this->entityManager->flush();

        // The session is cleaned up after the password has been changed.
        $this->cleanSessionAfterReset();

        return $this->json([
            "state" => "ok",
            'message' => "Mot de passe modifiée avec succès",
            "data" => null
        ]);
    }
}
