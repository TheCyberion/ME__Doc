<?php

namespace App\Controller;

use App\Entity\Membre;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/registration/{param}', name: 'app_registration')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, Membre $user =null, $param): Response
    {

        $user =new Membre();
        if($param=='patient'){
     $form = $this->createForm(RegistrationFormType::class, $user, ['patient'=>true]);

        }else{

            $form = $this->createForm(RegistrationFormType::class, $user);

        }
       
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
               // dd($user);
                // encode the plain password
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('password')->getData()
                    )
                );
    
                $entityManager->persist($user);
                $entityManager->flush();
                // do anything else you need here, like send an email
    
                return $this->redirectToRoute('app_main');
            }

        return $this->render('registration/index.html.twig', [
            // 'controller_name' => 'RegistrationController',
            'RegistrationFormType' => $form->createView(),
        ]);
    }
}
