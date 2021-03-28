@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>{{ $test->title }}</h1>
                <h5><strong>Description:</strong> {{ $test->description }}</h5>
                    <p class="text-right">
                        <strong>Created:</strong> {{ $test->created_at }}<br>
                        <strong>Last updated:</strong> {{ $test->updated_at }}
                    </p>
                    <hr>
                <form action="/testing/{{ $test->id }}-{{ Str::slug($test->title) }}" method="post">
                    <div class="col mt-4">
                                @csrf
                            <h5>Student's information</h5>
                            <input name="studenttest[name]" type="text" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="off" value="{{ old('studenttest[name]') }}" placeholder="Full name / ID">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ 'You must fill this' }}</strong>
                            </span>
                            @enderror

                        </div>

                    <div class="col mt-2">
                        <input name="studenttest[email]" type="email" id="email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" value="{{ old('studenttest[email]') }}" placeholder="Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ 'You must fill this' }}</strong>
                            </span>
                        @enderror

                            <small class="text-danger">*Don't forget to fill up your information before taking the test.</small>
                    </div>
                <!--<hr>-->

                    @foreach($test->questions as $key => $question)
                        <div class="card mt-4">
                            <div class="card-header"><strong>{{ $key + 1 }} </strong>{{ $question->question }}</div>

                            <div class="card-body">
                                @error('responses.' . $key . '.answer_id')
                                    <small class="text-danger">{{ 'You must choose an answer' }}</small>
                                @enderror

                                <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        <label for="answer{{ $answer->id }}">
                                            <li class="list-group-item">
                                                <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}" {{ (old('responses.' . $key . '.answer_id') == $answer->id) ? 'checked' : ''}} value="{{ $answer->id }}" class="mr-2">
                                                {{ $answer->answer }}

                                                <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id }}">
                                            </li>
                                        </label>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary btn-menu mt-2">{{ __('Complete Test') }}</button>

                </form>
            </div>
        </div>
@endsection
