<?php
namespace App\Views\ViewShares;

use Illuminate\View\View;
use App\Models\Post;

class NavigationComposer{

  public function compose(View $view){
    $popular_posts = Post::published()->popular()->take(4)->get();
    return $view->with('popularPosts',$popular_posts);
  }
}



 ?>
