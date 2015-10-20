<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\FeedbackType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FeedbackController extends Controller
{
    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedbackAction()
    {
        $form = $this->createForm(new FeedbackType());

        return $this->render('@App/Feedback/feedback.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
