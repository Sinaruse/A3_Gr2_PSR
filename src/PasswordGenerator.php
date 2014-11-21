<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 18/11/14
 * Time: 15:45
 */

namespace OKLM\StringGenerator;

class PasswordGenerator
{
    const PASSWORD_STRENGTH_EASY = 'abcdefjhijklmnopqrstuvwxyz';
    const PASSWORD_STRENGTH_MEDIUM = 'ABCDEFJHIJKLMNOPQRSTUVWXYZ0123456789';
    const PASSWORD_STRENGTH_HARD = '&é(§è!çà)$ù`@Ù=≠€¥+@!$%?&';

    public function __construct()
    {
        echo 'Done!';
    }

    public static function generate($length = 10, $level)
    {
        $char = "";

        switch ($level)
        {
            case 'easy' :
                $char = self::PASSWORD_STRENGTH_EASY;
                break;
            case 'medium' :
                $char = self::PASSWORD_STRENGTH_EASY.self::PASSWORD_STRENGTH_MEDIUM;
                break;
            case 'hard':
                $char = self::PASSWORD_STRENGTH_EASY.self::PASSWORD_STRENGTH_MEDIUM.self::PASSWORD_STRENGTH_HARD;
                break;
            default :
                $char = self::PASSWORD_STRENGTH_EASY.self::PASSWORD_STRENGTH_MEDIUM;
                break;
        }

        $password = "";

        for ($i = 0; $i < $length; $i++)
        {
            $password .= mb_substr($char, mt_rand(0, strlen($char) - 1), 1);
        }

        return $password;
    }
}