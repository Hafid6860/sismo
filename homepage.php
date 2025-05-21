<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Bengkel Motor</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://images.unsplash.com/photo-1603570414920-6d4080d6b03b?auto=format&fit=crop&w=1400&q=80') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 60px 0;
        }
    </style>
</head>
<body>
<?php include("bootstrap/html/navbar.html") ?>

    <header class="hero">
        <div class="overlay text-center">
            <div class="container">
                <h1 class="display-4 fw-bold">Selamat Datang di Bengkel Motor Kami</h1>
                <p class="lead">Layanan service motor terpercaya, cepat, dan profesional.</p>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <img src="bootstrap/images/motorcycle.png"/>
                    <h4 class="mt-3">Service Berkala</h4>
                    <p>Menjaga performa motor Anda tetap optimal dengan service rutin.</p>
                </div>
                <div class="col-md-4">
                    <img src="bootstrap/images/oil.png"/>
                    <h4 class="mt-3">Ganti Oli & Tune Up</h4>
                    <p>Gunakan oli terbaik dan pengecekan menyeluruh untuk mesin Anda.</p>
                </div>
                <div class="col-md-4">
                    <img style="height: 100px;" src="bootstrap/images/tools.png"/>
                    <h4 class="mt-3">Perbaikan Cepat</h4>
                    <p>Tim kami siap menangani berbagai keluhan dengan cepat dan tepat.</p>
                </div>
            </div>
        </div>
    </section>

<?php include("bootstrap/html/footer.html") ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>