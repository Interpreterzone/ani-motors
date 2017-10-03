<!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/slick-team-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
    @yield('css')
</head>
<body>

<!--HEADER START-->

@include('client.essential.header')

<!--HEADER END-->

<!--CUSTOM START-->
@yield('custom')
<!-- custom section for adding -->

<!--FOOTER START-->

@include('client.essential.footer')

<!--FOOTER END-->

<div class="footer-bottom">
    <div class="container">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
            <div class="footer_copyright">
                <p> © Copyright, All Rights Reserved.</p>
                <div class="credits">
                    <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Ani Motors
                    -->
                    Designed by <a href="https://bootstrapmade.com/">Bootstrap Themes</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('client/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('client/js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('client/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('client/js/jquery.mixitup.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::asset('client/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('client/js/custom.js') }}"></script>
@yield('js')

</body>
</html>