@extends('layout')

@section('container')
    <section class="find users">
        <h2>Trouver un groupe d'entrainement</h2>
        <form action="http://pfe/users/group" method="POST">
            <fieldset>
                <div class="left">
                    <label for="pays">Pays</label>
                    <select name="pays" id="pays">
                        <option value="be">Belgique</option>
                        <option value="fr">France</option>
                        <option value="de">Allemagne</option>
                        <option value="nl">Pays-Bas</option>
                        <option value="sp">Espagne</option>
                    </select>
                    <label for="ville">Ville</label>
                    <select name="ville" id="ville">
                        <option value="Liège">Liège</option>
                        <option value="Bruxelles">Bruxelles</option>
                        <option value="Vervier">Vervier</option>
                        <option value="Ostande">Ostande</option>
                        <option value="Gand">Gand</option>
                    </select>
                </div>
                
                <div class="right">
                    <label for="entrainement">Horraire</label>
                    <select name="entrainement" id="entrainement">
                        <option value="matin">matin</option>
                        <option value="matinée">matinée</option>
                        <option value="midi">midi</option>
                        <option value="apresMidi">après midi</option>
                        <option value="soir">soir</option>
                    </select>
                    <input type="submit" value="Rechercher">
                </div>
            </fieldset>
        </form>
    </section>
    <section class="usersGroupList">
        <h2>Liste des groupes d'entrainement</h2>
        <ul class="groups list">
        <li class="month">
            <h3>Octobre</h3>
            <ul>
                <div class="sevenFirst">
                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                    <a href="{{ route('showUsersGroup') }}"><li>
                        <span class="date"><time>27 octobre 2013</time></span>
                        <h4>Marathon de Vielsalm</h4>
                        <!-- <span class="description">Marathon annuel de la ville de Vielsalm</span>
                        <span class="dist">marathon et semi</span>
                        <span class="pays">Belgique</span> -->
                    </li></a>

                </div>
            </ul>
        </li>
    </ul>
    </section>
@stop