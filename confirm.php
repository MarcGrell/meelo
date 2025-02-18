<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO input (
        inpuDate,
        inpuType,
        inpuVar,
        inpuCandy,
        inpuIcing,
        inpuHair,
        inpuPax,
        inpuText,
        inpuName,
        inpuCompany,
        inpuPhoneNumber,
        inpuEmail,
        inpuComment
    ) VALUES (
    :inpuDate,
    :inpuType,
    :inpuVar,
    :inpuCandy,
    :inpuIcing,
    :inpuHair,
    :inpuPax,
    :inpuText,
    :inpuName,
    :inpuCompany,
    :inpuPhoneNumber,
    :inpuEmail,
    :inpuComment
)";

    $bind = [":inpuDate" => $data["inpuDate"], ":inpuType" => $data["inpuType"], ":inpuVar" => $data["inpuVar"],
        ":inpuCandy" => $data["inpuCandy"], ":inpuIcing" => $data["inpuIcing"], ":inpuHair" => $data["inpuHair"],
        ":inpuPax" => $data["inpuPax"], ":inpuText" => $data["inpuText"], ":inpuName" => $data["inpuName"],
        ":inpuCompany" => $data["inpuCompany"], ":inpuPhoneNumber" => $data["inpuPhoneNumber"],
        ":inpuEmail" => $data["inpuEmail"], ":inpuComment" => $data["inpuComment"]];

    $db->sql($sql, $bind, false);

}

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

    <link rel="icon" type="image/x-icon" href="images/croissantLogo2.png">

</head>

<body>

<!-- Final Confirmation Page -->
<div class="container-fluid d-flex flex-column section" id="section-7"
     style="background-image: url('images/backgroundLight.png');
     background-size: cover;
     background-repeat: no-repeat;
     min-height: 100vh;">

    <div class="d-flex justify-content-center align-items-center">
        <h2 class="m-5 pt-5">Tak for din bestilling!</h2>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <img src="images/croissantCheckmark.png" alt="Croissant med flueben"
             class="mx-5 mt-3 mb-5 image-confirm">
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <a type="button" class="btn-custom2 p-3 m-5 btn btn-primary rounded-3 fs-6" href="index.php">NY BESTILLING
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
