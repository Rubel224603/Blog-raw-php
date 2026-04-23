<?php
    session_start();
    // define("BASE_URL", "http://localhost/blog_manegement/"); //set base url
    //define('BASE_URL', 'http://localhost/blog_manegement/');
    define('BASE_URL', 'http://localhost/blog_manegement/');
    define('ROOT', 'D:/xampp/htdocs/blog_manegement/');

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
