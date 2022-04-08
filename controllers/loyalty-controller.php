<?php
    require_once(dirname(__FILE__).'/../config/pdo.php');

    try {
        // request
        $request = 'SELECT `clients`.`firstName`,`clients`.`lastName`,`clients`.`id`,`clients`.`cardNumber`
            FROM `colyseum`.`clients` JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`
            WHERE `cardTypesId` LIKE 1;';
        // prepare BDD
        $sth = $sth->prepare($request);
        // execute BDD
        $sth->execute();
        $loyalty = $sth->fetchAll();
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/loyalty.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');