<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCrudDisponibiliteController extends AbstractController
{
    #[Route('/admin/crud/disponibilite', name: 'app_admin_crud_disponibilite')]
    public function index(): Response
    {
        return $this->render('admin_crud_disponibilite/index.html.twig', [
            'controller_name' => 'AdminCrudDisponibiliteController',
        ]);
    }
}
