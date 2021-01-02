<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProStagesController extends AbstractController
{
    /**
       * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('pro_stages/index.html.twig', [
            'controller_name' => 'Bienvenue sur la page d\'accueil de Prostages',
        ]);
    }

    /**
       * @Route("/entreprises", name="entreprises")
     */
    public function entreprises(): Response
    {
        return $this->render('pro_stages/entreprises.html.twig', [
            'controller_name' => 'Cette page affichera la liste des entreprises proposant un stage',
        ]);
    }

    /**
       * @Route("/formations", name="formations")
     */
    public function formations(): Response
    {
        return $this->render('pro_stages/formations.html.twig', [
            'controller_name' => 'Cette page affichera la liste des formations de l\'IUT',
        ]);
    }

    /**
       * @Route("/stages/{idStage}", name="presentationStage")
     */
    public function stages($idStage): Response
    {
        return $this->render('pro_stages/presentationStage.html.twig', [
            'idStage' => $idStage,
        ]);
    }
}
