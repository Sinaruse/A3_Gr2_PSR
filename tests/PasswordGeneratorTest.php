<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 21/11/14
 * Time: 15:35
 */

namespace Tests\OKLM\StringGenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * he generate a number between 10 and 10000
     *
     * @throws \Exceptions
     */
    public function testGenerateLength()
    {
        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_STRENGTH_HARD);
        $passwordLength = mb_strlen($password);

        $this->assertEquals($length, $passwordLength);
    }
}