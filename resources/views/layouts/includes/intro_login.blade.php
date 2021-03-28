<div class="view" style="background-image: url('{{ asset('images/101.jpg')}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient align-items-center ">
        <!-- Content -->
        <div class="container">
            <!--Grid row-->
            <div class="center">

                <div class="row mt-8 " >
                    <div class="col d-flex justify-content-center">

                        <!--Form-->
                        <form method="POST" action="{{ route('login') }}" class="col-sm-6">
                            @csrf
                        <!-- <div class="col-sm-6"> -->
                            <div class="card wow fadeInRight " data-wow-delay="0.3s" >
                                <div class="card-body">

                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fas fa-user white-text"></i>Teacher Account</h3>
                                        <hr class="hr-light">
                                    </div>

                                    <!--Body-->
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <!-- email -->
                                            <input type="email" id="defaultRegisterFormEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your email">

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
                                            <input type="password" id="defaultRegisterFormPassword" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                                            @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-around">
                                        <div>
                                            <!-- Remember me -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                                <label class="custom-control-label white-text" for="defaultLoginFormRemember">Remember me</label>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Forgot password -->
                                            <a href="" class="orange-text">Forgot password?</a>
                                        </div>
                                    </div>

                                </div>

                                <!--<div class="d-flex justify-content-around">
                                    <div>
                                        Remember me
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                            <label class="custom-control-label white-text" for="defaultLoginFormRemember">Remember me</label>
                                        </div>
                                    </div>
                                    <div>
                                         Forgot password
                                        <a href="" class="orange-text">Forgot password?</a>
                                    </div>
                                </div>-->

                                <div class="text-center mt-4">
                                    <button class="btn btn-indigo">{{ __('Login') }}</button><br><br>
                                </div>

                                <div class="inline-ul text-center">

                                    <p class="white-text">Not a member?
                                        <a href="{{ url('register_') }}" class="orange-text">Register</a>
                                    </p>
                                    <!--<p class="white-text">or sign in with:<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>or <a href="#" class="mx-2" role="button"><i class="fab fa-google red-text"></i></a></p>-->
                                    <br><br>
                                </div>
                            </div>
                        <!-- </div> -->
                        </form>
                    </div>
                    <!--/.Form-->
                </div>
            </div>
        </div>
    </div>
    <!--Grid row-->
</div>
