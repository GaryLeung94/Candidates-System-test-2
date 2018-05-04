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
     * @MongoDB\Field(type="date")
     */
    private $birthday;

    /**
     * @MongoDB\Field(type="string")
     */
    private $marriage;

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
}
