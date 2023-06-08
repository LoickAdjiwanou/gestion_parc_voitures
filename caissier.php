<?php
    require_once('connect.php');
    $req=$bdd->prepare('INSERT INTO caissier(name)VALUES(:nn)');
        $req->execute(array(
            'nn'=>$_POST['nomCaissier']
        ));
        header('Location: principal.html');
?>