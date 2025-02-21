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

</head>

<body>

<!-- Front page -->

<div style="background-image: url('images/backgroundImage.png');
background-size: cover;
background-repeat: no-repeat;
min-height: 100vh;"
     class="d-flex flex-column section" id="section-1">

    <div class="background-img container-fluid d-flex justify-content-center align-items-center vh-100">
        <button type="button" class="btn-custom py-4 btn btn-primary rounded-4 fs-4 next-btn">NY BESTILLING</button>
    </div>

</div>


<!-- Date/Time Picker -->
<div class="container d-flex justify-content-center align-items-center min-vh-100 text-center section d-none"
     id="section-2">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>
        <h1 class="mt-4">Hvornår vil du hente din kage?</h1>

        <div class="stepprocessbar">
            <div class="steps-horizontal">
                <div class="step-horizontal active">
                    <div class="step-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-person-half-dress"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>
            </div>
        </div>

        <form id="confirmationForm" method="POST" action="confirm.php">
            <div class="mb-4 mt-3">
                <label for="datetimeInput" class="form-label">Vælg dato og tid for afhentning:</label>
                <input type="datetime-local" class="form-control" id="inpuDate" name="data[inpuDate]" required>
            </div>

            <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
                <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i
                            class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE
                </button>
            </div>

    </div>
</div>

<!-- Choose cake type -->
<div class="container section d-none" id="section-3">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>
        <div>
            <h1 class="mt-4 text-center">Vælg din kagetype</h1>
        </div>
        <div class="stepprocessbar">
            <div class="steps-horizontal mb-4">
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                </div>
                <div class="step-horizontal active">
                    <div class="step-icon">
                        <i class="fa-solid fa-person-half-dress"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4 col-md-4 px-5">
            <h5 class="text-start">Kagemand</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" id="inpuType" name="data[inpuType]" value="kagemand"
                       class="form-check-input d-none">
                <div class="d-flex justify-content-center">
                    <img src="images/vandbakkelse.webp" alt="Kagemand" class="img-fluid w-100 kage-billede">
                </div>
            </label>
        </div>

        <div class="col-12 mb-4 col-md-4 px-5">
            <h5 class="text-start">Kagekvinde</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" id="inpuType" name="data[inpuType]" value="kagedame"
                       class="form-check-input d-none">
                <div class="d-flex justify-content-center">
                    <img src="images/Hindbærsnitte (1).webp" alt="Kagedame" class="img-fluid w-100 kage-billede">
                </div>
            </label>
        </div>

        <div class="col-12 mb-4 col-md-4 px-5">
            <h5 class="text-start">Kageperson</h5>
            <label class="form-check-label w-100 kage-valg">
                <input type="radio" id="inpuType" name="data[inpuType]" value="kageperson"
                       class="form-check-input d-none">
                <div class="d-flex justify-content-center">
                    <img src="images/tebolle.webp" alt="Kageperson" class="img-fluid w-100 kage-billede">
                </div>
            </label>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-4">
            <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i
                        class="fa-sharp fa-solid fa-arrow-right"></i></button>
            <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i
                        class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE
            </button>
        </div>

    </div>
</div>


<!-- Cake Designer -->

<div class="container d-flex justify-content-center align-items-center min-vh-100 text-center section d-none"
     id="section-4">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>
        <h1 class="mt-4 text-center">Design din kage</h1>

        <div class="stepprocessbar">
            <div class="steps-horizontal">
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                </div>
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-solid fa-person-half-dress"></i>
                    </div>
                </div>
                <div class="step-horizontal active">
                    <div class="step-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <select class="form-select mb-2" aria-label="Dropdown 1" name="data[inpuVar]" id="inpuVar">
                <option selected>Kagevariant</option>
                <option value="Brunsviger">Brunsviger</option>
                <option value="Hindbærsnitte">Hindbærsnitte</option>
                <option value="Vandbakkelse">Vandbakkelse</option>
                <option value="Kanelstang">Kanelstang</option>
                <option value="Wienerbrød">Wienerbrød</option>
                <option value="Tebolle">Tebolle</option>
                <option value="Chokoladekage">Chokoladekage</option>
            </select>
            <select class="form-select mb-2" aria-label="Dropdown 2" name="data[inpuCandy]" id="inpuCandy">
                <option selected>Slik</option>
                <option value="Click-Mix">Click-Mix</option>
                <option value="Matador-Mix">Matador-Mix</option>
                <option value="M&M's">M&M's</option>
            </select>
            <select class="form-select mb-2" aria-label="Dropdown 3" name="data[inpuIcing]" id="inpuIcing">
                <option selected>Glasur og/eller flødeskum</option>
                <option value="Glasur">Glasur</option>
                <option value="Flødeskum">Flødeskum</option>
                <option value="Glasur og flødeskum">Glasur og flødeskum</option>
                <option value="Intet">Intet</option>
            </select>
            <select class="form-select mb-2" aria-label="Dropdown 4" name="data[inpuHair]" id="inpuHair">
                <option selected>Hårtype</option>
                <option value="Karamel, kort">Karamel, kort</option>
                <option value="Karamel, mellem">Karamel, mellem</option>
                <option value="Karamel, langt">Karamel, langt</option>
                <option value="Jordbær, kort">Jordbær, kort</option>
                <option value="Jordbær, mellem">Jordbær, mellem</option>
                <option value="Jordbær, langt">Jordbær, langt</option>
                <option value="Lakrids, kort">Lakrids, kort</option>
                <option value="Lakrids, mellem">Lakrids, mellem</option>
                <option value="Lakrids, langt">Lakrids, langt</option>
            </select>
            <select class="form-select mb-2" aria-label="Dropdown 5" name="data[inpuPax]" id="inpuPax">
                <option selected>Antal personer</option>
                <option value="10-15">10-15</option>
                <option value="15-20">15-20</option>
                <option value="20-25">20-25</option>
                <option value="25-30">25-30</option>
            </select>
        </div>

        <div class="mb-3">
                <textarea class="form-control" placeholder="Tekst på marcipanbånd (maks 50 tegn):" rows="3"
                          name="data[inpuText]" id="inpuText"></textarea>
        </div>

        <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
            <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i
                        class="fa-sharp fa-solid fa-arrow-right"></i></button>
            <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i
                        class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE
            </button>
        </div>

    </div>
</div>

<!-- Customer Info -->
<div class="container section d-none" id="section-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>
        <div class="col-md-6 mt-4">
            <h1 class="text-center mb-2">Dine oplysninger</h1>
        </div>



        <div class="stepprocessbar">
            <div class="steps-horizontal mb-4">
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                </div>
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-solid fa-person-half-dress"></i>
                    </div>
                </div>
                <div class="step-horizontal complete">
                    <div class="step-icon">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="step-horizontal active">
                    <div class="step-icon">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="step-horizontal">
                    <div class="step-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-3">
            <label for="name" class="form-label">Navn*</label>
            <input type="text" class="form-control" name="data[inpuName]" id="inpuName" placeholder="Jens Bager">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Firma</label>
            <input type="text" class="form-control" name="data[inpuCompany]" id="inpuCompany"
                   placeholder="Hansens Bageri">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefon*</label>
            <input type="text" class="form-control" name="data[inpuPhoneNumber]" id="inpuPhoneNumber"
                   placeholder="54 82 13 15">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email*</label>
            <input type="email" class="form-control" name="data[inpuEmail]" id="inpuEmail" placeholder="Jens@bager.dk">
        </div>
        <div class="mb-3">
            <label for="custNotes" class="form-label">Bemærkninger</label>
            <textarea class="form-control" name="data[inpuComment]" id="inpuComment"
                      placeholder="Har du noget at tilføje?"></textarea>
        </div>
    </div>



    <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
        <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i
                    class="fa-sharp fa-solid fa-arrow-right"></i></button>
        <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i
                    class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE
        </button>
    </div>
</div>



<!-- Confirmation Page -->
<div class="container section d-none" id="section-6">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>
        <div class="col-12 text-center mt-4">
            <h1>Bekræft oplysninger</h1>

            <div class="stepprocessbar">
                <div class="steps-horizontal mt-2 mb-3">
                    <div class="step-horizontal complete">
                        <div class="step-icon">
                            <i class="fa-regular fa-calendar-days"></i>
                        </div>
                    </div>
                    <div class="step-horizontal complete">
                        <div class="step-icon">
                            <i class="fa-solid fa-person-half-dress"></i>
                        </div>
                    </div>
                    <div class="step-horizontal complete">
                        <div class="step-icon">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                    <div class="step-horizontal complete">
                        <div class="step-icon">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>
                    </div>
                    <div class="step-horizontal active">
                        <div class="step-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="step-horizontal">
                        <div class="step-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex text-start flex-column pb-5 gap-2 mt-5 confirmation ms-2">
                <p><strong>Dato:</strong><span id="confirmDate"></span></p>
                <p><strong>Kagetype:</strong> <span id="confirmType"></span></p>
                <p><strong>Kagevariant:</strong> <span id="confirmVar"></span></p>
                <p><strong>Slik:</strong> <span id="confirmCandy"></span></p>
                <p><strong>Glasur:</strong> <span id="confirmIcing"></span></p>
                <p><strong>Hårtype:</strong> <span id="confirmHair"></span></p>
                <p><strong>Antal personer:</strong> <span id="confirmPax"></span></p>
                <p><strong>Tekst:</strong> <span id="confirmText"></span></p>
                <p><strong>Navn:</strong> <span id="confirmName"></span></p>
                <p><strong>Firma:</strong> <span id="confirmCompany"></span></p>
                <p><strong>Telefon:</strong> <span id="confirmPhone"></span></p>
                <p><strong>Email:</strong> <span id="confirmEmail"></span></p>
                <p><strong>Bemærkninger:</strong> <span id="confirmNotes"></span></p>
            </div>


            <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2">
                <button type="submit" class="btn btn-secondary rounded-3 text-white p-3 px-4 next-btn">BEKRÆFT ORDRE
                </button>
                <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i
                            class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Final Confirmation Page -->
<div class="container-fluid d-flex flex-column section d-none" id="section-7"
     style="background-image: url('images/backgroundLight.png');
     background-size: cover;
     background-repeat: no-repeat;
     min-height: 100vh;">

    <div class="d-flex justify-content-center align-items-center">
        <h2 class="m-5 pt-5">Tak for din bestilling!</h2>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <img src="images/croissantCheckmark.png" alt="Croissant med flueben"
             class="mx-5 mt-3 mb-5 w-75 checkmarkLogo">
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn-custom2 p-3 m-5 btn btn-primary rounded-3 fs-6 text-white">NY BESTILLING
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const sections = document.querySelectorAll('.section');
    let currentSection = 0;

    // Event listener for "next" buttons
    document.querySelectorAll('.next-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (currentSection < sections.length - 1) {
                sections[currentSection].classList.add('d-none');
                currentSection++;
                sections[currentSection].classList.remove('d-none');
                if (currentSection === sections.length - 2) displayConfirmation();
            }
        });
    });

    // Event listener for "prev" buttons
    document.querySelectorAll('.prev-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (currentSection > 0) {
                sections[currentSection].classList.add('d-none');
                currentSection--;
                sections[currentSection].classList.remove('d-none');
            }
        });
    });

    // Event listener for the "NY BESTILLING" button (reset to section-1)
    document.querySelectorAll('.btn-custom2').forEach(button => {
        button.addEventListener('click', () => {
            sections[currentSection].classList.add('d-none');  // Hide current section
            currentSection = 0;  // Reset to the first section
            sections[currentSection].classList.remove('d-none');  // Show the first section
        });
    });

    function displayConfirmation() {
        // Gather form data
        const datetimeInput = document.getElementById('inpuDate').value;
        const cakeType = document.querySelector('input[name="data[inpuType]"]:checked').nextElementSibling.querySelector('img').alt;
        const cakeVar = document.getElementById('inpuVar').options[document.getElementById('inpuVar').selectedIndex].text;
        const candyType = document.getElementById('inpuCandy').options[document.getElementById('inpuCandy').selectedIndex].text;
        const icingType = document.getElementById('inpuIcing').options[document.getElementById('inpuIcing').selectedIndex].text;
        const hairType = document.getElementById('inpuHair').options[document.getElementById('inpuHair').selectedIndex].text;
        const pax = document.getElementById('inpuPax').options[document.getElementById('inpuPax').selectedIndex].text;
        const cakeText = document.getElementById('inpuPax').value;
        const custName = document.getElementById('inpuName').value;
        const custCompany = document.getElementById('inpuCompany').value;
        const custPhone = document.getElementById('inpuPhoneNumber').value;
        const custEmail = document.getElementById('inpuEmail').value;
        const custNotes = document.getElementById('inpuComment').value;

        // Display data in the confirmation page
        document.getElementById('confirmDate').textContent = datetimeInput;
        document.getElementById('confirmType').textContent = cakeType;
        document.getElementById('confirmVar').textContent = cakeVar;
        document.getElementById('confirmCandy').textContent = candyType;
        document.getElementById('confirmIcing').textContent = icingType;
        document.getElementById('confirmHair').textContent = hairType;
        document.getElementById('confirmPax').textContent = pax;
        document.getElementById('confirmText').textContent = cakeText;
        document.getElementById('confirmName').textContent = custName;
        document.getElementById('confirmCompany').textContent = custCompany;
        document.getElementById('confirmPhone').textContent = custPhone;
        document.getElementById('confirmEmail').textContent = custEmail;
        document.getElementById('confirmNotes').textContent = custNotes;
    }
</script>
</body>
</html>
