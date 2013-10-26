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
            <div id="logo"><h1>{{ link_to_route('home','Run Belgium') }}</h1></div>
            <div class="user">
                <div class="userSpace">{{ HTML::image('img/user.gif'); }}</div>
                <div class="userConnexion">
                    <h3>Mon compte &darr;</h3>
                    <form action="#">
                        <fieldset>
                            <legend>Connexion</legend>
                            <input type="text" name="login" id="login" value="identifiant">
                            <input type="password" name="pwd" id="pwd" value="mot de passe">
                            <a href="#">Mot de passe oublié?</a>
                            <input type="submit" value="connexion">
                            <h3>S'inscrire</h3>
                        </fieldset>
                    </form>
                </div>
            </div>
            <nav>
                <ul>
                    <li>{{ link_to_route('home','home') }}</li>
                    <li>{{ link_to_route('listRaces','Courses') }}</li>
                    <li>{{ link_to_route('listClubs','Clubs') }}</li>
                    <li>{{ link_to_route('listUsers','Utilisateurs') }}</li>
                    <li>{{ link_to_route('listNews','News') }}</li>
                    <li>{{ link_to_route('contact','Contact') }}</li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="content">
        <form class="findRace" action="#">
            <fieldset>
                <h3>Trouver une course</h3>
                <label for="pays">Pays</label>
                <label for="distance">Distance</label>
                
            </fieldset>
        </form>
    
    @yield('container')
    </section>
    {{ HTML::script('js/script.css'); }}
</body>
</html>