<?php

namespace App\Providers;

use App\Images;
use App\LocationInfo;
use App\ProjectCategory;
use App\SocialMediaAccount;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->share("logo", Images::where('parentText', 'logo')->get()->first());
        view()->share("location_info", LocationInfo::all()->first());
        view()->share("accounts", SocialMediaAccount::all()->first());
        view()->share("project_categories", ProjectCategory::all());
    }
}
