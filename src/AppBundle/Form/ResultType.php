<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/4
 * Time: 21:18
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ResultType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('required' => false))
            ->add('function', ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '技术部' => '',
                    '--PHP工程师' => 'PHP工程师',
                    '--前端工程师' => '前端工程师',
                    '--技术培训生' => '技术培训生',
                    '--Go工程师' => 'Go工程师',
                    '--测试工程师' => '测试工程师',
                    '--全栈工程师' => '全栈工程师',
                    '设计部' => '',
                    '--UI设计师' => 'UI设计师',
                    '--平面设计师' => '平面设计师',
                ),
            ))
            ->add('education1', ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '博士' => '博士',
                    '硕士' => '硕士',
                    '本科' => '本科',
                    '大专' => '大专',
                    '其他' => '其他',
                ),
            ))
            ->add('status1', ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '在职' => '在职',
                    '离职' => '离职',
                ),
            ))
            ->add('sex',ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '男' => '男',
                    '女' => '女'
                ),
            ))
            ->add('employ_type', ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '全职' => '全职',
                    '兼职' => '兼职',
                ),
            ))
            ->add('workYear', null, array('required' => false))
            ->add('availability', ChoiceType::class, array(
                'choices' => array(
                    '不限' => '不限',
                    '随时' => '随时',
                    '一周' => '一周',
                    '两周' => '两周',
                    '一个月' => '一个月',
                    '一个月以上' => '一个月以上',
                ),
            ))

        ;
    }
}