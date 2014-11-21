<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 18/11/14
 * Time: 15:33
 */

require __DIR__.'/vendor/autoload.php';

//$slugify = new \Cocur\slugify\Slugify();
//echo $slugify->slugify('Mé qzyd g éé dezf àà ');

echo \OKLM\StringGenerator\PasswordGenerator::generate(30, 'hard');
echo \OKLM\StringGenerator\LoremIpsumGenerator::generate(40);