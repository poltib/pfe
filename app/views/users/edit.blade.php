@extends('layout')

@section('container')
<section class="find login">
<h2>Modification du profil</h2>
<div class="left">
    {{ Form::model($user, array('method' => 'PATCH', 'files' => true, 'route' => array('users.update', $user->slug))) }}

    {{ Form::label('username', 'Nom d‘utilisateur') . Form::text('username', Auth::user()->username) }}
    
    {{ Form::label('first_name', 'Prénom') . Form::text('first_name', Auth::user()->first_name) }}
    
    {{ Form::label('name', 'Nom') . Form::text('name', Auth::user()->name) }}
    
    {{ Form::label('image', 'Photo de profil') . Form::file('image') }}

    {{ Form::label('email', 'E-mail') . Form::text('email', Auth::user()->email) }}

    {{ Form::label('description', 'Présentation') . Form::textarea('description', Auth::user()->description) }}

    {{ Form::hidden('id', Auth::user()->id) }}

    {{ Form::submit('Modifier!') }}

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop