<?php

session_start();

if(isset($_SESSION['username'])){
    header("Location: http://localhost/purse_wallet_web/dashboard.php");

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <title>Login Php</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="offset-md-3 col-md-6 mt-5">
                <form action="" method="POST">
                    <input type="text" required class="form-control" placeholder="Enter Username" name="adminusername" />
                   <br> <input type="password" required class="form-control" placeholder="Enter Password" name="adminpassword" />
                   <br><button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                </div>
        </div>
    </div>

    <?php


        include_once 'config.php';

        if(isset($_POST['login'])){
            
           $user  =  $_POST['adminusername'];
           $pass  =   $_POST['adminpassword'];

           $sql = "select * from admin where username='{$user}' and password='{$pass}'";
           $result = mysqli_query($con,$sql) or die("expired");

           if(mysqli_num_rows($result) > 0){

            $_SESSION['username'] = $user;

            header("Location: http://localhost/purse_wallet_web/allproduct.php");

           }
           else{
            echo "<script>alert('Username and password is incorect')</script>";
           }
        }
    
    ?>
    
</body>
</html>