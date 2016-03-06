<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class MatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'format' => 'dd.MM.yyyy HH:mm',
                'attr' => [
                    'class' => 'datetime',
                ],
                'label' => 'common.date'
            ])
            ->add('save', SubmitType::class, ['label' => 'common.add']);
    }

    public function getBlockPrefix()
    {
        return 'name';
    }
}
