<?php
    session_start();

    // define('BASE_URL', 'http://localhost/blog_manegement/');
    define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . basename(__DIR__) . '/');
    //echo  $_SERVER['HTTP_HOST'];
    
    //define('ROOT', 'D:/xampp/htdocs/blog_manegement/');

    define('ROOT', __DIR__ . '/'); //show current directory
     //echo ROOT;
     define("PATH",__FILE__); //show current file
    // echo PATH;

    $host     = 'localhost';
    $db_name  = 'blog_manegement';
    $username = 'root';

    $password = '';

    $db = mysqli_connect($host, $username, $password, $db_name);
    if ($db) {
        // echo 'Database Connection Succefully';
    } else {
        die("Something went wrong!! Error: " . mysqli_connect_error());
    }
