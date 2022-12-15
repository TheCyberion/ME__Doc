<?php

namespace App\Form;

use App\Entity\RendezVousC;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousCFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_patient')
            ->add('prenom_patient')
            ->add('nom_medecin')
            ->add('prenom_medecin')
            ->add('specialite')
            ->add('date',DateTimeType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'min' => (new \DateTime())->format('Y-m-d H:i'),
                ]
                ])
            ->add('numero_voie')
            ->add('voie')
            ->add('ville')
            ->add('code_postal')
            ->add('nature_rendez_vous')
            // ->add('nom_patient')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVousC::class,
        ]);
    }
}
