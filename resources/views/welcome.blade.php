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
        <seciton class="tranding-topic mt-4">

        </seciton>

        {{-- END TRENDING TOPICE  --}}
    </main>
    {{-- END MAIN  --}}
@endsection