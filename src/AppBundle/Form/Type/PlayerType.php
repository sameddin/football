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
                    'placeholder' => 'player.name.placeholder',
                ],
                'label' => 'common.name',
            ])
            ->add('country', 'entity', [
                'class' => 'AppBundle:Country',
                'choice_label' => 'name',
                'placeholder' => 'player.country.placeholder',
                'label' => 'common.country',
            ])
            ->add('birth', 'date', [
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy',
                'attr' => [
                    'class' => 'date',
                ],
                'label' => 'common.birth',
            ])
            ->add('role', 'entity', [
                'class' => 'AppBundle:Role',
                'choice_label' => 'name',
                'placeholder' => 'player.role.placeholder',
                'label' => 'player.role',
            ])
            ->add('team', 'entity', [
                'class' => 'AppBundle:Team',
                'choice_label' => 'name',
                'placeholder' => 'player.team.placeholder',
                'label' => 'team.name',
            ])
            ->add('height', 'text', [
                'attr' => [
                    'placeholder' => 'player.height.placeholder',
                ],
                'label' => 'player.height',
            ])
            ->add('weight', 'text', [
                'attr' => [
                    'placeholder' => 'player.weight.placeholder',
                ],
                'label' => 'player.weight',
            ])
            ->add('number', 'text', [
                'attr' => [
                    'placeholder' => 'player.number.placeholder',
                ],
                'label' => 'player.number',
            ])
            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
