<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCrudRendezVousVController extends AbstractController
{
    #[Route('/admin/crud/rendez/vous/v', name: 'app_admin_crud_rendez_vous_v')]
    public function index(): Response
    {
        return $this->render('admin_crud_rendez_vous_v/index.html.twig', [
            'controller_name' => 'AdminCrudRendezVousVController',
        ]);
    }
}
