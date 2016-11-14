@extends('layouts.app')

@section('title', '| Home')

@section('content')
    <div class="row">
        <div class="col-md-8 todo_list">
            <h2>Your TODO list</h2>
            <div class="row">
                @foreach($todos as $todo)
                    <?php
                    $priority = $todo->priority;
                    switch ($priority) {
                        case 5:
                            $priorityClass = 'red';
                            break;
                        case 4:
                            $priorityClass = 'orange';
                            break;
                        case 3:
                            $priorityClass = 'orange';
                            break;
                        default:
                            $priorityClass = 'green';
                    }
                    ?>

                    <div class="col-md-10 {{ $priorityClass }} todo-items">
                        <div class="row">
                            <div class="col-md-10">{{ str_limit($todo->title, 75) }}</div>
                            <div class="col-md-1">
                                <a href="{{ route('todo.edit', $todo->id) }}">
                                    <i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-md-1">

                                {{--{!! Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'DELETE']) !!}--}}
                                {{--{!! Form::button('<i class="fa fa-trash fa-2x" aria-hidden="true"></i>', ['type' =>'submit', 'class' =>'delete-todo']) !!}--}}
                                {{--{!! Form::close() !!}--}}

                                <a href="{{ route('todo.show', $todo->id) }}"><i class="fa fa-trash fa-2x"
                                                                                 aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center">{!! $todos->links() !!}</div>
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