@extends('layouts.app')

@section('title', '| Show Deleted')

@section('content')
    
        <div class="col-md-12">
            <h2>Are you sure to delete the next TODO item</h2>
            {{--<h3>{{ $todo->title }}</h3>--}}
            <div class="row">
                <div class="col-md-6">
                    {!! Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete TODO item: '.  $todo->title, ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}
                </div>
                <div class="col-md-6">
                    <a href="{{ route('index') }}" class="btn btn-success btn-block">Cancel</a>
                </div>
            </div>
        </div>


@endsection