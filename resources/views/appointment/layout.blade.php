

<!DOCTYPE html>
<html>
<head>

    <title>Appointment</title>
    <link rel="shortcut icon" href="{{ url('/images/Logo-main.jpg') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ URL::asset('assets/css/noscript.css') }}" /></noscript>
    <script type="text/javascript" src="{{url('/css/bootstrap-datepicker.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

</head>
<body>




<div class="container">
    @yield('content')
</div>

</body>
</html>

