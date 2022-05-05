@extends('layouts.app')

@section('content')


    <div class="card ">
        <div class="card-body">
            <div class="justify-content-center" >{{ $blogs->title}}</div>
        <div class="justify-content-center" >{{ $blogs->body}}</div>
        <hr>
        <div>
            <a href="{{route('comment')}}">comment</a>
        </div>
            

    <div>
        <button><a href="">Edit</a></button>
        <form method="POST" action="{{ route('b.destroy', $blogs->id) }}">
            @csrf
            @method("DELETE")
            <button type="submit">
                Delete
            </button>
        </form>
    </div>

        </div>
    </div>        
        

@endsection