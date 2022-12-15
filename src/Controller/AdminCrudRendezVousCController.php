<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCrudRendezVousCController extends AbstractController
{
    #[Route('/admin/crud/rendez/vous/c', name: 'app_admin_crud_rendez_vous_c')]
    public function index(): Response
    {
        return $this->render('admin_crud_rendez_vous_c/index.html.twig', [
            'controller_name' => 'AdminCrudRendezVousCController',
        ]);
    }
}
