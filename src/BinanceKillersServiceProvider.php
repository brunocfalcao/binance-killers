<?php

namespace Brunocfalcao\BinanceKillers;

use Brunocfalcao\BinanceKillers\Commands\NewOrderCommand;
use Illuminate\Support\ServiceProvider;

class BinanceKillersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            NewOrderCommand::class,
        ]);
    }

    public function register()
    {
        //
    }
}
