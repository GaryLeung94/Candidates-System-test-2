<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Document\People;
use AppBundle\Form\PeopleType;
use AppBundle\Form\SearchType;
use Doctrine\ODM\MongoDB\DocumentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="show_all_search")
     */
    public function indexAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('name', TextType::class, array('required' => false))
            ->add('marriage', ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '未婚' => '未婚',
                    '已婚' => '已婚',
                    '离婚' => '离异',
                    '丧偶' => '丧偶',
                )
            ))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $people = $this->get('doctrine_mongodb')->getManager()->getRepository('AppBundle:People')
                ->createQueryBuilder();
            if($data['name']) {
                $people = $people->field('name')->equals($data['name']);
            }
            if($data['marriage'] != '不限') {
                $people = $people->field('marriage')->equals($data['marriage']);
            }
            $people = $people->getQuery()->execute();

            return $this->render('default/index.html.twig', [
                'form' => $form->createView(),
                'people' => $people,
            ]);

        } else {
            $people = $this->get('doctrine_mongodb')
                ->getManager()
                ->createQueryBuilder('AppBundle:People')
                ->sort('name', 'ASC')
                ->getQuery()
                ->execute();
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
            'people' => $people,
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

            return $this->redirectToRoute('create');
        }

        return $this->render('default/create.html.twig', array(
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

    /**
     * @Route("/{id}/delete", name="delete")
     */
    public function deleteAction(People $people)
    {
        $em = $this->get('doctrine_mongodb')->getManager();
        $em->remove($people);
        $em->flush();

        return $this->redirectToRoute('create');
    }

//    /**
//     * @Route("/search", name="search")
//     */
//    public function searchAction(Request $request)
//    {
//
//    }
}
