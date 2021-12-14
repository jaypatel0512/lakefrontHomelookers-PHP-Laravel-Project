@extends('faqs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Faqs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('faqs.create') }}"> Create New Faqs</a>
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
            <th></th>
            <th>Question</th>
            <th>Answers</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($faqs as $faq)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>
                <td>
                    <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">


                        <a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $faqs->links() !!}

@endsection
