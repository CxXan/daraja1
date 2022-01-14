<?php
session_start();
include("db_conn.php");
include("functions.php"); 

$farmer_data = check_farmer_login($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony Sugar | Dashboard</title>
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
            <div class="trans_recrs">
                <a href="myo.php">Make your order</a>
                <a href="transact.php">transaction details</a>
                <a href="payment.php">payment details</a>
                <a href="orders.php">your orders</a>
            </div>
            <a href="logout.php" class="btn btn-signOut">sign out</a>
        </nav> 

        <div class="w_view flex-row">
            <div class="user_profile">
                <div class="user_image">
                    <h2><?php echo $farmer_data['fname'][0]; ?></h2>
                </div>
                <div class="user_details">
                    <h2>company: <span>Sony sugar</span></h2>
                    <h2>your name: <span><?php echo $farmer_data['fname'] . " " . $farmer_data['lname'];?></span></h2>
                    <h2>email address: <span><?php echo $farmer_data['user_email'];;?></span></h2>        
                </div>
            </div>
            <div class="user_profile fm_smry">
                <div class="farmer_summary flex-row">
                    <h2>no. of orders:</h2>
                    <?php
                    $num_order = mysqli_query($connection, "select * from orders where id={$_SESSION['farmer_id']}");
                    if($num_order && mysqli_num_rows($num_order)>0){
                        $order_rows = mysqli_num_rows($num_order);
                        ?>
                    <div class="circl">
                        <h2><?php echo $order_rows; ?></h2>
                    </div>
                        <?php
                    }
                    else{
                        ?>
                    <div class="circl">
                        <h2>0</h2>
                    </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="farmer_summary flex-row">
                    <h2>no. of transactions:</h2>
                    <?php
                    $num_transaction = mysqli_query($connection, "select * from orders where id={$_SESSION['farmer_id']}");
                    if($num_transaction && mysqli_num_rows($num_transaction)>0){
                        $transaction_rows = mysqli_num_rows($num_transaction);
                        ?>
                    <div class="circl">
                        <h2><?php echo $transaction_rows; ?></h2>
                    </div>
                        <?php
                    }
                    else{
                        ?>
                    <div class="circl">
                        <h2>0</h2>
                    </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="company_trg">
                <h2>Targeting to give the Farmers a great experience within the company/industry.</h2>
            </div>
        </div>

    </div>
    <script src="./js/main.js"></script>
</body>
</html>