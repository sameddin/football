<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Team;
use AppBundle\Entity\Transfer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/teams")
 */
class TransferController extends Controller
{
    /**
     * @Route("/{id}/transfers", name="team.transfers", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @param Transfer $transfer
     * @return array
     */
    public function transfersAction(Team $team, Transfer $transfer)
    {
        return [
            'team' => $team,
            'transfer' => $transfer,
        ];
    }

    /**
     * @Route("/{id}/transfers/in", name="transfers.in", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @param Transfer $transfer
     * @return array
     */
    public function inAction(Team $team, Transfer $transfer)
    {
        return [
            'team' => $team,
            'transfer' => $transfer,
        ];
    }

    /**
     * @Route("/{id}/transfers/out", name="transfers.out", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @param Transfer $transfer
     * @return array
     */
    public function outAction(Team $team, Transfer $transfer)
    {
        return [
            'team' => $team,
            'transfer' => $transfer,
        ];
    }
}
