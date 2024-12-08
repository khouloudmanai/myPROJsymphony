<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Membre;
use App\Entity\Voitures;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandePostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_heure_depart', null, [
                'widget' => 'single_text',
            ])
            ->add('date_heure_fin', null, [
                'widget' => 'single_text',
            ])
            ->add('prix_total')
            ->add('date_enregistrement', null, [
                'widget' => 'single_text',
            ])
            ->add('Membre', EntityType::class, [
                'class' => Membre::class,
                'choice_label' => 'id',
            ])
            ->add('Voitures', EntityType::class, [
                'class' => Voitures::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
