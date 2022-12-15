<?php

namespace App\Form;

use App\Entity\Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $roles = $this->getParent('security.role_hierarchy.roles');
       if($options['patient']==true){


        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin:5px 0;'),
            'choices'=> array('ROLE_USER'=> array ('yes'=>'ROLE_USER'))))
            ->add('password')
            ->add('prenom_patient')
            ->add('nom_patient')
            ->add('categorie', ChoiceType::class, [
                'choices'=> [
                    'enfant'=>"Enfant",
                    'adolescent'=>"Ado",
                    'adultes'=>"Adulte",
                    'PersonneAgee'=>"PersonneAgee"
                ]
            ])
            ->add('age')
            ->add('telephone')
            ->add('sexe', ChoiceType::class, [
                'choices'=> [
                    'masculin'=>"Masculin",
                    'feminin'=>"Feminin",
                    ]
                    ])
            ->add('taille')
            ->add('poids')
            ->add('valider', SubmitType::class)
            // ->add('nom_medecin')
            // ->add('prenom_medecin')
            // ->add('specialite')
            // ->add('numero_voie')
            // ->add('voie')
            // ->add('ville')
            // ->add('code_postal')
            // ->add('rpps')
            ->add('valider', SubmitType::class);
            
            
    }
 else {
    $builder
            ->add('email')
            ->add('roles', ChoiceType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin:5px 0;'),
            'choices'=> array('ROLE_ADMIN'=> array ('yes'=>'ROLE_ADMIN'))))
            // ->add('prenom_patient')
            // ->add('nom_patient')
            // ->add('categorie', ChoiceType::class, [
            //     'choices'=> [
            //         'enfant'=>"Enfant",
            //         'adolescent'=>"Ado",
            //         'adultes'=>"Adulte",
            //         'PersonneAgee'=>"PersonneAgee"
            //     ]
            // ])
            // ->add('age')
            // ->add('telephone')
            // ->add('sexe', ChoiceType::class, [
            //     'choices'=> [
            //         'masculin'=>"Masculin",
            //         'feminin'=>"Feminin",
            //         ]
            //         ])
            // ->add('taille')
            // ->add('poids')
            // ->add('valider', SubmitType::class)
   
    ->add('nom_medecin')
    ->add('prenom_medecin')
    ->add('specialite')
    ->add('numero_voie')
    ->add('voie')
    ->add('ville')
    ->add('code_postal')
    ->add('rpps')
    ->add('valider', SubmitType::class);
 }
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Membre::class,
            'patient'=>false
        ]);
    }
}
