<?php

namespace app\core\exception;

class ForbiddenException extends \Exception
{
    protected $message = 'You are not authorised to view this page.';
    protected $code = 403;
}
