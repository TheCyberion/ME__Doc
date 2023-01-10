<?php

namespace App\Form;

use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RechercheMedecinFormType extends AbstractType
{
    // public function buildForm(FormBuilderInterface $builder, array $options): void
    // {
    //     $builder
    //         // ->add('email')
    //         // ->add('roles')
    //         // ->add('password')
    //         // ->add('prenom_patient')
    //         // ->add('nom_patient')
    //         // ->add('categorie')
    //         // ->add('age')
    //         // ->add('telephone')
    //         // ->add('sexe')
    //         // ->add('taille')
    //         // ->add('poids')
    //         ->add('nom_medecin')
    //         ->add('prenom_medecin')
    //         ->add('specialite')
    //         ->add('numero_voie')
    //         ->add('voie')
    //         ->add('ville')
    //         ->add('code_postal')
    //         ->add('region')
    //         ->add('departement')
    //         // ->add('rpps')
    //     ;
    // }

    // public function configureOptions(OptionsResolver $resolver): void
    // {
    //     $resolver->setDefaults([
    //         'data_class' => Membre::class,
    //     ]);
    // }
}
