@extends('layout')

@section('container')
    <form class="findRace" action="#">
        <fieldset>
            <h3>Trouver une course</h3>
            <label for="pays">Pays</label>
            <label for="distance">Distance</label>
            
        </fieldset>
    </form>
    <section class="races">
    <h2>Courses à venir</h2>
    <ul class="racesList">
        <li class="month">
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
        <li class="month"><h3>Novembre</h3></li>
    </ul>
    </section>
    <section class="news">
        <h2>Actualité</h2>
        <a href="{{ route('showNews') }}"><article>
            <h3>Lormen actu</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, illo rem explicabo eligendi in cum voluptatem odio? Perspiciatis molestias aperiam recusandae ipsum. Earum, eum et iure molestias iusto itaque ipsum?</p>
        </article></a>
    </section>
@stop
