<?php
    require_once(dirname(__FILE__).'/../config/pdo.php');

    try {
        // request
    $request = 'SELECT `firstName`,`lastName`,`id`,DATE_FORMAT(`birthDate`, "%d-%m-%Y") AS birthDate,`cardNumber`,`card`
        -- IF(`cards`.cardTypeId = 1, "oui", "non") as fidelity,
        FROM `colyseum`.`clients`
        -- LEFT JOIN `colyseum`.`cards`
        -- ON `clients`.`cardNumber` = ``cards`.`cardNumber`
        ORDER BY `lastName`;';
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
    include(dirname(__FILE__) .'/../views/userInfo.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');