@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li><a href="{{ route('users.show', Auth::user()->id ) }}" >Profil</a></li><!--  
             --><li class="selected"><a href="{{ route('messages.index') }}">Messages</a></li><!-- 
             --><li><a href="{{ route('races.create') }}">Ajouter une course</a></li><!--   
             --><li>{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--  
             --><li>{{ link_to_route('trainings.create', 'Ajouter un entrainement') }}</li><!--  
             --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
             
        </ul>
        <h2>Messages</h2>
        <ul>
        @foreach($messages as $message)
            @foreach($message->to as $dest)
                @if($dest->id === Auth::user()->id)
                    <li class="comment">
                        <h3>Sujet : {{ $message->objet }}</h3>
                        <span>de <a href="{{ route('users.show', $message->user->id ) }}">{{ $message->user->username }}</a> le <time>{{ $message->created_at->toFormattedDateString() }}</time></span>
                        <p>{{ $message->message }}</p>
                        {{ Form::open(array('route' => 'messages.store', 'method' => 'post')) }}

                            {{ Form::label('objet', 'Sujet du message') . Form::text('objet','',array('placeholder' => 'titre')) }}

                            {{ Form::label('message', 'Message') . Form::textarea('message','',array('placeholder' => 'Votre message...')) }}

                            {{ Form::hidden('from',Auth::user()->id) }}

                            {{ Form::hidden('user_id',$message->user->id) }}

                            {{ Form::submit('Répondre') }}

                        {{ Form::token() . Form::close() }}
                    </li>
                @endif
            @endforeach
        @endforeach
        </ul>
    </section>
@stop