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



    <div>

        <video muted autoplay loop width="100%">
            <source src="./video.mp4" />
        </video>
        <h1 style="text-align: center; font-family: Lucida Handwriting; margin-top: 10px; ">New Arrivals</h1>

    </div>
    <div class="container">
            <div class="row">
                
                <?php

include 'config.php';

        $sql = "select * from products inner join product_price on products.pid = product_price.pid";
        $result = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)> 0){

            while($row = mysqli_fetch_assoc($result)){
    
                ?>
        <div class="col-md-4 mt-5">
                <div class="card" >
                    <img src="<?php echo "images/".$row['pthumbnail']?>"
                        class="card-img-top" alt="..." height="250px">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;"><?php echo $row['pname']?></h5>
                        <p class="card-text" style="text-align: center;"><?php echo $row['product_price']?> PKR</p>
                        <center>
                            <a href="#" class="btn btn-outline-secondary">Add to cart</a>
                            <a href="productinfo.php?pid=<?php echo $row['pid']?>" class="btn btn-outline-secondary" >Review </a>
                        </center> 
                     </div>
                </div>
            </div>

<?php
            }
            
        }
    ?>




        </div>
    </div>


    <div class="container" style="margin-top: 200px;">

        <div class="row">

            <div class="col-md-6">

                <h3 style="margin-top: 100px;">Handcrafted leather products
                    from artisans specializing in their craft.</h3>

                <span style="height: 10px; width: 100px; color: black;"></span>


            </div>

            <div class="col-md-6">

                <img src="https://jafferjees.com/pub/media/wysiwyg/Structured-for-Work.jpg" alt=""
                    style="border-radius : 200px;">

            </div>
        </div>

    </div>

<!-- Button trigger modal -->

<!-- Modal -->







    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fa-solid fa-bags-shopping">Fashionista</i>
                        </h6>
                        <p>
                            your daily partner
                            <br>

                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Purses</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Wallets</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Suitcases</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Travel bags</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            Fashionista.help@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="">Fashionista</a>
        </div>

    </footer>

</body>

</html>