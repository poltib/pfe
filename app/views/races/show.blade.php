@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('races.show', $race->id ) }}" >{{ $race->name }}</a></li><!--  
            -->@if(Auth::check() && $race->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('races.edit', $race->id ) }}">Modifier la course</a></li><!--  
             --><li><a href="{{ route('races.destroy', $race->id ) }}">Supprimer la course</a></li>
             @endif
        </ul>
        <h2>{{ $race->name }} | <span>27 octobre 20013</span></h2>
        <p>{{ $race->description }}</p>
        <p>{{ $race->user->username }}</p>
        <a href="http://pfe/public/{{ $race->race }}">lien</a>
        <div id="race-map"></div>
        <div id="elevation_chart"></div>
        <aside class="sponsors">
            <h3>Sponsors</h3>
            @if(Auth::check()&&$race->user_id === Auth::user()->id)
             {{ Form::open(array('route' => 'raceSponsors.store','files' => true, 'class' => 'particip')) }}

                    {{ Form::label('name', 'Nom du sponsor') . Form::text('name','',array('placeholder' => 'Nom')) }}

                    {{ Form::label('address', 'Adresse') . Form::text('address','') }}

                    {{ Form::label('description', 'Description') . Form::textarea('description','') }}

                    {{ Form::label('image', 'Photo') . Form::file('image') }}

                    {{ Form::hidden('race_id', $race->id) }}

                    {{ Form::submit('Ajouter le sponsor!',array('class' => 'particip')) }}
            {{ Form::token() . Form::close() }}
            @endif
            <ul>
                @foreach($race->raceSponsors as $sponsor)
                    <li>
                        <figure>
                            <img src="{{ $sponsor->thumb }}" alt="{{ $sponsor->name }}">
                            <p class="sponsorAddress">{{ $sponsor->address }}</p>
                        </figure>
                    </li>
                @endforeach
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
                <li><span>Adresse:</span><span class="address">{{ $race->address }}</span></li>
                <li>
                    <a href="#" class="button">Inscription</a> 
                    <a href="#" class="button">Suivre</a> 
                    <a href="#" class="button">Partager</a>
                    @if(Auth::check())
                        @if(isset(Auth::user()->races[0]))
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('dontParticip', Auth::user()->id) , 'class' => 'particip')) }}
                                {{ Form::hidden('race_id',$race->id) }}
                                {{ Form::submit('Ne plus participer',array('class' => 'particip')) }}
                            {{ Form::close() }}
                        @else
                            {{ Form::open(array('route' => 'particip', 'method' => 'post', 'class' => 'particip')) }}

                            {{ Form::hidden('user_id',Auth::user()->id) }}

                            {{ Form::hidden('race_id[]',$race->id) }}

                            {{ Form::submit('Participer',array('class' => 'particip')) }}

                            {{ Form::token() . Form::close() }}
                        @endif
                    @endif


                </li>
            </ul>

            <h3>Utilisateurs participant</h3>
            <ul class="participants">
                @foreach($race->users as $user)
                    <li><figure><img src="{{ $user->thumbs }}" alt="{{ $user->username }}"></figure></li>
                @endforeach
            </ul>
            <h3>Galerie des années précédentes</h3>
            <ul class="participants">
                @foreach($race->raceImages as $Image)
                    <li><figure><img src="{{ $Image->thumb }}" ></figure></li>
                @endforeach
            </ul>
                @if(Auth::check()&&$race->user_id === Auth::user()->id)
                    {{ Form::open(array('files' => true, 'route' => array('raceImages.store') , 'class' => 'particip')) }}

                    {{ Form::label('image', 'Photo') . Form::file('image') }}

                    {{ Form::hidden('race_id', $race->id) }}

                    {{ Form::submit('Ajouter la photo!',array('class' => 'particip')) }}

                    {{ Form::token() . Form::close() }}
                     {{ implode('', $errors->all('<li>:message</li>'))}}
                @endif

            <h3>Commentaires</h3>
            <ul>
                @foreach($race->comments as $comment)
                <li class="comment">
                    <figure><img src="{{ $comment->user->thumbs }}" ></figure>
                    <article>
                        <span>{{ $comment->created_at->toFormattedDateString() }}</span>
                        <h4><a href="{{ route('users.show', $comment->user->id ) }}">{{ $comment->user->username }}</a> à dit:</h4>
                        <p>{{ htmlentities($comment->comment) }}</p>
                        @if(Auth::check()&&$comment->user->id === Auth::user()->id)
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('comments.destroy', $comment->id) , 'class' => 'particip')) }}

                                {{ Form::hidden('race_id',$race->id) }}

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