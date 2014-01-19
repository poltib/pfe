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
                    --><li><a href="{{ route('happenings.index') }}"><i class="icon-search"></i>Rechercher</a></li><!-- 
                    --><li><a href="{{ route('posts.index') }}"><i class="icon-book"></i>News</a></li><!--
                    -->@if(Auth::check())<!--
                        --><li><a href="{{ route('users.show', Auth::user()->slug ) }}"><i class="icon-user" ></i>Profil ({{{ Auth::user()->username }}})</a></li><!--
                    -->@else<!--
                        --><li><a href="{{ route('login') }}"><i class="icon-login"></i>Connexion</a></li><!--
                    -->@endif<!--  
                        --></li><li><a href="{{ route('logout') }}"><i class="icon-logout" ></i>Déconnexion</a></li>
              </ul>
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
        <div id='layout_footer'></div>
    </div>
    <footer role="footer" id="footer">
        <div class="container">
            <div class="footDiv">
                <h3>Conditions</h3>
                <ul>
                    <li>Lorem</li>
                    <li>Ipsum</li>
                    <li>Ypslis</li>
                </ul>
            </div>
            <div class="footDiv">
                <h3>Information</h3>
                <ul>
                    <li>Condition</li>
                    <li>Contact</li>
                    <li>Salut</li>
                </ul>
            </div>
            <div class="social">
                <h3>Réseaux sociaux</h3>
                <ul>
                    <li><a href="#"><i class="icon-youtube-squared" ></i></a></li>
                    <li><a href="#"><i class="icon-twitter-squared" ></i></a></li>
                    <li><a href="#"><i class="icon-facebook-squared" ></i></a></li>
                    <li><a href="#"><i class="icon-gplus-squared" ></i></a></li>
                    <li><a href="#"><i class="icon-rss-squared" ></i></a></li>
                </ul>
                
            </div>


        </div>
    </footer>



    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA9m3Ix3AmZHlnvQCQAIUo4yyFjD7c9eLw&sensor=true">
    </script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    {{ HTML::script('js/tinymce/tinymce.min.js'); }}
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea.post",
        plugins: [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
    });
    </script>
    {{ HTML::script('js/script.js'); }}
    {{ HTML::script('js/trainings.js'); }}
</body>
</html>