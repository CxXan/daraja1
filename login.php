<?php
session_start();
include("db_conn.php");
include("functions.php"); 

$error_message = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql_data_query = "SELECT * FROM user_create_account WHERE user_email='$email' LIMIT 1";
    $qry_data = mysqli_query($connection, $sql_data_query);

    if($qry_data && mysqli_num_rows($qry_data) > 0){
        $user_data = mysqli_fetch_assoc($qry_data);
        $unique_id = $user_data['id'];
        $user_password = $user_data['password'];

        if($user_password == $password){
            $_SESSION['farmer_id'] = $unique_id;
            header("location: dashboard.php");
            die;
        }
        else{
            $error_message = "Password incorrect!";
        }
    }
    else{
        $error_message = "Invalid email or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony Sugar Factory | Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="landing lg-ld">
        <div class="login-form fgtForm">
            <div class="mg">
                <a href="index.php">
                    <img src="https://images.unsplash.com/photo-1545361367-3202270671e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="image logo">
                </a>
            </div>
            <form action="#" method="POST" class="formlog" autocomplete="off">
                <p style="color: red; text-transform:capitalize;">
                    <?php echo $error_message; ?>
                </p>
                <div class="ui">
                    <label for="email">email address</label>
                    <input type="email" class="input" name="email" required>
                </div>
                <div class="ui">
                    <label for="password">password</label>
                    <input type="password" class="input" name="password" required>
                </div>
                <input type="submit" value="login" name="loginUser" class="btn btnFrmlogin">
                <div class="opts">
                    <p class="fgt">Don't have an account?
                        <a href="signup.php">SignUp</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>