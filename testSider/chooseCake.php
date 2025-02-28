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

    <title>Vælg din kage</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="../css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/30d6e0b537.js" crossorigin="anonymous"></script>


</head>
<body>


<div class="container">
    <div class="row justify-content-center align-items-center px-5">

        <div>
            <h1 class="mb-5 mt-5 text-center">Vælg din kagetype;</h1>
        </div>


        <div class="stepprocessbar">
            <div class="steps-horizontal">
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="step-title">Afhentning</div>
                </div>
                <div class="step-horizontal active">
                    <div class="step-icon">
                        <i class="fa-solid fa-circle-natch"></i>
                    </div>
                    <div class="step-title">Kagetype</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-circle-natch"></i>
                    </div>
                    <div class="step-title">Tilføjelser</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-circle-natch"></i>
                    </div>
                    <div class="step-title">Oplysninger</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-circle-natch"></i>
                    </div>
                    <div class="step-title">Gennemse</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-circle-natch"></i>
                    </div>
                    <div class="step-title">Bekræftelse</div>
                </div>
            </div>
        </div>


        <div class="col-12 mb-4 col-md-4">
            <h5 class="text-start">Kagemand</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" name="kagetype" value="kagemand" class="form-check-input d-none">
                <div class="d-flex justify-content-center">
                    <img src="../images/vandbakkelse.webp" alt="Kagemand" class="img-fluid w-100 kage-billede">
                </div>
            </label>
        </div>

        <div class="col-12 mb-4 col-md-4">
                <h5 class="text-start">Kagekvinde</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" name="kagetype" value="kagedame" class="form-check-input d-none">
            <div class="d-flex justify-content-center">
                <img src="../images/Hindbærsnitte%20(1).webp" alt="Kagedame" class="img-fluid w-100 kage-billede">
            </div>
            </label>
        </div>

        <div class="col-12 mb-4 col-md-4">
                <h5 class="text-start">Kageperson</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" name="kagetype" value="kageperson" class="form-check-input d-none">
            <div class="d-flex justify-content-center">
                <img src="../images/tebolle.webp" alt="Kageperson" class="img-fluid w-100 kage-billede">
            </div>
            </label>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
            <button class="btn btn-primary rounded-3 text-white p-3 px-4">VIDERE <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
            <button class="btn btn-white rounded-3 text-decoration-underline"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

