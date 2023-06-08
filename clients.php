<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Clients</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
    <center>
        <p class="titre"><font size="6px"><strong>CLIENTS</strong></font></p>
        <ul>
            <li><a href="principal.html">Nouvel Enregistrement</a></li>
            <li><a href="">Liste Voitures</a></li>
            <li><a href="recherche.php">Rechercher</a></li>
            <li><a href="Bénéfice.php">Bénéfices</a></li>
            <li><a href="clients.php">Clients</a></li>
        </ul>
    </center>
    <center class="pagec">
    <br/><br/><br/><br/>
    <table>
        <tr>
            <td><strong>Id</strong></td>
            <td><strong>Nom</strong></td>
            <td><strong>E-mail</strong></td>
            <td><strong>Téléphone</strong></td>
        </tr>
    <?php
        require_once('connect.php');
        $req=$bdd->query('SELECT * FROM client');

        while($resultat=$req->fetch()){
            echo '<tr><td>'.strip_tags($resultat['idClient']).'</td><td>'.strip_tags($resultat['name']).'</td><td>'.strip_tags($resultat['email']).'</td><td>'.strip_tags($resultat['telephone']).'</td></tr>';
        }
    ?>
    </table><br/>
    <form action=""><input type="submit" value="Charger"/></form>
    </center>
</body>
</html>