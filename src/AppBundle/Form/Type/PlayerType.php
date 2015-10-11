<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'attr' => [
                    'placeholder' => 'player.name.placeholder'
                ]
            ])

            ->add('role', 'entity', [
                    'class' => 'AppBundle:Role',
                    'choice_label' => 'role',
                    'placeholder' => 'player.role.placeholder']
           )

            ->add('team', 'entity', [
                'class' => 'AppBundle:Team',
                'choice_label' => 'name',
                'placeholder' => 'player.team.placeholder']
            )

            ->add('number', 'text', [
                'attr' => [
                    'placeholder' => 'player.number.placeholder'
                ]
            ])

            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
