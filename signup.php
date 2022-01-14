<?php
session_start();
include("db_conn.php");
$error_message = "";
if(isset($_POST['signUser'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $user_email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $user_confirm_password = $_POST['confirmpassword'];

    if(!empty($company_name) || !empty($user_name) || !is_numeric($user_name) || !empty($user_email) || !empty($user_password) || !empty($user_confirm_password)){
        if($user_password == $user_confirm_password){
            $query = "INSERT INTO user_create_account (fname, lname, user_email, phone_number, password, confirm_password) VALUES ('$first_name', '$last_name', '$user_email', '$phone', '$user_password', '$user_confirm_password')";
            $sql_query = mysqli_query($connection, $query);
    
            if($sql_query){
                header("location: login.php");
                die;
            }
        }
        else{
            $error_message = "password is not the same!";
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
    <title>Sony Sugar Factory | SignUp Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="landing sg-ld">
        <div class="login-form sgpForm">
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
                    <label for="firstname">Your first name</label>
                    <input type="text" class="input" name="firstname" required>
                </div>
                <div class="ui">
                    <label for="lastname">Your last name</label>
                    <input type="text" class="input" name="lastname" required>
                </div>
                <div class="ui">
                    <label for="email">email address</label>
                    <input type="email" class="input" name="email" required>
                </div>
                <div class="ui">
                    <label for="phone">phone number</label>
                    <input type="tel" class="input" name="phone" required>
                </div>
                <div class="ui">
                    <label for="password">password</label>
                    <input type="password" class="input" name="password" required>
                </div>
                <div class="ui">
                    <label for="cofirmpassword">confirm password</label>
                    <input type="password" class="input" name="confirmpassword" required>
                </div>
                <input type="submit" value="signUp" name="signUser" class="btn btnFrmlogin">
                <div class="opts sgf">
                    <p class="fgt">Have an account?
                        <a href="login.php">login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>