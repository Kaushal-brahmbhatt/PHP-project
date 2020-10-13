<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "wdpra2";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
if(isset($_POST['username'])){
    
   $uname=$_POST['username'];
   $password=$_POST['password'];
   
   $sql="SELECT * FROM users WHERE uname='".$uname."'AND pwd='".$password."'";
   
   $result=mysql_query($sql);
   
   if(mysql_num_rows($result)==1){
       echo " You Have Successfully Logged in";
       exit();
   }
   else{
       echo " You Have Entered Incorrect Password";
       exit();
   }
       
}
?>



<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>
            <br>
            <input type="submit" value="Log In" />
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="#"><button id="register-link">Register here</button></a>
        </div>
    </div>
</body>

</html>