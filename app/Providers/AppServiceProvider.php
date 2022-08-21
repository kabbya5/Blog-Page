<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use App\Models\Post;
use View;


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
        Paginator::useBootstrap();
        view::share('now',Carbon::today()->format('F d, Y'));



        view()->composer('blog.layouts.sidebar', function ($view){
          $popular_posts = Post::published()->popular()->take(4)->get();
          return $view->with('popularPosts',$popular_posts);
        });
    }
}
