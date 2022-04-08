<?php
    require_once(dirname(__FILE__).'/../config/pdo.php');

    try {
        // request
        $request = 'SELECT *
        FROM `colyseum`.`shows`
        ORDER BY `title`;';
        // prepare BDD
        $sth = $sth->prepare($request);
        // execute BDD
        $sth->execute();
        $showTitle = $sth->fetchAll();
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }

    // views
    include(dirname(__FILE__) .'/../views/templates/header.php');
    include(dirname(__FILE__) .'/../views/showsTitles.php');
    include(dirname(__FILE__) .'/../views/templates/footer.php');