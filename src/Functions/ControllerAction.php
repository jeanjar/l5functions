<?php

namespace JeanJar\LaravelHelpers\Functions;

use Illuminate\Http\Request;
use JeanJar\LaravelHelpers\Contracts\ControllerActionContract;

class ControllerAction implements ControllerActionContract
{
    public function is(Request $request, string $controller, array $actions)
    {
        return $request->route()->controller === $controller && in_array($request->route()->getActionMethod(), $actions);
    }
}