@extends('layout')

@section('container')
<section class="find login">
<h2>Inscription</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('url' => 'registerUser', 'method' => 'put')) }}

    {{ Form::label('username', 'Username') . Form::text('username') }}
    {{ $errors->first('username') }}

    {{ Form::label('email', 'E-mail') . Form::text('email') }}
    {{ $errors->first('email') }}

    {{ Form::label('password', 'Password') . Form::password('password') }}
    {{ $errors->first('password') }}

    {{ Form::submit('Register!') }}

    {{ Form::token() . Form::close() }}
    {{ $errors->first('url','<div class="error">:message</div>') }}
</div>
</section>
@stop