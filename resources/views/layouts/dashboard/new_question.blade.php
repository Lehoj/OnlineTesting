@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('Add a New Question') }}</strong></div>

                    <div class="card-body">
                        <form action="/tests/{{ $test->id }}/questions" method="post">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="col">
                                    <label>Question</label>
                                    <input name="question[question]" type="text" class="form-control @error('question.question') is-invalid @enderror" autocomplete="off" value="{{ old('question.question') }}" placeholder="Enter a test question">
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
                                            <legend>Choices / Answers</legend>
                                        </fieldset>

                                    <div class="field_wrapper form-group">
                                        <div class="col">
                                            <label>Option #1</label>
                                                <input name="answers[][answer]" type="text" class="form-control @error('answers.0.answer') is-invalid @enderror form-control2" autocomplete="off" value="{{ old('answers.0.answer') }}" placeholder="Enter Option">
                                                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                                                @error('answers.0.answer')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Fill the answer option OR delete current one.</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <button type="submit" class="btn btn-primary btn-menu">{{ __('Add question') }}</button>

                        </form>

                        <!--<fieldset>
                            <legend>Question Options:</legend>
                            <div class="field_wrapper form-group">
                                <label for="inputEmail" class="col-md-4 control-label">1</label>
                                <div class="col-md-6">
                                    <input id="inputEmail" type="text" name="field_name[]" value=""/>
                                    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
                                </div>
                            </div>
                        </fieldset>-->

                        <!--<div class="field_wrapper form-group">
                            <div class="col">
                                <label>Option #1</label>
                                <input name="answers[][answer]" type="text" class="form-control form-control2" autocomplete="off" value="" placeholder="Enter Option">
                                <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>-->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                var maxField = 10; //Input fields increment limitation
                                var addButton = $('.add_button'); //Add button selector
                                var wrapper = $('.field_wrapper'); //Input field wrapper
                                var y = 2;
                                var x = 1; //Initial field counter is 1
                                var pocet = 2;

                                var labelHTML = "";
                                var fieldHTML = "";

                                $(addButton).click(function(){ //Once add button is clicked
                                    if(x < maxField){ //Check maximum number of input fields
                                        labelHTML = '<label for="inputEmail' + x + '" class="col-md-4 control-label">'+ 'Option #' + pocet + '</label>';
                                        fieldHTML = '<div class="col"><input id="inputEmail' + x + '" type="text" name="answers[][answer]" class="form-control form-control2" autocomplete="off" placeholder="Enter Option"/><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fas fa-minus"></i></a></div>'; //New input field html

                                        pocet++;
                                        x++; //Increment field counter
                                        $(wrapper).append(labelHTML, fieldHTML); // Add field html
                                        y++;
                                    }
                                });
                                $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
                                    e.preventDefault();
                                    $(this).parent('div').prev().remove(); //Remove previous field html
                                    $(this).parent('div').remove(); //Remove field html
                                    pocet--;
                                    x--; //Decrement field counter
                                });
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
@endsection
