<?php
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

<!-- Date/Time Picker -->
<div class="container d-flex justify-content-center align-items-center min-vh-100 text-center section" id="section-1">
    <div class="w-100 w-sm-75 w-md-50 w-lg-25">
        <div class="text-center mt-4">
            <img src="https://placehold.co/100x50@2x.png" alt="Logo" class="logo">
        </div>

        <h1 class="mt-4">Hvornår vil du hente din kage?</h1>

        <form id="datetimeForm" class="mt-3">
            <div class="mb-4">
                <label for="datetimeInput" class="form-label">Vælg dato og tid for afhentning:</label>
                <input type="datetime-local" class="form-control" id="datetimeInput">
            </div>

            <div class="d-flex flex-column align-items-center">
                <button type="button" class="btn btn-farve w-100 mb-2 next-btn">Videre →</button>
            </div>
        </form>
    </div>
</div>

<!-- Cake Designer -->
<div class="container d-flex justify-content-center align-items-center min-vh-100 text-center section d-none" id="section-2">
    <div class="w-100 w-sm-75 w-md-50 w-lg-25">
        <div class="text-center mt-4">
            <img src="https://placehold.co/100x50@2x.png" alt="Logo" class="logo">
        </div>

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

            <div class="d-flex flex-column align-items-center">
                <button type="button" class="btn btn-farve w-100 mb-2 next-btn">Videre →</button>
                <button type="button" class="btn btn-secondary w-100 prev-btn">← Tilbage</button>
            </div>
        </form>
    </div>
</div>

<!-- Customer Info -->
<div class="container section d-none" id="section-3">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <img src="https://placehold.co/100x50@2x.png" alt="Logo" class="logo">
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
                    <textarea class="form-control" id="notes" name="notes" placeholder="Har du noget at tilføje?"></textarea>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <button type="button" class="btn btn-farve w-100 mb-2 next-btn">Videre →</button>
                    <button type="button" class="btn btn-secondary w-100 prev-btn">← Tilbage</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Confirmation Page -->
<div class="container section d-none" id="section-4">
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4">
            <h1>Bekræft dine oplysninger</h1>
            <div id="confirmationDetails" class="mt-4 text-start"></div>
            <div class="d-flex flex-column align-items-center mt-3">
                <button type="button" class="btn btn-secondary w-100 prev-btn">← Tilbage</button>
                <button type="button" class="btn btn-success w-100 mt-2">Bekræft og Send</button>
            </div>
        </div>
    </div>
</div>

<script>
    const sections = document.querySelectorAll('.section');
    let currentSection = 0;

    document.querySelectorAll('.next-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (currentSection < sections.length - 1) {
                sections[currentSection].classList.add('d-none');
                currentSection++;
                sections[currentSection].classList.remove('d-none');
                if (currentSection === sections.length - 1) displayConfirmation();
            }
        });
    });

    document.querySelectorAll('.prev-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (currentSection > 0) {
                sections[currentSection].classList.add('d-none');
                currentSection--;
                sections[currentSection].classList.remove('d-none');
            }
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
