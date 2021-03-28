@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('Update Question') }}</strong></div>

                    <div class="card-body">
                        <form action="/questions/edit/{{ $questions->id }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}

                            <input type="hidden" name="id" id="id" value="{{ $questions->id }}">

                            <div class="form-row mb-4">
                                <div class="col">
                                    <label>Question</label>
                                    <input name="question" type="text" class="form-control @error('question.question') is-invalid @enderror" autocomplete="off" value="{{ $questions->question }}" placeholder="Enter a test question">

                                    @error('question.question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="form-row mb-4">
                                    <div class="col">
                                        <fieldset>
                                            <legend>Choices</legend>
                                        </fieldset>

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label>Choice 1</label>
                                                    <input name="answers[][answer]" type="text" class="form-control @error('answers.0.answer') is-invalid @enderror" autocomplete="off" value="{{ old('answers.1.answer') }}" placeholder="Enter Choice 1">
                                                        @error('answers.0.answer')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                </div>
                                            </div>

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label>Choice 2</label>
                                                <input name="answers[][answer]" type="text" class="form-control @error('answers.1.answer') is-invalid @enderror" autocomplete="off" value="{{ old('answers.1.answer') }}" placeholder="Enter Choice 2">
                                                @error('answers.1.answer')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label>Choice 3</label>
                                                <input name="answers[][answer]" type="text" class="form-control @error('answers.2.answer') is-invalid @enderror" autocomplete="off" value="{{ old('answers.2.answer') }}" placeholder="Enter Choice 3">
                                                @error('answers.2.answer')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <label>Choice 4</label>
                                                <input name="answers[][answer]" type="text" class="form-control @error('answers.3.answer') is-invalid @enderror" autocomplete="off" value="{{ old('answers.3.answer') }}" placeholder="Enter Choice 4">
                                                @error('answers.3.answer')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <button type="submit" class="btn btn-primary btn-menu">{{ __('Update question') }}</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
