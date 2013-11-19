@extends('layout')

@section('container')
<section class="find login">
    <ul class="secondaryNav"><!-- 
         --><li><a href="{{ route('users.show', Auth::user()->id ) }}" >Profil</a></li><!--  
        -->@if(Auth::check())<!--  
         --><li><a href="{{ route('messages.index') }}">Messages</a></li><!-- 
         --><li><a href="{{ route('races.create') }}">Ajouter une course</a></li><!--  
         --><li class="selected">{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--  
         --><li>{{ link_to_route('trainings.create', 'Ajouter un entrainement') }}</li><!--  
         --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
         @endif
    </ul>
<h2>Poster une actualité</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array('route' => 'posts.store','files' => true)) }}

    {{ Form::label('title', 'Nom du post') . Form::text('title','',array('placeholder' => 'Nom')) }}

    {{ Form::label('post', 'Contenu') . Form::textarea('post') }}

    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('Poster!') }}

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop