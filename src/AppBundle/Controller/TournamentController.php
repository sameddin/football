<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tournament;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/tournaments")
 */
class TournamentController extends Controller
{
    /**
     * @Route("/{id}", name="tournament.news")
     * @Template
     */
    public function newsAction(Tournament $tournament) {

        return [
            'tournament' => $tournament,
        ];
    }

    /**
     * @Route("/{id}/table", name="tournament.table")
     * @Template
     */
    public function tableAction(Tournament $tournament) {

        return [
            'tournament' => $tournament,
        ];
    }
}

