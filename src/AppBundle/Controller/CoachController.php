<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Coach;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/coaches")
 */
class CoachController extends Controller
{
    /**
     * @Route("/{id}", name="coach.news")
     * @Template
     *
     * @param Coach $coach
     * @return array
     */
    public function newsAction(Coach $coach)
    {
        return [
            'coach' => $coach,
            'today' => new DateTime()
        ];
    }
}
