<?php 

require('koneksi.php');

if (isset($_POST["bayar"])){

    if (pesan($_POST) > 0){
        echo "
            <script>
                alert('data pembelian Anda terkirim')
                document.location.href = 'index.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('data pembelian Anda tidak terkirim')
                document.location.href = 'index.php';
            </script>
        ";
    }
}

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
    </head>
    <body>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">BRILLIANT</a>
            </div>
        </nav>
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">[Reservasi]</h1>
                            <h2 class="mb-5">BRILLIANT</h1>
                            <h3 class="mb-5">Brilliant Healing Assistant</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="features-icons bg-light text-center" id="path">
            <div class="container">
                <div class="row">
	            <center>
		        <font size="4">
			    <b>Form Reservasi<br>Wisata Edukasi
				<hr>
                <form action="" method="post">
				<table>
					<tr><td>Nama<td><input type="text" name="name" id="name"><tr>
					<tr><td>Nomor Identitas<td><input type="text" name="id" id="id"><tr>
					<tr><td>Nomor HP<td><input type="text" name="phone" id="phone"><tr>
					<tr><td>Tempat Wisata<td><select id="destination" name="destination"><option value="Pilih">Pilih</option><option value="Museum Purbakala">Museum Purbakala</option><option value="Taman Pintar">Taman Pintar</option><option value="Kota Tua">Kota Tua</option></select><tr>
					<tr><td>Tanggal Kunjungan<td><input type="date" name="date" id="date"><tr>
					<tr><td>Pengunjung Dewasa<td><input type="text" name="adult" id="adult"><tr>
					<tr><td>Pengunjung Anak-Anak<td><input type="text" name="children" id="children"><tr>
                </table>
                <br>     
                <button type="submit" name="bayar">Selesai</button>
                </form>
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
