<?php

function check_farmer_login($connection){
    if(isset($_SESSION['farmer_id'])){
        $id = $_SESSION['farmer_id'];
        $frm_qry = "SELECT * FROM user_create_account WHERE id='$id' LIMIT 1";
        $frm_res = mysqli_query($connection, $frm_qry);
        if($frm_res && mysqli_num_rows($frm_res) > 0){
            $farmer_data = mysqli_fetch_assoc($frm_res);
            return $farmer_data;
        }
    }
    // redirect to login
    header("location: login.php");
    die;
}