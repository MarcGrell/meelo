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

        <form class="mt-4">
            <div class="mb-3">
                <select class="form-select mb-2" aria-label="Dropdown 1">
                    <option selected>Select option 1</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 2">
                    <option selected>Select option 2</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 3">
                    <option selected>Select option 3</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 4">
                    <option selected>Select option 4</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <select class="form-select mb-2" aria-label="Dropdown 5">
                    <option selected>Select option 5</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>

            <div class="mb-3">
                <textarea class="form-control" placeholder="Enter your text here" rows="3"></textarea>
            </div>

            <div class="d-flex flex-column align-items-center">
                <button type="button" class="btn btn-farve w-100 mb-2 next-btn">Videre →</button>
                <button type="button" class="btn btn-secondary w-100 prev-btn">← Tilbage</button>
            </div>
        </form>
    </div>
</div>

<!-- Customer Info -->
<div class="container d-flex justify-content-center align-items-center min-vh-100 text-center section d-none" id="section-3">
    <div class="w-100 w-sm-75 w-md-50 w-lg-25">
        <div class="text-center mt-4">
            <img src="https://placehold.co/100x50@2x.png" alt="Logo" class="logo">
        </div>

        <h1 class="text-center mb-4">Dine oplysninger</h1>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Navn*</label>
                <input type="text" class="form-control" id="name" placeholder="Jens Bager">
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Firma</label>
                <input type="text" class="form-control" id="company" placeholder="Hansens Bageri">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefon*</label>
                <input type="text" class="form-control" id="phone" placeholder="54 82 13 15">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="Jens@bager.dk">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Bemærkninger</label>
                <textarea class="form-control" id="notes" placeholder="Har du noget at tilføje?"></textarea>
            </div>

            <div class="d-flex flex-column align-items-center">
                <button type="button" class="btn btn-secondary w-100 prev-btn">← Tilbage</button>
            </div>
        </form>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Handle form submission
    document.getElementById('datetimeForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the form from submitting

        // Get the selected date and time
        const datetimeInput = document.getElementById('datetimeInput').value;

        // Display the selected date and time
        document.getElementById('output').innerText = `Selected Date and Time: ${datetimeInput}`;
    });

    let currentSection = 0;
    const sections = document.querySelectorAll('.section');
    const nextBtns = document.querySelectorAll('.next-btn');
    const prevBtns = document.querySelectorAll('.prev-btn');

    nextBtns.forEach(btn => btn.addEventListener('click', () => navigate(1)));
    prevBtns.forEach(btn => btn.addEventListener('click', () => navigate(-1)));

    function navigate(direction) {
        sections[currentSection].classList.add('d-none');
        currentSection += direction;
        if (currentSection < 0) currentSection = 0;
        if (currentSection >= sections.length) currentSection = sections.length - 1;
        sections[currentSection].classList.remove('d-none');
    }
</script>
</body>
</html>
