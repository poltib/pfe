@extends('layout')

@section('container')
    <section class="show">
        <h2>{{ $training->name }} | {{ $training->distance }}mètres</h2>
        <div id="race-map"></div>
        <div id="elevation_chart"></div>
        <p>description: {{ $training->description }}</p>
        <p>entrainement: 
            <ul id="trajet">
            @foreach($trainingPoints as $point)
                <li>
                    <span class="lat">{{ $point[0] }}</span><span class="lon">{{ $point[1] }}</span>
                </li>
            @endforeach
            </ul>
        </p> 
        <p>créateur: <a href="{{ route('users.show', $training->user->id ) }}"> {{ $training->user->username }} </a></p>
    </section>
@stop