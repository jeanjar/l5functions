<?php

namespace JeanJar\LaravelHelpers\Contracts;

use Illuminate\Http\Request;

interface ControllerActionContract
{
    public function is(Request $request, string $controller, array $actions);
}