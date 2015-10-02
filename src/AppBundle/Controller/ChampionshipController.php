<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Championship;
use AppBundle\Form\Type\ChampionshipType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/championships")
 */
class ChampionshipController extends Controller
{

    /**
     * @Route(name="championship.list")
     * @Template
     */
    public function listAction() {

        $championships = $this->getDoctrine()
            ->getRepository('AppBundle:Championship')
            ->findAll();

        return [
            'championships' => $championships
        ];
    }

    /**
     * @Route("/add", name="championship.add")
     * @Template
     */
    public function addAction(Request $request)
    {
        $country = new Championship();
        $form = $this->createForm(new ChampionshipType(), $country);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            return $this->redirectToRoute('championship.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * @Route("/delete/{id}", name="championship.delete")
     */
    public function deleteAction(Championship $country)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($country);
        $em->flush();

        return $this->redirectToRoute('championship.list');

    }

    /**
     * @Route("/edit/{id}", name="championship.edit")
     * @Template
     * @param Request $request
     * @param Championship $country
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request, Championship $country) {

        $form = $this->createForm(new ChampionshipType(), $country);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();

            return $this->redirectToRoute('championship.list');
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
