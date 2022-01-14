<?php
session_start();
include("../db_conn.php");
include("admin_func.php");

$check_admin = admin_check($connection);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Sony Sugar Factory MIS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="dashboard">
        <nav class="dash_nav flex-row">
            <div class="flex-row" style="align-items: center;">
                <div class="nav_image">
                    <a href="admin_page.php">
                        <img src="https://images.unsplash.com/photo-1545361367-3202270671e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="image logo">
                    </a>
                </div>
                <h3 style="color: #fff; margin-left: .5rem; text-transform:capitalize;">sony sugar</h3>
            </div>
            <div class="trans_recrs">
                <a href="pay_farmers.php">Make payments</a>
                <a href="farmer_details.php">farmers registered details</a>
            </div>
            <a href="logout_page.php" class="btn btn-signOut">sign out</a>
        </nav> 

        <div class="rstDiv">
            <?php
            $admin_details = mysqli_query($connection, "select * from admin where admin_id={$_SESSION['admin_id']}");
            if($admin_details && mysqli_num_rows($admin_details)>0){
                while($details = mysqli_fetch_assoc($admin_details)){
                    $id_adm = $details['admin_id'];
                    $mail_adm = $details['admin_email'];
                    ?>
            <div class="case_data admin_case">
                <h2>Your admin details.</h2>
                <h2>Admin Id</h2>
                <p><?php echo "syadm". $id_adm; ?></p>
                <h2>Admin email address</h2>
                <p><?php echo $mail_adm; ?></p>
            </div>
                    <?php
                }
            }
            ?>
            <div class="case_data admin_case">
                <h2>No. of farmers</h2>
                <?php
                $num_farmers = mysqli_query($connection, "select * from user_create_account");
                if($num_farmers && mysqli_num_rows($num_farmers)>0){
                    $num_f = mysqli_num_rows($num_farmers);
                    ?>
                <div class="lcc">
                    <h2><?php echo $num_f; ?></h2>
                </div>
                    <?php
                }
                else{
                    ?>
                    <div class="lcc">
                        <h2>0</h2>
                    <?php
                }
                ?>
            </div>
            <div class="case_data admin_case">
                <h2>orders received & payed</h2>
                <?php
                $num_orders = mysqli_query($connection, "select * from orders");
                if($num_orders && mysqli_num_rows($num_orders)>0){
                    $num_r = mysqli_num_rows($num_orders);
                    ?>
                <div class="lcc">
                    <h2><?php echo $num_r; ?></h2>
                </div>
                    <?php
                }
                else{
                    ?>
                    <div class="lcc">
                        <h2>0</h2>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>