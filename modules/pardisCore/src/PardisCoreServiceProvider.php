<?php

namespace Modules\PardisCore;

use Illuminate\Support\ServiceProvider;
use Modules\PardisCore\Facades\CompanyFacade;
use Modules\PardisCore\Models\Company;
use Modules\PardisCore\Observers\CompanyObserver;
use Modules\PardisCore\Repositories\CompanyRepository;


class PardisCoreServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        CompanyFacade::shouldProxyTo(CompanyRepository::class);
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','pardisCore');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/pardis-core.php', 'pardis-core');
        $this->publishes([
            __DIR__.'/config/pardis-core.php' =>config_path('pardis-core.php')
        ], 'pardis-core');

        Company::observe(CompanyObserver::class);
    }
}
