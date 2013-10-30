<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="fr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="fr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home | Run!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {{ HTML::script('js/modernizr.js'); }}
    {{ HTML::style('styles/screen.css'); }}
</head>
<body>
    <header>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <span class="img">{{ HTML::image('img/home1.jpg'); }}</span>
        <div class="content">
            <div class="top">
                <div id="logo"><h1>{{ link_to_route('home','Run Belgium') }} <span>Tout sur la course à pied</span></h1></div>
                <div class="user">
                    <div class="userConnexion">
                        @if(Auth::check())
                            <h3>{{ link_to_route('users.show', 'Profil' , Auth::user()->id ) }}</h3><!-- 
                             --><h3>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</h3>
                        @else
                            <h3>{{ link_to_route('login','Se connecter') }}</h3><!--  
                             --><h3>{{ link_to_route('users.create','S\'inscrire') }}</h3>
                        @endif
                        @if(Session::has('flash_notice'))
                            <div id="flash_notice"><span>{{ Session::get('flash_notice') }}</span></div>
                        @endif
                    </div>
                </div>
            </div>
            <nav role="navigation">
                <h2 class="hidden">Navigation</h2>
                <ul><!-- 
                     --><li>
                        {{ link_to_route('home','Accueil') }}
                        </li><!-- 
                     --><li>{{ link_to_route('listRaces','Courses') }}</li><!-- 
                     --><li>{{ link_to_route('listClubs','Clubs') }}</li><!-- 
                     --><li>{{ link_to_route('users.index','Users') }}</li><!-- 
                     --><li>{{ link_to_route('listNews','News') }}</li><!-- 
                     --><li>{{ link_to_route('contact','Contact') }}</li><!-- 
                 --></ul>
            </nav>
        </div>
    </header>
    <div class="content">
        <section class="container">
            <h2 class="hidden">Content</h2>
            @yield('container')
        </section>
    </div>
    <footer>
        <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, ipsam, libero magni quam rem numquam illum explicabo repellendus nulla iste mollitia fugit totam doloremque maxime voluptas deserunt quas veniam labore.</p>
        </div>
    </footer>
    {{ HTML::script('js/script.js'); }}
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>