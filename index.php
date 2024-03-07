<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bali Solution Biz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="logoko.png" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <div class="loader"></div>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="index.php"><img src="Bali Solution Biz.png" alt="" id="logoku"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="client.php">Our Client</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">1</a></li>
              <li><a class="dropdown-item" href="#">2</a></li>
              <li><a class="dropdown-item" href="#">3</a></li>

            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <!-- Slide -->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="g1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="g2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="g3.jpg" class="d-block w-100" alt="...">
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
  <!-- End Slide -->

  <!-- Siapa Kami -->

  <div class="siapa">Sedikit Tentang Kami</div>

  <div class="sedikit">Kami adalah perusahaan dari Bali yang bergerak di bidang system informasi dan pelayana solusi dalam optimalisasi
  penggunaan Informasi Teknologi. Dari aplikasi Desktop, Website untuk informasi online perusahaan anda serta
    konsultasi kebutuhan teknologi yang ingin dimakasimalkan dalam usaha anda agar kegiatan usaha lebih efisiensi baik
    dari efisiensi waktu ataupun efisiensi tenaga.</div>

  <!-- End -->

  <!-- Service -->
  <h5>Our <span>Service</span></h5>


  <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">
    <div class="card-container">
      <div class="card2">
        <img src="coba1.png" alt="Card Image">
        <div class="card-content">
          <h2 class="card-title">Consultation</h2>
          <p class="card-description">Kami dapat membantu anda dengan berkonsultasi untuk membuat program yang anda
            inginkan dengan lebih mudah</p>
        </div>
      </div>

      <div class="card2">
        <img src="coba.png" alt="Card Image">
        <div class="card-content">
          <h2 class="card-title">Programming</h2>
          <p class="card-description">Kami memberikan anda layanan untuk membuat program yang akan anda buat dan kami
            akan
            memberikan hasil yang maksimal dan baik</p>
        </div>
      </div>

      <div class="card2">
        <img src="cobak.png" alt="Card Image">
        <div class="card-content">
          <h2 class="card-title">Design</h2>
          <p class="card-description">Kami memberikan anda layanan desain untuk website atau program yang akan anda buat
            dengan desain yang menarik</p>
        </div>
      </div>
    </div>
  </div>

  <!-- End Service -->


  <!-- Card -->
  <div class="bawah">
    <h3>Kategori</h3>
    <h2>Mau Cari Apa Hari Ini</h2>
    <h4>Temukan Kebutuhanmu disini</h4>
  </div>

  <div data-aos="fade-right">
    <ul class="cards">
      <li>
        <a href="" class="card">
          <img src="test1.png" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <div class="card__header-text">
                <h3 class="card__title">Aplikasi Penjualan Standart</h3>
              </div>
            </div>
            <p class="card__description">Kami memberikan kepada anda layanan penjualan aplikasi standart sesuai dengan
              kebutuhan anda</p>
          </div>
        </a>
      </li>
      <li>
        <a href="" class="card">
          <img src="test2.png" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <div class="card__header-text">
                <h3 class="card__title">Aplikasi F&B | Restaurant</h3>
              </div>
            </div>
            <p class="card__description">Kami memberikan pelayanan jasa untuk membuat aplikasi F&B dan Restaurant sesuai
              perusahaan anda</p>
          </div>
        </a>
      </li>
      <li>
        <a href="" class="card">
          <img src="test3.png" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <div class="card__header-text">
                <h3 class="card__title">Aplikasi Simpan Pinjam 5.0</h3>
              </div>
            </div>
            <p class="card__description">Untuk Usaha Kredit, Koperasi, BUMDES, LPD, Simpan-Pinjam, dll. Software
              Koperasi
              Simpan Pinjam 5.0 adalah solusi</p>
          </div>
        </a>
      </li>
      <li>
    </ul>
  </div>
  <!-- End Card -->

  <!-- Footer -->
  <footer class="footer-distributed">
    <div class="footer-left">
      <img src="Bali Solution Biz.png">
      <h3>Bali<span> Solution Biz</span></h3>
      <p class="footer-links">
        <a href="index.php">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">© 2024 Bali Solution Biz</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jl. Suli No.87, Dangin Puri Kangin, Kec. Denpasar Utara,</span>
          Kota Denpasar, Bali 80234</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>0831-1962-0013</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="https://www.samuelpasaribu.com">admin@balisolutionbiz.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        Kami adalah perusahaan dari Bali yang bergerak di bidang system informasi dan pelayana solusi dalam
        optimalisasi penggunaan Informasi Teknologi
      </p>
      <div class="footer-icons">
        <a href="https://www.facebook.com/profile.php?id=61552705192984"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/bali_solutionbiz/"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="script.js"></script>
<script>
  AOS.init();
</script>

</html>