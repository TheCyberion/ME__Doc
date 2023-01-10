<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DisponibiliteMedecinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCrudDisponibiliteController extends AbstractController
{
    #[Route('/admin/crud/disponibilite', name: 'app_admin_crud_disponibilite')]
    public function index(DisponibiliteMedecinRepository $repo): Response
    {
        return $this->render('admin_crud_disponibilite/dispo.html.twig', [
            'controller_name' => 'AdminCrudDisponibiliteController',
        ]);
    }
}
