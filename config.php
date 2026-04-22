<?php
    session_start();
    define("BASE_URL", "http://localhost/Blog-raw-php/"); //set base url
    $host     = 'localhost';
    $db_name  = 'blog_manegement';
    $username = 'root';

    $password = '';

    $db = mysqli_connect($host, $username, $password, $db_name);
    if($db){
    // echo 'Database Connection Succefully';
    }else{
        die("Something went wrong!! Error: " . mysqli_connect_error());
    }