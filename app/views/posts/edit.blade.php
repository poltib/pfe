@extends('layout')

@section('container')
<section class="find login">
    <ul class="secondaryNav"><!-- 
         --><li><a href="{{ route('posts.show', $post->id ) }}" >{{ $post->title }}</a></li><!--  
        -->@if($post->user->id === Auth::user()->id)<!--  
         --><li class="selected"><a href="{{ route('posts.edit', $post->id ) }}">Modifier "{{ $post->title }}"</a></li><!--  
         --><li><a href="{{ route('posts.destroy', $post->id ) }}">Supprimer "{{ $post->title }}"</a></li>
         @endif
    </ul>
<h2>Poster une actualité</h2>
<div class="post">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::model($post, array('method' => 'PATCH', 'files' => true, 'route' => array('posts.update', $post->id))) }}
    <div class="clear">
        {{ Form::label('title', 'Nom du post') . Form::text('title', $post->title ,array('placeholder' => 'Nom du post')) }}

        {{ Form::label('post', 'Contenu') }} 
    </div>

    {{ Form::textarea('post', $post->post ,array('class' => 'post')) }}

    {{ Form::label('photo', 'Photo') . Form::file('photo') }}
    
    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('Poster') }}

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop