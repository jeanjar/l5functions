<?php

if (function_exists('controllerActionIs')) {
    function controllerActionIs(Illuminate\Http\Request $request, string $controller, array $actions): bool
    {
        return $request->route()->controller == $controller && in_array($request->route()->getActionMethod(), $actions);
    }
}