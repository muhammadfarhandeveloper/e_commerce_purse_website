<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


include 'dashboard.php';



?>


  <div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <form action="" method="POST">

                <input type="text" required class="form-control" placeholder="Enter Color" name="color"/>
                <br>
                <button type="submit" name="addcat" class="btn btn-primary">Add Color</button>
            </form>
            </div>
    </div>
  </div>

  <?php

    include 'config.php';

    if(isset($_POST['addcat'])){

        $color = $_POST['color'];

        $sql = "insert into product_color(color_name) values('{$color}')";
        $result = mysqli_query($con,$sql) or die("Insert failed");

        if($result){
            echo "<script>alert('Color Add')</script>";
        }

    }


  
  ?>


    
</body>
</html>