@extends('layout')

@section('container')

    <section class="find race">
        <ul class="secondaryNav"><!-- 
             --><li class="selected"><a href="{{ route('happenings.index') }}"><i class="icon-pitch"></i>Courses</a></li><!--  
             --><li><a href="{{ route('teams.index') }}"><i class="icon-users"></i>Clubs</a></li><!--  
             --><li>{{ link_to_route('users.index','Users') }}</li>
        </ul>
        <h2>Trouver une course</h2>
        <form action="http://pfe" method="POST">
            <fieldset>
                <div class="left">
                    <label for="pays">Pays</label>
                    <select name="pays" id="pays">
                        <option value="be">Belgique</option>
                        <option value="fr">France</option>
                        <option value="de">Allemagne</option>
                        <option value="nl">Pays-Bas</option>
                        <option value="sp">Espagne</option>
                    </select>
                    <label for="ville">Ville</label>
                    <select name="ville" id="ville">
                        <option value="Liège">Liège</option>
                        <option value="Bruxelles">Bruxelles</option>
                        <option value="Vervier">Vervier</option>
                        <option value="Ostande">Ostande</option>
                        <option value="Gand">Gand</option>
                    </select>
                </div>
                
                <div class="right">
                    <label for="distance">Distance</label>
                    <select name="distance" id="distance">
                        <option value="5">5km</option>
                        <option value="10">10km</option>
                        <option value="15">15km</option>
                        <option value="20">20km</option>
                        <option value="semi">Semi-Marathon</option>
                        <option value="marathon">Marathon</option>
                    </select>
                    <label for="date">Date</label>
                    <input type="date" id="date" placeholder="jj/mm/aaaa">
                    <input type="submit" value="Rechercher">
                </div>
            </fieldset>
        </form>
    </section>
    <section class="races">
    <h2>Liste des courses</h2>
    <div class="monthNav">
    <a href="#wrap1" class="prevMonth">Mois précédant</a>
    <a href="#wrap2" class="nextMonth">Mois Suivant</a>
    </div>
    <div class="monthWrap">
        <a id="wrap1" class="ancre"></a> 
        <a id="wrap2" class="ancre"></a>

        <div class="raceMonth">
            <ul class="races list">
                <li class="month">
                    <h3>Octobre</h3>
                    <ul>
                        <li>
                            <div class="name">Nom</div>
                            <div class="date">Date et distances</div>
                            <div class="location">Localisation</div>
                            <div class="description">Description</div>
                            <div class="link">Liens</div>
                        </li>
                        @foreach($happenings as $happening)
                        <li>
                            <div class="name">
                                <div class="logo">
                                    {{ HTML::image('img/logo.gif'); }}
                                </div>
                                <div class="coords">
                                    <h3>{{ $happening->name }}</h3>
                                    <span><a href="#">{{ $happening->link }}</a></span>
                                    
                                </div>
                            </div>
                            <div class="date">
                                27 octobre 2013
                                <p><a href="#" class="button">10km</a> <a href="#" class="button">20km</a></p>
                            </div>
                            <div class="location">
                                <p>Belgique</p>
                                <p>Liège</p>
                            </div>
                            <div class="description">
                                <p>{{ $happening->description }}</p>
                            </div>
                            <div class="link">
                                <a href="{{ route('happenings.show', $happening->slug) }}" class="button"><i class="icon-search"></i>info</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    </section>

@stop