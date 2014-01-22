@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li><a href="{{ route('users.show', Auth::user()->slug ) }}" >Profil</a></li><!--  
             --><li class="selected"><a href="{{ route('messages.index') }}">Messages</a></li><!-- 
             --><li><a href="{{ route('happenings.create') }}">Ajouter une course</a></li><!--   
             --><li>{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--  
             --><li>{{ link_to_route('trainings.create', 'Ajouter un entrainement') }}</li><!--  
             --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
             
        </ul>
        <h2>Messages</h2>
        <h3>Reçu</h3>
        <ul>
        @foreach(Auth::user()->messages as $message)
            <li class="comment">
                <h3>Sujet : {{ $message->objet }}</h3>
                <span>de <a href="{{ route('users.show', $message->user->slug ) }}">{{ $message->user->username }}</a> le <time>{{ $message->created_at->toFormattedDateString() }}</time></span>
                <a href="{{ route('messages.show', $message->id ) }}">Lire le message</a>
            </li>
        @endforeach
        </ul>
        <h3>Envoyés</h3>
        <ul>
        @foreach(Auth::user()->message as $message)
            <li class="comment">
                <h3>Sujet : {{ $message->objet }}</h3>
                <span>à <a href="{{ route('users.show', $message->to->first()->slug ) }}">{{ $message->to->first()->username }}</a> le <time>{{ $message->created_at->toFormattedDateString() }}</time></span>
                <a href="{{ route('messages.show', $message->id ) }}">Lire le message</a>
            </li>
        @endforeach
        </ul>
    </section>
@stop