
@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Welcome To Tech Blogs</h1>
        <a href="{{route('b.create')}}"><h3>create</h3></a>
    </div>

    <div class="container row justify-content-center">
        @foreach ($blogs as $blog)

        <div class="row mb-3">
            <div  class="col-md-4 col-form-label text-md-end">
                <div><a href="{{route('b.show', $blog->id)}}"><h3>{{$blog->title}}</h3></a></div>
            </div>

            
        </div>


        <div class="row mb-3">
            <div  class="col-md-4 col-form-label text-md-end">
                <div><h3>{{$blog->body}}</h3></div>
            </div>

            
        </div>
        
            
        @endforeach
    </div>





@endsection