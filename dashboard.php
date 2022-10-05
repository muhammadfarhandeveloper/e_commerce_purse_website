<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: http://localhost/purse_wallet_web/login.php");

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<body>
 <?php include 'navbar.php'?>

 <div class="container">
    <div class="row">
        <ul class="list-unstyled mt-5">
            <li class="list-item"><a href="addproduct.php" class="text-decoration-none">Insert Product</a></li>
            <li class="list-item"><a href="allproduct.php" class="text-decoration-none">Show All Products</a></li>
            <li class="list-item"><a href="category.php" class="text-decoration-none">Add Category</a></li>
            <li class="list-item"><a href="color.php" class="text-decoration-none">Add Color</a></li>
            <li class="list-item"><a href="" class="text-decoration-none">Add Size</a></li>
            <li class="list-item"><a href="order.php" class="text-decoration-none">Orders</a></li>
            <li class="list-item"><a href="orderdetails.php" class="text-decoration-none">Orders Details</a></li>
        </ul>
        
    </div>
   </div>




</body>
</html>