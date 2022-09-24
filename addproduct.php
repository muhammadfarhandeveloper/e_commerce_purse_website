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
    include 'config.php';

include 'dashboard.php';



?>


  <div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <form action="" method="POST" enctype="multipart/form-data">

            <input type="text" required placeholder="Product Title" name="ptitle"  class="form-control"/><br>
            <textarea name="pdesc"  rows="5" class="form-control">
                Product Desciption
            </textarea>
           <input type="file" name="imgthum" required /> <br><br>
            <select name="catergory" id="">
                <option selected disabled>Select Category</option>
                <?php
                $sql = "select * from product_category";
                $result1  = mysqli_query($con,$sql) or die("expired");

                while($row = mysqli_fetch_assoc($result1)){
                    echo "<option value='$row[catid]'> $row[catname]</option>";
                }
           ?>

</select>

<select name="color" id="">
                <option selected disabled>Select Color</option>
                <?php
                $sql = "select * from product_color";
                $result1  = mysqli_query($con,$sql) or die("expired");

                while($row = mysqli_fetch_assoc($result1)){
                    echo "<option value='$row[colorid]'> $row[color_name]</option>";
                }

           ?>
</select>   

<br><br>
                    <button type="submit" name="addproduct" class="btn btn-primary">Add Product</button>

        </form>
            </div>
    </div>
  </div>

  <?php

        if(isset($_POST['addproduct'])){

           $ptitle =  $_POST['ptitle'];
            $pdesc = $_POST['pdesc'];
           $pcat =  $_POST['catergory'];

            $pcolor = $_POST['color'];

           $filename =  $_FILES['imgthum']['name'];
            $tmpname = $_FILES['imgthum']['tmp_name'];

            $sql = "insert into products(pname,pdesc,pthumbnail,catid,colorid) 
            values('{$ptitle}','{$pdesc}','{$filename}',{$pcat},{$pcolor})";
            $result2 = mysqli_query($con,$sql) or die("Query Expired");

            if($result2){
                move_uploaded_file($tmpname,"images/".$filename);
                echo "<script>alert('product added !')
                window.location.href = 'allproduct.php';
                </script>";
            }
            else{
                echo "<script>alert('Product Error !')</script>";
            }
        }




  
  ?>


    <br><br><br><br><br><br><br><br><br><br>
</body>
</html>