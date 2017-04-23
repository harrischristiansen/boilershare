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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return $user->admin;
        });
        
         Gate::define('edit-question', function ($user, $question) {
	        if (Gate::allows('admin')) { return true; }
	        
	        if ($question == null) { return false; }
            return $question->user == $user;
        });
        
         Gate::define('edit-answer', function ($user, $answer) {
	        if (Gate::allows('admin')) { return true; }
	        
	        if ($answer == null) { return false; }
            return $answer->user == $user;
        });
    }
}
