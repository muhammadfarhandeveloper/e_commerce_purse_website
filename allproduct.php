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
        <div class="col-md-12">

        <table class="table table-bordered" width="100%">
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Desciption</th>
                <th>Product Thumbnail</th>
                <th>Product Category</th>
                <th>Product Color</th>
            </tr>

            <tbody>
            <?php

            $sql = "select * from products";
            $result = mysqli_query($con,$sql) or die("query expired");

            while($row = mysqli_fetch_assoc($result)){

                ?>

<tr>
                <td><?php echo $row['pid']?></td>
                <td><?php echo $row['pname']?></td>
                <td><?php echo $row['pdesc']?></td>
                <td><img src="images/<?php echo $row['pthumbnail']?>" width="50" height="50"/></td>
                <td><?php echo $row['catid']?></td>
                <td><?php echo $row['colorid']?></td>
            </tr>


        
        <?php


            }

            ?>

</tbody>
        </table>

    </div>

        </div>
  </div>

       


    <br><br><br><br><br><br><br><br><br><br>
</body>
</html>