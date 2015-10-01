<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Team;
use AppBundle\Form\Type\TeamType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('teamviews/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));

    }

    /**
     * @Route("/list", name="team.list")
     */
    public function listAction() {

        $teams = $this->getDoctrine()
            ->getRepository('AppBundle:Team')
            ->findAll();
        $name = new Team();
        $form = $this->createForm(new TeamType(), $name, array(
            'action' => $this->generateUrl('team.add'),
        ));

        return $this->render('teamviews/home.html.twig', [
            'teams' => $teams,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/add", name="team.add")
     */
    public function addAction(Request $request)
    {
        $name = new Team();
        $form = $this->createForm(new TeamType(), $name);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($name);
        $em->flush();

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/delete/{id}", name="team.delete")
     */
    public function deleteAction(Team $name)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($name);
        $em->flush();

        return $this->redirectToRoute('homepage');

    }

    /**
     * @Route("/edit/{id}", name="team.edit")
     *
     * @param Request $request
     * @param Team $name
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request, Team $name) {

        $form = $this->createForm(new TeamType(), $name);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($name);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('teamviews/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
