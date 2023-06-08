<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Bénéfice</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
    <center>
        <p class="titre"><font size="6px"><strong>BÉNÉFICES</strong></font></p>
        <ul>
            <li><a href="principal.html">Nouvel Enregistrement</a></li>
            <li><a href="affichage.php">Liste Voitures</a></li>
            <li><a href="recherche.php">Rechercher</a></li>
            <li><a href="">Bénéfices</a></li>
            <li><a href="clients.php">Clients</a></li>
        </ul>
    </center>
    <center class="pageb">
        <br/><br/><br/><br/>
        <table>
            <tr>
            <td><strong>Num Série</strong></td>
                <td><strong>Marque</strong></td>
                <td><strong>Modèle</strong></td>
                <td><strong>Couleur</strong></td>
                <td><strong>Prix Achat</strong></td>
                <td><strong>Prix Vente</strong></td>
                <td><strong>Bénéfice</strong></td>
            </tr>
        <?php
            require_once('connect.php');
            $req=$bdd->query('SELECT * FROM voiture');

            while($resultat=$req->fetch()){
                echo '<tr><td>'.strip_tags($resultat['numSerie']).'</td><td>'.strip_tags($resultat['marque']).'</td><td>'.strip_tags($resultat['modele']).'</td><td>'.strip_tags($resultat['couleur']).'</td><td>'.strip_tags($resultat['prixAchat']).'</td><td>'.strip_tags($resultat['prixVente']).'</td><td>'.($resultat['prixVente']-$resultat['prixAchat']).'</td></tr>';
            }
        ?>
        </table><br/>
        <form action=""><input type="submit" value="Charger"/></form><br/>
        <?php
            require_once('connect.php');
            $requ=$bdd->query('SELECT prixAchat, prixVente FROM voiture');
            $benef = 0;
            while($donnees=$requ->fetch()){
                $bene = $donnees['prixVente'] - $donnees['prixAchat'];
                $benef = $bene + $benef;
            }

            echo '<font size="4px"><strong>Le bénéfice total est de '.$benef.'.';
            if($benef<0){echo  '<br/<<font size="4px"><strong>Il y a donc perte de '.$benef.'.';}

        ?>
    </center>
</body>
</html>