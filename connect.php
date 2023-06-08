<?php
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=gestionvoitures','root','');
    }
    catch(Exception $e){
        die('Erreur: '.$e);
    }
?>