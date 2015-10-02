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
            ->add('role', 'choice', [
                'choices' => ['Вратарь', 'Защитник', 'Полузащитник', 'Нападающий'],
                'required'   => false,
                'placeholder' => 'Выберите амплуа игрока',
                'empty_data'  => null])

            ->add('save', 'submit', ['label' => 'Добавить']);
    }

    public function getName()
    {
        return 'name';
    }
}
