@extends('layout')


@section('container')
    <h2>Reset your password now</h2>
    {{ Form::open() }}
        {{ Form::hidden('token', $token) }}
        
        {{ Form::label('email', 'Email Address:') }}

        {{ Form::text('email') }}

        {{ Form::label('password', 'Password:') }}

        {{ Form::password('password') }}

        {{ Form::label('password_confirmation', 'Passwordconfirmation:') }}

        {{ Form::password('password_confirmation') }}

        {{ Form::submit('Reset your password') }}

    {{ Form::close() }}

    @if (Session::has('error'))
        <p>{{ Session::get('reason') }}</p>
    @endif
@stop