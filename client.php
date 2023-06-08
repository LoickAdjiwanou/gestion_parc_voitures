<?php
    require_once('connect.php');
    $req=$bdd->prepare('INSERT INTO client(name, email, telephone)VALUES(:n, :em, :tel)');
        $req->execute(array(
            'n'=>$_POST['nom'],
            'em'=>$_POST['email'],
            'tel'=>$_POST['telephone']
        ));
        header('Location: principal.html');
?>