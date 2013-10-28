@extends('layout')

@section('container')
    <section class="news list">
        <h2>Liste des nexs</h2>
        <div class="big">
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
            
        </div>
        <aside>
            <a href="{{ route('showNews') }}"><article>
            <h3>Lormen actu <span><time>27 Octobre 2013</time></span></h3>
            <span>Posté par Jean-Luc</span>
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
            
        </aside>
    </section>
@stop