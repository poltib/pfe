@extends('layout')

@section('container')
<section class="find login">
<h2>Inscription</h2>
<div class="left">
    {{ Form::open(array('route' => 'users.store')) }}

    {{ Form::label('username', 'Nom d\'utilisateur') . Form::text('username','',array('placeholder' => 'Nom')) }}

    {{ Form::label('email', 'E-mail') . Form::text('email','',array('placeholder' => 'example@machin.truc')) }}

    {{ Form::label('password', 'Mot de passe') . Form::password('password') }}

    {{ Form::submit('Register!') }}

    {{ Form::token() . Form::close() }}
    @if($errors->any())
      <ul>
     {{ implode('', $errors->all('<li>:message</li>'))}}
     </ul>
    @endif
</div>
</section>
@stop