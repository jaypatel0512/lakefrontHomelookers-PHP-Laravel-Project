@extends('appointment.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>LakeFront HomeLookers Appointment</h2>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>email</th>
            <th>propertyId</th>
            <th>realtorName</th>
            <th>Date and Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($appointment as $app)
            <tr>
                <td>{{ $app->id }}</td>
                <td>{{ $app->firstName }}</td>
                <td>{{ $app->lastName }}</td>
                <td>{{ $app->email }}</td>
                <td>{{ $app->propertyId }}</td>
                <td>{{ $app->realtorName }}</td>
                <td>{{ $app->dateTime }}</td>
                <td>
                    <form action="{{ route('appointment.destroy',$app->id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>



@endsection
