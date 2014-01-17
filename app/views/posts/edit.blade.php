@extends('layout')

@section('container')
<section class="find login">
    <ul class="secondaryNav"><!-- 
         --><li><a href="{{ route('posts.show', $post->slug ) }}" >{{ $post->title }}</a></li><!--  
        -->@if($post->user->id === Auth::user()->id)<!--  
         --><li class="selected"><a href="{{ route('posts.edit', $post->id ) }}">Modifier "{{ $post->title }}"</a></li><!--  
         --><li><a href="{{ route('posts.destroy', $post->slug ) }}">Supprimer "{{ $post->title }}"</a></li>
         @endif
    </ul>
<h2>Poster une actualité</h2>
<div class="post">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::model($post, array('method' => 'PATCH', 'files' => true, 'route' => array('posts.update', $post->id))) }}
    <ul>
    <li>{{ Form::label('title', 'Nom du post') . Form::text('title', $post->title) }}</li>

    <li>{{ Form::label('post', 'Contenu') }}</li> 

    <li>{{ Form::textarea('post', $post->post ,array('class' => 'post')) }}</li>
    
    <li>{{ Form::label('photo', 'Photo') . Form::file('photo') }}</li>

    <h3>Catégories</h3>
    
        @foreach($categories as $categorie)
            <?php $checked = false; ?>
            @foreach($post->categories as $cat)
                @if($cat->id ===  $categorie->id)
                    <?php $checked = 'checked'; ?>
                @endif
            @endforeach
            <li>
                <label class="cat" for="categories">
                    {{ $categorie->name }}
                    <input type="checkbox" name="categories[]" value="{{ $categorie->id }}" id="categories[]" {{ $checked }}>
                </label>

            </li>
        @endforeach

    <li>{{ Form::hidden('user_id',Auth::user()->id) }}</li>

    <li>{{ Form::submit('Poster') }}</li>

    </ul>

    {{ Form::token() . Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop