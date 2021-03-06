@extends('layout')

@section('container')
<div id='mySwipe' class='swipe'>
  <div class='swipe-wrap'>
    <div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide1.jpg'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, aperiam, officiis, saepe deleniti alias suscipit rem distinctio odio dignissimos totam cupiditate laborum recusandae nisi corporis minima ut expedita veritatis voluptas. <br><a href="#" class="button"><i class="icon-search"></i>info</a></div><!--     
     --></div><!-- 
     --><div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide2.jpg'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita maxime quis blanditiis dolores aliquam ad voluptatem. Aliquid, reiciendis, et inventore unde totam dignissimos eveniet! Harum nihil delectus doloremque aliquid ab. <br><a href="#" class="button"><i class="icon-search"></i>info</a></div><!--     
     --></div><!-- 
     --><div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide3.png'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, aspernatur obcaecati aut quo cum alias minus odio pariatur. Nostrum, iste culpa aut in quisquam beatae aspernatur sequi assumenda perferendis facere. <br><a href="#" class="button"><i class="icon-search"></i>info</a></div><!--     
     --></div><!-- 
     --><div><!-- 
         --><h2>Super slider</h2><figure>{{ HTML::image('img/slide4.jpg'); }}</figure><!-- 
         --><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, veniam, debitis, accusamus et labore aperiam assumenda est maxime molestiae tempore dicta quasi iure placeat modi error nihil incidunt provident ex. <br><a href="#" class="button"><i class="icon-search"></i>info</a></div><!-- 
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
    <div class="monthWrap">
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
                        @foreach ( $happenings as $happening )
                        <li>
                            <div class="name">
                                <div class="logo">
                                    {{ HTML::image('img/logo.gif'); }}
                                </div>
                                <div class="coords">
                                    <h3>{{{ $happening->name }}}</h3>
                                    <span><a href="{{ route('users.show', $happening->user->slug) }}">{{{ $happening->user->name }}}</a></span>
                                    
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
                                <p>{{ $happening->description }}}</p>
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
    <a href="{{ route('happenings.index') }}" class="button">Voir toutes les courses</a>
    </section>
    <section class="news list">
        <h2>Actualité</h2>
        <div class="big">
            @foreach($posts as $post)
                <article>
                <a href="{{ route('posts.show', $post->slug) }}"><h3>{{ $post->title }}<span><time>{{ $post->created_at->toFormattedDateString() }}</time></span></h3></a>
                <span>Catégories : 
                @foreach($post->categories as $categorie)
                    {{ $categorie->name }}
                @endforeach
                </span>
                <span>Posté par {{ $post->user->username }}</span>
                <figure><img src="{{ $post->image }}" alt=""></figure>
                <div class="text">
                    <p>{{ $post->post }}</p>
                </div>
                </article>
            @endforeach
        </div>
    </section>
    {{ HTML::script('js/swipe.js'); }}
    <script>
    var elem = document.getElementById('mySwipe');
    window.mySwipe = Swipe(elem, {
      startSlide: 1,
      //auto: 5000,
      continuous: true,
      disableScroll: true,
      stopPropagation: true,
      callback: function(index, element) {},
      transitionEnd: function(index, element) {}
    });
    </script>
@stop
