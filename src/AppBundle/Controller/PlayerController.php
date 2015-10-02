<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use AppBundle\Form\Type\PlayerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/players")
 */
class PlayerController extends Controller
{

    /**
     * @Route(name="player.list")
     * @Template
     */
    public function listAction() {

        $players = $this->getDoctrine()
            ->getRepository('AppBundle:Player')
            ->findAll();

        return [
            'players' => $players
        ];
    }

    /**
     * @Route("/add", name="player.add")
     * @Template
     */
    public function addAction(Request $request)
    {
        $name = new Player();
        $form = $this->createForm(new PlayerType(), $name);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('player.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * @Route("/delete/{id}", name="player.delete")
     */
    public function deleteAction(Player $name)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($name);
        $em->flush();

        return $this->redirectToRoute('player.list');

    }

    /**
     * @Route("/edit/{id}", name="player.edit")
     * @Template
     * @param Request $request
     * @param Player $name
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request, Player $name) {

        $form = $this->createForm(new PlayerType(), $name);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('player.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
