<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/3
 * Time: 22:20
 */

namespace AppBundle\Form;

use AppBundle\Document\People;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class PeopleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null)
        ;
    }

}