<?php

namespace App\Controller;

use App\Repository\RendezVousCRepository;
use App\Repository\RendezVousVRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCrudRendezVousCController extends AbstractController
{
    #[Route('/admin/crud/rendez/vous/c', name: 'app_admin_crud_rendez_vous_c')]
    public function index(): Response
    {
        return $this->render('admin_crud_rendez_vous_c/index.html.twig', [
            'controller_name' => 'AdminCrudRendezVousCController',
        ]);
    }

    // #[Route('admin/crud/rendez/vous/c', name: 'app_admin_crud_rendez_vous_c')]
    // public function listerdvC(RendezVousCRepository $rdvC){
    //     $id= $this->getUser()->getId();

    //     return $this->render('admin_crud_rendez_vous_c/index.html.twig', [
    //         'rdvC' => $rdvC->findBy(
    //             array(
    //                 'membre_id'=> $id
    //             )
    //         )
    //             ]);
        
    // }

    
}
