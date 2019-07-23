<?php

namespace JeanJar\LaravelHelpers\Functions;

use JeanJar\LaravelHelpers\Contracts\ControllerActionContract;
use Illuminate\Http\Request;

class ControllerAction implements ControllerActionContract
{
    public static function is(Request $request, string $controller, array $actions)
    {
        return $request->route()->controller === $controller && in_array($request->route()->getActionMethod(), $actions);
    }
}
