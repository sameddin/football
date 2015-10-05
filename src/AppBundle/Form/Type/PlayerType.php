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
                    'placeholder' => 'Введите имя игрока'
                ]
            ])
            ->add('role', 'entity', [
                'class' => 'AppBundle:Role',
                'choice_label' => 'roles',
                'placeholder' => 'Выберите амплуа игрока']
            )

            ->add('team', 'entity', [
                'class' => 'AppBundle:Team',
                'choice_label' => 'name',
                'placeholder' => 'Выберите команду игрока']
            )

            ->add('number', 'text', [
                'attr' => [
                    'placeholder' => 'Введите номер игрока'
                ]
            ])

            ->add('save', 'submit', ['label' => 'Добавить']);
    }

    public function getName()
    {
        return 'name';
    }
}
