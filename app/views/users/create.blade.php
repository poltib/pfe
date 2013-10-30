@extends('layout')

@section('container')
<section class="find login">
<h2>Inscription</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'users.store')) }}

    {{ Form::label('username', 'Nom d\'utilisateur') . Form::text('username','',array('placeholder' => 'Nom')) }}

    {{ Form::label('email', 'E-mail') . Form::text('email','',array('placeholder' => 'example@machin.truc')) }}

    {{ Form::label('password', 'Mot de passe') . Form::password('password') }}

    {{ Form::submit('Register!') }}

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop