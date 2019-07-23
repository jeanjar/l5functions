<?php

namespace JeanJar\LaravelHelpers\Http\Providers;

use Illuminate\Support\ServiceProvider;
use JeanJar\LaravelHelpers\Functions\ControllerAction;

class HelperFunctionsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('JeanJar\LaravelHelpers\ControllerAction', function(){
            return new ControllerAction();
        });
    }
}