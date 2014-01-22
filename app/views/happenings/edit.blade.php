@extends('layout')

@section('container')
<section class="find login">
        <ul class="secondaryNav"><!--
            -->@if(Auth::check() && $happening->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('happenings.show', $happening->slug ) }}">La course</a></li><!--  
             --><li><a href="{{ route('happenings.destroy', $happening->slug ) }}"><i class="icon-cancel" ></i>Supprimer la course</a></li>
             @endif
        </ul>
<h2>Modifier "{{ $happening->name }}"</h2>
<div class="left">
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif
    {{ Form::open(array( 'route' => array('happenings.update', $happening->slug),'files' => true)) }}

    {{ Form::label('name', 'Nom de la course') . Form::text('name', $happening->name) }}

    {{ Form::label('file', 'Fichier .gpx ou .tcx') . Form::file('file','') }}

    {{ Form::label('address', 'Addresse') . Form::text('address', $happening->address) }}

    {{ Form::label('description', 'Description') . Form::textarea('description', $happening->description) }}


    <select name="eventType" id="eventType">

        @foreach ($eventTypes as $eventType)
            @if( $happening->eventType_id === $eventType->id )
                <option value="{{$eventType->id}}" selected>{{ $eventType->event_name }}</option>
            @else
                <option value="{{$eventType->id}}">{{ $eventType->event_name }}</option>
            @endif
        @endforeach

    </select>

    {{ Form::hidden('user_id',Auth::user()->id) }}

    {{ Form::submit('modifier la course') }}

    {{ Form::close() }}
     {{ implode('', $errors->all('<li>:message</li>'))}}
</div>
</section>
@stop