@extends('layout')

@section('container')
    <section class="show">
        <h2>{{ $race->name }} | <span>27 octobre 20013</span></h2>
        <p>{{ $race->description }}</p>
        <p>{{ $race->user->username }}</p>
        <div id="race-map"></div>
        <div id="elevation_chart"></div>
        <aside class="sponsors">
            <h3>Sponsors</h3>
            <ul>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
                <li>{{ HTML::image('img/logo.gif'); }}</li>
            </ul>
        </aside>
        <ul id="trajet">
            @foreach($racePoints as $point)
                <li>
                    <span class="lat">{{ $point[0] }}</span><span class="lon">{{ $point[1] }}</span>
                </li>
            @endforeach
        </ul>
        <div class="information">
            <h3>Informations</h3>
            <table>
                <tbody>
                    <tr>
                        <td>Distances</td>
                        <td>10km</td>
                        <td>20km</td>
                        <td>30km</td>
                    </tr>
                    <tr>
                        <td>Tarifs</td>
                        <td>15€</td>
                        <td>20€</td>
                        <td>30€</td>
                    </tr>
                </tbody>
            </table>
            <ul>
                <li><span>Adresse:</span><span> Rue du tronc, 4309 Vielsalm</span></li>
                <li>
                    <a href="#" class="button">Inscription</a> 
                    <a href="#" class="button">Suivre</a> 
                    <a href="#" class="button">Partager</a>
                    @if(isset(Auth::user()->raceUsers[0]))
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('raceUsers.destroy', Auth::user()->raceUsers[0]->id) , 'class' => 'particip')) }}
                            {{ Form::hidden('race_id',$race->id) }}
                            {{ Form::submit('Ne plus participer',array('class' => 'particip')) }}
                        {{ Form::close() }}
                    @else
                        {{ Form::open(array('route' => 'raceUsers.store', 'method' => 'post', 'class' => 'particip')) }}

                        {{ Form::hidden('user_id',Auth::user()->id) }}

                        {{ Form::hidden('race_id',$race->id) }}

                        {{ Form::submit('Participer',array('class' => 'particip')) }}

                        {{ Form::token() . Form::close() }}
                    @endif



                </li>
            </ul>

            <h3>Utilisateurs participant</h3>
            <ul class="participants">
                @foreach($race->raceUsers as $user)
                    <li><figure><img src="{{ $user->user->thumbs }}" alt="{{ $user->user->username }}"></figure></li>
                @endforeach
            </ul>
            <h3>Galerie des années précédentes</h3>

            <h3>Commentaires</h3>
            <ul>
                @foreach($race->comments as $comment)
                <li class="comment">
                    <figure><img src="{{ $comment->user->thumbs }}" ></figure>
                    <article>
                        <h4><a href="{{ route('users.show', $comment->user->id ) }}">{{ $comment->user->username }}</a> à dit:</h4>
                        <p>{{ htmlentities($comment->comment) }}</p>
                        @if($comment->user->id === Auth::user()->id)
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('comments.destroy', $comment->id) , 'class' => 'particip')) }}
                                {{ Form::submit('Supprimer',array('class' => 'particip')) }}
                            {{ Form::close() }}
                        @endif
                    </article>
                </li>
                @endforeach
            </ul>
            <h3>Poster votre commentaire</h3>
            @if(Auth::check())
                @if (Session::has('flash_error'))
                    <div id="flash_error">{{ Session::get('flash_error') }}</div>
                @endif
                {{ Form::open(array('route' => 'comments.store', 'method' => 'post')) }}

                {{ Form::label('comment', 'Commentaire') . Form::textarea('comment','',array('placeholder' => 'Votre message...')) }}

                {{ Form::hidden('user_id',Auth::user()->id) }}

                {{ Form::hidden('race_id',$race->id) }}

                {{ Form::submit('Poster le commentaire') }}

                {{ Form::token() . Form::close() }}
            @else
                <p>Vous devez être connecté pour poster des commentaires. {{ link_to_route('login','Se connecter') }}</p>
            @endif
        </div>
    </section>
@stop