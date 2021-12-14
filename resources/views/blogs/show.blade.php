<!DOCTYPE HTML>
<html>
<head>
    <title>Home </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/<?php echo url('/'); ?>/images/Logo-main.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/roles.css') }}" />
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

            <li><a href="{{ url('admin/blog') }}">Blog</a></li>

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
    <main>
        <div>
            <div class="chef-title">
                <h2>Our Teams</h2>
            </div>
            <div class="chef-geneal-description">
                <ul>
                    <li>Our teams always ensure compliance with all health and safety measures and regulations within the kitchen area beacuse this days the whole world suffering from <b>COVID-19</b> pandemic. </li>                    
                    <li>They have up-to-date knowledge of cooking techniques and recipes. Aprat from them, they have Advanced knowledge of culinary, baking and pastry techniques and leadership skills.</li>
                    <li>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</li>
                </ul>
            </div>

            <div class="product-grid grid">
                <div class="product-item">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="images/staff-01.jpg" alt="chef1"/>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <h2>John Doggett</h2>
                            </div>
                            <div>
                                He has more than 9 year of experience in making indian cusinine and he always ensure about appealing plate presentation. He is always Cook food in a timely manner. 
                            </div>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="images/staff-05.jpg" alt="chef5"/>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <h2>Madhur Jaffrey</h2>
                            </div>
                            <div class="product-content-details">
                                She has good grip on north Indian food and she is from one of the famoius chef in India. The award winning has composed more than 15 cookbooks and is respected.
                            </div>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="images/staff-06.jpg" alt="chef6"/>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <h2>Gennaro Contaldo</h2>
                            </div>
                            <div>
                                Gennaro Contaldo is known as the Italian legend. He is expert in making different flavour pizza and sandwich. He has more then 10 year of experience in cooking.
                            </div>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End of row 1 -->

            <!-- Stating of row 2 -->
            <div class="product-grid grid">
                <div class="product-item">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="{{ url('/images/team-image-1-646x680.jpg') }}" alt="chef1"/>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <h2>Monica Reyes</h2>
                            </div>
                            <div>
                               She is head of Italian cusine department and has extra ordinary skills in cooking. She also won the World Food Championships in the year 2015 and she always updated herself.  
                            </div>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="product-item">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="images/staff-04.jpg" alt="chef4"/>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <h2>Harpal Singh</h2>
                            </div>
                            <div>
                                With a foundation of North India, Chef Harpal is familiar with English and five Indian regional languages – Hindi, Punjabi, Bengali, Oriya and Telugu. He love to connect with customers.
                            </div>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-item">
                    <div class="product-single">
                        <div class="product-img">
                            <img src="images/staff-02.jpg" alt="chef2"/>
                        </div>
                        <div class="product-content">
                            <div class="product-title">
                                <h2>Jeffrey Spender</h2>
                            </div>
                            <div class="product-content-details">
                                He is expert in chinese cusine. He set up the kitchen with cooking utensils and equipment, like knives, pans and kitchen scales. Besides this, he prepare high-quality dishes.
                            </div>
                            <ul class="team-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End of row 2 -->
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
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
</div>>
<!-- Scripts realestate\resources\assets -->
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>

</body>
</html>
