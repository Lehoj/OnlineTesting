@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('Profile Edit') }}</strong></div>
                    <div class="card-body">

                    <form method="post" action="route('users.edit', $user)">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}

                        <label>Avatar</label>
                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- Profile Avatar -->
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- First name -->
                                <label>First name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" autocomplete="name" autofocus placeholder="First name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col">
                                <!-- Last name -->
                                <label>Last name</label>
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ auth()->user()->lastname }}" autocomplete="lastname" autofocus placeholder="Last name">

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- email -->
                                <label>Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}" autocomplete="email" placeholder="Your email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- Type -->
                                <label>Type</label>
                                <select class="browser-default custom-select" name="type" value="" >
                                    <option selected disabled>{{ auth()->user()->type }}</option>
                                    <option value="Elementary school">Elementary school</option>
                                    <option value="High school">High school</option>
                                    <option value="University">University</option>
                                </select>
                            </div>
                            <div class="col">
                                <!-- Country -->
                                <label>Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ auth()->user()->country }}" autocomplete="country" autofocus placeholder="Country">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- Position -->
                                <label>Position</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ auth()->user()->position }}" autocomplete="position" autofocus placeholder="Position">
                            </div>
                        </div>

                        <!--<input type="text" name="name"  value="" placeholder="First name"/>

                        <input type="email" name="email"  value="" placeholder="Email"/>

                        <input type="password" name="password" placeholder="Password" />

                        <input type="password" name="password_confirmation" placeholder="Repeat password"/>-->

                            <button type="submit" class="btn btn-primary btn-menu">{{ __('Update Profile') }}</button>
                        </form>
                    </div>
                </div>

                    <div class="card mt-4">
                        <div class="card-header"><strong>{{ __('Password Change') }}</strong></div>
                            <div class="card-body">
                                <form method="post">
                                    <label>New password</label>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- Password -->
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="New password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                            @enderror

                                        </div>

                                        <div class="col">
                                            <!-- Repeat Password -->
                                            <input type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Repeat password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-menu">{{ __('Update Password') }}</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
