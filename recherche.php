<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Recherche Voiture</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
    <center>
        <p class="titre"><font size="6px"><strong>RECHERCHER UNE VOITURE</strong></font></p>
        <ul>
            <li><a href="principal.html">Nouvel Enregistrement</a></li>
            <li><a href="affichage.php">Liste Voitures</a></li>
            <li><a href="">Rechercher</a></li>
            <li><a href="bénéfice.php">Bénéfices</a></li>
            <li><a href="clients.php">Clients</a></li>
        </ul>
    </center>
    <center class="pager">
        <br/><br/><br/><br/>
        <form method="POST" action="">
            <p>
                Entrez un numéro de Série:
                <input type="text" id="text" name="text" required="required"/>
                <input type="submit" value="Rechercher"/>
            </p>    
        </form>
        <br/>
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
            $req=$bdd->prepare('SELECT * FROM voiture WHERE numSerie = :num');
            @$req->execute(array(
                'num'=>$_POST['text']
            ));

            while($resultat=$req->fetch()){
                echo '<tr><td>'.strip_tags($resultat['numSerie']).'</td><td>'.strip_tags($resultat['marque']).'</td><td>'.strip_tags($resultat['modele']).'</td><td>'.strip_tags($resultat['couleur']).'</td><td>'.strip_tags($resultat['prixAchat']).'</td><td>'.strip_tags($resultat['prixVente']).'</td></tr>';
            }

            $req->closeCursor();
            
        ?>
        </table><br/>
    </center>
</body>
</html>