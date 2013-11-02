@extends('layout')

@section('container')

    <section>
        @foreach($users as $user)
            <p><a href="{{ route('users.show', $user->id ) }}">{{ $user->username }}</a></p>
        @endforeach
    </section>
    
@stop