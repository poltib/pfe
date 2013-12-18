@extends('layout')

@section('container')
<section class="find login">
    <ul class="secondaryNav"><!-- 
         --><li><a href="{{ route('users.show', Auth::user()->id ) }}" >Profil</a></li><!--  
        -->@if(Auth::check())<!--  
         --><li><a href="{{ route('messages.index') }}">Messages</a></li><!-- 
         --><li class="selected"><a href="{{ route('races.create') }}">Ajouter une course</a></li><!--  
         --><li>{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--  
         --><li>{{ link_to_route('trainings.create', 'Ajouter un entrainement') }}</li><!--  
         --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
         @endif
    </ul>
<h2>Ajouter une course</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'races.store','files' => true)) }}

    {{ Form::label('name', 'Nom de la course') . Form::text('name','',array('placeholder' => 'Nom')) }}

    {{ Form::label('race', 'Fichier .gpx ou .tcx') . Form::file('race','') }}

    {{ Form::label('description', 'Description') . Form::textarea('description','') }}

    {{ Form::label('address', 'Addresse') . Form::text('address','') }}

    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('poster la course') }}

    {{ Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop