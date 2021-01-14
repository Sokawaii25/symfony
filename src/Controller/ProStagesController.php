<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Repository\StageRepository;
use App\Entity\Entreprise;
use App\Repository\EntrepriseRepository;
use App\Entity\Formation;
use App\Repository\FormationRepository;

class ProStagesController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(StageRepository $repositoryStage): Response
    {
        $stages = $repositoryStage->findAll();

        return $this->render('pro_stages/index.html.twig', ['stageList' => $stages]);
    }

    /**
       * @Route("/entreprises", name="entreprises")
     */
    public function entreprises(EntrepriseRepository $repositoryEntreprise): Response
    {
        $entreprises = $repositoryEntreprise->findAll();
        return $this->render('pro_stages/entreprises.html.twig', ['entrepriseList' => $entreprises]);
    }

    /**
       * @Route("/formations", name="formations")
     */
    public function formations(FormationRepository $repositoryFormation): Response
    {
        $formations = $repositoryFormation->findAll();
        return $this->render('pro_stages/formations.html.twig', ['formationList' => $formations]);
    }

    /**
       * @Route("/stages/{idStage}", name="presentationStage")
     */
    public function stages(Stage $stage): Response
    {
        return $this->render('pro_stages/presentationStage.html.twig', ['stage' => $stage]);
    }
}
