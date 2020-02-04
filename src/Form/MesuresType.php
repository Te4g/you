<?php

namespace App\Form;

use App\Entity\Mesures;
use App\Entity\Photos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MesuresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('poids')
            ->add('imc')
            ->add('img')
            ->add('muscle')
            ->add('hydratation')
            ->add('densiteOsseuse')
            ->add('bmr')
            ->add('txProteine')
            ->add('ageCorps')
            ->add('graisseViscerale')
            ->add('graisseSousCutanee')
            ->add('poidsNormal')
            ->add('controlePoids')
            ->add('graisseCorporelle')
            ->add('poidsSansGraisse')
            ->add('poidsMusculaire')
            ->add('qtyProteine')
            ->add('tourEpaule')
            ->add('tourPoitrine')
            ->add('bicepsG')
            ->add('bicepsD')
            ->add('tourTaille')
            ->add('cuisseG')
            ->add('cuisseD')
            ->add('molletG')
            ->add('molletD')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Mesures::class,
        ]);
    }
}
