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
    <title>Fashionista</title>
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
   
<body>

   

<?php include 'navbar.php'?>

<?php

include 'config.php';

$pid = $_GET['pid'];

$sql = "select * from products inner join product_price on products.pid = product_price.pid where products.pid= {$pid}";

$result2 = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result2);

?>

   
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php

$sql2 = "select * from  product_picture where pid= {$pid}";
    $result3 = mysqli_query($con,$sql2);

    while($row3 = mysqli_fetch_assoc($result3)){
        ?>
  <div class="carousel-item active">
      <img src="images/<?php echo $row3['imgsrc']?>" width="100%" height="300px">
    </div>
        <?php
    }
    
    ?>


  </div>
</div>

        </div>
        <div class="offset-md-1 col-md-5">
            <h3><?php echo $row['pname'] ?></h3>
            <p><?php echo $row['pdesc'] ?></p>
            <h5 class="text-success">Price : <?php echo $row['product_price'] ?> PKR</h5>
            <button class="btn btn-primary w-50 mt-5">Add to Cart</button>
        </div>
    </div>
</div>


<?php



?>





</body>
</html>