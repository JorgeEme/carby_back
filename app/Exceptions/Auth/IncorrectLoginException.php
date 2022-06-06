<?php

namespace App\Exceptions\Auth;

use Exception;

use function App\Helpers\ko;

class IncorrectLoginException extends Exception
{
    public function render()
    {
        return ko(__('custom_messages.incorrext_login'));
    }
}
