@extends('layout')

@section('container')
    <section class="find club">
        <h2>Trouver un club</h2>
        <form action="http://pfe/clubs" method="POST">
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
                    <label for="entrainement">Entrainements</label>
                    <select name="entrainement" id="entrainement">
                        <option value="1">1 x semaine</option>
                        <option value="2">2 x semaine</option>
                        <option value="3">3 x semaine</option>
                        <option value="4">4 x semaine</option>
                        <option value="5">5 x semaine</option>
                        <option value="6">6 x semaine</option>
                    </select>
                    <input type="submit" value="Rechercher">
                </div>
            </fieldset>
        </form>
    </section>
@stop