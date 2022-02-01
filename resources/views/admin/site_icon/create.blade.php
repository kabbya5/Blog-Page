@extends('admin.layouts.header')
@section('content')
<div class="container">
    <div class="card col-md-8 mx-auto">
        <div class="card-header p-3">
            <h4 class="text-center text-info float-start"> Add Social Icon and Link </h2>
            <a href="{{ route('icons') }}" class="btn btn-outline-info float-end"> all icons</a>
        </div>
        <div class="card-body py-5">
            <form action="{{ route('icons.store') }}"  enctype="multipart/form-data" method="post">
                @csrf
                @include('admin.site_icon._form')
            </form>
        </div>
    </div>
</div>
    
@endsection