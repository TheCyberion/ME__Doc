<?php

namespace App\Form;

use App\Entity\RendezVous;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_patient')
            ->add('prenom_patient')
            ->add('nom_medecin')
            ->add('prenom_medecin')
            ->add('specialite')
            ->add('nature_rendez_vous')
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
            ->add('departement')
            ->add('region')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
