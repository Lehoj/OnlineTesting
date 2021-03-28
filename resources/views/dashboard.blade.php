@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 style="text-align: center">Welcome to the dashboard, <strong>{{ Auth::user()->name }}</strong>.</h3>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header"><strong>{{ __('My tests') }}</strong></div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($tests or '' as $test)
                            <li class="list-group-item">
                                <a href="{{ $test->path() }}">{{ $test->title }}</a>

                                <div class="mt-2">
                                    <small><strong>Test URL</strong></small>
                                    <p>
                                        <a href="{{ $test->publicPath() }}">{{ $test->publicPath() }}</a>
                                    </p>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
