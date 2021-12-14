<!DOCTYPE HTML>
<html>
<head>
    <title>Home </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/images/Logo-main.jpg') }}" />
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
            <a href="{{ URL('homepage') }}" class="logo">
                <span class="fa fa-home"></span> <span class="title">Real Estate</span></a>
            <a class="sign-up" href="{{ url('auth/register') }}" >Sign Up</a><a class="sign-up" href="{{ url('auth/login') }}">Sign In</a></span>

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

            <li><a href="{{ url('admin/blog') }}">Blog</a></li>

            <li><a href="{{ url('admin/blog') }}">Blog</a></li>

            <li>
                <a href="#" class="dropdown-toggle">About</a>

                <ul>
                    <li><a href="{{ url('admin/aboutUs') }}">About Us</a></li>
                    <li><a href="{{ url('admin/team') }}">Team</a></li>
                </ul>
            </li>
            <li><a href="{{ url('admin/contactUs') }}">Contact Us</a></li>

            <li><a href="{{ url('admin/faqs') }}">Faqs</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ url('/images/slider-image-1-1920x700.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/images/slider-image-2-1920x700.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url('/images/slider-image-3-1920x700.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>
        <br>

        <!-- Estimated Price Section -->
        <div id="get-touch">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-1">
                        <h3>Find estimated cost for your home</h3>
                        <p>Get started today and complete our form to request your free estimate</p>
                    </div>
                    <div class="col-xs-12 col-md-4 text-center"><a href="{{ url('admin/calculate') }}" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6"> <img src="{{ url('/images/about.jpg') }}" class="img-responsive" alt=""> </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="about-text">
                            <h2>Who We Are</h2>
                            <p>Welcome to a boutique approach to your Real Estate needs. We re-define current market strategy and run a highly unique and forward thinking Real Estate consulting firm central to your goals and needs. We Are Home is run on the fuel of unique properties and years of diligent experience in the Real Estate industry. We have been in the thick of it for our clients and have negotiated successful deals in investing, buying, selling and creating real estate wealth.</p>
                            <h3>Why Choose Us?</h3>
                            <div class="list-style">
                                <ul>
                                    <li>Years of Experience</li>
                                    <li>Fully Insured</li>
                                    <li>Cost Control Experts</li>
                                    <li>100% Satisfaction Guarantee</li>
                                </ul>
                                <ul>
                                    <li>Free Consultation</li>
                                    <li>Satisfied Customers</li>
                                    <li>Home Management</li>
                                    <li>Affordable Pricing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner">
            <!-- About Us -->
            <header id="inner">
                <h1>Find your new home to live!</h1>
                <p>Everything you need to know about houses in canada. Lakefront Homelookers is real estate and rental marketplace. It’s dedicated to empowering consumers with data, inspiration and knowledge, and connecting them with the best local real estate professionals. It has quality information about buying, renting, financing, remodeling, etc. </p>
            </header>

            <br>

            <h2 class="h2">Testimonials</h2>

            <div class="row">
                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Thank you so much to Lakefront! I didn't know how I was going to sell my house, it needed some work and had tried to list with a realtor with no success. I found Adrian online, called, they went out of their way and beyond. I can start over fresh now! Thanks again."</em></p>

                    <p><strong> - Smit Dave</strong></p>
                </div>

                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Working with Lakefront was a great experience, Lakefront walk us through the entire process which made it easy because we never sold a house before. Lakefront was able to close and have our check in hand within 10 business days."</em></p>

                    <p><strong>- Harsh Patel</strong> </p>
                </div>
            </div>

            <p class="text-center"><a href="#">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

            <br>

            <h2 class="h2">Blog</h2>

            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="{{ url('/images/blog-1-720x480.jpg') }}" class="img-fluid" alt="" />

                    <h2 class="m-n"><a href="#">How To Select A Realtor?</a></h2>

                    <p> Ritesh Prajapati &nbsp;|&nbsp; 22/01/2021 11:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="{{ url('/images/blog-2-720x480.jpg') }}" class="img-fluid" alt="" />

                    <h2 class="m-n"><a href="#">Checking Out New Home Options On The Internet Searches.</a></h2>

                    <p> Anna Benarji &nbsp;|&nbsp; 02/02/2020 09:22</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="{{ url('/images/blog-3-720x480.jpg') }}" class="img-fluid" alt="" />

                    <h2 class="m-n"><a href="#">Do I Need A Real Estate Agent To Buy My First Home?</a></h2>

                    <p> Smit Patel &nbsp;|&nbsp; 27/10/2021 10:45</p>
                </div>
            </div>

            <p class="text-center"><a href="blog.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


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
