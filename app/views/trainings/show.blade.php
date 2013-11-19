@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('trainings.show', $training->id ) }}" >{{ $training->name }}</a></li><!--  
            -->@if($training->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('trainings.edit', $training->id ) }}">Modifier l'entrainement</a></li><!--  
             --><li><a href="{{ route('trainings.destroy', $training->id ) }}">Supprimer l'entrainement</a></li>
             @endif
        </ul>
        <h2>{{ $training->name }} | {{ $training->distance }}mètres</h2>
        <div id="race-map"></div>
        <div id="elevation_chart"></div>
        <p>description: {{ $training->description }}</p>
        <span>Adresse:</span><span class="address">{{ $training->address }}</span>
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