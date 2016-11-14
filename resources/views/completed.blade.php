@extends('layouts.app')

@section('title', '| Home')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>Your Completed list</h2>
            <div class="row">
                @foreach($todos as $todo)
                    <?php $priority = $todo->priority ?>
                    <?php if ($priority === 5) {
                        $priorityClass = 'red';
                    } elseif ($priority === 4) {
                        $priorityClass = 'orange';
                    } else
                        $priorityClass = 'green'
                    ?>
                <div class="col-md-10 {{ $priorityClass }} todo-items">
                    <div class="row">
                        <div class="col-md-11">{{ $todo->title }}</div>
                        <div class="col-md-1">
                        </div>
                    </div>

                </div>

                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Add One TODO item.</h3>
                    {!! Form::open(['route' => 'todo.store', 'method'=>'POST']) !!}
                    @include('includes.form')
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>


@endsection