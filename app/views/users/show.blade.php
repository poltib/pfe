@extends('layout')

@section('container')
    <section>
        <h2>Profil "{{ $user->username }}"</h2>
        <p>Nom d'utilisateur: {{ $user->username }}</p>
        <p>Prénom: {{ $user->first_name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Records:</p>
        @if(Auth::check())
            @if(Auth::user()->id===$user->id)
                {{ HTML::linkAction('UserController@edit', 'Modifier', $user->id) }}
            @else
                <a href="#" class="button">Envoyer un message</a>
            @endif
        @endif
    </section>
    <section>
        <h2>Récentes activitées</h2>
        <h3>Courses auquelles vous avez participé</h3>
        <h3>Entrainements réalisés en groupe</h3>
        <h3>Entrainements seul</h3>
    </section>
@stop