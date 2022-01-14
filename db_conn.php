<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'fms_db';

if(!$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)){
    die("connection failed");
}
