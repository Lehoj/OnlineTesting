@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('A New Test') }}</strong></div>

                    <div class="card-body">
                        <form action="/tests" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" autocomplete="off" placeholder="Enter a test title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-row mb-4">
                                    <div class="col">
                                        <label>Description</label>
                                        <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" autocomplete="off" placeholder="Enter a test description">

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            <button type="submit" class="btn btn-primary btn-menu">{{ __('Create Test') }}</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
