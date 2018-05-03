<?php

namespace AppBundle\Controller;

use AppBundle\Document\People;
use AppBundle\Form\PeopleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{id}", name="show")
     */
    public function showAction(People $people)
    {
//        $people = $this->get('doctrine_mongodb')
//            ->getRepository(People::class)
//            ->find($id);

        return $this->render('default/show.html.twig', array(
            'people' => $people,
        ));

    }

    /**
     * @Route("/{id}/update", name="update")
     */
    public function updateAction(Request $request, People $people)
    {
        $form = $this->createForm(PeopleType::class, $people);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('doctrine_mongodb')->getManager()->flush();

            return $this->redirectToRoute('update', ['id' => $people->getId()]);
        }

        return $this->render('default/update.html.twig', [
            'people' => $people,
            'form' => $form->createView(),
        ]);
    }
}
