@extends('layout')

@section('container')

    <section>
        <ul class="secondaryNav"><!-- 
             --><li><a href="{{ route('happenings.index') }}"><i class="icon-pitch"></i>Courses</a></li><!--  
             --><li><a href="{{ route('teams.index') }}"><i class="icon-users"></i>Clubs</a></li><!--  
             --><li class="selected">{{ link_to_route('users.index','Users') }}</li>
        </ul>
        @foreach($users as $user)
            <p><a href="{{ route('users.show', $user->slug ) }}">{{ $user->username }}</a></p>
        @endforeach
    </section>
    
@stop