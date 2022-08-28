@extends('blog.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="alert alert-info">
            <p class="text-center"> Nothing to Found </p>

          </div>

          @foreach ($posts as $post)
          <article class="post-item">
              <div class="post-item-image">
                  <a href="{{route('post.show',$post->id)}}">
                      <img src="{{$post->image_url}}" alt="" height="400" class="img-fluid">
                  </a>
              </div>
              <div class="post-item-body">
                  <div class="padding-10">
                      <h2><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h2>
                      <p>{{$post->excerpt}}</p>
                  </div>

                  <div class="post-meta padding-10 clearfix">
                      <div class="pull-left">
                          <ul class="post-meta-group">
                              <li><i class="fa fa-user"></i><a href="{{route('author.posts',$post->author->name)}}"> {{$post->author->name}}</a></li>
                              <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                              <li><i class="fa fa-tags"></i><a href="{{route('category.posts',$post->category->slug)}}"> {{$post->category->title}}</a></li>
                              <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                          </ul>
                      </div>
                      <div class="pull-right">
                          <a href="post.html">Continue Reading &raquo;</a>
                      </div>
                  </div>
              </div>
          </article>
          @endforeach



            <nav>
              {{$posts->links()}}
            </nav>
        </div>
        @include('blog/layouts/sidebar')
    </div>
</div>
@endsection
