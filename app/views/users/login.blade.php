@extends('layout')

@section('container')
<section class="find login">

    {{ link_to_route('users.create','S\'inscrire') }}
    <h2>Connexion</h2>
    <div class="left">
        @if (Session::has('flash_error'))
            <div id="flash_error">{{ Session::get('flash_error') }}</div>
        @endif
    {{ Form::open(array('url'=>'login','method' => 'post')) }}
        {{ Form::label('username','Nom d‘utilisateur') }}
        {{ Form::text('username','',array('placeholder' => 'Nom'),Input::old('username')) }}
        {{ Form::label('password','Mot de passe') }}
        {{ Form::password('password') }}
        {{ Form::submit('Connexion') }}
    {{ Form::close() }}

    </div>
</section>
@stop