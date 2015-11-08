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

            ->add('nation', 'text', [
                'attr' => [
                    'placeholder' => 'player.nation.placeholder'
                ]
            ])

            ->add('birth', 'date', [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ])

            ->add('role', 'entity', [
                    'class' => 'AppBundle:Role',
                    'choice_label' => 'name',
                    'placeholder' => 'player.role.placeholder']
           )

            ->add('team', 'entity', [
                'class' => 'AppBundle:Team',
                'choice_label' => 'name',
                'placeholder' => 'player.team.placeholder']
            )

            ->add('height', 'text', [
                'attr' => [
                    'placeholder' => 'player.height.placeholder'
                ]
            ])

            ->add('weight', 'text', [
                'attr' => [
                    'placeholder' => 'player.weight.placeholder'
                ]
            ])

            ->add('number', 'text', [
                'attr' => [
                    'placeholder' => 'player.number.placeholder'
                ]
            ])

            ->add('match', 'text', [
                'attr' => [
                    'placeholder' => 'player.match.placeholder'
                ]
            ])

            ->add('redCard', 'text', [
                'attr' => [
                    'placeholder' => 'player.redCard.placeholder'
                ]
            ])

            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
