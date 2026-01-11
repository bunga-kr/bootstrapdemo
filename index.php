<?php include "koneksi.php"?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link rel="icon" href="#"/>

    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous"/>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bootstrap Demo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                <li class="nav-item">
                <a class=" nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class=" nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                <a class=" nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                <a class=" nav-link" href="#schedule">Schedule</a>
                </li>
                <li class="nav-item">
                <a class=" nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                <a class=" nav-link" href="login.php" target="_blank">Login</a>
                </li>
            </ul>
            <button id="lightmode" class="btn"> 
                <img src="Hivesticker_simple_sun.jpg" width="42" height="42"></button>
            <button id="darkmode" class="btn">
                <img src="Hivesticker_waxing_crescent_moon.jpg" width="50" height="50"> </button>
            </div>
        </div>
    </nav>
    <!-- -------------------------------------------------------------------- -->
    <section id="hero" class="text-center p-5 bg-warning-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="banner.jpg" class="leg-fluid" width="300">
                <div>
                <h1 class=" fw-bold display-4">Create Memories, Save Memories, Everyday</h1>
                <h4 class=" lead display-6">Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali</h4>
                <h6>
                    <span id="tanggal"></span>
                    <span id="jam"></span>
                </h6>
            </div>
            </div>
        </div>
    </section>
    <!-- article begin -->
    <section id="article" class="text-center p-5">
    <div class="container">
        <h1 class="fw-bold display-4 pb-3">article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
            <div class="col">
            <div class="card h-100">
                <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                    <?= $row["isi"]?>
                </p>
                </div>
                <div class="card-footer">
                <small class="text-body-secondary">
                    <?= $row["tanggal"]?>
                </small>
                </div>
            </div>
            </div>
            <?php
        }
        ?> 
        </div>
    </div>
    </section>
    <!-- article end -->
    <!-- -------------------------------------------------------------------- -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class=" fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="gallery.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="gallery2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="gallery3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="gallery4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="gallery5.jpg" class="d-block w-100" alt="...">
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
    </section>
    <!-- -------------------------------------------------------------------- -->
    <section id="schedule" class="text-center p-5">
            <h1 class="fw-bold display-4 pb-3">Schedule</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-danger-subtle danger-switch"><b>Senin</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            <b>12.30 - 14.10</b>
                            <br> <b>Pendidikan Kewarganegaraan</b>
                            <br> N603A :: <span class="bg-danger-subtle danger-switch">E.3.AULA</span>
                        </p>
                    </div>
                </div>
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-warning-subtle warning-switch"><b>Selasa</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            <b>9.30 - 12.00</b>
                            <br> <b>Manajemen Proyek TI</b>
                            <br> A11.4516 :: <span class="bg-warning-subtle warning-switch">H.4.11</span>
                        </p>
                        <p class="card-text">
                            <b>12.30 - 15.00</b>
                            <br> <b>Logika Informatika</b>
                            <br> A11.4302 :: <span class="bg-warning-subtle warning-switch">H.5.4</span>
                        </p>
                    </div>
                </div>
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-success-subtle success-switch"><b>Rabu</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            <b>7.00 - 09.30</b>
                            <br> <b>Sistem Operasi</b>
                            <br> A11.4308 :: <span class="bg-success-subtle success-switch">H.4.9</span>
                        </p>
                        <p class="card-text">
                            <b>10.20 - 12.00</b>
                            <br> <b>Pemrograman Berbasis Web</b>
                            <br> A11.4312 :: <span class="bg-success-subtle success-switch">D.2.J</span>
                        </p>
                    </div>
                </div>
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-info-subtle info-switch"><b>Kamis</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            <b>9.30 - 12.00</b>
                            <br> <b>Probabilitas Dan Statistik</b>
                            <br> A11.4311 :: <span class="bg-info-subtle info-switch">H.3.8</span>
                        </p>
                        <p class="card-text">
                            <b>12.30 - 15.00</b>
                            <br> <b>Basis Data</b>
                            <br> A11.4317 :: <span class="bg-info-subtle info-switch">H.4.4</span>
                        </p>
                    </div>
                </div>
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-success-subtle success-switch"><b>Jumat</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            <b>7.00 - 09.30</b>
                            <br> <b>Rekayasa Perangkat Lunak</b>
                            <br> A11.4307 :: <span class="bg-success-subtle success-switch">H.4.3</span>
                        </p>
                        <p class="card-text">
                            <b>12.30 - 14.10</b>
                            <br> <b>Basis Data</b>
                            <br> A11.4317 :: <span class="bg-success-subtle success-switch">D.2.K</span>
                        </p>
                    </div>
                </div>
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-warning-subtle warning-switch"><b>Sabtu</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            Tidak Ada Jadwal Kelas
                        </p>
                    </div>
                </div>
                <div class="col card my-card" style="max-width: 18rem;">
                    <div class="card-header bg-danger-subtle danger-switch"><b>Minggu</b></div>
                    <div class="card-body my-card">
                        <p class="card-text">
                            Tidak Ada Jadwal Kelas
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- -------------------------------------------------------------------- -->
     <section id="profile" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3 ">Profile</h1>
            <div class="card mb-3 mx-auto dark-switch" style="max-width: 540px; border-style: none;">
                <div class="row g-0">
                    <div class="col-md-4 bg-light dark-switch" style="background: none;">
                        <img src="profile.png" class="img-fluid rounded-start p-3" alt="...">
                    </div>
                    <div class="col-md-8 bg-light dark-switch" style="border-radius: 5px;">
                        <div class="card-body">
                            <h4 class="card-title bg-info-subtle info-switch" style="border-radius: 30px;">Bunga Kayla Ramadhani</h4>
                            <p class="card-text">
                                <b>NIM</b>: A11.2024.15811 <br>
                                <b>Prodi</b>: Teknik Informatika <br>
                                <b>Email</b>: 0bungkr@gmail.com <br>
                                <b>Telepon</b>: 087846495565 <br>
                                <b>Alamat</b>: Jl. Banowati Selatan V
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/bungakr__/"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://wa.me/+6287846495565"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>Bunga Kayla Ramadhani &copy; 2025</div>
    </footer>

<!-- bawaan bootstrap -->
 <script   
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"
 ></script>

 <!-- buat nunjukkin tanggal -->
 <script type="text/javascript"> 
    window.setTimeout("tampilWaktu()", 1000);

    function tampilWaktu() {
        var waktu= new Date();
        var bulan= waktu.getMonth() + 1;
        
        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML=
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML=
            waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
    }
 </script>

  <!-- buat light/dark mode -->
 <script>
    const darkBtn = document.getElementById("darkmode");
    const lightBtn = document.getElementById("lightmode");

    document.getElementById("darkmode").onclick = function(){
        // ↓ ganti warna background & teks secara keseluruhan
        document.body.classList.remove("text-dark", "bg-white");
        document.body.classList.add("bg-dark", "text-white");

        // ↓ ganti warna background hero
        document.getElementById("hero").classList.remove("bg-warning-subtle");
        document.getElementById("hero").classList.add("bg-secondary");

        // ↓ ganti warna background gallery
        document.getElementById("gallery").classList.remove("bg-danger-subtle");
        document.getElementById("gallery").classList.add("bg-secondary");

        // ↓ ganti warna tiap card 
        const cards = document.getElementsByClassName("my-card");
        for (let card of cards) {
            card.classList.add("bg-black", "text-white", "border-dark");}
        // ↓ ganti warna yang bervarian menjadi varian lain
        document.querySelectorAll(".danger-switch").forEach(e1 => {
            e1.classList.remove("bg-danger-subtle");
            e1.classList.add("bg-danger");
        });
        document.querySelectorAll(".warning-switch").forEach(e1 => {
            e1.classList.remove("bg-warning-subtle");
            e1.classList.add("bg-warning");
        });
        document.querySelectorAll(".success-switch").forEach(e1 => {
            e1.classList.remove("bg-success-subtle");
            e1.classList.add("bg-success");
        });
        document.querySelectorAll(".info-switch").forEach(e1 => {
            e1.classList.remove("bg-info-subtle");
            e1.classList.add("bg-info");
        });
        document.querySelectorAll(".dark-switch").forEach(e1 => {
            e1.classList.remove("bg-light");
            e1.classList.add("bg-dark", "text-white");
        });

        // ↓ ganti warna icon wa & ig 
        const icons = document.querySelectorAll("footer i");
        icons.forEach(icon => {
            icon.classList.remove("text-dark");
            icon.classList.add("text-white");
        });
    }

    document.getElementById("lightmode").onclick = function(){
        // ↓ ganti warna background & teks secara keseluruhan
        document.body.classList.add("text-dark", "bg-white");
        document.body.classList.remove("bg-dark", "text-white");

        // ↓ ganti warna background hero
        document.getElementById("hero").classList.add("bg-warning-subtle");
        document.getElementById("hero").classList.remove("bg-secondary");

        // ↓ ganti warna background gallery
        document.getElementById("gallery").classList.add("bg-danger-subtle");
        document.getElementById("gallery").classList.remove("bg-secondary");

        // ↓ ganti warna tiap card 
        const cards = document.getElementsByClassName("my-card");
        for (let card of cards) {
            card.classList.remove("bg-black", "text-white", "border-dark");}
        // ↓ ganti warna yang bervarian menjadi varian lain
        document.querySelectorAll(".danger-switch").forEach(e1 => {
            e1.classList.remove("bg-danger");
            e1.classList.add("bg-danger-subtle");
        });
        document.querySelectorAll(".warning-switch").forEach(e1 => {
            e1.classList.remove("bg-warning");
            e1.classList.add("bg-warning-subtle");
        });
        document.querySelectorAll(".success-switch").forEach(e1 => {
            e1.classList.remove("bg-success");
            e1.classList.add("bg-success-subtle");
        });
        document.querySelectorAll(".info-switch").forEach(e1 => {
            e1.classList.remove("bg-info");
            e1.classList.add("bg-info-subtle");
        });
        document.querySelectorAll(".dark-switch").forEach(e1 => {
            e1.classList.remove("bg-dark", "text-white");
        });

        // ↓ ganti warna icon wa & ig 
        const icons = document.querySelectorAll("footer i");
        icons.forEach(icon => {
            icon.classList.add("text-dark");
            icon.classList.remove("text-white");
        });
    }
 </script>
</body>
</html>