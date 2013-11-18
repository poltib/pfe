@extends('layout')

@section('container')

    <section>
        <ul class="secondaryNav"><!-- 
             --><li><a href="{{ route('posts.index') }}"><i class="icon-newspaper"></i>Actu</a></li><!-- 
             --><li><a href="#"><i class="icon-address"></i>Conseils</a></li><!--  
             --><li class="selected"><a href="{{ route('trainings.index') }}"><i class="icon-chart-area"></i>Entrainements</a></li>
        </ul>
        @foreach($trainings as $training)
            <p><a href="{{ route('trainings.show', $training->id ) }}">{{ $training->name }}</a></p>
        @endforeach
    </section>
    
@stop