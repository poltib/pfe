@extends('layout')

@section('container')
<section class="find login">
<h2>Ajouter un entrainement</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'trainings.store','files' => true)) }}

    {{ Form::label('name', 'Nom de l\'entrainement') . Form::text('name','',array('placeholder' => 'Nom')) }}

    {{ Form::label('training', 'Fichier .gpx ou .tcx') . Form::file('training','') }}

    {{ Form::label('description', 'Description') . Form::textarea('description','') }}

    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('poster l\'entrainement') }}

    {{ Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop