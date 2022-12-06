<?php

namespace App\Controller;

use App\Entity\Medication;
use App\Entity\MedicationUser;
use App\Entity\User;
use App\Repository\MedicationRepository;
use App\Repository\MedicationUserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

Class MedicationController extends AbstractController
{
    private $manager;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->manager = $managerRegistry->getManager();
    }

    #[Route('/auth/medication/user/add', name: "add_medication")]
    public function userMedicationAdd(#[CurrentUser] ?User $user, Request $request, ManagerRegistry $managerRegistry, MedicationRepository $medicationRepository, MedicationUserRepository $medicationUserRepository)
    {
        $manager = $managerRegistry->getManager();
        $medicationId = $request->get("medicationId");
        $medication = $medicationRepository->findOneById($medicationId);

        if (empty($medication))
        {
            return $this->json([
                "state" => "error",
                "message" => "Impossible de trouver le médicament",
                "data" => null
            ], 204);
        }

        if (!empty($medicationUserRepository->findBy(["user" => $user->getId(), "medication" => $medication->getId()])))
        {
            return $this->json([
                "state" => "error",
                "message" => "Ce médicament est déjà dans votre liste",
                "data" => null
            ], 204);
        }

        $medicationUser = new MedicationUser();
        $medicationUser->setCreatedAt(new \DateTime())
            ->setMedication($medication)
            ->setUser($user)
        ;

        $manager->persist($medicationUser);
        $manager->flush();

        $allMedicationUser = $medicationRepository->findByUser($user->getId());

        return $this->json([
            "state" => "ok",
            "message" => "Médicament ajouté avec succès",
            "data" => $allMedicationUser,
        ], 201);
    }

    #[Route("/auth/medication/user/all")]
    public function userMedicationAll(#[CurrentUser] ?User $user, Request $request, MedicationRepository $medicationRepository)
    {
        $limit = $request->get("limit");
        $page = $request->get("page");

        $userMedications = $medicationRepository->findByUser($user->getId(), $page, $limit);

        return $this->json([
            "state" => "ok",
            "message" => null,
            "data" => $userMedications
        ]);
    }

    #[Route("/auth/medication/request/all")]
    public function userRequestMedication(Request $request, MedicationRepository $medicationRepository)
    {
        $limit = $request->get("limit");
        $page = $request->get("page");

        $requestedMedication = $medicationRepository->findRequested($page, $limit);

        return $this->json([
            "state" => "ok",
            "message" => null,
            "data" => $requestedMedication
        ]);
    }

    #[Route("/medication/detail")]
    public function medicationDetail(Request $request, MedicationRepository $medicationRepository)
    {
        $medicationId = $request->get("medicationId");
        $medication = $medicationRepository->findOneById($medicationId);

        if (empty($medication))
        {
            return $this->json([
                "state" => "error",
                "message" => "Impossible de trouver le médicament",
                "data" => null
            ], 204);
        }

        return $this->json([
            "state" => "ok",
            "message" => null,
            "data" => $medication
        ]);
    }

    #[Route("/auth/medication/add-on-demand")]
    public function medicationAddDemand(Request $request, MedicationRepository $medicationRepository)
    {
        $name = $request->get("name");
        $cip = $request->get("cip");

        $message = null;
        if (empty($name))
            $message = "Le champ nom est manquant ou invalide";
        else if (empty($cip))
            $message = "Le champ cip est manquant ou invalide";

        if ($message)
        {
            return $this->json([
                "state" => "error",
                "message" => $message,
                "data" => null
            ], 400);
        }

        $medication = new Medication();
        $medication->setName($name)
            ->setCip($cip)
            ->setIsRequest(true)
            ;

        $this->manager->persist($medication);
        $this->manager->flush();

        return $this->json([
            "state" => "ok",
            "message" => "Demande d'ajout du médicament effectué avec succès",
            "data" => null
        ], 201);
    }
}