<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Team;
use AppBundle\Form\Type\TeamType;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/teams")
 */
class TeamController extends Controller
{
    /**
     * @Route(name="team.list")
     * @Template
     */
    public function listAction()
    {
        $teams = $this->getDoctrine()
            ->getRepository('AppBundle:Team')
            ->findAll();

        return [
            'teams' => $teams
        ];
    }

    /**
     * @Route("/{id}", name="team.news", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @return array
     */
    public function newsAction(Team $team)
    {
        return [
            'team' => $team,
        ];
    }

    /**
     * @Route("/{id}/stat", name="team.stat", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @return array
     */
    public function statAction(Team $team)
    {
        return [
            'team' => $team,
        ];
    }

    /**
     * @Route("/{id}/view", name="team.view", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @return array
     */
    public function viewAction(Team $team)
    {
        return [
            'team' => $team,
            'today' => new DateTime(),
        ];
    }

    /**
     * @Route("/{id}/calendar", name="team.calendar", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @return array
     */
    public function calendarAction(Team $team)
    {
        return [
            'team' => $team,
        ];
    }

    /**
     * @Route("/{id}/photo", name="team.photo", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @return array
     */
    public function photoAction(Team $team)
    {
        return [
            'team' => $team,
        ];
    }

    /**
     * @Route("/{id}/video", name="team.video", requirements={"id": "\d+"})
     * @Template
     *
     * @param Team $team
     * @return array
     */
    public function videoAction(Team $team)
    {
        return [
            'team' => $team,
        ];
    }

    /**
     * @Route("/add", name="team.add")
     * @Template
     *
     * @param Request $request
     * @return array|RedirectResponse
     */
    public function addAction(Request $request)
    {
        $name = new Team();
        $form = $this->createForm(new TeamType(), $name);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('team.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * @Route("/delete/{id}", name="team.delete")
     *
     * @param Team $name
     * @return RedirectResponse
     */
    public function deleteAction(Team $name)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($name);
        $em->flush();

        return $this->redirectToRoute('team.list');

    }

    /**
     * @Route("/edit/{id}", name="team.edit")
     * @Template
     *
     * @param Request $request
     * @param Team $name
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request, Team $name)
    {
        $form = $this->createForm(new TeamType(), $name);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('team.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
