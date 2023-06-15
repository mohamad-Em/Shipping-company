<?php

namespace App\Providers;

use App\Models\EmailSetting;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $website = Setting::all();
        if ($website) {
            View::share('appSetting', $website);
        }
        $emailSetting = EmailSetting::all();
        if ($emailSetting) {
            View::share('emailSetting', $emailSetting);
        }
    }
}
