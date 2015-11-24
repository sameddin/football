<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'label' => 'common.name',
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('email', 'email', [
                'label' => 'common.email',
                'constraints' => [
                    new NotBlank(),
                    new Email(),
                ]
            ])
            ->add('subject', 'text', [
                'label' => 'common.subject',
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('message', 'textarea', [
                'label' => 'common.message',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 10]),
                ],
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

