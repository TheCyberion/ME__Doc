<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    
    #[Route('/admin/profile_medecin', name: 'admin/profile_medecin.html.twig')]
    public function profile()
    {
        return $this->render('admin/profile_medecin.html.twig',  [
            'controller_name' => 'MainController',
        ] );
    }

    
}
