<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Document\People;
use AppBundle\Form\PeopleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/create", name="guest_create")
     */
    public function createAction(Request $request)
    {
        $people = new People();

        $form = $this->createForm(PeopleType::class, $people);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->get('doctrine_mongodb')->getManager();
            $em->persist($people);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        date_default_timezone_set("Asia/Shanghai");

        return $this->render('default/create.html.twig', array(
            'people' => $people,
            'form' => $form->createView(),
            'now_time' => date("Y-m-d h:i")
        ));
    }
}
