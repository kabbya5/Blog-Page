@extends('layouts.app')
@section('content')
    {{-- START HEADER --}}
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-3">
                    <a href="#">
                        <div class="brand d-flex align-items-center">
                            <img  class="brand__img" src="https://e7.pngegg.com/pngimages/777/224/png-clipart-blue-and-pink-logo-european-fashion-home-logo-purple-blue-thumbnail.png" alt="" srcset="" width="100" height="40">
                            <span class="brand__name"> My Blgo </span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-7 col-lg-9">
                   <div class="add">
                       <div class="d-flex justify-content-between">
                           <div class="d-flex">
                               <span class="add__span"> 33% OFF </span>
                                <h4 class="add__text">
                                    <sapn class="add__text-span">
                                        Pizza Hunt Spesical
                                    </sapn>                                 
                                </h4>
                           </div>
                           <a href="#" class="add__btn"> Hunt Now </a>
                       </div>
                       <img class="add__img" src="https://image.shutterstock.com/image-photo/pizza-ham-salami-mushrooms-ingredients-260nw-661996804.jpg" alt="">
                   </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END HEADER --}}

    {{-- INCLUDE NAVBAR  --}}
    <div class="container my-4">
        @include('layouts.navbar')
    </div>
    {{-- END NAVBAR --}}

    {{-- START MAIN  --}}
    <main>
         {{-- START POST  --}}
        <div class="section-post container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="content-first">
                        <div class="content-first__image-body">
                            <img src="{{asset( $firstPost->img )}}" alt="" class="img-fluid content-first__image-body__img">
                        </div>
                        <div class="content-first__description">
                            <a href="#" class="text-mute show"> Tecnology</a>
                            <a href="$" class="text-mute hide"> Tecnology </a>
                        </div>
                        <br>
                        <a href="#" class="text-mute content-first__title"> {{ $firstPost->title }}</a>   
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="">
                                <div class="content__image-body">
                                    <img src="{{asset( $post->img )}}" alt="" class="img-fluid content__image-body__img">
                                </div>
                                <div class="content__description">
                                    <a href="#" class="text-mute show"> Tecnology</a>
                                    <a href="$" class="text-mute hide"> Tecnology </a>
                                </div>
                                <a href="#" class="text-mute content__title"> {{ $post->title }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>   
                </div>
            </div> 
        </div>
        {{-- END POST  --}}
        {{-- START TRENDING TOPICE  --}}
        <div class="tranding-topic mt-4">
            <div class="container">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-div"> 
                            <img src="https://cdn.pixabay.com/photo/2017/05/30/03/58/blog-2355684_960_720.jpg" alt="">
                            <a href="" class="category_link py-1 text-center"> Travel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- END TRENDING TOPICE  --}}
        {{-- resent post --}}
        <div class="blog-layout">
            <div class="container">
                <div class="row">
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 col-md-10 col-lg-6 col-xl-4 mx-auto">
                        <div class="p-2">
                            <div class="d-flex align-items-center">
                                <div class="author_image">
                                    <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                </div>
                                <div class="author_info mx-3">
                                    <h2 class="author_info__name">
                                        Kevin Spacey
                                    </h2>
                                    <div class="">
                                        <a href="abcd" class="author_info__post-category"> Pc & Laptop <span> . </span></a>
                                        <span> 51 minutes ago </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="">
                                    <img src="https://akm-img-a-in.tosshub.com/aajtak/images/story/202111/raelavae-sixteen_nine_1.png?size=948:533" alt="" class="post_img img-fluid">
                                </a>   
                            </div>
                            <div class="post_details">
                                <a href="#" class="text-decoration-none text-dark">
                                    <h2 class="post-title"> {{ $firstPost->title }}</h2>
                                </a>
                                    
                                <div class="post-body">
                                    <p class="text">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="bookmark text-center"> <i class="fas fa-bookmark"></i> </a>
                                    </div>
                                    <div class="share">
                                        <a href="" class="bookmark text-center mr-3"> <i class="fas fa-share-alt"></i> </a>
                                        <a href="" class="ml-2 bookmark text-center bg-primary text-white" title="download pdf"> <i class="fas fa-upload"></i> </a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="" class="text-decoration-none">
                                        <a > <span> Comment: 36 </span> <span> Views: 21k </span></a>
                                    </div>
                                    <div class="shar">
                                        <a href=""> <i class="far fa-heart"></i> </i></a> <span> 12k</span>
                                    </div>
                                </div>
                                <div class="comment-input mt-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="author_image">
                                            <img src="https://images.unsplash.com/photo-1466112928291-0903b80a9466?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="img-fluid author_image__img">
                                        </div>
                                        <form action="" class="ml-5">
                                            <div class="form-group d-flex align-item-center">
                                                <textarea name="" id="" cols="40" rows="2" class="form-control"></textarea>
                                                <button type="submit" class="btn btn-outline-success"> <i class="fas fa-paper-plane"></i> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Resent Post --}}
    </main>
    {{-- END MAIN  --}}
@endsection
@section('script')
<script>
  $('.owl-carousel').owlCarousel({
    slideSpeed: 300,
    items:1,
    nav:true,
    paginationSpeed: 400,
    autoPlay: true,
    autoplaySpeed:100,
    margin:10,
    responsive:{
        0:{
            items:3
        },
        700:{
            items:4
        },
        1000:{
            items:6
        }
    }
}) 
 </script>  
@endsection
