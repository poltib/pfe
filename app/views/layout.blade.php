<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home | Run!</title>
    {{ HTML::style('styles/screen.css'); }}
</head>
<body>
    <header>
        <span class="img">{{ HTML::image('img/home1.jpg'); }}</span>
        <div class="content">
            <div class="top">
                <div id="logo"><h1>{{ link_to_route('home','Run Belgium') }} <span>Tout sur la course à pied</span></h1></div>
                <div class="user">
                    <div class="userConnexion">
                        @if(Auth::check())
                            <h3>{{ link_to_route('profile', 'Profil' ) }}</h3><!-- 
                             --><h3>{{ link_to_route('notification', 'Notif' ) }}</h3><!-- 
                             --><h3>{{ link_to_route('logout', 'Déconnexion ('.Auth::user()->username.')') }}</h3>
                        @else
                            <h3>{{ link_to_route('login','Se connecter') }}</h3><!--  
                             --><h3>{{ link_to_route('register','S‘inscrire') }}</h3>
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
                     --><li>{{ link_to_route('home','Accueil') }}</li><!-- 
                     --><li>{{ link_to_route('listRaces','Courses') }}</li><!-- 
                     --><li>{{ link_to_route('listClubs','Clubs') }}</li><!-- 
                     --><li>{{ link_to_route('listUsersGroup','Courir en groupe') }}</li><!-- 
                     --><li>{{ link_to_route('listNews','News') }}</li><!-- 
                     --><li>{{ link_to_route('contact','Contact') }}</li><!-- 
                 --></ul>
            </nav>
        </div>
    </header>
    <div class="content">
        <section>
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
</body>
</html>