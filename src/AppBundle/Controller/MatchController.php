<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Match;
use AppBundle\Form\Type\MatchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/matches")
 */
class MatchController extends Controller
{

    /**
     * @Route(name="match.list")
     * @Template
     */
    public function listAction()
    {
        $matches = $this->getDoctrine()
            ->getRepository('AppBundle:Match')
            ->findAll();

        return [
            'matches' => $matches
        ];
    }

    /**
     * @Route("/delete/{id}", name="match.delete")
     */
    public function deleteAction(Match $date)
    {
        $db = $this->getDoctrine()->getManager();

        $db->remove($date);
        $db->flush();

        return $this->redirectToRoute('match.list');

    }

    /**
     * @Route("/add", name="match.add")
     * @Template
     */
    public function addAction(Request $request)
    {
        $name = new Match();
        $form = $this->createForm(new MatchType(), $name);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('match.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
