<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'app_etudiant')]
    public function index(): Response
    {
        return new Response('<h1>Bonjour, voici la page Étudiant !</h1>');
    }
    #[Route('/etudiant/{id}', name: 'app_etudiant_affichage')]
    public function AffichageEtudiant(int $id): Response
    {
        return new Response("Bonjour l'étudiant a l'ID : " . $id);
    }

    #[Route('/etudiant/nom/{name}', name: 'app_etudiant_nom')]
    public function voirNom(string $name): Response
    {
        return $this->render('etudiant/etudiant.html.twig', [
            'name' => $name,
        ]);
    }

}
