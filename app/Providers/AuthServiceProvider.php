<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \App\Models\Membership::class => \App\Policies\MembershipPolicy::class,
		 \App\Models\Member::class => \App\Policies\MemberPolicy::class,
		 \App\Models\RenewCertification::class => \App\Policies\RenewCertificationPolicy::class,
		 \App\Models\Certification::class => \App\Policies\CertificationPolicy::class,
		 \App\Models\RegisterCourse::class => \App\Policies\RegisterCoursePolicy::class,
		 \App\Models\Training::class => \App\Policies\TrainingPolicy::class,
		 \App\Models\News::class => \App\Policies\NewsPolicy::class,
		 \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
		 \App\Models\Topic::class => \App\Policies\TopicPolicy::class,
		 \App\Models\TrainingCategory::class => \App\Policies\TrainingCategoryPolicy::class,
		 \App\Models\Project::class => \App\Policies\ProjectPolicy::class,
        'App\Model' => 'App\Policies\ModelPolicy',
        \App\Models\User::class  => \App\Policies\UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
