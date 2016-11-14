{{--Create form--}}

@extends('layouts.app')

@section('title', '| Create TODO item')

@section('content')

    {!! Form::open() !!}
    <div class="col-md-4">
        @include('includes.form')
    </div>
    {!! Form::close() !!}
@endsection