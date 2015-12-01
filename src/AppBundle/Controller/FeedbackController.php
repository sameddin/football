<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\FeedbackType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FeedbackController extends Controller
{
    /**
     * @Route("/feedback", name="feedback")
     * @Template
     */
    public function feedbackAction(Request $request)
    {
        $form = $this->createForm(new FeedbackType());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('Football App: ' . $data['subject'])
                ->setFrom($data['email'])
                ->setTo('sameddin.pasizade@gmail.com')
                ->setBody($data['message']);
            $this->get('mailer')->send($message);

            $this->addFlash('success', 'feedback.success');

            return $this->redirectToRoute('feedback');
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
