@extends('layout')

@section('container')
    <section>
        <h2>{{ $training->name }}</h2>
        <p>description: {{ $training->description }}</p>
        <p>entrainement: {{ $training->training }}</p>
        <p>créateur: {{ $training->user_id }}</p>
    </section>
@stop