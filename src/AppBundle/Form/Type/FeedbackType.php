<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('subject')
            ->add('message', 'textarea', [
                'attr' => [
                    'cols' => 90,
                    'rows' => 10,
                ]
            ])
            ->add('submit', 'submit', [
                'label' => 'common.submit',
                'attr' => [
                    'class' => 'btn-default',
                ]
            ]);
    }
    public function getName()
    {
        return 'form';
    }
}

