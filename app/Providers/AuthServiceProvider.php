<?php

namespace App\Providers;

use App\Policies\CategoryPolicy;
use App\Policies\DocumentPolicy;
use App\Models\Admin\Category;
use App\Models\Admin\Document;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
   
    protected $policies = [
        Category::class => CategoryPolicy::class,
        Document::class => DocumentPolicy::class,
    ];

   
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
