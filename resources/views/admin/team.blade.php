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
            <a href="{{ URL('login.home') }}" class="logo">
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
        <h2>{{ $LoggedUserInfo['name'] }} | {{ $LoggedUserInfo['email'] }}</h2>

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

        <div class="inner">
            <!-- About Us -->
            <header id="inner">
                <h1>Find your new home to live!</h1>
                <p>Everything you need to know about houses in canada. Lakefront Homelookers is real estate and rental marketplace. It’s dedicated to empowering consumers with data, inspiration and knowledge, and connecting them with the best local real estate professionals. It has quality information about buying, renting, financing, remodeling, etc. </p>
            </header>

            <br>

            <h2 class="h2">Featured Properties</h2>

            <!-- Vacations -->
            <section class="tiles">
                <article class="style1">
									<span class="image">
										<img src="{{ url('/images/product-1-720x480.jpg') }}" alt="" />
									</span>
                    <a href="#">
                        <h2>Semi-Detached</h2>

                        <p><del>119 000</del> <strong>117 000</strong></p>

                        <p>
                            House  &nbsp;|&nbsp;  For Sale  &nbsp;|&nbsp;  100 sq m  &nbsp;|&nbsp;  2010 <br>

                            <i class="fa fa-bed"></i> Bedrooms: 4  &nbsp;|&nbsp;
                            <i class="fa fa-tint"></i> Bathrooms: 4
                        </p>
                    </a>
                </article>
                <article class="style2">
									<span class="image">
										<img src="{{ url('/images/product-2-720x480.jpg') }}" alt="" />
									</span>
                    <a href="#">
                        <h2>Detached</h2>

                        <p><del>119 000</del> <strong>117 000</strong></p>

                        <p>
                            House  &nbsp;|&nbsp;  For Sale  &nbsp;|&nbsp;  100 sq m  &nbsp;|&nbsp;  2010 <br>

                            <i class="fa fa-bed"></i> Bedrooms: 4  &nbsp;|&nbsp;
                            <i class="fa fa-tint"></i> Bathrooms: 4
                        </p>
                    </a>
                </article>
                <article class="style3">
									<span class="image">
										<img src="{{ url('/images/product-3-720x480.jpg') }}" alt="" />
									</span>
                    <a href="#">
                        <h2>Town House</h2>

                        <p><del>119 000</del> <strong>117 000</strong></p>

                        <p>
                            House  &nbsp;|&nbsp;  For Sale  &nbsp;|&nbsp;  100 sq m  &nbsp;|&nbsp;  2010 <br>

                            <i class="fa fa-bed"></i> Bedrooms: 4  &nbsp;|&nbsp;
                            <i class="fa fa-tint"></i> Bathrooms: 4
                        </p>
                    </a>
                </article>

                <article class="style4">
									<span class="image">
										<img src="{{ url('/images/product-4-720x480.jpg') }}" alt="" />
									</span>
                    <a href="#">
                        <h2>Condo House</h2>

                        <p><del>119 000</del> <strong>117 000</strong></p>

                        <p>
                            House  &nbsp;|&nbsp;  For Sale  &nbsp;|&nbsp;  100 sq m  &nbsp;|&nbsp;  2010 <br>

                            <i class="fa fa-bed"></i> Bedrooms: 4  &nbsp;|&nbsp;
                            <i class="fa fa-tint"></i> Bathrooms: 4
                        </p>
                    </a>
                </article>

                <article class="style5">
									<span class="image">
										<img src="{{ url('/images/product-5-720x480.jpg') }}" alt="" />
									</span>
                    <a href="#">
                        <h2>bungalow</h2>

                        <p><del>119 000</del> <strong>117 000</strong></p>

                        <p>

                            House  &nbsp;|&nbsp;  For Sale  &nbsp;|&nbsp;  100 sq m  &nbsp;|&nbsp;  2010 <br>

                            <i class="fa fa-bed"></i> Bedrooms: 4  &nbsp;|&nbsp;
                            <i class="fa fa-tint"></i> Bathrooms: 4

                        </p>
                    </a>
                </article>

                <article class="style6">
									<span class="image">
										<img src="{{ url('/images/product-6-720x480.jpg') }}" alt="" />
									</span>
                    <a href="#">
                        <h2>Custom House</h2>

                        <p><del>119 000</del> <strong>117 000</strong></p>

                        <p>

                            House  &nbsp;|&nbsp;  For Sale  &nbsp;|&nbsp;  100 sq m  &nbsp;|&nbsp;  2010 <br>

                            <i class="fa fa-bed"></i> Bedrooms: 4  &nbsp;|&nbsp;
                            <i class="fa fa-tint"></i> Bathrooms: 4

                        </p>
                    </a>
                </article>
            </section>

            <p class="text-center"><a href="#">View Properties &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

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
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>

                        <div class="field half">
                            <input type="text" name="email" id="email" placeholder="Email" />
                        </div>

                        <div class="field">
                            <input type="text" name="subject" id="subject" placeholder="Subject" />
                        </div>

                        <div class="field">
                            <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                        </div>

                        <div class="field text-right">
                            <label>&nbsp;</label>

                            <ul class="actions">
                                <li><input type="submit" value="Send Message" class="primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
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
