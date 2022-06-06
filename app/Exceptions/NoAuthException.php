<?php

namespace App\Exceptions;

use Exception;

use function App\Helpers\ko;

class NoAuthException extends Exception
{
    public function render()
    {
        return ko('Naughty🤡');
    }
}
