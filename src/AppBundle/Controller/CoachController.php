<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Coach;
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
     */
    public function newsAction(Coach $coach) {

        return [
            'coach' => $coach,
        ];
    }
}
