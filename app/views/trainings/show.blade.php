@extends('layout')

@section('container')
    <section class="show">
        <h2>{{ $training->name }}</h2>
        <div id="race-map"></div>
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
        <p>créateur: {{ $training->user_id }}</p>
    </section>
@stop