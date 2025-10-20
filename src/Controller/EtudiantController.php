<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant/list', name: 'app_etudiant_list')]
    public function listEtudiant(): Response
    {
        // Tableau d'étudiants
        $etudiants = ['Eya', 'Nour', 'Sarra', 'Ahmed'];

        // Tableau de modules
        $modules = [
            ['nom' => 'Symfony', 'coef' => 3],
            ['nom' => 'Laravel', 'coef' => 2],
            ['nom' => 'Angular', 'coef' => 2]
        ];

        // On envoie les deux tableaux à la vue
        return $this->render('etudiant/list.html.twig', [
            'etudiants' => $etudiants,
            'modules' => $modules
        ]);
    }

    #[Route('/etudiant/affecter', name: 'app_etudiant_affecter')]
    public function affecter(): Response
    {
        return $this->render('etudiant/affecter.html.twig');
    }

    #[Route('/etudiant', name: 'app_etudiant_index')]
    public function indexFils(): Response
    {
        $etudiants = ['Eya', 'Nour', 'Sarra', 'Ahmed'];

        return $this->render('etudiant/index.html.twig', [
            'etudiants' => $etudiants
        ]);
    }
}
