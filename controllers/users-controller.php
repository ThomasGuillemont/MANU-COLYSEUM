<?php

    // connect BDD
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'root', '');
        $bdd -> exec('SET NAMES utf8');
    }
    catch (PDOException $e){
        echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
    }

    // request
    $request = 'SELECT * FROM `colyseum`.`clients`';
    // prepare BDD
    $sql = $bdd->prepare($request);
    // execute BDD
    $sql->execute();
    $users = $sql->fetchAll();

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/users.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');