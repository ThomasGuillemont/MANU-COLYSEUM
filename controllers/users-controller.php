<?php
    require_once(dirname(__FILE__).'/../config/pdo.php');

    try {
        // request
        $request = 'SELECT `firstName`,`lastName`,`id`,`birthDate`
        FROM `colyseum`.`clients`';
        // prepare BDD
        $sth = $sth->prepare($request);
        // execute BDD
        $sth->execute();
        $user = $sth->fetchAll();
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/users.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');