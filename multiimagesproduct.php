<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include 'config.php';

    include 'dashboard.php';

    $pid = $_GET['pid'];

    ?>

    <div class="container">
        <div class="row">

        <div class="col-md-3">


            <table class="table table-border">
                <tr>

                    <th>ID</th>
                    <th>Image</th>
                </tr>





            <?php

            $sql  = "SELECT products.pid,product_picture.imgsrc FROM product_picture INNER JOIN products on product_picture.pid = products.pid where products.pid = $pid";

            $result2  = mysqli_query($con, $sql)  or die("Not excute query for images");

            if (mysqli_num_rows($result2) > 0) {
                while ($row = mysqli_fetch_assoc($result2)) {

            ?>

                        <tr>

                            <th><?php echo $row['pid']?></th>
                            <th><img src='images/<?php echo $row['imgsrc']?>' width="100px"/></th>
                        </tr>
            <?php

                }
            }
            else{
                echo "<h3 class='text-danger'>NO Images Uploaded Please Upload Multiple Images!</h3>";
            }
            ?>

</table>
</div>

            <div class="offset-md-3 col-md-6 mt-5">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="images[]" required multiple />
                    <br><br>
                    <button type="submit" name="upimages" class="btn btn-primary">Upload Images</button>
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>

    <?php

    if (isset($_POST['upimages'])) {

        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $filename =  $_FILES['images']['name'][$i];
            $tmpname = $_FILES['images']['tmp_name'][$i];

            $sql = "insert into product_picture(imgsrc,pid) values('${filename}',$pid)";
            $result = mysqli_query($con, $sql);

            if ($result) {
                move_uploaded_file($tmpname, "images/" . $filename);
                echo "<script>alert('product Pictures added !')
                window.location.href = 'allproduct.php';
                </script>";
            }
        }
    }



    ?>

<br><br><br><br>

</body>

</html>