@extends('admin.layouts.header')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="float-start"> All setting icon </h3>
            <a href="{{ route('icons.create') }}" class="btn btn-outline-primary float-end"> Create </a>
        </div>
        <div class="card-body pt-4 col-md-10 mx-auto">
            <table class="table table-bordered">
                <thead>
                    <tr> 
                        <th scope="col">Image</th>
                        <th scope="col">Url</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($icons as $icon)
                    <tr>
                        <td align="center">
                            <img src="{{asset($icon->img)}}" class="d-block img-fluid" width="60" height="40">
                        </td>
                        <td align="center"> {{ $icon->url }}</td>
                        <td class="d-flex"> 
                            <a href="{{ route('icons.edit',$icon->id) }}" class="btn btn-outline-primary mr-2"> edit </a>
                            
                            <form action="{{ route('icons.delete',$icon->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="old_img" value="{{ $icon->img }}">
                                <button class="btn btn-outline-danger"> delete</button>
                            </form>
                            
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection