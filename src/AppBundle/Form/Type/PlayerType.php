<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'attr' => [
                    'placeholder' => 'Enter your player name'
                ]
            ])
            ->add('role', 'choice', [
                'choice_list' => new ChoiceList(
                    [1, 2, 3, 4],
                    ['Вратарь', 'Защитник', 'Полузащитник', 'Нападающий']
                ),
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
