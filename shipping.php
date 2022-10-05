<?php include 'dashboard.php' ?>
<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-8">
                <h1>All Orders Shipping  </h1>

                <table class="table-bordered w-100 border border-primary">
                    <tr>
                        <td>Shipping ID</td>
                        <td>Order ID</td>
                        <td>Cost</td>
                    </tr>

                <?php

                $sql = "select * from  shipping INNER JOIN orders on orders.oid = shipping.oid";

                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                        <tr>
                            <td><?php echo $row['spid']?></td>
                            <td><?php echo $row['oid']?></td>
                            <td><?php echo $row['coast']?></td>
                        </tr>


                <?php


                    }
                }
                else{
                    echo "<h1 class='text-danger'>Shipping is Empty! </h1>";
                }

                ?>
                </table>

            </div>
        </div>
    </div>

</body>

</html>