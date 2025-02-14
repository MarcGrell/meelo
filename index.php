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

    <link rel="icon" type="image/x-icon" href="images/croissantFavicon.png">

</head>

<body>

<!-- Front page -->

<div style="background-image: url('images/backgroundImage.png');
background-size: cover;
background-repeat: no-repeat;
min-height: 100vh;"
     class="d-flex flex-column section" id="section-1">

    <div class="background-img container-fluid d-flex justify-content-center align-items-center vh-100">
        <button type="button" class="btn-custom py-5 btn btn-primary rounded-5 fs-3 next-btn">NY BESTILLING</button>
    </div>

</div>


<!-- Date/Time Picker -->
<div class="container d-flex justify-content-center align-items-center min-vh-100 text-center section d-none" id="section-2">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>

        <h1 class="mt-4">Hvornår vil du hente din kage?</h1>

        <form id="datetimeForm" class="mt-3">
            <div class="mb-4">
                <label for="datetimeInput" class="form-label">Vælg dato og tid for afhentning:</label>
                <input type="datetime-local" class="form-control" id="datetimeInput">
            </div>

            <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
                <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
            </div>
        </form>
    </div>
</div>

<!-- Choose cake type -->
<div class="container section d-none" id="section-3">
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

        <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
            <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
            <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
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
        <h1 class="mt-4">Design din kage</h1>
        <form id="cakeForm" class="mt-4">
            <div class="mb-3">
                <select class="form-select mb-2" aria-label="Dropdown 1" name="option1">
                    <option selected>Select option 1</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 2" name="option2">
                    <option selected>Select option 2</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 3" name="option3">
                    <option selected>Select option 3</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 4" name="option4">
                    <option selected>Select option 4</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 5" name="option5">
                    <option selected>Select option 5</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                </select>
            </div>

            <div class="mb-3">
                <textarea class="form-control" placeholder="Enter your text here" rows="3" name="cakeNotes"></textarea>
            </div>

            <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
                <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
            </div>
        </form>
    </div>
</div>

<!-- Customer Info -->
<div class="container section d-none" id="section-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="images/croissantLOGO.png" alt="Logo" class="logo w-25">
        </div>
        <div class="col-md-6 mt-4">
            <h1 class="text-center mb-4">Dine oplysninger</h1>
            <form id="customerForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Navn*</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jens Bager">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Firma</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Hansens Bageri">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefon*</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="54 82 13 15">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Jens@bager.dk">
                </div>
                <div class="mb-3">
                    <label for="notes" class="form-label">Bemærkninger</label>
                    <textarea class="form-control" id="notes" name="notes"
                              placeholder="Har du noget at tilføje?"></textarea>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
                    <button type="button" class="btn btn-primary rounded-3 text-white p-3 px-4 next-btn">VIDERE <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                    <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Confirmation Page -->
<div class="container section d-none" id="section-6">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <h1>Bekræft dine oplysninger</h1>
            <div id="confirmationDetails" class="mt-4 text-start"></div>
            <div class="d-flex justify-content-center align-items-center flex-column pb-5 gap-2 mt-5">
                <button type="button" class="btn btn-secondary rounded-3 text-white p-3 px-4 next-btn">BEKRÆFT ORDRE</button>
                <button type="button" class="btn btn-white rounded-3 text-decoration-underline prev-btn"><i class="fa-sharp fa-solid fa-arrow-left"></i> TILBAGE</button>
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
        <img src="images/croissantCheckmark.png" alt="Croissant med flueben" class="mx-5 mt-3 mb-5 w-75 checkmarkLogo">
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn-custom2 p-3 m-5 btn btn-primary rounded-3 fs-6 text-white">NY BESTILLING</button>
    </div>
</div>

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
        const confirmationDetails = document.getElementById('confirmationDetails');
        confirmationDetails.innerHTML = '';

        const datetime = document.getElementById('datetimeInput').value;
        const options = [...document.querySelectorAll('#cakeForm select')].map(select => select.value);
        const cakeNotes = document.querySelector('textarea[name="cakeNotes"]').value;
        const customerDetails = {
            name: document.getElementById('name').value,
            company: document.getElementById('company').value,
            phone: document.getElementById('phone').value,
            email: document.getElementById('email').value,
            notes: document.getElementById('notes').value
        };

        confirmationDetails.innerHTML = `
                <p><strong>Dato og Tid:</strong> ${datetime}</p>
                <p><strong>Valgte muligheder:</strong> ${options.join(', ')}</p>
                <p><strong>Kagenotater:</strong> ${cakeNotes}</p>
                <p><strong>Navn:</strong> ${customerDetails.name}</p>
                <p><strong>Firma:</strong> ${customerDetails.company}</p>
                <p><strong>Telefon:</strong> ${customerDetails.phone}</p>
                <p><strong>Email:</strong> ${customerDetails.email}</p>
                <p><strong>Bemærkninger:</strong> ${customerDetails.notes}</p>
            `;
    }
</script>
</body>
</html>
