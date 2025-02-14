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

    <!-- jQuery necessary for Bootstrap's JavaScript plugins -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


</head>

<body>

<!--CARDS CONTAINER!-->
<div class="container">
    <div class="row align-items-start" id="cardContainer">
        <!--HER KOMMER CARDS TIL AT VÆRE-->
    </div>
</div>

<!--TEMPLATE FOR MODAL POPUP / BESTLLINGSPOPUP-->
<div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fornavn Efternavn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Fuld beskrivelse af bestillingen...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">LUK</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">PRINT</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pickupModal">AFHENT
                </button>
            </div>
        </div>
    </div>
</div>

<!--PICKUP TEMPLATE POPUP-->
<div class="modal fade" id="pickupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AFHENT ORDER?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Er du sikker?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">JA!</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">NEJ!</button>
            </div>
        </div>
    </div>
</div>

<script>
    // HER SKAL DATA FRA DATABASEN HENTES.....
    const cardData = [
        {name: "Lene Mikkelsen", description: "Kort beskrivelse af bestillingen."},
        {name: "Emma MEELO", description: "Kort beskrivelse af bestillingen."},
        {name: "Mads Rasmussen", description: "Kort beskrivelse af bestillingen."},
        {name: "Marc AAUA", description: "Kort beskrivelse af bestillingen."},
        {name: "Karsten INSA TECH", description: "Kort beskrivelse af bestillingen."},
        {name: "Glen Nielsen", description: "Kort beskrivelse af bestillingen."},

    ];

    // Get the container element where the cards will be appended
    const cardContainer = document.getElementById("cardContainer");

    // Use forEach to loop through the array and generate HTML
    cardData.forEach((card, index) => {
        const cardHTML = `
            <div class="col-6">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">${card.name}</h5>
                        <p class="card-text">${card.description}</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popupModal${index}">
                            SE BESTILLING
                        </button>

                        <!-- Modal for each card -->
                        <div class="modal fade" id="popupModal${index}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">${card.name}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Fuld beskrivelse af bestillingen...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">LUK</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">PRINT</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pickupModal${index}">AFHENT</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pickup Modal for each card -->
                        <div class="modal fade" id="pickupModal${index}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">AFHENT ORDER?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Er du sikker?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">JA!</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">NEJ!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the generated card HTML to the card container
        cardContainer.innerHTML += cardHTML;
    });

</script>


</body>