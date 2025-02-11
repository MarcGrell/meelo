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
    
    <title>Sigende titel</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div>
    <div class="steps-horizontal">
        <div class="step-horizontal complete">
            <div class="step-icon">
                <i class="fa-regular fa-circle-dot"></i>
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

    <div class="controls text-center">
        <button class="btn m-2 bg-meelorange" id="nextBtn">VIDERE →</button>
    </div>
    <div class="controls text-center">
        <button class="btn m-2" id="prevBtn"><u>← TILBAGE</u></button>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
