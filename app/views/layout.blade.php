<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home | Run!</title>
    {{ HTML::style('styles/screen.css'); }}
</head>
<body>
    <header>
        {{ HTML::image('img/home.png'); }}
        <div class="content">
            <div id="logo"><h1>{{ link_to_route('home','Run Belgium') }}</h1></div>
            <div class="connexion">
                <div>{{ HTML::image('img/user.gif'); }}</div>
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
    
    @yield('container')
    </section>
</body>
</html>