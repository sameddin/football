<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Manager;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/managers")
 */
class ManagerController extends Controller
{
    /**
     * @Route("/{id}", name="manager.news")
     * @Template
     * 
     * @param Manager $manager
     * @return array
     */
    public function newsAction(Manager $manager)
    {
        return [
            'manager' => $manager,
            'today' => new DateTime(),
        ];
    }
}
