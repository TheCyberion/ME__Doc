<?php

namespace App\Controller;

use App\Repository\MessagesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCrudTchatController extends AbstractController
{
    #[Route('/admin/crud/message', name: 'app_admin_crud_message')]
    public function index(MessagesRepository $repo): Response
    {
        return $this->render('admin_crud_message/message.html.twig', [
            'controller_name' => 'AdminCrudTchatController',
        ]);
    }
}
