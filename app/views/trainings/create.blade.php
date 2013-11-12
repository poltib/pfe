@extends('layout')

@section('container')
<section class="find login">
<h2>Ajouter un entrainement</h2>
<div class="left">
    
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'trainings.store','files' => true)) }}
    <ul>
        <li>{{ Form::label('name', 'Nom de l\'entrainement') . Form::text('name','',array('placeholder' => 'Nom')) }}
            {{ $errors->first('name'); }}</li>
        <li>{{ Form::label('training', 'Fichier .gpx ou .tcx') . Form::file('training','') }}
            {{ $errors->first('training'); }}</li>
        <li>{{ Form::label('description', 'Description') . Form::textarea('description','') }}
            {{ $errors->first('description'); }}</li>
        {{ Form::hidden('user_id',Auth::user()->id) }}

        <li>{{ Form::submit('poster l\'entrainement') }}</li>
    </ul>
    {{ Form::close() }}
</div>
</section>
@stop