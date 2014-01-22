@extends('layout')

@section('container')
    <section class="show">
        <ul class="secondaryNav"><!--
            -->@if(Auth::check() && $happening->user->id === Auth::user()->id)<!--  
             --><li><a href="{{ route('happenings.edit', $happening->id ) }}"><i class="icon-edit" ></i>Modifier la course</a></li><!--  
             --><li><a href="{{ route('happenings.destroy', $happening->id ) }}"><i class="icon-cancel" ></i>Supprimer la course</a></li>
             @endif
        </ul>
        <h2>{{ $happening->name }} | <span>{{{ $happening->date->toFormattedDateString() }}}</span></h2>
        <p>{{ $happening->description }}</p>
        <p>{{ $happening->user->username }}</p>
        <a href="/download/{{ $happening->file_name }}">lien</a>
        <div id="happening-map"></div>
        <div id="elevation_chart"></div>
        <aside class="sponsors">
            <h3><i class="icon-globe" ></i>Sponsors</h3>
            
            <ul>
                @foreach($happening->sponsors as $sponsor)
                    <li class="sponsor">
                        <figure>
                            <img src="{{ $sponsor->thumb }}" alt="{{ $sponsor->name }}">
                            <p class="sponsorName">{{ $sponsor->name }}</p>
                        </figure>
                    </li>
                @endforeach
            </ul>
        </aside>
        <ul id="trajet">
            @foreach($happeningPoints as $point)
                <li>
                    <span class="lat">{{ $point[0] }}</span><span class="lon">{{ $point[1] }}</span>
                </li>
            @endforeach
        </ul>
        <div class="information">
            <h3><i class="icon-info-circled" ></i>Informations</h3>
            <table>
                <tbody>
                    <tr>
                        <td>Distances</td>
                        <td>10km</td>
                        <td>20km</td>
                        <td>30km</td>
                    </tr>
                    <tr>
                        <td>Tarifs</td>
                        <td>15€</td>
                        <td>20€</td>
                        <td>30€</td>
                    </tr>
                </tbody>
            </table>
            <ul>
                <li><span>Adresse:</span><span class="address">{{ $happening->address }}</span></li>
                <li>
                    <a href="#" class="button">Inscription</a> 
                    <a href="#" class="button">Suivre</a> 
                    <a href="#" class="button">Partager</a>
                    @if(Auth::check())
                        @if(Auth::user()->happeningParticip()->where('happening_id', '=', $happening->id)->first())
                            {{ Form::open(array('method' => 'post', 'route' => array('dontParticip', $happening->slug) , 'class' => 'particip')) }}

                                {{ Form::hidden('user_id',Auth::user()->id) }}
                                
                                {{ Form::hidden('happening_id',$happening->id) }}
                                
                                {{ Form::submit('Ne plus participer',array('class' => 'particip')) }}
                            
                            {{ Form::close() }}
                        @else
                            {{ Form::open(array('route' => array('particip', $happening->slug), 'method' => 'post', 'class' => 'particip')) }}

                            {{ Form::hidden('user_id',Auth::user()->id) }}

                            {{ Form::hidden('happening_id',$happening->id) }}

                            {{ Form::submit('Participer',array('class' => 'particip')) }}

                            {{ Form::token() . Form::close() }}
                        @endif
                    @endif


                </li>
            </ul>

            <h3><i class="icon-users" ></i>Utilisateurs participant</h3>
            <ul class="participants">
                @foreach($happening->users as $user)
                    <li><a href="{{ route('users.show', $user->slug ) }}"><figure><img src="{{ $user->thumb }}" alt="{{ $user->username }}"></figure></a></li>
                @endforeach
            </ul>

            <h3>Gallerie</h3>
            <ul class="participants">
                @foreach($happening->photos as $photo)
                    <li><figure><img src="{{ $photo->image }}" alt=""></figure></li>
                @endforeach
            </ul>
            
        </div>
    </section>
@stop