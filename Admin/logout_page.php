<?php
session_start();

if(isset($_SESSION['admin_id'])){
    unset($_SESSION['admin_id']);
}

session_destroy();
session_unset();

header("location: login_page.php");
die;
