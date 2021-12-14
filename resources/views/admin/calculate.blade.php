<!DOCTYPE HTML>
<html>
<head>
    <title>Calculate </title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ url('/<?php echo url('/'); ?>/images/Logo-main.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ URL::asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
<div id="wrapper">
    <header id="header">
        <div class="inner">
            <a href="homepage" class="logo">
                <span class="fa fa-home"></span> <span class="title">Real Estate</span></a>
            <a class="sign-up" href="{{ route('auth.logout') }}">Logout</a>
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="{{ url('admin/index') }}" class="active">Home</a></li>

            <li><a href="{{ url('admin/properties') }}">Properties</a></li>

            <li><a href="{{ url('admin/blogs') }}">Blog</a></li>

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
    <div id="main">
        <div class="inner">
            <h2>Calculate the Value of House</h2>
            <div class="image main">
                <img src="{{ url('/images/product-1-720x480.jpg') }} " alt=""   height="430" />
            </div>
            <form method="get" action="calculate"  name="calculate_form">


                <div class="fields">

                    <div class="field third_2">
                        <label>Select Area :</label>
                        <select name="area_rate">
                            <option value="">--Select Area --</option>
                        @foreach ($areas as $area)
                        <option value="{{$area->area_rate}}" >{{$area->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="field third_2">
                        <label>Select House Type :</label>
                        <select name="house_rate">
                            <option value="">--Select House Type --</option>
                        @foreach ($houses as $house)
                        <option value="{{$house->house_rate}}" >{{$house->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="field third_2">
                        <label>Number of bedrooms :</label>
                        <select name="bedrooms_number">
                            <option value="">-- Select Bedrooms --</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            </select>
                    </div>
                    <div class="field third_2">
                        <label>Property Tax :</label>
                     <input name="property_Tax" Type="text" placeholder="Enter Property tax" />
                    </div>
                    <div class="field third_2">
                     <input Type="submit" class="btn btn-success" value="calculate" />
                    </div>
                </div>

                </form>

</br>

<?php
            if($price_list['aprox_value']) {?>

    
        <b><table border='2'> <tr><td>Aprox Price : </td>
        <td>$ <?php   echo $price_list['aprox_value'];  ?>
        </td>
            </tr>
    </b> 

         
    <tr>
    <td>Property Tax : </td> <td>$ <?php echo $price_list['property_Tax']; ?> </td>
            </tr>
   
    <tr>
    <td>   Area Rate :</td> <td>$ <?php echo $price_list['house_rate']; ?> </td>
    
            </tr>
  
    <tr>
        <td>House Basic Rate: </td>  <td>$ <?php echo $price_list['area_rate']; ?> </td>
            </tr>


    </table>
    <?php } ?>
            
        </div>
    </div>
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
<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
</body>
</html>
