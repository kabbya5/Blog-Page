<div class="col-md-4">
    <aside class="right-sidebar">
        <div class="search-widget">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-lg btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div><!-- /input-group -->
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Categories</h4>
            </div>
            <div class="widget-body">
                <ul class="categories">
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Web Development</a>
                        <span class="badge pull-right">10</span>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Web Design</a>
                        <span class="badge pull-right">10</span>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> General</a>
                        <span class="badge pull-right">10</span>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> DIY</a>
                        <span class="badge pull-right">10</span>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Facebook Development</a>
                        <span class="badge pull-right">10</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Popular Posts</h4>
            </div>
            <div class="widget-body">
                <ul class="popular-posts">
                  @foreach ($popularPosts as  $post)
                      <li>
                          <div class="post-image">
                              <a href="/show">
                                  <img src="{{asset($post->image_url)}}" class="img-fluid" width="220" height="100">
                              </a>
                          </div>
                          <div class="post-body">
                              <h6><a href="/show"> {{$post->title}}</a></h6>
                              <div class="post-meta">
                                  <span>{{$post->date}}</span>
                              </div>
                          </div>
                      </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Tags</h4>
            </div>
            <div class="widget-body">
                <ul class="tags">
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">Codeigniter</a></li>
                    <li><a href="#">Yii</a></li>
                    <li><a href="#">Laravel</a></li>
                    <li><a href="#">Ruby on Rails</a></li>
                    <li><a href="#">jQuery</a></li>
                    <li><a href="#">Vue Js</a></li>
                    <li><a href="#">React Js</a></li>
                </ul>
            </div>
        </div>
    </aside>
</div>
