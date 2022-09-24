<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .navbar-brand {
            font-size: 30px;
            color: black;
            font-family: consolas;

        }

        .navbar option {

            color: grey;

        }

        .navbar-brand {

            text-align: center;


        }
        .shadow-font{
            font-family: 'Shadows Into Light', cursive;
            font-size:40px;
    
        

        }
    </style>

<body>

<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand text-white shadow-font ms-5 " href="#">Fashionista</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ms-5">
                <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href="index.php"
                        class="navbar option">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" class="navbar option"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Wallets
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="women wallet.php" class="navbar option">Women</a></li>
                        <li><a class="dropdown-item" href="men.php" class="navbar option">Men</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Purses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="women.php" class="navbar option">Hand bag</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact us .php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
</body>
</html>