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
     *
     * @param Tournament $tournament
     * @return array
     */
    public function newsAction(Tournament $tournament)
    {
        return [
            'tournament' => $tournament,
        ];
    }

    /**
     * @Route("/{id}/table", name="tournament.table")
     * @Template
     *
     * @param Tournament $tournament
     * @return array
     */
    public function tableAction(Tournament $tournament)
    {
        return [
            'tournament' => $tournament,
        ];
    }

    /**
     * @Route("/{id}/calendar", name="tournament.calendar")
     * @Template
     *
     * @param Tournament $tournament
     * @return array
     */
    public function calendarAction(Tournament $tournament)
    {
        return [
            'tournament' => $tournament,
        ];
    }

    /**
     * @Route("/{id}/stat", name="tournament.stat")
     * @Template
     *
     * @param Tournament $tournament
     * @return array
     */
    public function statAction(Tournament $tournament)
    {
        return [
            'tournament' => $tournament,
        ];
    }
}

