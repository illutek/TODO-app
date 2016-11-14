{{--Edit form--}}

@extends('layouts.app')

@section('title', '| Create TODO item')

@section('content')

    {!! Form::model($todo, ['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
    <div class="col-md-4">
        @include('includes.form')
    </div>
    {!! Form::close() !!}
@endsection