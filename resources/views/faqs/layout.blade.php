<!DOCTYPE html>
<html>
<head>
    <title>Faq Admin</title>

    <script type="text/javascript" src="{{url('/css/bootstrap-datepicker.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <script>

        $(function() {

            $( "#usr1" ).datepicker({
                format: "mm/dd/yy",
                weekStart: 0,
                calendarWeeks: true,
                autoclose: true,
                todayHighlight: true,
                rtl: true,
                orientation: "auto"
            });

        });
    </script>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>

