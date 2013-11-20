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
<div class="post">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    <ul>
    <li>{{ Form::open(array('route' => 'posts.store','files' => true)) }}</li>

    <li>{{ Form::label('title', 'Nom du post') . Form::text('title','',array('placeholder' => 'Nom du post')) }}</li>

    <li>{{ Form::label('post', 'Contenu') }}</li> 

    <li>{{ Form::textarea('post','',array('class' => 'post')) }}</li>
    
    <li>{{ Form::label('photo', 'Photo') . Form::file('photo') }}</li>

    <h3>Catégories</h3>

    @foreach($categories as $categorie)
        <li>{{ Form::checkbox('categories[]', $categorie->id, array('class' => 'cat')) . Form::label('categories', $categorie->name, array('class' => 'cat')) }}</li>
    @endforeach
    
    <li>{{ Form::hidden('user_id',Auth::user()->id) }}</li>

    <li>{{ Form::submit('Poster') }}</li>

    <li>{{ Form::token() . Form::close() }}</li>
    </ul>
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop