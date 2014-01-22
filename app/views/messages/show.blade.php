@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li><a href="{{ route('users.show', Auth::user()->slug ) }}" >Profil</a></li><!--  
             --><li class="selected"><a href="{{ route('messages.index') }}">Messages</a></li><!-- 
             --><li><a href="{{ route('happenings.create') }}">Ajouter une course</a></li><!--   
             --><li>{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--   
             --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
             
        </ul>
        <h2>Messages | {{ $message->objet }}</h2>
        <span>de <a href="{{ route('users.show', $message->user->slug ) }}">{{ $message->user->username }}</a> le <time>{{ $message->created_at->toFormattedDateString() }}</time></span>
        <figure><img src="{{ $message->user->thumb }}" alt=""></figure>
        <p>{{ $message->message }}</p>

        
        @if ( $message->user->id !== Auth::user()->id )
        <h3>Répondre</h3>
        {{ Form::open(array('route' => 'messages.store', 'method' => 'post')) }}

            {{ Form::label('objet', 'Sujet du message') . Form::text('objet','',array('placeholder' => 'titre')) }}

            {{ Form::label('message', 'Message') . Form::textarea('message','',array('placeholder' => 'Votre message...')) }}

            {{ Form::hidden('from',Auth::user()->id) }}

            {{ Form::hidden('user_id',$message->user->id) }}

            {{ Form::submit('Répondre') }}

        {{ Form::token() . Form::close() }}
        @endif

    </section>
@stop