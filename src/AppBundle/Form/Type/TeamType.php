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
                ]
            ])

            ->add('tournament', 'entity', [
                    'class' => 'AppBundle:Tournament',
                    'choice_label' => 'tournament',
                    'placeholder' => 'team.tournament.placeholder']
            )

            ->add('country', 'entity', [
                    'class' => 'AppBundle:Country',
                    'choice_label' => 'country',
                    'placeholder' => 'team.country.placeholder']
            )

            ->add('coach', 'entity', [
                    'class' => 'AppBundle:Coach',
                    'choice_label' => 'name',
                    'placeholder' => 'team.coach.placeholder']
            )

            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
