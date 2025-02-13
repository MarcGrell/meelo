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

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/30d6e0b537.js" crossorigin="anonymous"></script>



    <style>
        .stepprocessbar {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .steps-horizontal {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 800px;
            position: relative;
        }

        /* Forbindende linje */
        .steps-horizontal::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: #ddd;
            z-index: -1;
            transform: translateY(-50%);
        }

        .step-horizontal {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            text-align: center;
        }

        .step-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border: 4px solid #ddd;
            transition: 0.3s;
        }

        .step-title {
            margin-top: 8px;
            font-size: 14px;
            color: #777;
        }

        /* Style for completed steps */
        .step-horizontal.complete .step-icon {
            border-color: #ff8800;
            background: #ff8800;
            color: #fff;
        }

        /* Style for active step */
        .step-horizontal.active .step-icon {
            border-color: #ff8800;
            background: #fff;
            color: #ff8800;
            font-size: 24px;
        }

        .step-horizontal.complete .step-title,
        .step-horizontal.active .step-title {
            color: #ff8800;
            font-weight: bold;
        }

        /* Mobilvenlig */
        @media (max-width: 600px) {
            .steps-horizontal {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            .step-horizontal {
                flex: none;
                width: 30%;
            }
        }
    </style>




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
                        <i class="fa-regular fa-circle-dot"></i>
                    </div>
                    <div class="step-title">Kagetype</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-regular fa-circle-dot"></i>
                    </div>
                    <div class="step-title">Tilføjelser</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-regular fa-circle-dot"></i>
                    </div>
                    <div class="step-title">Oplysninger</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-regular fa-circle-dot"></i>
                    </div>
                    <div class="step-title">Gennemse</div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-regular fa-circle-dot"></i>
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
                    <img src="images/vandbakkelse.webp" alt="Kagemand" class="img-fluid w-100 kage-billede">
                </div>
            </label>
        </div>

        <div class="col-12 mb-4 col-md-4">
                <h5 class="text-start">Kagekvinde</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" name="kagetype" value="kagedame" class="form-check-input d-none">
            <div class="d-flex justify-content-center">
                <img src="images/Hindbærsnitte%20(1).webp" alt="Kagedame" class="img-fluid w-100 kage-billede">
            </div>
            </label>
        </div>

        <div class="col-12 mb-4 col-md-4">
                <h5 class="text-start">Kageperson</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" name="kagetype" value="kageperson" class="form-check-input d-none">
            <div class="d-flex justify-content-center">
                <img src="images/tebolle.webp" alt="Kageperson" class="img-fluid w-100 kage-billede">
            </div>
            </label>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2">
            <button class="btn btn-primary rounded-3 text-white p-3 px-4">VIDERE <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
            <button class="btn btn-white rounded-3 text-decoration-underline"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

