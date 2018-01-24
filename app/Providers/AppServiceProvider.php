<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
	    // 注册观察者
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Snew::observe(\App\Observers\SnewObserver::class);
		\App\Models\Membership::observe(\App\Observers\MembershipObserver::class);
		\App\Models\Member::observe(\App\Observers\MemberObserver::class);
		\App\Models\RenewCertification::observe(\App\Observers\RenewCertificationObserver::class);
		\App\Models\Certification::observe(\App\Observers\CertificationObserver::class);
		\App\Models\RegisterCourse::observe(\App\Observers\RegisterCourseObserver::class);
		\App\Models\Training::observe(\App\Observers\TrainingObserver::class);
		\App\Models\News::observe(\App\Observers\NewsObserver::class);
		\App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);
		\App\Models\TrainingCategory::observe(\App\Observers\TrainingCategoryObserver::class);
		\App\Models\Project::observe(\App\Observers\ProjectObserver::class);

        Schema::defaultStringLength(191);
        Carbon::setLocale('zh');
        // \Carbon\Carbon::setLocale('zh-CN');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
        if (app()->environment() == 'local' || app()->environment() == 'testing') {
            $this->app->register(\Summerblue\Generator\GeneratorsServiceProvider::class);
        }
    
        if (app()->isLocal()) {
            $this->app->register(\VIACreative\SudoSu\ServiceProvider::class);
        }
    }
}
