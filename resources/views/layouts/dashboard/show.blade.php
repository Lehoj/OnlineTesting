@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('Test: ') }}</strong> {{ $test->title }} </br>
                    <strong>{{ __('Description: ') }}</strong> {{ $test->description }}
                </div>

                <div class="card-body">
                    <a href="/tests/{{ $test->id }}/questions/create" class="btn btn-primary btn-menu">{{ __('New Question') }}</a>
                    <a href="/testing/{{ $test->id }}-{{ Str::slug($test->title) }}" class="btn btn-primary btn-menu">{{ __('Publish') }}</a>
                </div>

                <div class="card-footer d-flex justify-content-lg-between">

                    <a href="/tests/edit/{{ $test->id }}" class="btn btn-sm btn btn-outline-secondary">Edit test</a>

                    <form action="/tests/{{ $test->id }}/create/@foreach($test->questions as $question)  {{ $question->id  }} @endforeach" method="post">
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete test</button>
                    </form>

                </div>

                </div>
                @foreach($test->questions as $key =>$question)
                <div class="card mt-4">
                    <div class="card-header"><strong>{{ $key + 1 }} </strong>{{ $question->question }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                                <li class="list-group-item d-flex justify-content-between">
                                    <div>{{ $answer->answer }}</div>
                                    @if($question->responses->count())
                                        <div>{{ intval($answer->responses->count() * 100 / $question->responses->count()) }}%</div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-footer d-flex justify-content-lg-between">

                        <a href="/questions/edit/{{ $question->id }}" class="btn btn-sm btn btn-outline-secondary">Edit question</a>

                        <form action="/tests/{{ $test->id }}/questions/{{ $question->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete question</button>
                        </form>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
@endsection
