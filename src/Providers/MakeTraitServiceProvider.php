<?php

namespace Thulisoft\MakeTrait\Providers;

use Illuminate\Support\ServiceProvider;
use Thulisoft\MakeTrait\Console\Commands\TraitMakeCommand;

class MakeTraitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            TraitMakeCommand::class
        ]);
    }
}
