@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('posts.show', $post->id ) }}" >{{ $post->title }}</a></li><!--  
            -->@if($post->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('posts.edit', $post->id ) }}">Modifier l'entrainement</a></li><!--  
             --><li><a href="{{ route('posts.destroy', $post->id ) }}">Supprimer l'entrainement</a></li>
             @endif
        </ul>
        <article>
            <h2>{{ $post->title }} | <span>27 octobre 20013</span></h2>
            <span>Catégories : Entrainements / Conseils</span>
            <figure class="cover">{{ HTML::image('img/home1.jpg'); }}</figure>
            <p>{{ $post->post }}</p>
            @if(Auth::check())<a href="#" class="button">Suivre</a>@endif <a href="#" class="button">Partager</a></li>
        </article>
        <aside class="sponsors">
            <h3>Autres articles de l'auteur</h3>
            <ul>
                @foreach($post->user->posts as $userpost)
                <li><a href="{{ route('posts.show', $userpost->id) }}">{{ $userpost->title }}</a></li>
                @endforeach
            </ul>
        </aside>
        <div class="information">
        <div class="auth">
            <h3>L'auteur : {{ link_to_route('users.show', $post->user->username , $post->user_id ) }}</h3>
            <figure><img src="{{ $post->user->thumbs }}" alt=""></figure>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ex, quos, consequuntur autem omnis aliquam dolore maiores quisquam odio officia quasi delectus cumque nulla deserunt nesciunt esse sunt. Accusantium, quidem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ex, quos, consequuntur autem omnis aliquam dolore maiores quisquam odio officia quasi delectus cumque nulla deserunt nesciunt esse sunt. Accusantium, quidem.</p>
        </div>
        <h3>Commentaires</h3>
        <ul>
            <li class="comment">
                <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
                <article>
                    <h4>{{ link_to_route('users.show', 'Plop', 6 ) }} à dit:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ratione consequuntur culpa mollitia laborum modi perspiciatis sed assumenda excepturi obcaecati sapiente dolore error soluta iure maxime animi ut quibusdam vitae.</p>
                </article>
            </li>
            <li class="comment">
                <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
                <article>
                    <h4>{{ link_to_route('users.show', 'Plop', 6 ) }} à dit:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ratione consequuntur culpa mollitia laborum modi perspiciatis sed assumenda excepturi obcaecati sapiente dolore error soluta iure maxime animi ut quibusdam vitae.</p>
                </article>
            </li>
        </ul>
        <h3>Poster votre commentaire</h3>
        @if(Auth::check())
            @if (Session::has('flash_error'))
                <div id="flash_error">{{ Session::get('flash_error') }}</div>
            @endif
            {{ Form::open(array('url' => 'postComm', 'method' => 'post')) }}

            {{ Form::label('message', 'Message') . Form::textarea('message','',array('placeholder' => 'Votre message...')) }}
            {{ $errors->first('message') }}

            {{ Form::submit('Poster le commentaire') }}

            {{ Form::token() . Form::close() }}
            {{ $errors->first('url','<div class="error">:message</div>') }}
        @else
            <p>Vous devez être connecté pour poster des commentaires. {{ link_to_route('login','Se connecter') }}</p>
        @endif
        </div>

    </section>
@stop