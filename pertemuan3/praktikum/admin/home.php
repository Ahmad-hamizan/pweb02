<?php include_once 'top.php'; ?>
<div id="page-content-wrapper">
  <!-- Top navigation -->
  <?php include_once 'menu.php'; ?>
  <!-- Page content -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jan`s Electric</title>

    <!-- feathers icons -->
    <script src="path/to/dist/feather.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- regist icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet" />

    <!-- WA icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/coba.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  </head>

  <body>
    <!-- navbar -->
    <nav class="nv">
      <a href="#" class="nv-logo">Jan`s <span>Electric</span>.</a>

      <div class="nv-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#product">Product</a>
        <a href="#contact">Contact</a>
        <a href="#pemesanan">Pemesanan</a>
        <a href="#creator">Creator</a>
      </div>

      <div class="nv-extra">
        <a href="log-in.php" id="log-in"><i data-feather="log-in"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- hero -->

    <section class="hero" id="home">
      <main class="content">
        <h1>
          Rasakan kebebasan berkendara tanpa batas dengan
          <span>sepeda listrik</span> kami!
        </h1>
        <p>
          Hemat energi, ramah lingkungan, dan siap menemani petualangan Anda
          di setiap jalan. Dapatkan pengalaman berkendara yang lebih
          menyenangkan dan efisien—pilih sepeda listrik, solusi cerdas untuk
          mobilitas masa kini!
        </p>
        <a href="#product" class="cta">Pesan Sekarang</a>
      </main>
    </section>

    <!-- Carousel atau Slider -->
    <h1 class="h1-carousel">Galery Produk Kami</h1>
    <div class="carousel">
      <div>
        <div class="content">
          <h2>Polygon</h2>
          <span>Dikenal dengan desain ergonomis dan performa tinggi</span>
        </div>
      </div>
      <div>
        <div class="content">
          <h2>Giant</h2>
          <span>Memiliki teknologi Smart Assist untuk pengalaman berkendara yang
            lebih baik</span>
        </div>
      </div>
      <div>
        <div class="content">
          <h2>Exotic Illusion</h2>
          <span>Desain sporty dan elegan</span>
        </div>
      </div>
      <div>
        <div class="content">
          <h2>Viar Akasha 3</h2>
          <span>Baterai 48V 20Ah, jarak tempuh 75 km</span>
        </div>
      </div>
    </div>

    <!-- about -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/toko.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa Memilih Sepeda Listrik Kami?</h3>
          <p>
            Karena dengan sepeda listrik, Anda bisa menikmati perjalanan yang
            lebih cepat dan nyaman tanpa mengeluarkan banyak tenaga! Kenapa
            repot dengan kemacetan dan biaya bahan bakar yang tinggi? Dengan
            sepeda listrik, Anda dapat menjelajahi kota dengan gaya, sambil
            menjaga lingkungan tetap bersih. Bergabunglah dengan kami dan
            temukan kebebasan berkendara yang sesungguhnya!
          </p>
          <div class="alamat">
            <h3><span>Palimanan</span></h3>
            <p>
              Jalur Cileunyi-Palimanan No.391, Palimanan Tim., Kec. Palimanan,
              Kabupaten Cirebon, Jawa Barat 45161
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- menu -->
    <section id="product" class="menu">
      <h2>Produk <span>Kami</span></h2>
      <p>
        Temukan berbagai pilihan yang dirancang untuk memenuhi kebutuhan
        mobilitas Anda dengan cara yang lebih efisien dan ramah lingkungan.
        Berikut adalah menu pilihan kami:
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/produk1.jpg" alt="1" class="menu-card-image" />
          <a href="pesanan/pesanan1.php">
            <h3 class="menu-card-title">- Evoke -</h3>
          </a>
          <p class="menu-card-price">RP. 10.000.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk2.jpg" alt="2" class="menu-card-image" />
          <a href="pesanan/pesanan2.php">
            <h3 class="menu-card-title">- Raleigh -</h3>
          </a>
          <p class="menu-card-price">RP. 18.500.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk3.jpeg" alt="3" class="menu-card-image" />
          <a href="pesanan/pesanan3.php">
            <h3 class="menu-card-title">- Brompton Electric -</h3>
          </a>
          <p class="menu-card-price">RP. 35.000.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk4.jpeg" alt="4" class="menu-card-image" />
          <a href="pesanan/pesanan4.php">
            <h3 class="menu-card-title">- Kalkhoff -</h3>
          </a>
          <p class="menu-card-price">RP. 22.000.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk5.jpeg" alt="5" class="menu-card-image" />
          <a href="pesanan/pesanan5.php">
            <h3 class="menu-card-title">- Riese & Müller -</h3>
          </a>
          <p class="menu-card-price">RP. 40.000.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk6.jpeg" alt="6" class="menu-card-image" />
          <a href="pesanan/pesanan6.php">
            <h3 class="menu-card-title">- Ancheer -</h3>
          </a>
          <p class="menu-card-price">RP. 5.000.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk7.jpeg" alt="7" class="menu-card-image" />
          <a href="pesanan/pesanan7.php">
            <h3 class="menu-card-title">- Aventon -</h3>
          </a>
          <p class="menu-card-price">RP. 8.500.000</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/produk8.jpeg" alt="8" class="menu-card-image" />
          <a href="pesanan/pesanan8.php">
            <h3 class="menu-card-title">- Canyon -</h3>
          </a>
          <p class="menu-card-price">RP. 25.000.000</p>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Kami siap membantu Anda! Jika Anda memiliki pertanyaan, membutuhkan
        informasi lebih lanjut, atau ingin mendapatkan penawaran khusus,
        jangan ragu untuk menghubungi kami.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4988755977506!2d108.43206487410339!3d-6.70880436558973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee1d2159913bf%3A0x560978db5a2e2133!2sAlun%20-%20Alun%20Palimanan!5e0!3m2!1sid!2sid!4v1732026082886!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
          <p>
            Terima kasih telah memilih kami—kami sangat menantikan untuk
            membantu Anda menemukan sepeda listrik yang sempurna!
          </p>
        </form>
      </div>
    </section>

    <!-- form -->
    <section id="pemesanan" class="pemesanan">
      <div class="row">
        <form action="sukses.php" class="pemesanan-form">
          <h1 class="form-title"><span>Pemesanan</span>.</h1>

          <div class="input-box">
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-box">
            <input type="text" placeholder="Alamat" />
          </div>
          <div class="input-box">
            <input type="number" placeholder="Nomer Telepon" />
          </div>
          <div class="input-box">
            <input type="text" placeholder="Nama Barang" />
          </div>
          <div class="input-box">
            <input
              type="number"
              min="1"
              max="10"
              placeholder="Jumlah Pemesanan" />
          </div>
          <div class="input-box">
            <input
              type="text"
              list="pmbyrn"
              placeholder="Metode Pembayaran" />
            <datalist id="pmbyrn">
              <option value="COD-Cek Dulu"></option>
              <option value="Transfer Bank"></option>
              <option value="Kartu Kredit/Debit"></option>
            </datalist>
          </div>

          <button type="submit" class="pemesanan-btn">Pesan Sekarang</button>
        </form>
      </div>
    </section>

    <!-- creator -->
    <section id="creator" class="creator">
      <h2><span>Creator</span>.</h2>

      <div class="row">
        <div class="creator-img">
          <!-- poto sendiri -->
          <img src="img/my.jpeg" alt="" />
        </div>
        <div class="content">
          <h3><span>-</span>Ahmad <span>Hamizan</span>-</h3>
          <p>Mahasiswa <span>|</span> Pengembang</p>
          <h3>
            Saya adalah seorang mahasiswa dari Sekolah Tinggi Teknologi
            Terpadu Nurul Fikri (STT-NF) yang sedang menempuh pendidikan di
            Program Studi Teknik Informatika.Domisili saya berasal dari
            Cirebon
          </h3>
          <div class="socials">
            <a href="https://www.instagram.com/ahmadhamijan_/" target="_blank"><i data-feather="instagram"></i></a>
            <a href="https://github.com/Ahmad-hamizan"><i data-feather="github"></i></a>
            <a href="https://www.linkedin.com/in/jan-ahmad-hamizan-220861334/"><i data-feather="linkedin"></i></a>
            <a href="https://wa.me/6285797327869"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="credit">
        <p>&copy 2024 | Created by Ahmadhamijan.</p>
        <?php include_once 'bottom.php'; ?>
      </div>
    </footer>

    <!-- button to the top -->
    <div class="top" onclick="goToTop()">☝</div>

    <!-- feathers icons -->
    <script>
      feather.replace();
    </script>

    <!-- js -->
    <script src="js/scrip.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>

  </html>
</div>