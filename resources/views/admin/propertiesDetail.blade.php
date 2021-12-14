<!DOCTYPE HTML>
<html>
<head>
    <title>Home </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/<?php echo url('/'); ?>/images/Logo-main.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ URL::asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index" class="logo">
                <span class="fa fa-home"></span> <span class="title">Real Estate</span></a>

            <a class="sign-up" href="{{ route('auth.logout') }}">Logout</a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>

    </header>

    <!-- Menu -->
    <nav id="menu">

        <h2>Menu</h2>
        <ul>
            <li><a href="{{ url('admin/index') }}" class="active">Home</a></li>

            <li><a href="{{ url('admin/properties') }}">Properties</a></li>

            <li><a href="{{ url('admin/blogs') }}">Blog</a></li>

        <li>
            <a href="#" class="dropdown-toggle">About</a>

            <ul>
                <li><a href="{{ url('admin/aboutUs') }}">About Us</a></li>
                <li><a href="{{ url('admin/roles') }}">Team</a></li>
            </ul>
        </li>
        <li><a href="{{ url('admin/contactUs') }}">Contact Us</a></li>

        <li><a href="{{ url('admin/faqs') }}">Faqs</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>Properties</h1>

            <div class="image main">
                <img src="{{ url('/images/banner-image-1-1920x500.jpg') }}" class="img-fluid" alt="" />
            </div>

            <form action="#">
                <div class="fields">
                    <div class="field quarter">
                        <label>Type</label>

                        <input type="text" readonly="" value="">
                    </div>

                    <div class="field quarter">
                        <label>Bedroom</label>

                        <input type="text" readonly="" value="4">
                    </div>

                    <div class="field quarter">
                        <label>Bathroom</label>

                        <input type="text" readonly="" value="4">
                    </div>

                    <div class="field quarter">
                        <label>Floor area</label>

                        <input type="text" readonly="" value="80 sq m">
                    </div>

                    <div class="field quarter">
                        <label>Country</label>

                        <input type="text" readonly="" value="United Kingdom">
                    </div>

                    <div class="field quarter">
                        <label>State</label>

                        <input type="text" readonly="" value="London">
                    </div>

                    <div class="field quarter">
                        <label>City</label>

                        <input type="text" readonly="" value="London">
                    </div>

                    <div class="field quarter">
                        <label>Zip code</label>

                        <input type="text" readonly="" value="SE7 8HW">
                    </div>
                </div>
            </form>



        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Contact Us</h2>
                <div id="main">
                    <div class="inner">
                        <span class="image main"><img src="{{ url('/images/map.jpg') }}" alt="" /></span>
                    </div>
                </div>
            </section>
            <section>
                <h2>Contact Info</h2>

                <ul class="alt">
                    <li><span class="fa fa-envelope-o"></span> <a href="#">contact@Lakefront.com</a></li>
                    <li><span class="fa fa-phone"></span> +1 123 445 1231 </li>
                    <li><span class="fa fa-map-pin"></span>123 Lakefront Avnue, Ontario, Canada</li>
                </ul>

                <h2>Follow Us</h2>

                <ul class="icons">
                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>
            </section>

            <ul class="copyright">
                <li>Copyright © 2021 Lakefront Homelookers </li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts realestate\resources\assets -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>

</body>
</html>
