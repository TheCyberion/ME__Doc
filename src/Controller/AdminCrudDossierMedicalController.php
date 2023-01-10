<?php

namespace App\Controller;

use App\Repository\DossierMedicalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCrudDossierMedicalController extends AbstractController
{
    #[Route('/admin/crud/dossier/medical', name: 'app_admin_crud_dossier_medical')]
    public function index(DossierMedicalRepository $repo): Response
    {
        return $this->render('admin_crud_dossier_medical/dossMed.html.twig', [
            'controller_name' => 'AdminCrudDossierMedicalController',
        ]);
    }
}
