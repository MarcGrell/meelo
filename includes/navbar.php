
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Nav bar -->
<nav class="navbar fixed-top">
    <div class="container-fluid">
        <a class="" href="#">
            <img src="images/croissantLOGO_50.png" alt="logo" class="logoNavbar">
        </a>

        <div class="container w-50">
            <div class="row align-items-center">
                <div class="col">
                    <button type="button" class="left btn bg-body-tertiary"><i class="fa-solid fa-arrow-left"></i></button>
                </div>
                <div class="col">
                    <div class="date">I DAG</div>
                </div>
                <div class="col">
                    <button type="button" class="right btn bg-body-tertiary"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
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
                        <a class="nav-link active m-2 text-center fw-semibold fs-4" aria-current="page" href="#">Ny Bestilling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 text-center fw-semibold fs-4" aria-current="page" href="#">Se Bestilling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 text-center fw-semibold fs-4" aria-current="page" href="#">Varer Lager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 text-center fw-semibold fs-4" aria-current="page" href="#">Varer Bestilling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2 text-center fw-semibold fs-4" aria-current="page" href="#">Kundeservice</a>
                    </li>
            </div>
        </div>
    </div>
</nav>

</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    /*opgave med counter:*/
    const right = document.querySelector(".right");
    const left = document.querySelector(".left");
    const date = document.querySelector(".date");


    plus.addEventListener("click", () => {
        const nyttal = parseInt(date.innerHTML) + 1;

        if(nyttal <=11){
            date.innerHTML = nyttal;
        }

    });
    minus.addEventListener("click", () => {
        const nyttal = parseInt(date.innerHTML) - 1;
        if(nyttal>0){
            date.innerHTML = nyttal;
        }
    });
</script>
</html>
