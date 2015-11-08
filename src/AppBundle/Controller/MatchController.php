<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Match;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
