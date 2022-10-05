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
   
</head>

<body>

    <?php include 'dashboard.php';
    include 'config.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-8">
                <h1>All Orders </h1>

                <table class="table-bordered w-100 border border-primary">
                    <tr>
                        <td>Order ID</td>
                        <td>Product ID</td>
                        <td>Quantity</td>
                        <td>Customer ID</td>
                        <td>Total Price</td>
                    </tr>

                <?php

                $sql = "SELECT * FROM order_details inner join orders on orders.oid = order_details.oid INNER JOIN products on products.pid = order_details.pid";

                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                        <tr>
                            <td><?php echo $row['oid']?></td>
                            <td><?php echo $row['pid']?></td>
                            <td><?php echo $row['quantity']?></td>
                            <td><?php echo $row['cuid']?></td>
                            <td><?php echo $row['totalprice']?></td>
                        </tr>


                <?php


                    }
                }
                else{
                    echo "<h1 class='text-danger'>No Orders Details </h1>";
                }

                ?>
                </table>

            </div>
        </div>
    </div>


</body>

</html>