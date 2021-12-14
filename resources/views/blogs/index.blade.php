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

    <!-- Menu -->
    <div id="main">
        <div class="inner">
            <h1>Blog</h1>

            <div class="image main">
                <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
            </div>
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-9">
                    <div class="row">


                    @foreach ($blogs as $blog)


                    <div class="col-sm-4 text-center">
                            <img src="/image/{{ $blog->image }}" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="#">{{ $blog->title }}</a></h2>

                            <p> {{ $blog->name }} &nbsp;|&nbsp; {{ $blog->time }}</p>
                        </div>

                @endforeach


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

                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <img src="{{ url('/images/blog-5-720x480.jpg') }}" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="#">How to apply for a Morgage to buy a house?</a></h2>

                            <p> Adam Cobel &nbsp;|&nbsp; 11/12/2020 22:40</p>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="{{ url('/images/blog-6-720x480.jpg') }}" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="#">Approch to the morage dealer to get best deals.</a></h2>

                            <p> Hannah Tatiang &nbsp;|&nbsp; 08/03/2019 21:24</p>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="{{ url('/images/blog-7-720x480.jpg') }}" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="#">Contact the real estate agent and get a perfect house.</a></h2>

                            <p> Nirav Shah &nbsp;|&nbsp; 17/12/2017 04:25</p>
                        </div>
                        

                        <div class="col-sm-4 text-center">
                            <img src="{{ url('/images/blog-8-720x480.jpg') }}" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="#">Minimize your down payment with different EMI options</a></h2>

                            <p> Keyur Modi &nbsp;|&nbsp; 12/12/2015 15:35</p>
                        </div>

                        <div class="col-sm-4 text-center">
                            <img src="{{ url('/images/blog-9-720x480.jpg') }}" class="img-fluid" alt="" />

                            <h2 class="m-n"><a href="#">Search best way to find a house like a paradise!</a></h2>

                            <p> Henish S Patel &nbsp;|&nbsp; 15/03/2020 14:42</p>
                        </div>
                    </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <h4>Blog Search</h4>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

                                <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
                            </div>
                        </div>

                        <br>

                        <p><a href="#">The Keys to Buying a Home, as Told by lakefront homelookers.</a></p>

                        <p><a href="#">Learn the Secrets That’ll Get You a Low-Interest Mortgage.</a></p>

                        <p><a href="#">Know the 10 Things You Can Do to Save on Home Insurance.</a></p>

                        <p><a href="#">The Connection Between Emotional Well-Being and the Right Home.</a></p>

                        <p><a href="#">Mortgage Rates Are Rising … But That Doesn’t Mean It’s a Bad Time to Buy Homes.</a></p>

                        <p><a href="#">The Keys to Buying the Home of Your Dreams.</a></p>

                        <p><a href="#">9 Ways New Homeowners Can Cut Electricity Costs by 200%.</a></p>

                        <p><a href="#">Exercise and Homebuying: How Staying Fit Can Help You Find Your Dream Home.</a></p>
                       
                        <p><a href="#">Shave Hundreds of Dollars Off Home Repairs with These Tricks.</a></p>
                    </div>
                </div>
            </div>
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
