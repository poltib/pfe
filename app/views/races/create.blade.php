@extends('layout')

@section('container')
<section class="find login">
<h2>Ajouter une course</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'races.store','files' => true)) }}

    {{ Form::label('name', 'Nom de la course') . Form::text('name','',array('placeholder' => 'Nom')) }}

    {{ Form::label('race', 'Fichier .gpx ou .tcx') . Form::file('race','') }}

    {{ Form::label('description', 'Description') . Form::textarea('description','') }}

    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('poster la course') }}

    {{ Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop