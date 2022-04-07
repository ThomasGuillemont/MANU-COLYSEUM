<?php
    require_once(dirname(__FILE__).'/../config/config.php');
    $error = '';
    
    // connect BDD
    try{
        $sth = new PDO(DSN, ACCOUNT, PASSWORD, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
        $sth -> exec('SET NAMES utf8');
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }

    try {
        // request
        $request = 'SELECT * FROM `colyseum`.`clients` RIGHT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` WHERE `cardTypesId` LIKE 1;';
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