<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/4
 * Time: 14:14
 */

namespace AppBundle\Controller\admin;

use AppBundle\AppBundle;
use AppBundle\Document\People;
use AppBundle\Form\PeopleType;
use AppBundle\Form\ResultType;
use Doctrine\ODM\MongoDB\DocumentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", defaults={"page": "1", "_format"="html"}, name="admin_homepage")
     * @Route("/page/{page}", defaults={"_format"="html"}, requirements={"page": "[1-9]\d*"}, name="admin_homepage_paginated")
     */
    public function indexAction(Request $request, $page, $_format)
    {

        $form = $this->createForm(ResultType::class);
        $form->handleRequest($request);

        $repository = $this->get('doctrine_mongodb')->getRepository(People::class);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $people = $repository->findMatchPaging($data, $page);

            return $this->render('admin/index.' . $_format . '.twig', [
                'form' => $form->createView(),
                'people' => $people,
                'people_count' => count($people),
            ]);

        } else {
            $people = $repository->findAllPaging($page);
        }

        return $this->render('admin/index.' . $_format . '.twig', [
            'form' => $form->createView(),
            'people' => $people,
            'people_count' => count($people),
        ]);
    }

    /**
     * @Route("/create", name="create")
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

            return $this->redirectToRoute('admin_homepage');
        }

        return $this->render('admin/create.html.twig', array(
            'people' => $people,
            'form' =>$form->createView(),
        ));
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function showAction(People $people)
    {
//        $people = $this->get('doctrine_mongodb')
//            ->getRepository(People::class)
//            ->find($id);

        return $this->render('admin/show.html.twig', array(
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

            return $this->redirectToRoute('admin_homepage');
        }

        return $this->render('admin/update.html.twig', [
            'people' => $people,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete")
     */
    public function deleteAction(People $people)
    {
        $em = $this->get('doctrine_mongodb')->getManager();
        $em->remove($people);
        $em->flush();

        return $this->redirectToRoute('admin_homepage');
    }

}
