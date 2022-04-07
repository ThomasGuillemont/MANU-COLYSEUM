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
    $request = 'SELECT * FROM `colyseum`.`showtypes`';
    // prepare BDD
    $sql = $bdd->prepare($request);
    // execute BDD
    $sql->execute();
    $showsTypes = $sql->fetchAll();

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/shows.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');