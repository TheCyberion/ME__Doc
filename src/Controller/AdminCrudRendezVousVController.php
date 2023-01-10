<?php

namespace App\Controller;

use App\Repository\RendezVousVRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCrudRendezVousVController extends AbstractController
{
    #[Route('/admin/crud/rendez/vous/v', name: 'app_admin_crud_rendez_vous_v')]
    public function index(): Response
    {
        return $this->render('admin_crud_rendez_vous_v/index.html.twig', [
            'controller_name' => 'AdminCrudRendezVousVController',
        ]);
    }

    // #[Route('admin/crud/rendez/vous/v', name: 'app_admin_crud_rendez_vous_v')]
    // public function listerdvV(RendezVousVRepository $rdvC){
    //     $id= $this->getUser()->getId();

    //     return $this->render('admin_crud_rendez_vous_V/index.html.twig', [
    //         'rdvC' => $rdvC->findBy(
    //             array(
    //                 'membre_id'=> $id
    //             )
    //         )
    //             ]);
        
    // }
}
