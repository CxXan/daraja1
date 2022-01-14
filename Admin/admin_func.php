<?php

function admin_check($connection){
    if(isset($_SESSION['admin_id'])){
        $admid = $_SESSION['admin_id'];
        $admquery = mysqli_query($connection, "select * from admin where admin_id='$admid' limit 1");
        if($admquery && mysqli_num_rows($admquery)>0){
            $check_admin = mysqli_fetch_assoc($admquery);
            return $check_admin;
        }
    }

    header("location: login_page.php");
    die;
}