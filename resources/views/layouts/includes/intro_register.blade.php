<div class="view" style="background-image: url('{{ asset('images/11.jpg')}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient align-items-center">
        <!-- Content -->
        <div class="container">
            <!--Grid row-->
            <div class="center">

                <div class="row mt-15">
                    <div class="col d-flex justify-content-center">

                        <!--Form-->
                        <form method="POST" action="{{ route('register') }}" class="col-sm-8">
                            @csrf
                        <!--<div class="col-sm-8">-->
                            <div class="card wow fadeInRight " data-wow-delay="0.3s" >
                                <div class="card-body body1">

                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fas fa-user white-text"></i>New Teacher Account</h3>
                                        <hr class="hr-light">
                                    </div>

                                    <!--Body-->

                                    <!-- User full name -->
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- First name -->
                                            <input type="text" id="defaultRegisterFormFirstName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="First name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                           <input type="text" id="defaultRegisterFormFirstName" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Last name">

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
                                        <input type="email" id="defaultRegisterFormEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                             </span>
                                        @enderror

                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- Password -->
                                            <input type="password" id="defaultRegisterFormPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="col">
                                            <!-- Repeat Password -->
                                            <input type="password" id="defaultRegisterFormPassword" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- Type -->
                                            <select class="browser-default custom-select" name="type" value="{{ old('type') }}" required>
                                                <option selected disabled>Type</option>
                                                <option value="Elementary school">Elementary school</option>
                                                <option value="High school">High school</option>
                                                <option value="University">University</option>
                                            </select>
                                        </div>
                                         <div class="col">
                                             <!-- Country -->
                                             <input type="text" id="defaultRegisterFormFirstName" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus placeholder="Country">
                                        </div>
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- Position -->
                                            <input type="text" id="defaultRegisterFormFirstName" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus placeholder="Position">
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button class="btn btn-indigo">{{ __('Register') }}</button>
                                    </div>
                                    <br>
                                    <div class="inline-ul text-center">
                                        <u><a href="{{ url('login_') }}" style="color:white">I have account. Log in.</a></u>
                                    </div>
                                </div>
                            </div>
                            <!--/.Form-->
                       <!-- </div> -->
                        </form>
                    </div>
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
</div>
