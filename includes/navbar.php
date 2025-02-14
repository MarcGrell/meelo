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
<!-- Nav bar -->
<nav class="navbar">
    <div class="container-fluid">
        <a class="" href="#">
            <img src="images/croissantLOGO_50.png" alt="logo" class="logoNavbar">
        </a>

        <div class="container w-50 flex">
            <div class="row justify-content-space-between">
                <div class="col justify-content-center">
                    <button type="button" class="left btn bg-body-tertiary"><i class="fa-solid fa-arrow-left"></i></button>
                </div>
                <div class="col">
                    <div class="date text-center">I DAG</div>
                </div>
                <div class="col justify-content-center">
                    <button type="button" class="right btn bg-body-tertiary"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- content -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active m-2 fw-semibold fs-4" aria-current="page" href="#">Ny bestilling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 fw-semibold fs-4" aria-current="page" href="#">Se bestilling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 fw-semibold fs-4" aria-current="page" href="#">Varelager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 fw-semibold fs-4" aria-current="page" href="#">Varebestilling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 fw-semibold fs-4" aria-current="page" href="#">Kundeservice</a>
                    </li>
            </div>
        </div>
    </div>
</nav>

</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dateElement = document.querySelector(".date");
        const leftButton = document.querySelector(".left");
        const rightButton = document.querySelector(".right");

        // Initialiserer datoen
        let currentDate = new Date();
        updateDateText();

        // Håndter venstre pil (←)
        leftButton.addEventListener("click", function () {
            currentDate.setDate(currentDate.getDate() - 1);
            updateDateText();
        });

        // Håndter højre pil (→)
        rightButton.addEventListener("click", function () {
            currentDate.setDate(currentDate.getDate() + 1);
            updateDateText();
        });

        // Funktion til at opdatere dato-teksten
        function updateDateText() {
            dateElement.textContent = formatDate(currentDate);
        }

        // Funktion til at formatere dato som "fredag 14. februar"
        function formatDate(date) {
            return date.toLocaleDateString("da-DK", {
                weekday: "long",
                day: "numeric",
                month: "long",
            });
        }
    });

</script>
</html>