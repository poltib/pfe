@extends('layout')

@section('container')
    <section class="show">
        <article>
            <h2>Lorem Actu | <span>27 octobre 20013</span></h2>
            <span>Catégories : Entrainements / Conseils</span>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ex, quos, consequuntur autem omnis aliquam dolore maiores quisquam odio officia quasi delectus cumque nulla deserunt nesciunt esse sunt. Accusantium, quidem.</span></p>
            <figure class="cover">{{ HTML::image('img/home1.jpg'); }}</figure>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ex, quos, consequuntur autem omnis aliquam dolore maiores quisquam odio officia quasi delectus cumque nulla deserunt nesciunt esse sunt. Accusantium, quidem.</span><span>Incidunt, dolore, fugit, aliquid, fuga sequi officia nam ducimus earum blanditiis sint repellat odio nulla voluptate perferendis commodi odit nesciunt sapiente. Tempora unde perferendis sequi possimus at asperiores impedit saepe!</span></p>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ex, quos, consequuntur autem omnis aliquam dolore maiores quisquam odio officia quasi delectus cumque nulla deserunt nesciunt esse sunt. Accusantium, quidem.</span><span>Incidunt, dolore, fugit, aliquid, fuga sequi officia nam ducimus earum blanditiis sint repellat odio nulla voluptate perferendis commodi odit nesciunt sapiente. Tempora unde perferendis sequi possimus at asperiores impedit saepe!</span></p>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, ex, quos, consequuntur autem omnis aliquam dolore maiores quisquam odio officia quasi delectus cumque nulla deserunt nesciunt esse sunt. Accusantium, quidem.</span><span>Incidunt, dolore, fugit, aliquid, fuga sequi officia nam ducimus earum blanditiis sint repellat odio nulla voluptate perferendis commodi odit nesciunt sapiente. Tempora unde perferendis sequi possimus at asperiores impedit saepe!</span></p>
            @if(Auth::check())<a href="#" class="button">Suivre</a>@endif <a href="#" class="button">Partager</a></li>
        </article>
        <aside class="sponsors">
            <h3>Autres articles de l'auteur</h3>
            <ul>
                <li>{{ link_to_route('showNews', 'Et encore un!!' ) }}</li>
                <li>{{ link_to_route('showNews', '4h30 au 200m' ) }}</li>
                <li>{{ link_to_route('showNews', 'Et encore un!!' ) }}</li>
            </ul>
        </aside>
        <div class="information">
        <div class="auth">
            <h3>L'auteur : {{ link_to_route('users.show', 'Plop Admin', 4 ) }}</h3>
            <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
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