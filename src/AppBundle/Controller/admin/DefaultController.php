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
     * @Route("/", name="admin_homepage")
     */
    public function indexAction(Request $request)
    {

        $form = $this->createForm(ResultType::class);
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

            return $this->render('admin/index.html.twig', [
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

        return $this->render('admin/index.html.twig', [
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

            return $this->redirectToRoute('update', ['id' => $people->getId()]);
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

        return $this->redirectToRoute('create');
    }

}
