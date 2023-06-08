<?php
    require_once('connect.php');
    $req=$bdd->prepare('INSERT INTO vente(idVente, dateVente, prix)VALUES(:i, :dt, :p)');
        $req->execute(array(
            'i'=>$_POST['idVente'],
            'dt'=>$_POST['dateVente'],
            'p'=>$_POST['prix']
        ));
        header('Location: principal.html');
?>