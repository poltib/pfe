@section('container')
    <section class="show">
        <ul class="secondaryNav"><!-- 
             --><li><a href="{{ route('users.show', Auth::user()->slug ) }}" >Profil</a></li><!--  
             --><li class="selected"><a href="{{ route('messages.index') }}">Messages</a></li><!-- 
             --><li><a href="{{ route('happenings.create') }}">Ajouter une course</a></li><!--   
             --><li>{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--  
             --><li>{{ link_to_route('trainings.create', 'Ajouter un entrainement') }}</li><!--  
             --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
             
        </ul>

        <h3>Envoyer un message</h3>
        {{ Form::open(array('route' => 'messages.store', 'method' => 'post')) }}

            {{ Form::label('objet', 'Sujet du message') . Form::text('objet','',array('placeholder' => 'titre')) }}

            {{ Form::label('message', 'Message') . Form::textarea('message','',array('placeholder' => 'Votre message...')) }}

            {{ Form::hidden('from',Auth::user()->id) }}

            {{ Form::hidden('user_id',$user_id) }}

            {{ Form::submit('Répondre') }}

        {{ Form::token() . Form::close() }}
        </section>
@stop