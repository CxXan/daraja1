<?php
session_start();

if(isset($_SESSION['farmer_id'])){
    unset($_SESSION['farmer_id']);
    session_unset();
    session_destroy();
}

header("location: index.php");
die;