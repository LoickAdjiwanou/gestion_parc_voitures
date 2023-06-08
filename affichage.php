<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Stock Voitures</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
    <center>
        <p class="titre"><font size="6px"><strong>VOITURES DISPONIBLES</strong></font></p>
        <ul>
            <li><a href="principal.html">Nouvel Enregistrement</a></li>
            <li><a href="">Liste Voitures</a></li>
            <li><a href="recherche.php">Rechercher</a></li>
            <li><a href="Bénéfice.php">Bénéfices</a></li>
            <li><a href="clients.php">Clients</a></li>
        </ul>
    </center>
    <center class="pagel">
        <br/><br/><br/><br/>
        <table>
            <tr>
                <td><strong>Num Série</strong></td>
                <td><strong>Marque</strong></td>
                <td><strong>Modèle</strong></td>
                <td><strong>Couleur</strong></td>
                <td><strong>Prix Achat</strong></td>
                <td><strong>Prix Vente</strong></td>
            </tr>
        <?php
            require_once('connect.php');
            $req=$bdd->query('SELECT * FROM voiture');

            while($resultat=$req->fetch()){
                echo '<tr><td>'.strip_tags($resultat['numSerie']).'</td><td>'.strip_tags($resultat['marque']).'</td><td>'.strip_tags($resultat['modele']).'</td><td>'.strip_tags($resultat['couleur']).'</td><td>'.strip_tags($resultat['prixAchat']).'</td><td>'.strip_tags($resultat['prixVente']).'</td></tr>';
            }
        ?>
        </table><br/>
        <form action=""><input type="submit" value="Charger"/></form>
    </center>
</body>
</html>