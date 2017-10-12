<?php
/**
 * Created by PhpStorm.
 * User: pancho
 * Date: 9/29/17
 * Time: 6:31 PM
 */

namespace AppBundle\Utils;


class Jobeet
{
    static public function slugify($text)
    {
        $text = preg_replace('/\W+/', '-', $text);
        $text = strtolower(trim($text, '-'));

        return $text;
    }

}