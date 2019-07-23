<?php

namespace JeanJar\LaravelHelpers\Contracts;

use Illuminate\Http\Request;

interface ControllerActionContract
{
    public static function is(Request $request, string $controller, array $actions);
}
