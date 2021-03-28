<!DOCTYPE html>
<html lang="en">
<body>

<head>
    <!-- Header -->
    @include('layouts.includes.header')
</head>

<!-- Start your project here-->

<!-- Navbar -->
@include('layouts.includes.navbar_index')

<!-- Full Page Intro -->
@include('layouts.includes.intro_index')


<section id="about" class="mybg">

    <div class="container">


        <div class="row">

            <!--Grid column-->


            <!--Form-->
            <div class="col-xl-4 mt-10"> <!--da do stredu a zosiri-->
                <div class="card wow fadeInRight " data-wow-delay="0.3s" >
                    <div class="card-body">

                        <!--Header-->
                        <div class="text-center">
                            <div class="zoom">

                                <img class="card-img-top" src="{{ URL::to('images/tablet.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title black-text">Electronic devices</h5><hr class="hr-light">
                                <p class="card-text black-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                        <!--Body-->



                    </div>
                </div>
            </div>

            <div class="col-xl-4 mt-10"> <!--da do stredu a zosiri-->
                <div class="card wow fadeInRight " data-wow-delay="0.3s" >
                    <div class="card-body">

                        <!--Header-->
                        <div class="text-center">
                            <div class="zoom">
                                <img class="card-img-top" src="{{ URL::to('images/multiple.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title black-text">Multiple choises</h5><hr class="hr-light">
                                <p class="card-text black-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                        <!--Body-->



                    </div>
                </div>
            </div>
            <div class="col-xl-4 mt-10 mb-10"> <!--da do stredu a zosiri-->
                <div class="card wow fadeInRight " data-wow-delay="0.3s" >
                    <div class="card-body">

                        <!--Header-->
                        <div class="text-center">
                            <div class="zoom">
                                <img class="card-img-top" src="{{ URL::to('images/free.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title black-text">Free</h5><hr class="hr-light">
                                <p class="card-text black-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>
                        </div>
                        <!--Body-->



                    </div>
                </div>
            </div>


            <!--/.Form-->
        </div>

    </div>


</section>


<section id="Support" class="bg-light vyska">



</section>


<section id="FAQ" class="bg-light">
    <svg  class="wawe" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5E6FC7" fill-opacity="1" d="M0,192L60,176C120,160,240,128,360,117.3C480,107,600,117,720,138.7C840,160,960,192,1080,192C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <div class="container">




        <div class="faqHeader">General questions</div>
        <div class="card mb-2">
            <h4 class="card-header" id="oneB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="one" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="twoB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="two" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2 ">
            <h4 class="card-header" id="threeB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="three" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="fourB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="four" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="fiveB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="five" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="sixB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="six" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="sevenB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="seven" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="eightB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="eight" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="nineB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="nine" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <h4 class="card-header" id="tenB">
                <div class="row ma">
                    <div class="mc">
                        <a>I want to buy a theme - what are the steps?</a>
                    </div>
                    <div class="m">
                        <i class="fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </h4>
            <div>
                <div id="ten" class="card-block">
                    Buying a theme on <strong>PrepBootstrap</strong> is really simple. Each theme has a live preview.
                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                    <br />
                    Once the transaction is complete, you gain full access to the purchased product.
                </div>
            </div>
        </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5E6FC7" fill-opacity="1" d="M0,192L60,176C120,160,240,128,360,117.3C480,107,600,117,720,138.7C840,160,960,192,1080,192C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</section>

<script type="text/javascript">

    $("#oneB").on('click', function() {
        $("#one").fadeToggle();
        $("#two,#three,#four,#five,#six,#seven,#eight,#nine,#ten").fadeOut();
    });
    $("#twoB").on('click', function() {
        $("#two").fadeToggle();
        $("#one,#three,#four,#five,#six,#seven,#eight,#nine,#ten").fadeOut();
    });
    $("#threeB").on('click', function() {
        $("#three").fadeToggle();
        $("#one,#two,#four,#five,#six,#seven,#eight,#nine,#ten").fadeOut();
    });
    $("#fourB").on('click', function() {
        $("#four").fadeToggle();
        $("#one,#two,#three,#five,#six,#seven,#eight,#nine,#ten").fadeOut();
    });
    $("#fiveB").on('click', function() {
        $("#five").fadeToggle();
        $("#one,#two,#three,#four,#six,#seven,#eight,#nine,#ten").fadeOut();
    });
    $("#sixB").on('click', function() {
        $("#six").fadeToggle();
        $("#one,#two,#three,#four,#five,#seven,#eight,#nine,#ten").fadeOut();
    });
    $("#sevenB").on('click', function() {
        $("#seven").fadeToggle();
        $("#one,#two,#three,#four,#five,#six,#eight,#nine,#ten").fadeOut();
    });
    $("#eightB").on('click', function() {
        $("#eight").fadeToggle();
        $("#one,#two,#three,#four,#five,#six,#seven,#nine,#ten").fadeOut();
    });
    $("#nineB").on('click', function() {
        $("#nine").fadeToggle();
        $("#one,#two,#three,#four,#five,#six,#seven,#eight,#ten").fadeOut();
    });
    $("#tenB").on('click', function() {
        $("#ten").fadeToggle();
        $("#one,#two,#three,#four,#five,#six,#seven,#eight,#nine").fadeOut();
    });

</script>






<section id="contact" class="mybg">

    <div class="container mb-10">
        <!--Grid row-->
        <div class="col-lg-8 mx-auto ">

            <!--Form-->

            <div class="card" data-wow-delay="0.3s" >
                <div class="card-body body1 ">

                    <!-- Default form contact -->
                    <form class="text-center " >

                        <p class="h4 mb-4" style="color:white">Contact us</p>
                        <hr class="hr-light">
                        <!-- Name -->
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

                        <!-- Email -->
                        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

                        <!-- Subject -->
                        <label style="color:white">Subject</label>
                        <select class="browser-default custom-select mb-4">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>Feedback</option>
                            <option value="2">Report a bug</option>
                            <option value="3">Feature request</option>
                            <option value="4">Help</option>
                        </select>

                        <!-- Message -->
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                        </div>

                        <div class="btn-group">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <button class="btn btn-red btn-block" id="myB" ><i class="fas fa-trash-alt"></i> Trash</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <button class="btn btn-indigo btn-block" type="submit"><i class="far fa-paper-plane"></i> Send</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>

        </div>


    </div>

</section>

<!-- Copyright Section-->

<div class="bg-footer py-4 text-center text-white">
    <div class="container"><small>©2020 UCM</small></div>
</div>

<a id="back-to-top" href="#" class="btn custom-btn btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<!-- End your project here-->
<script type="text/javascript">

    $(".scroll").on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: ($(target).offset().top)
        }, 1000);
        $(".navbar-collapse").collapse('hide');



    });

    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });



    $('#myB').click(function(){
        event.preventDefault();
        document.getElementById('exampleFormControlTextarea2').value = "";
        document.getElementById('defaultContactFormName').value = "";
        document.getElementById('defaultContactFormEmail').value = "";
    });
</script>

@include('layouts.includes.scripts')

</body>
</html>
