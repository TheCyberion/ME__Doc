<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCrudTchatController extends AbstractController
{
    #[Route('/admin/crud/tchat', name: 'app_admin_crud_tchat')]
    public function index(): Response
    {
        return $this->render('admin_crud_tchat/index.html.twig', [
            'controller_name' => 'AdminCrudTchatController',
        ]);
    }
}
