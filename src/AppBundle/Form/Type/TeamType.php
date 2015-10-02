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
                    'placeholder' => 'Введите название команды'
                ]
            ])
            ->add('country', 'choice', [
                'choices' => ['Англия', 'Испания', 'Италия', 'Германия', 'Франция'],
                'placeholder' => 'Выберите страну',
            ])
            ->add('save', 'submit', ['label' => 'Добавить']);
    }

    public function getName()
    {
        return 'name';
    }
}
