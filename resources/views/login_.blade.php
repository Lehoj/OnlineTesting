<!DOCTYPE html>
<html lang="en">
<body>

<head>
    <!-- Header -->
    @include('layouts.includes.header')
</head>

<!-- Start your project here-->

<!-- Navbar -->
@include('layouts.includes.navbar_register_login')

<!-- Full Page Intro -->
@include('layouts.includes.intro_login')

<!-- End your project here-->

<script>// Animations init
    new WOW().init();</script>

@include('layouts.includes.scripts')

</body>
</html>
