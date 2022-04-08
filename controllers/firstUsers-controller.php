<?php
    require_once(dirname(__FILE__).'/../config/pdo.php');

    try {
        // request
        $request = 'SELECT `firstName`,`lastName`,`birthDate`,`id`
            FROM `colyseum`.`clients`
            LIMIT 20;';
        // prepare BDD
        $sth = $sth->prepare($request);
        // execute BDD
        $sth->execute();
        $firstUser = $sth->fetchAll();
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/firstUsers.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');