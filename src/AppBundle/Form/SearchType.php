<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/4
 * Time: 4:05
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoicesType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('required' => false))
            ->add('marriage', ChoicesType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '未婚' => '未婚',
                    '已婚' => '已婚',
                    '离婚' => '离异',
                    '丧偶' => '丧偶',
                )
            ));
    }
}