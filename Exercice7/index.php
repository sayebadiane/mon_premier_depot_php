<?php
?>
<form action="controleur.php" method="post">
    <div>
        <div class="joure">
            <label for="jour">Donner un jour</label>
            <input type="text" name="jour">

        </div>
        <div class="moise">
            <label for="mois">Donner un mois</label>
            <input type="text" name="mois">
        </div>
        <div class="annees">
            <label for="annee">Donner une annee</label>
            <input type="text" name="annee">
        </div>
    </div>
    <input type="submit" value="Envoyer" name="ok">

</form>