<?php

use KKiernan\CaesarCipher;


/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
|
| Functions that will be used often either in Controllers or Views
|
*/

function encryptLink($string)
{
    return base64_encode($string);
}

function decryptLink($string)
{
    return base64_decode($string);
}
