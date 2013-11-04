@extends('layout')

@section('container')
<div id='mySwipe' class='swipe'>
  <div class='swipe-wrap'>
    <div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide1.jpg'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, aperiam, officiis, saepe deleniti alias suscipit rem distinctio odio dignissimos totam cupiditate laborum recusandae nisi corporis minima ut expedita veritatis voluptas. <br><a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a></div><!--     
     --></div><!-- 
     --><div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide2.jpg'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maxime quis blanditiis dolores aliquam ad voluptatem. Aliquid, reiciendis, et inventore unde totam dignissimos eveniet! Harum nihil delectus doloremque aliquid ab. <br><a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a></div><!--     
     --></div><!-- 
     --><div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide3.png'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, aspernatur obcaecati aut quo cum alias minus odio pariatur. Nostrum, iste culpa aut in quisquam beatae aspernatur sequi assumenda perferendis facere. <br><a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a></div><!--     
     --></div><!-- 
     --><div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide4.jpg'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, veniam, debitis, accusamus et labore aperiam assumenda est maxime molestiae tempore dicta quasi iure placeat modi error nihil incidunt provident ex. <br><a href="{{ route('showRace') }}" class="button"><i class="icon-search"></i>info</a></div><!-- 
     --></div><!-- 
   --></div>
  <div class="swipeCommand">

  <a href="#" onclick='mySwipe.prev()' class="prev"><</a> 
  <a href="#" onclick='mySwipe.next()' class="next">></a>


</div>
</div>
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
    <a href="{{ route('listRaces') }}" class="button">Voir toutes les courses</a>
    </section>
    <section class="news">
        <h2>Actualité</h2>
        <article>
            <a href="{{ route('showNews') }}"><h3>Lormen actu <span><time>27 octobre 2013</time></span></h3></a>
            <span>Posté par Pizzaiollo</span>
            <figure>{{ HTML::image('img/actu.jpeg'); }}</figure>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
            </div>
            <span>Lire la suite</span>
        </article>
        <article>
            <a href="{{ route('showNews') }}"><h3>Lormen actu <span><time>27 octobre 2013</time></span></h3></a>
            <span>Posté par Bernardo</span>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
            </div>
            <span>Lire la suite</span>
        </article>
        <article>
            <a href="{{ route('showNews') }}"><h3>Lormen actu <span><time>27 octobre 2013</time></span></h3></a>
            <span>Posté par Jean-Luc</span>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
            </div>
            <span>Lire la suite</span>
        </article>
    </section>
@stop
