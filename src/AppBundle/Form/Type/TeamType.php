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

            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
