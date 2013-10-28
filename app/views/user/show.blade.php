@extends('layout')

@section('container')
    <section>
        <h2>Profil "Josué"</h2>
        <p>Nom d'utilisateur: Josué</p>
        <p>Prénom: BingoBango</p>
        <p>Email: Atilou@bilbaou.clip</p>
        <p>Records:</p>
        @if(Auth::check())
        <a href="#" class="button">Envoyer un message</a>
        <a href="#" class="button">Ajouter à ses contacts</a>
        @endif
    </section>
    <section>
        <h2>Récentes activitées de Josué</h2>
        <h3>Courses auquelles Josué a participé</h3>
        <h3>Entrainements réalisés en groupe</h3>
        <h3>Entrainements seul</h3>
    </section>
@stop