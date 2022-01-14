<?php
session_start();
include("../db_conn.php");
include("admin_func.php");

$check_admin = admin_check($connection);

if(isset($_POST['pay_farmer_btn'])){
    $select_farmer = $_POST['select_farmer'];
    $pay_amount = $_POST['pay_amount'];

    if(!empty($select_farmer) && !empty($pay_amount)){
        $insert_pay = mysqli_query($connection, "insert into farmers_payment (id, pay_amount) values ('$select_farmer', '$pay_amount')");
        if($insert_pay){
            $_SESSION['sent'] = "Payment sent.";
            header("location: pay_farmers.php");
            die;
        }
        else{
            echo "<script>alert('Did not send payment!!');</script>";
        }
    }
}

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
            <p style="color: #fff; letter-spacing: 2.3px;">
            <?php
            if(isset($_SESSION['sent'])){
                echo $_SESSION['sent'];
                unset($_SESSION['sent']);
            }
            ?>
            </p>
            <a href="logout_page.php" class="btn btn-signOut">sign out</a>
        </nav> 
        <div class="pay_div">
            <div class="case_data payfr">
                <form action="" method="POST" class="farmPay">
                    <div class="inr_dv">
                    <select name="select_farmer" required>
                            <option value="" disabled selected>-- Select farmer --</option>
                        <?php
                            $opt_fm = mysqli_query($connection, "select * from user_create_account");
                            if($opt_fm && mysqli_num_rows($opt_fm)>0){
                                while($opt_fm_list = mysqli_fetch_assoc($opt_fm)){
                                    $_SESSION['id_to_farmer'] = $opt_fm_list['id'];
                                    ?>
                            <option value="<?php echo $opt_fm_list['id']; ?>"><?php echo $opt_fm_list['fname'] . " " . $opt_fm_list['lname']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                        </select>
                        <input type="text" placeholder="*You can press the keyboard to search a farmer*" readonly>
                        <h2>select farmer here:</h2>
                    </div>
                    <div class="inr_dv">
                        <h2>Insert amount of money:</h2>
                        <input type="number" name="pay_amount" required>
                    </div>
                    <div class="inr_dv">
                        <h2>proceed to payment (Ksh):</h2>
                        <input type="submit" value="send payment" name="pay_farmer_btn" class="btn_pay">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>