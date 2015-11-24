<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'attr' => [
                    'placeholder' => 'team.name.placeholder'
                ],
                'label' => 'team.name',
            ])
            ->add('tournament', 'entity', [
                'class' => 'AppBundle:Tournament',
                'choice_label' => 'name',
                'placeholder' => 'team.tournament.placeholder',
                'label' => 'common.tournament',
            ])
            ->add('country', 'entity', [
                'class' => 'AppBundle:Country',
                'choice_label' => 'name',
                'placeholder' => 'team.country.placeholder',
                'label' => 'common.country',
            ])
            ->add('coach', 'entity', [
                'class' => 'AppBundle:Coach',
                'choice_label' => 'name',
                'placeholder' => 'team.coach.placeholder',
                'label' => 'common.coach',
            ])
            ->add('manager', 'entity', [
                'class' => 'AppBundle:Manager',
                'choice_label' => 'name',
                'placeholder' => 'team.manager.placeholder',
                'label' => 'common.manager',
            ])
            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
