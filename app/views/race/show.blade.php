@extends('layout')

@section('container')
    <section class="show">
        <h2>Marathon de Vielsalm | <span>27 octobre 20013</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cum sed quia quidem odio rerum excepturi deserunt quae minima animi. Facilis, beatae, dolorum inventore commodi voluptatem odio libero et possimus.</p>
        <div id="race-map"></div>
        <aside class="sponsors">
            <h3>Sponsors de la course</h3>
            <ul>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
            </ul>
        </aside>
        <div class="information">
            <h3>Informations</h3>
            <ul>
                <li><span>Distances:</span><span> 10km, 21km, 42.195km</span></li>
                <li><span>Tarifs:</span><span>20€, 30€, 60€</span></li>
                <li><span>Adresse:</span><span> Rue du tronc, 4309 Vielsalm</span></li>
                <li><a href="#" class="button">Inscription</a> <a href="#" class="button">Suivre</a> <a href="#" class="button">Partager</a></li>
            </ul>
            <h3>Utilisateurs participant</h3>
            <ul class="participants">
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
                <li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li>
            </ul>
            <h3>Gallerie des années précédantes</h3>

            <h3>Commentaires</h3>
            <ul>
                <li class="comment">
                    <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
                    <article>
                        <h4><a href="#">Fred blud</a> à dit:</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ratione consequuntur culpa mollitia laborum modi perspiciatis sed assumenda excepturi obcaecati sapiente dolore error soluta iure maxime animi ut quibusdam vitae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ratione consequuntur culpa mollitia laborum modi perspiciatis sed assumenda excepturi obcaecati sapiente dolore error soluta iure maxime animi ut quibusdam vitae.</p>
                    </article>
                </li>
                <li class="comment">
                    <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
                    <article>
                        <h4><a href="#">Fred blud</a> à dit:</h4>
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

                {{ Form::label('message', 'Commentaire') . Form::textarea('message','',array('placeholder' => 'Votre message...')) }}
                {{ $errors->first('message') }}

                {{ Form::submit('Poster le commentaire') }}

                {{ Form::token() . Form::close() }}
                {{ $errors->first('url','<div class="error">:message</div>') }}
            @else
                <p>Vous devez être connecté pour poster des commentaires. {{ link_to_route('login','Se connecter') }}</p>
            @endif
        </div>
    </section>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=true"></script>
    {{ HTML::script('js/script.js'); }}
@stop