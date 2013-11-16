<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="fr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="fr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> | Run!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {{ HTML::script('js/modernizr.js'); }}
    {{ HTML::style('styles/screen.css'); }}
    {{ HTML::style('styles/fontello.css'); }}
    {{ HTML::style('styles/animation.css'); }}
    <!--[if IE 7]>
    {{ HTML::style('styles/fontello-ie7.css'); }}
    <![endif]-->
</head>
<body>
    <header>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <div id="logo"><h1>{{ link_to_route('home','Run Belgium') }}</h1></div>
            <nav role="navigation">
                <h2 class="hidden">Navigation</h2>
                <ul class="primary"><!-- 
                    --><li><a href="#"><i class="icon-search"></i>Rechercher</a>
                        <ul class="secondary"><!--
                            --><li><a href="{{ route('races.index') }}"><i class="icon-pitch"></i>Courses</a></li><!-- 
                            --><li><a href="{{ route('listClubs') }}"><i class="icon-users"></i>Clubs</a></li><!-- 
                           --><li>{{ link_to_route('users.index','Users') }}</li><!-- -->         
                        </ul>
                    </li><!-- 
                    --><li><a href="#"><i class="icon-book"></i>Blog</a>
                        <ul class="secondary"><!--
                            --><li><a href="{{ route('posts.index') }}"><i class="icon-newspaper"></i>Actu</a></li><!-- 
                            --><li><a href="#"><i class="icon-address"></i>Conseils</a></li><!-- 
                            --><li><a href="{{ route('trainings.index') }}"><i class="icon-chart-area"></i>Entrainements</a></li><!--         
                    --></ul>
                    </li><!--
                    -->@if(Auth::check())<!--
                        --><li>{{ link_to_route('users.show', 'Profil' , Auth::user()->id ) }}</li><!--
                    -->@else<!--
                        --><li>{{ link_to_route('login','Connexion') }}</li><!--
                    -->@endif<!--  
                        --></li><!-- 
                        --><li><a href="{{ route('contact') }}"><i class="icon-phone"></i>Contact</a></li><!-- 
                --></ul>
            </nav>
        </div>
        @if(Session::has('flash_notice'))
            <div id="flash_notice"><span>{{ Session::get('flash_notice') }}</span></div>
        @endif 
    </header>
    <div class="cont">
        <section class="container">
            <h2 class="hidden">Content</h2>
            @yield('container')
        </section>
    </div>
    <footer>
        <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.</p>
        </div>
    </footer>
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHJ3p-sn1Y5tJGrzH9MF5cbR5sdsDmhfg&sensor=true"></script>
    {{ HTML::script('js/script.js'); }}
</body>
</html>