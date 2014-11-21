<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 21/11/14
 * Time: 10:50
 */

namespace OKLM\StringGenerator;


class LoremIpsumGenerator
{

    public function __construct()
    {
    }

    public static function generate($lenght = 40)
    {
        $lorem = array ("Lorem","ipsum","dolor","sit","amet","consectetur", "adipiscing", "elit",".", "donec", "in", "purus", "tortor", "sed", "id" ,"ornare", "augue",",", "vulputate", "ante","Nulla","mi", "leo","eleifend", "hendrerit", "at", "euismod", "eu", "risus", "Pellentesque" ,"semper", "ultrices", "arcu", "feugiat","massa","pretium","bibendum","turpis","lorem","gravida","ante","a","volutpat","elit","augue","non","leo", "Cras", "ac", "pulvinar","mauris","vel","ornare","massa","Pellentesque","ultrices","justo","libero","tincidunt","congue","Maecenas","ex","tristique","viverra","Vestibulum", "pulvinar", "vitae", "justo", "at","congue", "morbi", "sodales", "ligula",  "duis", "ac", "lacus", "quis", "quam", "auctor", "varius", "at", "metus", "Curabitur","dui");
        $text = 'Lorem ipsum dolor ';

        for($i=0;$i<$lenght;$i++)
        {
            $text .= $lorem[mt_rand(0,count($lorem)-1)]." ";
        }
        return $text.".";
    }
}