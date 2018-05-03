<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/3
 * Time: 18:24
 */

namespace AppBundle\Entity;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
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
}