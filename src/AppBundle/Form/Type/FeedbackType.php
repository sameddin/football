<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'common.name',
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'common.email',
                'constraints' => [
                    new NotBlank(),
                    new Email(),
                ]
            ])
            ->add('subject', TextType::class, [
                'label' => 'common.subject',
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('message', TextareaType::class, [
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
            ->add('submit', SubmitType::class, [
                'label' => 'common.submit',
                'attr' => [
                    'class' => 'btn-default',
                ]
            ]);
    }

    public function getBlockPrefix()
    {
        return 'form';
    }
}

