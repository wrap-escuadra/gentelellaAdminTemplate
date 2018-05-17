<?php
/**
 * Created by PhpStorm.
 * User: rafaelescuadra
 * Date: 17/05/2018
 * Time: 3:11 PM
 */
function alpha_space($str)
{
    return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
}