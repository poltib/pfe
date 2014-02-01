@extends('layout')

@section('container')
    <section>
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('users.show', $user->slug ) }}" ><i class="icon-user" ></i>Profil</a></li><!--  
            -->@if(Auth::check())<!--  
            -->@if($user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('messages.index') }}"><i class="icon-chat-1" ></i>Messages</a></li><!-- 
             --><li><a href="{{ route('happenings.create') }}"><i class="icon-pitch" ></i>Ajouter un évènement</a></li><!--   
             --><li><a href="{{ route('posts.create') }}"><i class="icon-book" ></i>Ajouter une actu</a></li><!--
             --><li><a href="{{ route('logout') }}"><i class="icon-logout" ></i>Déconnexion</a></li>
             @endif
             @endif
        </ul>


        <div class="user">
            <h2><i class="icon-calendar" ></i>Récentes activitées de {{ $user->username }}</h2>
            {{ Calendar::generate($year, $month); }}
            <h3>Courses auquelles {{{ $user->username }}} a participé</h3>
            <h3>Entrainements réalisés en groupe</h3>
            <h3>Entrainements seul</h3>
            <h3>Articles postés</h3>
            <ul>
            @foreach($user->posts as $post)
                <li>{{ link_to_route('posts.show', $post->title, $post->slug) }}</li>
            @endforeach
            </ul>
        </div>


        <aside class="achievement">
            <h2><i class="icon-user" ></i>Profil de {{ $user->username }}</h2>
            <div class="thumbLink">
            @if ($user->thumb)
                    <figure>{{ HTML::image($user->thumb); }}</figure>
                @endif
                @if(Auth::check())
                    @if(Auth::user()->id===$user->id)
                    <a href="{{ route('users.edit', Auth::user()->slug ) }}" class="button"><i class="icon-edit" ></i>Modifier</a>
                    @else
                        {{ link_to_action('MessagesController@send', "Envoyer un message", $user->id) }}
                    @endif
                @endif
            </div>
            @if ($user->description)
            <p class="userDescription">
                {{ $user->description }}
            </p>
            @endif
            <h2><i class="icon-award" ></i>Trophés</h2>
            <ul><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
            --></ul>
            <h2><i class="icon-flag" ></i>Records</h2>
        </aside>
    </section>
@stop