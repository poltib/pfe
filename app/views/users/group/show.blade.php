@extends('layout')

@section('container')
    <section class="show">
        <h2>Groupe de Jemeppe | <span>Province de Liège</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste cum sed quia quidem odio rerum excepturi deserunt quae minima animi. Facilis, beatae, dolorum inventore commodi voluptatem odio libero et possimus.</p>
        <div class="info">
            <h3>Informations</h3>
            <figure>{{ HTML::image('img/loca.png'); }}</figure>
            <div class="info">
                <ul>
                    <li><span>Entrainements:</span><span>en soirée</span></li>
                    <li><span>Départ:</span><span>Rue du tronc, 4309 Vielsalm</span></li>
                    <li><span>Distance:</span><span>8km/entrainement</span></li>
                    <li><span>Topographie:</span><span>plat</span></li>
                    <li>
                    @if(Auth::check())
                    <a href="#" class="button">Rejoindre</a> <a href="#" class="button">Suivre</a> 
                    @endif
                    <a href="#" class="button">Partager</a></li>
                </ul>
            </div>
        </div>

        <h3>Gallerie du groupe</h3>
        <ul class="races list">
        <li class="month current">
            <h4>2012</h4>
            <ul>
                <div class="sevenFirst">
                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>
                </div>

                    
                <div class="others">
                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        
                    </li></a>
                </div>
            </ul>
        </li>
    </ul>
        <h3>Membres</h3>

        <h3>Commentaires</h3>
        <ul>
            <li class="comment">
                <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
                <article>
                    <h4>{{ link_to_route('showUser', 'Fred Bourdult' ) }} à dit:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ratione consequuntur culpa mollitia laborum modi perspiciatis sed assumenda excepturi obcaecati sapiente dolore error soluta iure maxime animi ut quibusdam vitae.</p>
                </article>
            </li>
            <li class="comment">
                <figure>{{ HTML::image('img/tumbs.jpg'); }}</figure>
                <article>
                    <h4>{{ link_to_route('showUser', 'Fred Bourdult' ) }} à dit:</h4>
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

    </section>
@stop