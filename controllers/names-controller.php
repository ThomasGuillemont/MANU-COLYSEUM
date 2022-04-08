<?php
    require_once(dirname(__FILE__).'/../config/pdo.php');

    try {
        // request
        $request = "SELECT `clients`.`lastName`,`clients`.`firstName`
            FROM `colyseum`.`clients`
            WHERE `lastName` LIKE 'M%' OR `lastName` LIKE 'm%'
            ORDER BY `lastName`;";
        // prepare BDD
        $sth = $sth->prepare($request);
        // execute BDD
        $sth->execute();
        $name = $sth->fetchAll();
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/names.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');