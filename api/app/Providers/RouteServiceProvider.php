<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function map()
    {
        $this->mapModulesRoutes();
    }

    protected function mapModulesRoutes()
    {
        Route::middleware('api')
             ->group(base_path('routes/modules.php'));
    }
}
