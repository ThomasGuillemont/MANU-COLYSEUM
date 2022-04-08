<?php
    require_once(dirname(__FILE__).'/../config/config.php');

    // init error
    $error = '';
    
    // connect BDD
    try{
        $sth = new PDO(DSN, ACCOUNT, PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
    } catch (PDOException $e){
        $error .= $e->getMessage();
    }