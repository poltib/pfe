@extends('layout')

@section('container')
    <section>
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('users.show', Auth::user()->id ) }}" >Profil</a></li><!--  
            -->@if($user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('races.create') }}">Ajouter une course</a></li><!--  
             --><li>{{ link_to_route('posts.create', 'Ajouter actu' ) }}</li><!--  
             --><li>{{ link_to_route('trainings.create', 'Ajouter un entrainement') }}</li><!--  
             --><li>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</li>
             @endif
        </ul>

        <div class="user">
            <h2>Profil de {{ $user->first_name }} {{ $user->username }}</h2>
            <div class="thumbLink">
                <figure><img src="{{ $user->thumbs }}" alt=""></figure>
                @if(Auth::check())
                    @if(Auth::user()->id===$user->id)
                    <a href="{{ route('users.edit', Auth::user()->id ) }}" class="button">Modifier</a>
                    @else
                        <a href="#" class="button">Envoyer un message</a>
                    @endif
                @endif
            </div>

            <p class="userDescription">
                {{ $user->description }}
            </p>
        </div>
        <aside class="achievement">
            <h2>Trophés</h2>
            <ul><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
                 --><li><figure>{{ HTML::image('img/tumbs.jpg'); }}</figure></li><!-- 
            --></ul>
        </aside>
    </section>
    <section class="activities">
        <h2>Récentes activitées</h2>
        <h3>Courses auquelles vous avez participé</h3>
        <h3>Entrainements réalisés en groupe</h3>
        <h3>Entrainements seul</h3>
    </section>
@stop