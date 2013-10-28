@extends('layout')

@section('container')
    <section class="find login">
    <h2>Formulaire d'envoi de mail</h2>
    <div class="left">
        @if (Session::has('flash_error'))
            <div id="flash_error">{{ Session::get('flash_error') }}</div>
        @endif
        {{ Form::open(array('url' => 'registerUser', 'method' => 'put')) }}

        {{ Form::label('username', 'Nom') . Form::text('username','',array('placeholder' => 'Nom')) }}
        {{ $errors->first('username') }}

        {{ Form::label('objet', 'Objet') . Form::text('objet','',array('placeholder' => 'Titre de votre message')) }}
        {{ $errors->first('objet') }}

        {{ Form::label('email', 'E-mail') . Form::text('email','',array('placeholder' => 'example@machin.truc')) }}
        {{ $errors->first('email') }}

        {{ Form::label('message', 'Message') . Form::textarea('message','',array('placeholder' => 'Votre message...')) }}
        {{ $errors->first('message') }}

        {{ Form::submit('Envoyer') }}

        {{ Form::token() . Form::close() }}
        {{ $errors->first('url','<div class="error">:message</div>') }}
    </div>
</section>
@stop