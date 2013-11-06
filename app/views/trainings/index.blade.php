@extends('layout')

@section('container')

    <section>
        @foreach($trainings as $training)
            <p><a href="{{ route('trainings.show', $training->id ) }}">{{ $training->name }}</a></p>
        @endforeach
    </section>
    
@stop