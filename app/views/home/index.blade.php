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
    <h2>Courses à venir</h2>
    <ul class="races list">
        <li class="month current">
            <h3>Octobre</h3>
            <ul>
                <div class="sevenFirst">
                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>
                </div>

                    
                <div class="others">
                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showRace') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>
                </div>
            </ul>
        </li>
    </ul>
    <a href="{{ route('listRaces') }}" class="button">Voir toutes les courses</a>
    </section>
    <section class="news">
        <h2>Actualité</h2>
        <a href="{{ route('showNews') }}"><article>
            <h3>Lormen actu <span><time>27 Octobre 2013</time></span></h3>
            <span>Posté par Pizzaiollo</span>
            <figure>{{ HTML::image('img/actu.jpeg'); }}</figure>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
            </div>
            <span>Lire la suite</span>
        </article></a>
        <a href="{{ route('showNews') }}"><article>
            <h3>Lormen actu <span><time>27 Octobre 2013</time></span></h3>
            <span>Posté par Bernardo</span>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
            </div>
            <span>Lire la suite</span>
        </article></a>
        <a href="{{ route('showNews') }}"><article>
            <h3>Lormen actu <span><time>27 Octobre 2013</time></span></h3>
            <span>Posté par Jean-Luc</span>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
            </div>
            <span>Lire la suite</span>
        </article></a>
    </section>
@stop
