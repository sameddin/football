<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'datetime', [
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy HH:mm',
                'attr' => [
                    'class' => 'datetime',
                ]
            ])

            ->add('save', 'submit', ['label' => 'common.add']);
    }

    public function getName()
    {
        return 'name';
    }
}
