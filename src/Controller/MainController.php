<?php

namespace App\Controller;

use App\Entity\RendezVousC;
use App\Entity\RendezVousV;
use App\Repository\MembreRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\RendezVousCRepository;
use App\Repository\RendezVousVRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('app/profile', name: 'profile' )]
    public function profile()
    {
        return $this->render('app/profile');
    }
    #[Route('app/recherchemedecin/', name:'recherche_medecin')]
    public function recherhemedecin(MembreRepository $repo)
    {
        $doc = $repo;

        return $this->redirectToRoute('app_rendez_vous_C'); 
    }
    // #[Route('/main/rendezvousC/edit/{id}', name: 'app_rendezvousC_edit')]
    // public function new_rendezVousC( EntityManagerInterface $manager, Request $rq, RendezVousC $rendezVousC = null)
    // {
    //     if (!$rendezVousC)
    //     {
    //         $rendezvousC = new RendezvousC;
           
    //     }   
    //         $form = $this->createForm(ReservationType::class, $rendezVousC);
    //        // dd($form);
    //          $form->handleRequest($rq);
    //         // dd($form);aq?6
    //         if ($form->isSubmitted() && $form->isValid())
    //          {
    //             $rendezvousC->setMembre($this->getUser());
    //             $rendezvousC->setCreatedAt(new \DateTime());
              
    //             $manager->persist($rendezvousC);
    //             $manager->flush();
    //             $this->addFlash('success', 'Votre rendez vous en cabinet a bien été enregistré !');
    //             return $this->redirectToRoute('app_profile');


    //         }  
               
           
        
    //         return $this->renderForm('main/rendezVousC.html.twig', [
    //            'form' => $form,
    //            'editMode'=> $rendezVousC->getId() !=NULL,           
    //         ]);
    //     }
                
    // #[Route('/main/profile/', name: 'profile')]
    // public function profileR(RendezVousCRepository $repo)
    // {
    //     $rdvC = $repo->findBy(['membre' => $this->getUser()]);

    //     return $this->render("main/profile.html.twig", [
    //         'rdv' => $rdvC
    //     ]);
    // }

    // #[Route('/main/rendezVousV/edit/{id}', name: 'app_rendez_Vous_V_edit')]
    // public function new_rendezVousV( EntityManagerInterface $manager, Request $rq, RendezVousV $rendezVousV = null)
    // {
    //     if (!$rendezVousV)
    //     {
    //         $rendezVousV = new RendezvousV;
           
    //     }   
    //         $form = $this->createForm(ReservationType::class, $rendezVousV);
    //        // dd($form);
    //          $form->handleRequest($rq);
    //         // dd($form);
    //         if ($form->isSubmitted() && $form->isValid())
    //          {
    //             $rendezVousV->setMembre($this->getUser());
    //             $rendezVousV->setCreatedAt(new \DateTime());
              
    //             $manager->persist($rendezVousV);
    //             $manager->flush();
    //             $this->addFlash('success', 'Votre rendez vous en visio a bien été enregistré !');
    //             return $this->redirectToRoute('app_main');
    //          }
    // }

    // #[Route('/main/profile/', name: 'profile')]
    // public function profile(RendezVousVRepository $repo)
    // {
    //     $rdvV = $repo->findBy(['membre' => $this->getUser()]);

    //     return $this->render("main/profile.html.twig", [
    //         'rdv' => $rdvV
    //     ]);
    // }

}
