@extends('layout')

@section('container')
    <section class="news list">
        <h2>Liste des news</h2>
        <div class="big">
            <article>
            <a href="{{ route('showNews') }}"><h3>Lormen actu <span><time>27 octobre 2013</time></span></h3></a>
            <span>Posté par Pizzaiollo</span>
            <figure>{{ HTML::image('img/actu.jpeg'); }}</figure>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
            </div>
            {{ link_to_route('showNews', 'lire la suite') }}
            </article>

            <article>
            <a href="{{ route('showNews') }}"><h3>Lormen actu <span><time>27 octobre 2013</time></span></h3></a>
            <span>Posté par Pizzaiollo</span>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
            </div>
            {{ link_to_route('showNews', 'lire la suite') }}
            </article>

            <article>
            <a href="{{ route('showNews') }}"><h3>Lormen actu <span><time>27 octobre 2013</time></span></h3></a>
            <span>Posté par Pizzaiollo</span>
            <figure>{{ HTML::image('img/actu.jpeg'); }}</figure>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, commodi, iusto, hic ipsum voluptatum deserunt vero illo molestiae asperiores error odio minima maxime vel quas possimus? Harum natus in tenetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
            </div>
            {{ link_to_route('showNews', 'lire la suite') }}
            </article>
            
        </div>
        <aside>
            <h3>Catégories</h3>
            <h4>Conseils</h4>
            <ul>
                <li><a href="#">Bien choisir ses chaussures</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
                <li><a href="#">Plop</a></li>
            </ul>
            <h4>Entrainements</h4>
            
        </aside>
    </section>
@stop