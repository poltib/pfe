@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('posts.show', $post->id ) }}" >{{ $post->title }}</a></li><!--  
            -->@if(Auth::check() && $post->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('posts.edit', $post->id ) }}">Modifier "{{ $post->title }}"</a></li><!--  
             --><li><!--
                    -->{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) }}<!--
                        -->{{ Form::submit('Supprimer') }}<!--
                            
                    -->{{ Form::close() }}<!--
                --></li>
             @endif
        </ul>
        <article>
            <h2>{{ $post->title }} | <span><time>{{ $post->created_at->toFormattedDateString() }}</time></span></h2>
            <span>Catégories : 
            @foreach($post->categories as $categorie)
                {{ $categorie->name }}
            @endforeach
            </span>
            <figure class="cover"><img src="{{ $post->image }}" alt=""></figure>
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
                <p>{{ $post->user->description }}</p>
            </div>
        </div>

    </section>
@stop