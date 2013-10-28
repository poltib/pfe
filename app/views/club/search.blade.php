@extends('layout')

@section('container')
    <section class="search">
        <h2>Résultat de la recherche de club {{ 'à '.$ville.' en '.$pays.' avec '.$entrainement.' entrainement(s)/semaine' }}</h2>
        <ul class="results">
            <li>{{ link_to_route('showClubs','Club du Gaby') }}</li>
            <li>{{ link_to_route('showClubs','Club de Théodore') }}</li>
            <li>{{ link_to_route('showClubs','Club du Gaby') }}</li>
            <li>{{ link_to_route('showClubs','Club au lac') }}</li>
            <li>{{ link_to_route('showClubs','Club de la foire') }}</li>
            <li>{{ link_to_route('showClubs','Club du Gaby') }}</li>
            <li>{{ link_to_route('showClubs','Club du centenaire') }}</li>
        </ul>
    </section>
@stop