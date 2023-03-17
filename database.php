<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'secret');
define('DB_NAME', 'portfolio_project');

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    die(mysqli_error($con));
}
?>