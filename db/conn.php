<?php
   //$host='remotemysql.com';
   //$db = 'LameCF7Tti';
   //$user = 'LameCF7Tti';
   //$pass = 'y4YZ2SfLRU';
   //$charset = 'utf8mb4';
    
    
    $host='127.0.0.1';
    $db = 'paclub_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{

        $pdo = new PDO($dsn, $user, $pass);
        //echo 'The Link Set';

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }catch(PDOException $e) {
        throw new PDOException ($e ->getMessage());
        //echo"<h1 class='text-danger'>The Link Shaky... No Database found</h1>";
        

    }
    require_once 'crud.php';
    //require_once 'user.php';
   // $user = new user($pdo);
    $crud = new crud($pdo);

    //$user->insertUser("admin","password");




?>