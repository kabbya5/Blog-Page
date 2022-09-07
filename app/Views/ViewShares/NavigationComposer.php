<?php
namespace App\Views\ViewShares;

use Illuminate\View\View;
use App\Models\Post;
use App\Models\Category;

class NavigationComposer{

  public function compose(View $view){

    $this->composeCategories($view);

    $this->composePopularPosts($view);

  }
  private function composeCategories(View $view){

      $categories = Category::with(['posts' => function ($query){
        $query->published();
      }])->orderBy('title','desc')->get();

      $view->with('categories',$categories);
  }
  private function composePopularPosts(View $view){
    $popularPosts = Post::published()->popular()->take(4)->get();

    $view->with('popularPosts', $popularPosts);
  }
}



 ?>
