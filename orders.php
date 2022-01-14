<?php
session_start();
include("db_conn.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony Sugar | Orders</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="dashboard">
        <nav class="dash_nav flex-row">
            <div class="flex-row" style="align-items: center;">
                <div class="nav_image">
                    <a href="dashboard.php">
                        <img src="https://images.unsplash.com/photo-1545361367-3202270671e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="image logo">
                    </a>
                </div>
                <h3 style="color: #fff; margin-left: .5rem; text-transform:capitalize;">sony sugar</h3>
            </div>
            <h2>order summary</h2>
            <div>
                <a href="#" class="btn btn-rpt">Download report</a>
                <!-- <a href="logout.php" class="btn btn-signOut">sign out</a> -->
            </div>
        </nav> 

        <div class="order_div">
            <div class="ovfl">
                <?php 
                $orders_qy = mysqli_query($connection, "select * from orders");
                if($orders_qy && mysqli_num_rows($orders_qy)>0){
                ?>
                <div class="case_data_sty flex-row">
                    <p>order no - <span>03</span> :</p>
                    <p>order name, I have made an order to buy the fertilizers here from the company website.</p>
                </div>
                <?php
                }
                else{
                    ?>
                <div class="case_data_sty p-align flex-row">
                    <p style="margin-left: 30rem; letter-spacing: 2.4px;">NO ORDERS TO DISPLAY.</p>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>


    </div>
    <script src="./js/main.js"></script>
</body>
</html>