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

    $pid = $_GET['pid'];

    $sql = "select * from products where pid = ${pid}";
    $result = mysqli_query($con, $sql) or die("no data found");

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

    ?>

            <div class="container">
                <div class="row">

                    <div class="offset-md-3 col-md-6">

                        <form action="" method="post">

                            <input type="number" class="form-control" disabled value="<?php echo $row['pid'] ?>">
                            <button type="submit" name="delete" class="btn btn-danger mt-3">Delete</button>
                        </form>

                    </div>
                </div>
            </div>




    <?php

        }
    }
    ?>

    <?php

    if (isset($_POST['delete'])) {

        $sql2 = "delete from product_picture where pid = {$pid}";
        $result2 = mysqli_query($con, $sql2) or die("no data delete");
        if($result2){   
            $sql3 =  "delete FROM products WHERE pid = {$pid}";
            $result3 = mysqli_query($con, $sql3) or die("no data delete");
            
            if($result3){
                echo "<script>alert('product Deleted !')
                window.location.href = 'allproduct.php';
                </script>";
            }
        }
        else{
            echo "<script>alert('No Available Products !')</script>";
        }
    }

    ?>


</body>

</html>