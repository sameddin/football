<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OddController extends Controller
{
    /**
     * @Route("/contacts", name="contacts")
     */
    public function contactsAction()
    {
        return $this->render('@App/Odd/contacts.html.twig');
    }

    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedbackAction()
    {
        $form = $this->createFormBuilder()
            ->add('firstName')
            ->add('lastName')
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
            ])
            ->getForm();

        return $this->render('@App/Odd/feedback.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/adv", name="advertising")
     */
    public function advAction()
    {
        return $this->render('@App/Odd/adv.html.twig');
    }
}
