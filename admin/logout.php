<?php

session_start();

session_unset(); //erase session variable
session_destroy(); //destroy session
header("Location:../login.php");

exit();








?>