@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Blogs') }}</div>

                <div> <a href="{{ route('b.create')}}"> create </a> </div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to your Dashboard!') }}
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h1>Welcome To Tech Blogs</h1>
    </div>

    {{-- <div class="row justify-content-center">
        @foreach ($blogs as $blog)

        <div>{{$blog->title}}</div>

        
            
        @endforeach
    </div> --}}

</div>
@endsection
