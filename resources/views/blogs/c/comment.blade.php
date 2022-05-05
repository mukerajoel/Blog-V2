@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create a Commment') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('c.save') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="body" class="col-md-4 col-form-label text-md-end">{{ __('Body') }}</label>

                            <div class="col-md-6">
                                <input id="body" type="textarea" class="form-control @error('body') is-invalid @enderror" name="body" >

                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="question_id" value="">


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Comment') }}
                                </button>

                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
