<?php

namespace App\Providers;

use App\Facades\ValidationCommonHelperFacade;
use App\Facades\ViewCommonHelperFacade;
use App\Models\User;
use App\Observers\UserObserver;
use App\Services\Helpers\ValidationCommonHelper;
use App\Services\Helpers\ViewCommonHelper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        ValidationCommonHelperFacade::shouldProxyTo(ValidationCommonHelper::class);
        ViewCommonHelperFacade::shouldProxyTo(ViewCommonHelper::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
    }
}
