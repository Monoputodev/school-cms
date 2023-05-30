<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Content;
use App\Models\Type;
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
 $content =  Content::find(1)->first();
 view()->share('content', $content);
 $types =  Type::where('status',1)->get();
 view()->share('types', $types);
//  $blogs = Blog::orderBy('id', 'DESC')->get();
//  view()->share('blogs', $blogs);



    }
}
