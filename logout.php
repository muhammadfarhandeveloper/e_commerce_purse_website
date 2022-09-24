<?php

    session_start();

    session_unset();

    session_destroy();

    header("Location: http://localhost/purse_wallet_web/login.php")

?>