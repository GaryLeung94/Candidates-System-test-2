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
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;


class PeopleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null)
            ->add('sex',ChoiceType::class, array(
                'choices' => array(
                    '男' => '男',
                    '女' => '女'
                )
            ))
            ->add('ethnic', null, array('required' => false))
            ->add('city', null, array('required' => false))
            ->add('birthday', DateType::class, array(
                'widget' => 'single_text',
            ))
            ->add('mobile', NumberType::class, array(
                'required' => false,
                'invalid_message' => '请输入有效电话号码'
            ))
            ->add('address', null, array('required' => false))
            ->add('workYear', NumberType::class, array('invalid_message' => '请输入数字'))
            ->add('marriage', ChoiceType::class, array(
                'choices' => array(
                    '未婚' => '未婚',
                    '已婚' => '已婚',
                    '离婚' => '离婚',
                    '丧偶' => '丧偶',
                )
            ))
            ->add('child', ChoiceType::class, array(
                'choices' => array(
                    '未育' => '未育',
                    '在孕' => '在孕',
                    '已育' => '已育',
                )
            ))
            ->add('plan', ChoiceType::class, array(
                'choices' => array(
                    '暂无' => '暂无',
                    '2年内结婚' => '2年内结婚',
                    '2年内生育' => '2年内生育',
                    '2年内婚育' => '2年内婚育',
                )
            ))
            ->add('eduDate1a', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('eduDate1b', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('type1', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '全日制' => '全日制',
                    '在职' => '在职',
                ),
                'required' => false,
            ))
            ->add('education1', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '博士' => '博士',
                    '硕士' => '硕士',
                    '本科' => '本科',
                    '大专' => '大专',
                    '其他' => '其他',
                ),
                'required' => false,
            ))
            ->add('school1', null, array('required' => false))
            ->add('major1', null, array('required' => false))
            ->add('eduDate2a', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('eduDate2b', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('type2', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '全日制' => '全日制',
                    '在职' => '在职',
                ),
                'required' => false,
            ))
            ->add('education2', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '博士' => '博士',
                    '硕士' => '硕士',
                    '本科' => '本科',
                    '大专' => '大专',
                    '其他' => '其他',
                ),
                'required' => false,
            ))
            ->add('school2', null, array('required' => false))
            ->add('major2', null, array('required' => false))
            ->add('eduDate3a', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('eduDate3b', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('type3', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '全日制' => '全日制',
                    '在职' => '在职',
                ),
                'required' => false,
            ))
            ->add('education3', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '博士' => '博士',
                    '硕士' => '硕士',
                    '本科' => '本科',
                    '大专' => '大专',
                    '其他' => '其他',
                ),
                'required' => false,
            ))
            ->add('school3', null, array('required' => false))
            ->add('major3', null, array('required' => false))
            ->add('wdate1a', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('wdate1b', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('wtype1', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '全职' => '全职',
                    '兼职' => '兼职',
                ),
                'required' => false,
            ))
            ->add('company1', null, array('required' => false))
            ->add('title1', null, array('required' => false))
            ->add('status1', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '在职' => '在职',
                    '离职' => '离职',
                ),
                'required' => false,
            ))
            ->add('salary1', null, array('required' => false))
            ->add('prove1', null, array('required' => false))
            ->add('wdate2a', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('wdate2b', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('wtype2', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '全职' => '全职',
                    '兼职' => '兼职',
                ),
                'required' => false,
            ))
            ->add('company2', null, array('required' => false))
            ->add('title2', null, array('required' => false))
            ->add('status2', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '在职' => '在职',
                    '离职' => '离职',
                ),
                'required' => false,
            ))
            ->add('salary2', null, array('required' => false))
            ->add('prove2', null, array('required' => false))
            ->add('wdate3a', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('wdate3b', DateType::class, array(
                'widget' => 'single_text',
                'required' => false,
            ))
            ->add('wtype3', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '全职' => '全职',
                    '兼职' => '兼职',
                ),
                'required' => false,
            ))
            ->add('company3', null, array('required' => false))
            ->add('title3', null, array('required' => false))
            ->add('status3', ChoiceType::class, array(
                'choices' => array(
                    '--' => '',
                    '在职' => '在职',
                    '离职' => '离职',
                ),
                'required' => false,
            ))
            ->add('salary3', null, array('required' => false))
            ->add('prove3', null, array('required' => false))
            ->add('family1', null, array('required' => false))
            ->add('fname1', null, array('required' => false))
            ->add('fwork1', null, array('required' => false))
            ->add('fmobile1', NumberType::class, array(
                'required' => false,
                'invalid_message' => '请输入有效电话号码'
            ))
            ->add('family2', null, array('required' => false))
            ->add('fname2', null, array('required' => false))
            ->add('fwork2', null, array('required' => false))
            ->add('fmobile2', NumberType::class, array(
                'required' => false,
                'invalid_message' => '请输入有效电话号码'
            ))
            ->add('function', ChoiceType::class, array(
                'choices' => array(
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
            ->add('employ_type', ChoiceType::class, array(
                'choices' => array(
                    '全职' => '全职',
                    '兼职' => '兼职',
                ),
                'required' => false,
            ))
            ->add('position', ChoiceType::class, array(
                'choices' => array(
                    '培训生/实习生' => '培训生/实习生',
                    '初级工程师' => '初级工程师',
                    '高级工程师' => '高级工程师',
                ),
            ))
            ->add('salary_requirement', NumberType::class, array(
                'required' => false,
                'invalid_message' => '请输入数字'
            ))
            ->add('availability', ChoiceType::class, array(
                'choices' => array(
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