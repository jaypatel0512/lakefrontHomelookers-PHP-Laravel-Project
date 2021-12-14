<!DOCTYPE HTML>
<html>
<head>
    <title>Home </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/images/Logo-main.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/faqs.css') }}" />
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
{{--        <h2>{{ $LoggedUserInfo['name'] }} | {{ $LoggedUserInfo['email'] }}</h2>--}}

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
    <div class="main">

        <h2 class="titleFaq">Real Estate Faqs</h2>
        @foreach ($faqs as $faq)
        <button class="accordion">{{ $faq->question }}</button>
        <div class="panel">
            <p> {{ $faq->answer }}</p>
        </div>
        @endforeach




    </div>


    <!-- Footer -->
    <footer id="footer">
        <div class="inner">

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
<script src="{{URL::asset('assets/js/faqs.js')}}"></script>
<script src="{{URL::asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('https://use.fontawesome.com/30c21ac8e0.js')}}"></script>
<link href="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}" rel="stylesheet">


</body>
</html>
