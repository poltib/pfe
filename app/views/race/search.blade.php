@extends('layout')

@section('container')
    <section class="search">
        <h2>Résultat de la recherche d'une course {{ 'à '.$ville.' en '.$pays.' de '.$distance.'km.' }}</h2>
        <ul class="results">
            <li>{{ link_to_route('showRace','Course du Gaby') }}</li>
            <li>{{ link_to_route('showRace','Course de Théodore') }}</li>
            <li>{{ link_to_route('showRace','Course du Gaby') }}</li>
            <li>{{ link_to_route('showRace','Course au lac') }}</li>
            <li>{{ link_to_route('showRace','Course de la foire') }}</li>
            <li>{{ link_to_route('showRace','Course du Gaby') }}</li>
            <li>{{ link_to_route('showRace','Course du centenaire') }}</li>
        </ul>
    </section>
@stop