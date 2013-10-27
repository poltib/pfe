<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home | Run!</title>
    {{ HTML::style('styles/screen.css'); }}
</head>
<body>
    <header>
        {{ HTML::image('img/home1.jpg'); }}
        <div class="content">
            <div class="top">
                <div id="logo"><h1>{{ link_to_route('home','Run Belgium') }}</h1></div>
                <div class="user">
                    <div class="userSpace"><a href="{{ route('showUser') }}">{{ HTML::image('img/user.gif'); }}</a></div>
                    <div class="userConnexion">
                        <h3>Mon compte &darr;</h3>
                        <form action="#">
                            <fieldset>
                                <legend>Connexion</legend>
                                <input type="text" name="login" id="login" placeholder="identifiant">
                                <input type="password" name="pwd" id="pwd" placeholder="mot de passe">
                                <a href="#">Mot de passe oublié?</a> | 
                                <input type="submit" value="connexion">
                                <h3>{{ link_to_route('register','S‘inscrire') }}</h3>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <nav role="navigation">
                <h2 class="hidden">Navigation</h2>
                <ul><!-- 
                     --><li>{{ link_to_route('home','Accueil') }}</li><!-- 
                     --><li>{{ link_to_route('listRaces','Courses') }}</li><!-- 
                     --><li>{{ link_to_route('listClubs','Clubs') }}</li><!-- 
                     --><li>{{ link_to_route('listUsers','Utilisateurs') }}</li><!-- 
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