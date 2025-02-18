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

    <link rel="icon" type="image/x-icon" href="images/croissantLogo2.png">

    <!-- jQuery necessary for Bootstrap's JavaScript plugins -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


</head>

<body>

<?php
include("includes/navbar.php");
?>

<div class="my-4"></div>

<!--CARDS CONTAINER!-->
<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT * FROM input ORDER BY inpuDate ASC";
        $orders = $db->sql($sql);
        $counter = 0; // Counter to track cards in the current row
        foreach ($orders as $order) {
            // Open a new row for every two cards
            if ($counter % 2 == 0 && $counter != 0) {
                echo '</div><div class="row">';
            }
            $counter++;
            ?>
            <div class="col-6">
                <div class="card mb-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $order->inpuName; ?></h5>
                        <p class="card-text"><strong>Kagetype:</strong> <?php echo $order->inpuVar; ?></p>
                        <p class="card-text"><strong>Antal personer:</strong> <?php echo $order->inpuPax; ?></p>
                        <p class="card-text"><strong>Afhentning:</strong> <?php echo date('d-m-y H:i', strtotime($order->inpuDate)); ?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popupModal<?php echo $order->inpuId; ?>">
                            SE BESTILLING
                        </button>

                        <!-- Modal for each card -->
                        <div class="modal fade" id="popupModal<?php echo $order->inpuId; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fw-bold" id="exampleModalLabel">Oplysninger</h4>
                                        <button type="button" class="close ms-auto bg-white border-0 fs-4" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="card-text"><strong>Kagetype:</strong> <?php echo $order->inpuVar; ?></p>
                                        <p class="card-text"><strong>Kageform:</strong> <?php echo $order->inpuType; ?></p>
                                        <p class="card-text"><strong>Antal personer:</strong> <?php echo $order->inpuPax; ?></p>
                                        <p class="card-text"><strong>Slik:</strong> <?php echo $order->inpuCandy; ?></p>
                                        <p class="card-text"><strong>Hår:</strong> <?php echo $order->inpuHair; ?></p>
                                        <p class="card-text"><strong>Glasur:</strong> <?php echo $order->inpuIcing; ?></p>
                                        <p class="card-text"><strong>Tekst:</strong> <?php echo $order->inpuText; ?></p>
                                        <p class="card-text"><strong>Afhentning:</strong> <?php echo date('d-m-y H:i', strtotime($order->inpuDate)); ?></p>
                                        <h4 class="card-text mt-5 mb-3"><strong>Kundens oplysninger</strong></h4>
                                        <p class="card-text"><strong>Navn:</strong> <?php echo $order->inpuName; ?></p>
                                        <p class="card-text"><strong>Telefon:</strong> <?php echo $order->inpuPhoneNumber; ?></p>
                                        <p class="card-text"><strong>Email:</strong> <?php echo $order->inpuEmail; ?></p>
                                        <p class="card-text"><strong>Firma:</strong> <?php echo $order->inpuCompany; ?></p>
                                        <p class="card-text"><strong>Bemærkninger:</strong> <?php echo $order->inpuComment; ?></p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">LUK</button>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">PRINT</button>
                                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                data-target="#pickupModal<?php echo $order->inpuId; ?>">AFHENT
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pickup Modal for each card -->
                        <div class="modal fade" id="pickupModal<?php echo $order->inpuId; ?>" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="exampleModalLabel">AFHENT ORDRE</h5>
                                        <button type="button" class="close ms-auto bg-white border-0 fs-4" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body fs-4">
                                        Er du sikker?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">JA</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">NEJ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script>

</script>
</body>