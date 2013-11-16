@extends('layout')

@section('container')
    <section class="news list">
        <h2>Liste des news</h2>
        <div class="big">
            @foreach($posts as $post)
                <article>
                <a href="{{ route('posts.show', $post->id) }}"><h3>{{ $post->title }}<span><time>{{ $post->created_at }}</time></span></h3></a>
                <span>Posté par {{ $post->user->username }}</span>
                <figure>{{ HTML::image('img/actu.jpeg'); }}</figure>
                <div class="text">
                    <p>{{ $post->post }}</p>
                </div>
                </article>
            @endforeach
        </div>
        <aside>
            <h3>Catégories</h3>
            <h4>Conseils</h4>
            <ul>
                <li><a href="#">Bien choisir ses chaussures</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
            </ul>
            <h4>Entrainements</h4>
            
        </aside>
    </section>
@stop