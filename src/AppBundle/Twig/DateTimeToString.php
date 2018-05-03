<?php
/**
 * Created by PhpStorm.
 * User: garyl
 * Date: 2018/5/4
 * Time: 2:14
 */

namespace AppBundle\Twig;


class DateTimeToString extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('date_to_string',array($this, 'dtsFilter')),
        );
    }

    public function dtsFilter($date_time)
    {
        return $date_time->format('Y-m-d');
    }
}