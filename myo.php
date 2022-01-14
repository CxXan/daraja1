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
    <title>Sony Sugar | MYO</title>
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
            <div class="flex-row" style="align-items: center;">
                <h2>Make your fertiliser order.</h2>
            </div>
            <a href="orders.php" class="btn btn-signOut">Orders page</a>
        </nav> 

        <div class="order_div">
            <div class="ovfl">
                <div class="case_data">
                    <div class="fert-img">
                        <img src="./images/pic6.jpeg" alt="image">
                    </div>
                    <div class="fert-details">
                        <h2>name: <span>NPK</span></h2>
                        <h3>price: <span>1950</span> Ksh</h3>
                        <button class="btn btn-order" id="order1">order</button>
                    </div>
                </div>
                <div class="case_data">
                    <div class="fert-img">
                        <img src="./images/pic5.jpeg" alt="image">
                    </div>
                    <div class="fert-details">
                        <h2>name: <span>azospirillium</span></h2>
                        <h3>price: <span>950</span> Ksh</h3>
                        <button class="btn btn-order" id="order2">order</button>
                    </div>
                </div>
                <div class="case_data">
                    <div class="fert-img">
                        <img src="./images/pic3.jpeg" alt="image">
                    </div>
                    <div class="fert-details">
                        <h2>name: <span>zinc sulphate</span></h2>
                        <h3>price: <span>850</span> Ksh</h3>
                        <button class="btn btn-order" id="order3">order</button>
                    </div>
                </div>
                <div class="case_data">
                    <div class="fert-img">
                        <img src="./images/pic1.png" alt="image">
                    </div>
                    <div class="fert-details">
                        <h2>name: <span>ferrous sulphate</span></h2>
                        <h3>price: <span>550</span> Ksh</h3>
                        <button class="btn btn-order" id="order4">order</button>
                    </div>
                </div>
                <div class="case_data">
                    <div class="fert-img">
                        <img src="./images/pic2.jpg" alt="image">
                    </div>
                    <div class="fert-details">
                        <h2>name: <span>map (mono-ammonium phosphate)</span></h2>
                        <h3>price: <span>1700</span> Ksh</h3>
                        <button class="btn btn-order" id="order5">order</button>
                    </div>
                </div>
                <div class="case_data">
                    <div class="fert-img">
                        <img src="./images/pic4.jpg" alt="image">
                    </div>
                    <div class="fert-details">
                        <h2>name: <span>pottasuim nitrate</span></h2>
                        <h3>price: <span>1500</span> Ksh</h3>
                        <button class="btn btn-order" id="order6">order</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- The drop down payment div -->
        <div class="drp_pay_div">
            <nav class="dash_nav flex-row darken">
                <div class="flex-row" style="align-items: center;">
                    <div class="nav_image">
                        <a href="dashboard.php">
                            <img src="https://images.unsplash.com/photo-1545361367-3202270671e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="image logo">
                        </a>
                    </div>
                    <h3 style="color: #fff; margin-left: .5rem; text-transform:capitalize;">sony sugar</h3>
                </div>
                <div class="trans_recrs">
                    <a href="#">checkout / payment page</a>
                </div>
                <button class="btn btn-signOut" id="flipUp">Back to buying</button>
            </nav> 

            <div class="byf">
                <form action="#" method="POST">
                    <div class="odp order_d">
                        <h2>order details</h2>
                        <h2>order name: <p id="frt_name"></p></h2>
                        <h2>order amount: <p id="frt_price"></p> Ksh</h2>
                    </div>
                    <div class="odp payment_d">
                        <h2>proceed to checkout</h2>
                        <div action="#" method="POST" class="checkout_">
                            <label for="order_amount">Enter the order amount specified:</label>
                            <input type="number" name="order_amount" required>
                            <label for="tel_number">Please enter your phone number</label>
                            <input type="tel" name="tel_number" placeholder="254 756 123 456 or 0756 123 456" required>
                            <input type="submit" value="To M-Pesa checkout" class="btn_checkout">
                        </div>
                        <div class="pay_firm">
                            <img src="images/mpesa.png" alt="M-Pesa Image">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>