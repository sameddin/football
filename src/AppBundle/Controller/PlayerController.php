<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use AppBundle\Form\Type\PlayerType;
use DateTime;
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
    public function listAction(Request $request) {

        $players = $this->getDoctrine()
            ->getRepository('AppBundle:Player')
            ->findAll();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $players,
            $request->query->getInt('page', 1),
            10
        );

        return [
            'pagination' => $pagination,
            'today' => new DateTime(),
        ];
    }

    /**
     * @Route("/{id}", name="player.view", requirements={"id": "\d+"})
     * @Template
     */
    public function viewAction(Player $player) {

        return [
            'player' => $player,
            'today' => new DateTime(),
        ];
    }

    /**
     * @Route("/{id}/career", name="player.career", requirements={"id": "\d+"})
     * @Template
     */
    public function careerAction(Player $player) {

        return [
            'player' => $player,
            'today' => new DateTime(),
        ];
    }

    /**
     * @Route("/{id}/stat", name="player.stat", requirements={"id": "\d+"})
     * @Template
     */
    public function statAction(Player $player) {

        return [
            'player' => $player,
            'today' => new DateTime(),
        ];
    }

    /**
     * @Route("/{id}/photo", name="player.photo", requirements={"id": "\d+"})
     * @Template
     */
    public function photoAction(Player $player) {

        return [
            'player' => $player,
            'today' => new DateTime(),
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
