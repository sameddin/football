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
                    'placeholder' => 'Enter your player name'
                ]
            ])
            ->add('save', 'submit', ['label' => 'Add']);
    }

    public function getName()
    {
        return 'name';
    }
}
