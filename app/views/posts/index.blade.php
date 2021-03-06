@extends('layout')

@section('container')
    <section class="news list">

        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('posts.index') }}"><i class="icon-newspaper"></i>News</a></li>
        </ul>
        <h2>Liste des news</h2>
        <div class="big">
            @foreach($posts as $post)
                <article>
                <a href="{{ route('posts.show', $post->slug) }}"><h3>{{ $post->title }}<span><time>{{ $post->created_at->toFormattedDateString() }}</time></span></h3></a>
                <span>Catégories : 
                @foreach($post->categories as $categorie)
                    {{ $categorie->name }}
                @endforeach
                </span>
                <span>Posté par {{ $post->user->username }}</span>
                <figure><img src="{{ $post->image }}" alt=""></figure>
                <div class="text">
                    <p>{{ $post->post }}</p>
                </div>
                </article>
            @endforeach
             {{ $posts->links() }}
        </div>
        <aside>
            <h3><i class="icon-tags"></i>Catégories</h3>
            @foreach($categories as $categorie)
            <h4>{{ $categorie->name }}</h4>
            <ul>
                @foreach($categorie->posts as $categoriePost)
                <li>{{ link_to_route('posts.show', $categoriePost->title, $categoriePost->slug) }}</li>
                @endforeach
            </ul>
            @endforeach
        </aside>
    </section>
@stop