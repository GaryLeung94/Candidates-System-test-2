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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class PeopleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null)
            ->add('birthday', DateType::class, array(
                'widget' => 'single_text',
            ))
            ->add('marriage', ChoiceType::class, array(
                'choices' => array(
                    '未婚' => '未婚',
                    '已婚' => '已婚',
                    '离婚' => '离婚',
                    '丧偶' => '丧偶',
                )
            ))
        ;
    }

}