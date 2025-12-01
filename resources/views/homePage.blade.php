<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body.dark-mode {
            background-color: #121212;
            color: #ffffff;
        }

        /* Perbaikan header dan navbar saat dark mode */
        body.dark-mode .header, 
        body.dark-mode .navbar {
            background-color: #222;
            color: white;
        }

        body.dark-mode .nav-link {
            color: white !important;
        }

        body.dark-mode .btn-outline-secondary {
            color: white;
            border-color: white;
        }

        body.dark-mode .btn-outline-secondary:hover {
            background-color: white;
            color: black;
        }
    </style>

    @include('template.head')
</head>
<body>

<!-- Header -->
@include('template.navbar')
@include('template.shoppingCart')

<div class="container">
    <header class="d-flex justify-content-between align-items-center py-3">
        <h1>My Website</h1>
        <button id="darkModeToggle" class="btn btn-outline-secondary">Toggle Dark Mode</button>
    </header>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400?text=First+Slide" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Second+Slide" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Third+Slide" class="d-block w-100" alt="Third Slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<!-- Dark Mode Toggle Script -->
<script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    if (localStorage.getItem('dark-mode') === 'enabled') {
        body.classList.add('dark-mode');
    }

    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');

        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('dark-mode', 'enabled');
        } else {
            localStorage.setItem('dark-mode', 'disabled');
        }
    });
</script>
@include('template.script')
@include('template.footer')

</body>
</html>
