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
            <a href="logout_page.php" class="btn btn-signOut">sign out</a>
        </nav> 
        <div class="details_farmer_div">
            <div class="farmer_div">
                <p>#</p>
                <p>farmer id</p>
                <p>first name</p>
                <p>last name</p>
                <p>email address</p>
                <p>phone number</p>
            </div>
            <?php
            $rows_farmers = mysqli_query($connection, "select * from user_create_account");
            $rw = 1;
            if($rows_farmers && mysqli_num_rows($rows_farmers)>0){
                while($row_detail = mysqli_fetch_assoc($rows_farmers)){
                    ?>
            <div class="farmer_div">
                <p><?php echo $rw++; ?></p>
                <p><?php echo "frm". $row_detail['id'];?></p>
                <p><?php echo $row_detail['fname'];?></p>
                <p><?php echo $row_detail['lname'];?></p>
                <p><?php echo $row_detail['user_email'];?></p>
                <p><?php echo $row_detail['phone_number'];?></p>
            </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>