<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\UserDetail;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is_national_leader', function(User $user){
            // dd($user->role);
            return $user->role == 'national_leader';

        });

        Gate::define('is_chief_governor', function(User $user){
            return $user->role == 'chief_governor';
        });

        Gate::define('is_governor', function(User $user){
            return $user->role == 'governor';
        });
        Gate::define('is_deputy_governor', function(User $user){
            return $user->role == 'deputy_governor';
        });
        Gate::define('is_vice_deputy_governor', function(User $user){
            return $user->role == 'vice_deputy_governor';
        });
    }
}
