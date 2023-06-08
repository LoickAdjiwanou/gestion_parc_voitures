<?php
    require_once('connect.php');
    $req=$bdd->prepare('INSERT INTO voiture(numSerie, marque, modele, couleur, prixAchat, prixVente)VALUES(:ns, :marq, :mod, :coul, :pa, :pv)');
        $req->execute(array(
            'ns'=>$_POST['numSerie'],
            'marq'=>$_POST['marque'],
            'mod'=>$_POST['modele'],
            'coul'=>$_POST['couleur'],
            'pa'=>$_POST['prixAchat'],
            'pv'=>$_POST['prixVente']
        ));
        header('Location: principal.html');
?>