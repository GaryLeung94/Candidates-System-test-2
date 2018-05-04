<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/3
 * Time: 18:50
 */

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

//文件夹名字只能是Document，否则不能自动生成getter和setter
//下面三行很重要，没了也不能生成getter和setter
/**
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\PeopleRepository")
 */
class People
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     */
    private $name;

    /**
     * @MongoDB\Field(type="string")
     */
    private $sex;

    /**
     * @MongoDB\Field(type="string")
     */
    private $ethnic;

    /**
     * @MongoDB\Field(type="string")
     */
    private $city;

    /**
     * @MongoDB\Field(type="date")
     */
    private $birthday;

    /**
     * @MongoDB\Field(type="string")
     */
    private $mobile;

    /**
     * @MongoDB\Field(type="string")
     */
    private $address;

    /**
     * @MongoDB\Field(type="string")
     */
    private $workYear;

    /**
     * @MongoDB\Field(type="string")
     */
    private $marriage;

    /**
     * @MongoDB\Field(type="string")
     */
    private $child;

    /**
     * @MongoDB\Field(type="string")
     */
    private $plan;

    /**
     * @MongoDB\Field(type="date")
     */
    private $eduDate1a;

    /**
     * @MongoDB\Field(type="date")
     */
    private $eduDate1b;

    /**
     * @MongoDB\Field(type="string")
     */
    private $type1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $education1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $school1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $major1;

    /**
     * @MongoDB\Field(type="date")
     */
    private $eduDate2a;

    /**
     * @MongoDB\Field(type="date")
     */
    private $eduDate2b;

    /**
     * @MongoDB\Field(type="string")
     */
    private $type2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $education2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $school2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $major2;

    /**
     * @MongoDB\Field(type="date")
     */
    private $eduDate3a;

    /**
     * @MongoDB\Field(type="date")
     */
    private $eduDate3b;

    /**
     * @MongoDB\Field(type="string")
     */
    private $type3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $education3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $school3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $major3;

    /**
     * @MongoDB\Field(type="date")
     */
    private $wdate1a;

    /**
     * @MongoDB\Field(type="date")
     */
    private $wdate1b;

    /**
     * @MongoDB\Field(type="string")
     */
    private $wtype1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $company1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $title1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $status1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $salary1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $prove1;

    /**
     * @MongoDB\Field(type="date")
     */
    private $wdate2a;

    /**
     * @MongoDB\Field(type="date")
     */
    private $wdate2b;

    /**
     * @MongoDB\Field(type="string")
     */
    private $wtype2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $company2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $title2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $status2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $salary2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $prove2;

    /**
     * @MongoDB\Field(type="date")
     */
    private $wdate3a;

    /**
     * @MongoDB\Field(type="date")
     */
    private $wdate3b;

    /**
     * @MongoDB\Field(type="string")
     */
    private $wtype3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $company3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $title3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $status3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $salary3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $prove3;

    /**
     * @MongoDB\Field(type="string")
     */
    private $family1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $fname1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $fwork1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $fmobile1;

    /**
     * @MongoDB\Field(type="string")
     */
    private $family2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $fname2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $fwork2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $fmobile2;

    /**
     * @MongoDB\Field(type="string")
     */
    private $function;

    /**
     * @MongoDB\Field(type="string")
     */
    private $employ_type;

    /**
     * @MongoDB\Field(type="string")
     */
    private $position;

    /**
     * @MongoDB\Field(type="string")
     */
    private $salary_requirement;

    /**
     * @MongoDB\Field(type="string")
     */
    private $availability;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthday
     *
     * @param date $birthday
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * Get birthday
     *
     * @return date $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set marriage
     *
     * @param string $marriage
     * @return $this
     */
    public function setMarriage($marriage)
    {
        $this->marriage = $marriage;
        return $this;
    }

    /**
     * Get marriage
     *
     * @return string $marriage
     */
    public function getMarriage()
    {
        return $this->marriage;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return $this
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Get sex
     *
     * @return string $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set ethnic
     *
     * @param string $ethnic
     * @return $this
     */
    public function setEthnic($ethnic)
    {
        $this->ethnic = $ethnic;
        return $this;
    }

    /**
     * Get ethnic
     *
     * @return string $ethnic
     */
    public function getEthnic()
    {
        return $this->ethnic;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set workYear
     *
     * @param string $workYear
     * @return $this
     */
    public function setWorkYear($workYear)
    {
        $this->workYear = $workYear;
        return $this;
    }

    /**
     * Get workYear
     *
     * @return string $workYear
     */
    public function getWorkYear()
    {
        return $this->workYear;
    }

    /**
     * Set child
     *
     * @param string $child
     * @return $this
     */
    public function setChild($child)
    {
        $this->child = $child;
        return $this;
    }

    /**
     * Get child
     *
     * @return string $child
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Set plan
     *
     * @param string $plan
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * Get plan
     *
     * @return string $plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set eduDate1a
     *
     * @param date $eduDate1a
     * @return $this
     */
    public function setEduDate1a($eduDate1a)
    {
        $this->eduDate1a = $eduDate1a;
        return $this;
    }

    /**
     * Get eduDate1a
     *
     * @return date $eduDate1a
     */
    public function getEduDate1a()
    {
        return $this->eduDate1a;
    }

    /**
     * Set eduDate1b
     *
     * @param date $eduDate1b
     * @return $this
     */
    public function setEduDate1b($eduDate1b)
    {
        $this->eduDate1b = $eduDate1b;
        return $this;
    }

    /**
     * Get eduDate1b
     *
     * @return date $eduDate1b
     */
    public function getEduDate1b()
    {
        return $this->eduDate1b;
    }

    /**
     * Set type1
     *
     * @param string $type1
     * @return $this
     */
    public function setType1($type1)
    {
        $this->type1 = $type1;
        return $this;
    }

    /**
     * Get type1
     *
     * @return string $type1
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * Set education1
     *
     * @param string $education1
     * @return $this
     */
    public function setEducation1($education1)
    {
        $this->education1 = $education1;
        return $this;
    }

    /**
     * Get education1
     *
     * @return string $education1
     */
    public function getEducation1()
    {
        return $this->education1;
    }

    /**
     * Set school1
     *
     * @param string $school1
     * @return $this
     */
    public function setSchool1($school1)
    {
        $this->school1 = $school1;
        return $this;
    }

    /**
     * Get school1
     *
     * @return string $school1
     */
    public function getSchool1()
    {
        return $this->school1;
    }

    /**
     * Set major1
     *
     * @param string $major1
     * @return $this
     */
    public function setMajor1($major1)
    {
        $this->major1 = $major1;
        return $this;
    }

    /**
     * Get major1
     *
     * @return string $major1
     */
    public function getMajor1()
    {
        return $this->major1;
    }

    /**
     * Set eduDate2a
     *
     * @param date $eduDate2a
     * @return $this
     */
    public function setEduDate2a($eduDate2a)
    {
        $this->eduDate2a = $eduDate2a;
        return $this;
    }

    /**
     * Get eduDate2a
     *
     * @return date $eduDate2a
     */
    public function getEduDate2a()
    {
        return $this->eduDate2a;
    }

    /**
     * Set eduDate2b
     *
     * @param date $eduDate2b
     * @return $this
     */
    public function setEduDate2b($eduDate2b)
    {
        $this->eduDate2b = $eduDate2b;
        return $this;
    }

    /**
     * Get eduDate2b
     *
     * @return date $eduDate2b
     */
    public function getEduDate2b()
    {
        return $this->eduDate2b;
    }

    /**
     * Set type2
     *
     * @param string $type2
     * @return $this
     */
    public function setType2($type2)
    {
        $this->type2 = $type2;
        return $this;
    }

    /**
     * Get type2
     *
     * @return string $type2
     */
    public function getType2()
    {
        return $this->type2;
    }

    /**
     * Set education2
     *
     * @param string $education2
     * @return $this
     */
    public function setEducation2($education2)
    {
        $this->education2 = $education2;
        return $this;
    }

    /**
     * Get education2
     *
     * @return string $education2
     */
    public function getEducation2()
    {
        return $this->education2;
    }

    /**
     * Set school2
     *
     * @param string $school2
     * @return $this
     */
    public function setSchool2($school2)
    {
        $this->school2 = $school2;
        return $this;
    }

    /**
     * Get school2
     *
     * @return string $school2
     */
    public function getSchool2()
    {
        return $this->school2;
    }

    /**
     * Set major2
     *
     * @param string $major2
     * @return $this
     */
    public function setMajor2($major2)
    {
        $this->major2 = $major2;
        return $this;
    }

    /**
     * Get major2
     *
     * @return string $major2
     */
    public function getMajor2()
    {
        return $this->major2;
    }

    /**
     * Set eduDate3a
     *
     * @param date $eduDate3a
     * @return $this
     */
    public function setEduDate3a($eduDate3a)
    {
        $this->eduDate3a = $eduDate3a;
        return $this;
    }

    /**
     * Get eduDate3a
     *
     * @return date $eduDate3a
     */
    public function getEduDate3a()
    {
        return $this->eduDate3a;
    }

    /**
     * Set eduDate3b
     *
     * @param date $eduDate3b
     * @return $this
     */
    public function setEduDate3b($eduDate3b)
    {
        $this->eduDate3b = $eduDate3b;
        return $this;
    }

    /**
     * Get eduDate3b
     *
     * @return date $eduDate3b
     */
    public function getEduDate3b()
    {
        return $this->eduDate3b;
    }

    /**
     * Set type3
     *
     * @param string $type3
     * @return $this
     */
    public function setType3($type3)
    {
        $this->type3 = $type3;
        return $this;
    }

    /**
     * Get type3
     *
     * @return string $type3
     */
    public function getType3()
    {
        return $this->type3;
    }

    /**
     * Set education3
     *
     * @param string $education3
     * @return $this
     */
    public function setEducation3($education3)
    {
        $this->education3 = $education3;
        return $this;
    }

    /**
     * Get education3
     *
     * @return string $education3
     */
    public function getEducation3()
    {
        return $this->education3;
    }

    /**
     * Set school3
     *
     * @param string $school3
     * @return $this
     */
    public function setSchool3($school3)
    {
        $this->school3 = $school3;
        return $this;
    }

    /**
     * Get school3
     *
     * @return string $school3
     */
    public function getSchool3()
    {
        return $this->school3;
    }

    /**
     * Set major3
     *
     * @param string $major3
     * @return $this
     */
    public function setMajor3($major3)
    {
        $this->major3 = $major3;
        return $this;
    }

    /**
     * Get major3
     *
     * @return string $major3
     */
    public function getMajor3()
    {
        return $this->major3;
    }

    /**
     * Set wdate1a
     *
     * @param date $wdate1a
     * @return $this
     */
    public function setWdate1a($wdate1a)
    {
        $this->wdate1a = $wdate1a;
        return $this;
    }

    /**
     * Get wdate1a
     *
     * @return date $wdate1a
     */
    public function getWdate1a()
    {
        return $this->wdate1a;
    }

    /**
     * Set wdate1b
     *
     * @param date $wdate1b
     * @return $this
     */
    public function setWdate1b($wdate1b)
    {
        $this->wdate1b = $wdate1b;
        return $this;
    }

    /**
     * Get wdate1b
     *
     * @return date $wdate1b
     */
    public function getWdate1b()
    {
        return $this->wdate1b;
    }

    /**
     * Set wtype1
     *
     * @param string $wtype1
     * @return $this
     */
    public function setWtype1($wtype1)
    {
        $this->wtype1 = $wtype1;
        return $this;
    }

    /**
     * Get wtype1
     *
     * @return string $wtype1
     */
    public function getWtype1()
    {
        return $this->wtype1;
    }

    /**
     * Set company1
     *
     * @param string $company1
     * @return $this
     */
    public function setCompany1($company1)
    {
        $this->company1 = $company1;
        return $this;
    }

    /**
     * Get company1
     *
     * @return string $company1
     */
    public function getCompany1()
    {
        return $this->company1;
    }

    /**
     * Set title1
     *
     * @param string $title1
     * @return $this
     */
    public function setTitle1($title1)
    {
        $this->title1 = $title1;
        return $this;
    }

    /**
     * Get title1
     *
     * @return string $title1
     */
    public function getTitle1()
    {
        return $this->title1;
    }

    /**
     * Set status1
     *
     * @param string $status1
     * @return $this
     */
    public function setStatus1($status1)
    {
        $this->status1 = $status1;
        return $this;
    }

    /**
     * Get status1
     *
     * @return string $status1
     */
    public function getStatus1()
    {
        return $this->status1;
    }

    /**
     * Set salary1
     *
     * @param string $salary1
     * @return $this
     */
    public function setSalary1($salary1)
    {
        $this->salary1 = $salary1;
        return $this;
    }

    /**
     * Get salary1
     *
     * @return string $salary1
     */
    public function getSalary1()
    {
        return $this->salary1;
    }

    /**
     * Set prove1
     *
     * @param string $prove1
     * @return $this
     */
    public function setProve1($prove1)
    {
        $this->prove1 = $prove1;
        return $this;
    }

    /**
     * Get prove1
     *
     * @return string $prove1
     */
    public function getProve1()
    {
        return $this->prove1;
    }

    /**
     * Set wdate2a
     *
     * @param date $wdate2a
     * @return $this
     */
    public function setWdate2a($wdate2a)
    {
        $this->wdate2a = $wdate2a;
        return $this;
    }

    /**
     * Get wdate2a
     *
     * @return date $wdate2a
     */
    public function getWdate2a()
    {
        return $this->wdate2a;
    }

    /**
     * Set wdate2b
     *
     * @param date $wdate2b
     * @return $this
     */
    public function setWdate2b($wdate2b)
    {
        $this->wdate2b = $wdate2b;
        return $this;
    }

    /**
     * Get wdate2b
     *
     * @return date $wdate2b
     */
    public function getWdate2b()
    {
        return $this->wdate2b;
    }

    /**
     * Set wtype2
     *
     * @param string $wtype2
     * @return $this
     */
    public function setWtype2($wtype2)
    {
        $this->wtype2 = $wtype2;
        return $this;
    }

    /**
     * Get wtype2
     *
     * @return string $wtype2
     */
    public function getWtype2()
    {
        return $this->wtype2;
    }

    /**
     * Set company2
     *
     * @param string $company2
     * @return $this
     */
    public function setCompany2($company2)
    {
        $this->company2 = $company2;
        return $this;
    }

    /**
     * Get company2
     *
     * @return string $company2
     */
    public function getCompany2()
    {
        return $this->company2;
    }

    /**
     * Set title2
     *
     * @param string $title2
     * @return $this
     */
    public function setTitle2($title2)
    {
        $this->title2 = $title2;
        return $this;
    }

    /**
     * Get title2
     *
     * @return string $title2
     */
    public function getTitle2()
    {
        return $this->title2;
    }

    /**
     * Set status2
     *
     * @param string $status2
     * @return $this
     */
    public function setStatus2($status2)
    {
        $this->status2 = $status2;
        return $this;
    }

    /**
     * Get status2
     *
     * @return string $status2
     */
    public function getStatus2()
    {
        return $this->status2;
    }

    /**
     * Set salary2
     *
     * @param string $salary2
     * @return $this
     */
    public function setSalary2($salary2)
    {
        $this->salary2 = $salary2;
        return $this;
    }

    /**
     * Get salary2
     *
     * @return string $salary2
     */
    public function getSalary2()
    {
        return $this->salary2;
    }

    /**
     * Set prove2
     *
     * @param string $prove2
     * @return $this
     */
    public function setProve2($prove2)
    {
        $this->prove2 = $prove2;
        return $this;
    }

    /**
     * Get prove2
     *
     * @return string $prove2
     */
    public function getProve2()
    {
        return $this->prove2;
    }

    /**
     * Set wdate3a
     *
     * @param date $wdate3a
     * @return $this
     */
    public function setWdate3a($wdate3a)
    {
        $this->wdate3a = $wdate3a;
        return $this;
    }

    /**
     * Get wdate3a
     *
     * @return date $wdate3a
     */
    public function getWdate3a()
    {
        return $this->wdate3a;
    }

    /**
     * Set wdate3b
     *
     * @param date $wdate3b
     * @return $this
     */
    public function setWdate3b($wdate3b)
    {
        $this->wdate3b = $wdate3b;
        return $this;
    }

    /**
     * Get wdate3b
     *
     * @return date $wdate3b
     */
    public function getWdate3b()
    {
        return $this->wdate3b;
    }

    /**
     * Set wtype3
     *
     * @param string $wtype3
     * @return $this
     */
    public function setWtype3($wtype3)
    {
        $this->wtype3 = $wtype3;
        return $this;
    }

    /**
     * Get wtype3
     *
     * @return string $wtype3
     */
    public function getWtype3()
    {
        return $this->wtype3;
    }

    /**
     * Set company3
     *
     * @param string $company3
     * @return $this
     */
    public function setCompany3($company3)
    {
        $this->company3 = $company3;
        return $this;
    }

    /**
     * Get company3
     *
     * @return string $company3
     */
    public function getCompany3()
    {
        return $this->company3;
    }

    /**
     * Set title3
     *
     * @param string $title3
     * @return $this
     */
    public function setTitle3($title3)
    {
        $this->title3 = $title3;
        return $this;
    }

    /**
     * Get title3
     *
     * @return string $title3
     */
    public function getTitle3()
    {
        return $this->title3;
    }

    /**
     * Set status3
     *
     * @param string $status3
     * @return $this
     */
    public function setStatus3($status3)
    {
        $this->status3 = $status3;
        return $this;
    }

    /**
     * Get status3
     *
     * @return string $status3
     */
    public function getStatus3()
    {
        return $this->status3;
    }

    /**
     * Set salary3
     *
     * @param string $salary3
     * @return $this
     */
    public function setSalary3($salary3)
    {
        $this->salary3 = $salary3;
        return $this;
    }

    /**
     * Get salary3
     *
     * @return string $salary3
     */
    public function getSalary3()
    {
        return $this->salary3;
    }

    /**
     * Set prove3
     *
     * @param string $prove3
     * @return $this
     */
    public function setProve3($prove3)
    {
        $this->prove3 = $prove3;
        return $this;
    }

    /**
     * Get prove3
     *
     * @return string $prove3
     */
    public function getProve3()
    {
        return $this->prove3;
    }

    /**
     * Set family1
     *
     * @param string $family1
     * @return $this
     */
    public function setFamily1($family1)
    {
        $this->family1 = $family1;
        return $this;
    }

    /**
     * Get family1
     *
     * @return string $family1
     */
    public function getFamily1()
    {
        return $this->family1;
    }

    /**
     * Set fname1
     *
     * @param string $fname1
     * @return $this
     */
    public function setFname1($fname1)
    {
        $this->fname1 = $fname1;
        return $this;
    }

    /**
     * Get fname1
     *
     * @return string $fname1
     */
    public function getFname1()
    {
        return $this->fname1;
    }

    /**
     * Set fwork1
     *
     * @param string $fwork1
     * @return $this
     */
    public function setFwork1($fwork1)
    {
        $this->fwork1 = $fwork1;
        return $this;
    }

    /**
     * Get fwork1
     *
     * @return string $fwork1
     */
    public function getFwork1()
    {
        return $this->fwork1;
    }

    /**
     * Set fmobile1
     *
     * @param string $fmobile1
     * @return $this
     */
    public function setFmobile1($fmobile1)
    {
        $this->fmobile1 = $fmobile1;
        return $this;
    }

    /**
     * Get fmobile1
     *
     * @return string $fmobile1
     */
    public function getFmobile1()
    {
        return $this->fmobile1;
    }

    /**
     * Set family2
     *
     * @param string $family2
     * @return $this
     */
    public function setFamily2($family2)
    {
        $this->family2 = $family2;
        return $this;
    }

    /**
     * Get family2
     *
     * @return string $family2
     */
    public function getFamily2()
    {
        return $this->family2;
    }

    /**
     * Set fname2
     *
     * @param string $fname2
     * @return $this
     */
    public function setFname2($fname2)
    {
        $this->fname2 = $fname2;
        return $this;
    }

    /**
     * Get fname2
     *
     * @return string $fname2
     */
    public function getFname2()
    {
        return $this->fname2;
    }

    /**
     * Set fwork2
     *
     * @param string $fwork2
     * @return $this
     */
    public function setFwork2($fwork2)
    {
        $this->fwork2 = $fwork2;
        return $this;
    }

    /**
     * Get fwork2
     *
     * @return string $fwork2
     */
    public function getFwork2()
    {
        return $this->fwork2;
    }

    /**
     * Set fmobile2
     *
     * @param string $fmobile2
     * @return $this
     */
    public function setFmobile2($fmobile2)
    {
        $this->fmobile2 = $fmobile2;
        return $this;
    }

    /**
     * Get fmobile2
     *
     * @return string $fmobile2
     */
    public function getFmobile2()
    {
        return $this->fmobile2;
    }

    /**
     * Set function
     *
     * @param string $function
     * @return $this
     */
    public function setFunction($function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Get function
     *
     * @return string $function
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set employType
     *
     * @param string $employType
     * @return $this
     */
    public function setEmployType($employType)
    {
        $this->employ_type = $employType;
        return $this;
    }

    /**
     * Get employType
     *
     * @return string $employType
     */
    public function getEmployType()
    {
        return $this->employ_type;
    }

    /**
     * Set position
     *
     * @param string $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get position
     *
     * @return string $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set salaryRequirement
     *
     * @param string $salaryRequirement
     * @return $this
     */
    public function setSalaryRequirement($salaryRequirement)
    {
        $this->salary_requirement = $salaryRequirement;
        return $this;
    }

    /**
     * Get salaryRequirement
     *
     * @return string $salaryRequirement
     */
    public function getSalaryRequirement()
    {
        return $this->salary_requirement;
    }

    /**
     * Set availability
     *
     * @param string $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Get availability
     *
     * @return string $availability
     */
    public function getAvailability()
    {
        return $this->availability;
    }
}
