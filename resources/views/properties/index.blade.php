@extends('properties.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Faqs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('properties.create') }}"> Create New Faqs</a>
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
            <th>No</th>
            <th>Question</th>
            <th>Answers</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($properties as $property)
            <tr>

                <td>{{ $property->image }}</td>




                        <a class="btn btn-primary" href="{{ route('properties.edit',$property->id) }}">Edit</a>



                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $properties->links() !!}

@endsection
