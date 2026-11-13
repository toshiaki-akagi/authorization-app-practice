<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // PostクラスとPostPolicyクラスを明示的に関連付け
        Post::class => PostPolicy::class,
    ];
    
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
