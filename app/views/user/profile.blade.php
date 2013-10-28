@extends('layout')

@section('container')
    <section>
        <h2>Profil "{{ Auth::user()->username }}"</h2>
        <p>Nom d'utilisateur: {{ Auth::user()->username }}</p>
        <p>Prénom: {{ Auth::user()->first_name }}</p>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Records:</p>
        <a href="#" class="button">Modifier profil</a>
    </section>
    <section>
        <h2>Récentes activitées</h2>
        <h3>Courses auquelles vous avez participé</h3>
        <h3>Entrainements réalisés en groupe</h3>
        <h3>Entrainements seul</h3>
    </section>
@stop