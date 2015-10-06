<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ChampionshipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country', 'text', [
                'attr' => [
                    'placeholder' => 'championship.placeholder'
                ]
            ])
            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'country';
    }
}
