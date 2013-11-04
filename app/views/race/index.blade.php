@extends('layout')

@section('container')

    <section class="find race">
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
    <ul class="races list">
        <li class="month current">
            <h3>Octobre</h3>
            <ul>
                <li>
                    <div class="name">Nom</div>
                    <div class="date">Date et distances</div>
                    <div class="location">Localisation</div>
                    <div class="description">Description</div>
                    <div class="link">Liens</div>
                </li>
                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="month current">
            <h3>Octobre</h3>
            <ul>
                <li>
                    <div class="name">Nom</div>
                    <div class="date">Date et distances</div>
                    <div class="location">Localisation</div>
                    <div class="description">Description</div>
                    <div class="link">Liens</div>
                </li>
                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>

                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>
                <li>
                    <div class="name">
                        <div class="logo">
                            {{ HTML::image('img/logo.gif'); }}
                        </div>
                        <div class="coords">
                            <h3>Jogging de Liège</h3>
                            <span><a href="#">www.joggingLiege.be</a></span>
                            
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="link">
                        <a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    </section>
@stop