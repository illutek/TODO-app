@extends('layouts.app')

@section('title', '| Home')

@section('content')
    <div class="row">
        <div class="col-md-8 todo_list">
            <h2>Your Completed list</h2>
            <div class="row">
                @if ($todos->isEmpty())
                    <div class="alert alert-info">
                        <p>No TODO items completed</p>
                    </div>
                @else
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
                                <div class="col-md-11">{{ $todo->title }}</div>
                                <div class="col-md-1">
                                    <a href="{{ route('todo.show', $todo->id) }}"><i class="fa fa-trash fa-2x"
                                                                                     aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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