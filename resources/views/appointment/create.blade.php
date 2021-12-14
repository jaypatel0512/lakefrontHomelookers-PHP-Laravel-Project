@extends('appointment.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Book your Appointment</h2>
                <h2>With Realtor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('appointment.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('appointment.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Question:</strong>
                    <input class="form-control"  name="firstName" placeholder="first name"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>answer:</strong>
                    <input class="form-control"  name="lastName" placeholder="last name"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input class="form-control"  name="email" placeholder="email"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>PropertyID:</strong>
                    <select name="propertyId">
                        @foreach($properties as $property) //Loop and Populate your data
                        <option value="{{$property->id}}">{{$property->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RealtorName:</strong>
                    <select name="realtorName">
                        <option value="realtor1">realtor1</option>
                        <option value="realtor2">realtor2</option>
                        <option value="realtor3">realtor3</option>
                        <option value="realtor4">realtor4</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>select Date and Time:</strong>
                    <div class='input-group date' id='datetimepicker'>
                        <input type='text' name="dateTime" class="form-control" />
                        <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
            </div>



                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#datetimepicker').datetimepicker();
        });
    </script>
@endsection
