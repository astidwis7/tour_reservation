<?php
$koneksi    = mysqli_connect("localhost", "root", "", "pariwisata");
$waktu      = mysqli_query($koneksi, "SELECT tanggal FROM pesan order by tanggal asc");
$pengunjung = mysqli_query($koneksi, "SELECT dewasa FROM pesan order by tanggal asc");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Brilliant</title>
        <link rel="icon" type="image/x-icon" href="assets/img/B.jpg" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/Chart.js"></script>
        <style type="text/css">
            .container_ {
                width: 40%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#">BRILLIANT</a>
                <a class="btn btn-primary" href="form.php">Reservasi</a>
            </div>
        </nav>
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">BRILLIANT</h1>
                            <h2 class="mb-5">Brilliant Healing Assistant</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="features-icons bg-light text-center" id="path">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <img class="features-icons-icon d-flex m-auto" src="assets/img/purbakala.jpg">
                            <h5>Museum Purbakala Sangiran</h5><br>
                            <p>Kabupaten Sragen, Kawasan Kubah Sangiran</p>
                            <h6>40.000</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <img class="features-icons-icon d-flex m-auto" src="assets/img/tamanpintar.jpg">
                            <h5>Taman Pintar</h5><br>
                            <p>Jogjakarta</p>
                            <h6>30.000</h6>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <img class="features-icons-icon d-flex m-auto" src="assets/img/kotatua.jpg">
                            <h5>Kota Tua</h5>
                            <br>
                            <p>Jakarta Barat</p>
                            <h6>60.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Brilliant 2021</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>


