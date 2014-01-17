@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('teams.show', $team->slug ) }}" >{{ $team->name }}</a></li><!--  
            -->@if(Auth::check() && $team->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('teams.edit', $team->id ) }}">Modifier la course</a></li><!--  
             --><li><a href="{{ route('teams.destroy', $team->id ) }}">Supprimer la course</a></li>
             @endif
        </ul>
        <h2>{{ $team->name }}</h2>
        <p>{{ $team->description }}</p>
        <p>{{ $team->user->username }}</p>
        <aside class="sponsors">
            <h3>Sponsors</h3>
            
        </aside>
        <div class="information">

            <h3>Utilisateurs participant</h3>
            <ul class="participants">
                @foreach($team->users as $user)
                    <li><a href="{{ route('users.show', $user->id ) }}"><figure><img src="{{ $user->thumb }}" alt="{{ $user->username }}"></figure></a></li>
                @endforeach
            </ul>

            <h3>Gallerie</h3>
            <ul class="participants">
                @foreach($team->photos as $photo)
                    <li><figure><img src="{{ $photo->image }}" alt=""></figure></li>
                @endforeach
            </ul>
            
        </div>
    </section>
@stop