<?php

namespace App\Controller;

use App\Repository\RendezVousRepository;
use App\Repository\RendezVousCRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminCrudRendezVousController extends AbstractController
{
    #[Route('/admin/crud/rendez/vous/', name: 'app_admin_crud_rendez_vous')]
    public function index(RendezVousRepository $repo): Response
    {
        $rdvs=$repo->findAll();
        return $this->render('admin_crud_rendez_vous/rdv.html.twig', [
            'rdvs' => $rdvs,
        ]);
    }

    // #[Route('/admin/crud/rendez/vous/c', name: 'app_admin_crud_rendez_vous_c')]
    // public function listerdvC(RendezVousCRepository $rdvC)
    // {
    //     $id= $this->getUser()->getId();

    //     return $this->render('admin_crud_rendez_vous_c/index.html.twig', [
    //         'controller_name' => 'AdminCrudRendezVousCController',

    //         'rdvC' => $rdvC->findBy(
    //                          array(
    //                              'membre_id'=> $id
    //                          )
    //                      )
    //     ]);
    // }

    // #[Route('/admin/crud/rendez/vous/v', name: 'app_admin_crud_rendez_vous_v')]
    // public function index2(): Response
    // {
    //     return $this->render('admin_crud_rendez_vous_v/index.html.twig', [
    //         'controller_name' => 'AdminCrudRendezVousVController',
    //     ]);
    // }
}
