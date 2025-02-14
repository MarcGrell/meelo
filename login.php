<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Hansens Bageri</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/30d6e0b537.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="images/croissantFavicon.png" class="">

</head>

<body>

<div class="container d-flex flex-column vh-100">
<div class="flex-grow-1 d-flex justify-content-center align-items-center">
    <div class="login-container text-center w-25">
        <div class="input-group mb-2">
            <span class="input-group-text border-primary bg-white"><i class="fa-solid fa-user text-primary"></i></span>
            <input type="text" class="form-control border-primary text-primary" placeholder="USERNAME">
        </div>
        <div class="input-group mb-2">
            <span class="input-group-text border-primary bg-white"><i class="fa-solid fa-lock text-primary"></i></span>
            <input type="password" class="form-control border-primary text-primary" placeholder="PASSWORD">
        </div>
        <button href="kalender.php" class="btn btn-primary text-white w-100">LOGIN</button>
        <div class="mt-2 text-end">
            <a class="text-primary">Forgot password?</a>
        </div>
    </div>
</div>

<div class="text-center pb-3">POWERED BY <img src="images/LogoFinal.png" alt="Logo" width="30"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
