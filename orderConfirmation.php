<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ordrebekræftelse</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>



<div class="container d-flex flex-column"
     style="background-image: url('images/backgroundLight.png');
             background-size: cover;
             background-repeat: no-repeat;
             background-position: center;
             min-height: 100vh;">

        <div class="d-flex justify-content-center align-items-center">
            <h2 class="m-5 pt-5">Tak for din bestilling!</h2>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <img src="images/crossaintLogo.svg" alt="Croissant med flueben" class="mx-5 mt-3 mb-5">
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <button type="button" class="btn-custom2 p-3 m-5 btn btn-primary rounded-3 fs-6 text-white">NY BESTILLING</button>
        </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
