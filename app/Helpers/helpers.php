<?php

namespace App\Helpers;

use App\General;

if (!function_exists('ok')) {
    function ok($response)
    {
        return General::ok($response);
    }
}

if (!function_exists('ko')) {
    function ko($response)
    {
        return General::ko($response);
    }
}
