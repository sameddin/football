<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'attr' => [
                    'placeholder' => 'Enter your team name'
                ]
            ])
            ->add('country', 'choice', [
                'choice_list' => new ChoiceList(
                    [1, 2, 3, 4, 5],
                    ['Англия', 'Испания', 'Италия', 'Германия', 'Франция']
                ),
                'placeholder' => 'Choose country of your team',
            ])
            ->add('save', 'submit', ['label' => 'Add']);
    }

    public function getName()
    {
        return 'name';
    }
}
