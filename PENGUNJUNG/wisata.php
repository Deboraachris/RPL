<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Berikan Masukan | Pemerintah Desa Sepakung</title>
  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .header-top {
      background-color: #222;
      color: white;
      padding: 5px 10px;
      font-size: 14px;
      text-align: center;
    }

    .header-main {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background-color: white;
      border-bottom: 2px solid #ccc;
    }

    .header-main img {
      height: 80px;
      margin-right: 20px;
    }

    .site-info {
      display: flex;
      flex-direction: column;
    }

    .site-info h1 {
      font-size: 28px;
      margin: 0;
      color: #111;
    }

    .site-info p {
      font-size: 14px;
      color: #777;
      margin: 2px 0;
    }

    .navbar {
      display: flex;
      justify-content: center;
      background-color: #fff;
      border-bottom: 2px solid #ccc;
    }

    .navbar a {
  text-decoration: none;
  padding: 12px 16px; /* <--- bisa kamu ubah jadi: */
  padding: 8px 16px; /* kurangi padding vertikal agar garis dekat teks */
  color: #111;
  font-weight: bold;
  border-bottom: 4px solid transparent;
  transition: 0.3s;
  display: inline-block;
}

.navbar a:hover {
  border-bottom: 4px solid #f44336;
}


    .nav-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  gap: 40px;
}

.nav-links li {
  position: relative;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 48px;
  left: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  min-width: 180px;
  box-shadow: 0px 2px 6px rgba(0,0,0,0.15);
  z-index: 1000;
}

.dropdown-menu li a {
  display: block;
  padding: 10px;
  font-weight: normal;
  color: #111;
  border-bottom: 1px solid #eee;
}

.dropdown-menu li a:hover {
  background-color: #f2f2f2;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

    @media screen and (max-width: 600px) {
      .header-main {
        flex-direction: column;
        text-align: center;
      }
      .header-main img {
        margin-bottom: 10px;
      }
    }

    .footer-info {
    background-color: #0c0c1d;
    color: white;
    padding: 50px 30px;
    font-family: 'Segoe UI', sans-serif;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 40px;
}

.footer-left {
    flex: 1;
    min-width: 300px;
}

.footer-left h2 {
    font-size: 24px;
    margin-bottom: 10px;
    line-height: 1.4;
    color: white;
    text-transform: uppercase;
}

.footer-left p,
.footer-left a {
    font-size: 16px;
    color: white;
    margin: 5px 0;
    text-decoration: none;
}

.footer-left a:hover {
    text-decoration: underline;
}

.operational-time {
    list-style: none;
    padding-left: 0;
    margin: 8px 0 16px;
}

.operational-time li {
    font-size: 15px;
    color: #ccc;
}

.footer-bottom-text {
    margin-top: 20px;
    font-size: 14px;
    color: #aaa;
}

.footer-right {
    flex: 1;
    min-width: 300px;
}

.explore-container {
  max-width: 1200px;
  margin: 30px auto;
  padding: 20px;
  font-family: 'Segoe UI', sans-serif;
}

.hero {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 40px;
}

.hero-left h1 {
  font-size: 48px;
  margin: 0;
  line-height: 1.2;
}

.hero-left p {
  font-size: 16px;
  color: #444;
  margin: 10px 0;
}

.arrow-btn {
  background-color: orange;
  color: white;
  border: none;
  padding: 10px 18px;
  font-size: 18px;
  border-radius: 8px;
  cursor: pointer;
}

.hero-right .circle-image {
  position: relative;
  width: 200px;
}

.hero-right img {
  width: 200px;
  border-radius: 50%;
}

.circle-text {
  position: absolute;
  text-align: center;
  width: 200px;
  font-size: 10px;
  top: 0;
  left: 0;
  color: #444;
}

.discover-title {
  text-align: center;
  font-size: 28px;
  margin: 30px 0 20px;
}

.discover-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 20px;
}

.card {
  background-color: white;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  overflow: hidden;
}

.card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.card p {
  margin: 10px 15px 5px;
  font-size: 14px;
  color: gray;
}

.card h3 {
  margin: 5px 15px;
  font-size: 18px;
}

.card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
}

.card-footer span {
  color: #f28c28;
  font-weight: bold;
}

.card-footer button {
  background: #f28c28;
  color: white;
  border: none;
  padding: 6px 14px;
  border-radius: 6px;
  cursor: pointer;
}

.square-image {
  position: relative;
  width: 250px;
  height: auto;
}

.square-image img {
  width: 100%;
  height: auto;
  border-radius: 0; /* pastikan ini bukan 50%, agar tidak bulat */
  display: block;
}

.image-text {
  position: absolute;
  bottom: 10px;
  left: 10px;
  right: 10px;
  font-size: 12px;
  background: rgba(0,0,0,0.5);
  color: white;
  padding: 8px;
  border-radius: 4px;
  text-align: center;
}



  </style>
</head>
<body>

  <div class="header-top">
  Penetapan Calon Kepala Desa Sepakung Banyubiru dan Pengambilan nomer urut.
</div>

<div class="header-main">
  <img src="/sepakung/foto/g21.png" alt="Logo Semarang">
  <div class="site-info">
    <h1>Pemerintah Desa Sepakung</h1>
    <p>Jalan Kiai Semendi No 4A Sepakung Banyubiru 50664 Kab. Semarang</p>
  </div>
</div>

<nav class="navbar">
  <ul class="nav-links">
    <li><a href="/sepakung/pengunjung/home.php">Home</a></li>
    <li class="dropdown">
      <a href="#">Profil</a>
      <ul class="dropdown-menu">
        <li><a href="/sepakung/pengunjung/profile/strukturOrganisasi.php">Struktur Organisasi</a></li>
        <li><a href="/sepakung/pengunjung/profile/geografi.php">Geografi</a></li>
        <li><a href="/sepakung/pengunjung/profile/kesehatan.php">Kesehatan</a></li>
        <li><a href="/sepakung/pengunjung/profile/penduduk.php">Penduduk</a></li>
        <li><a href="/sepakung/pengunjung/profile/perekonomian.php">Perekonomian</a></li>
        <li><a href="/sepakung/pengunjung/profile/potensi.php">Potensi Desa</a></li>
        <li><a href="/sepakung/pengunjung/profile/sarpras.php">Sarpras</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="/sepakung/pengunjung/home.php">Dusun</a>
      <ul class="dropdown-menu">
        <li><a href="/sepakung/pengunjung/dusun/krajan.php">Krajan</a></li>
        <li><a href="/sepakung/pengunjung/dusun/pagergedog.php">Pagergedog</a></li>
        <li><a href="/sepakung/pengunjung/dusun/watulawang.php">Watulawang</a></li>
        <li><a href="/sepakung/pengunjung/dusun/gojati.php">Gojati</a></li>
        <li><a href="/sepakung/pengunjung/dusun/bungkah.php">Bungkah</a></li>
        <li><a href="/sepakung/pengunjung/dusun/sepakungWetan.php">Sepakung Wetan</a></li>
        <li><a href="/sepakung/pengunjung/dusun/batur.php">Batur</a></li>
        <li><a href="/sepakung/pengunjung/dusun/gowono.php">Gowono</a></li>
        <li><a href="/sepakung/pengunjung/dusun/nglimut.php">Nglimut</a></li>
        <li><a href="/sepakung/pengunjung/dusun/kenongo.php">Kenongo</a></li>
        <li><a href="/sepakung/pengunjung/dusun/jingkol.php">Jingkol</a></li>
        <li><a href="/sepakung/pengunjung/dusun/srandil.php">Srandil</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="/sepakung/pengunjung/home.php">PPID</a>
      <ul class="dropdown-menu">
        <li><a href="/sepakung/pengunjung/PPID/profilePPID.php">Profil PPID</a></li>
        <li><a href="/sepakung/pengunjung/PPID/strukturPPID.php">Struktur Organisasi PPID</a></li>
        <li><a href="/sepakung/pengunjung/PPID/maklumat.php">Maklumat Pelayanan PPID</a></li>
        <li><a href="/sepakung/pengunjung/PPID/standar.php">Standar Pelayanan Informasi</a></li>
        <li><a href="/sepakung/pengunjung/PPID/tugasPPID.php">Tugas PPID</a></li>
        <li><a href="/sepakung/pengunjung/PPID/formPPID.php">Form Pengajuan Informasi</a></li>
      </ul>
    </li>
    <li><a href="/sepakung/pengunjung/aplikasi.php">Aplikasi Pamdes V2</a></li>
    <li><a href="/sepakung/pengunjung/wisata.php">Wisata Sepakung</a></li>
    <li class="dropdown">
      <a href="/sepakung/pengunjung/sosmed.php">Media Sosial</a>
      <ul class="dropdown-menu">
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Youtube</a></li>
        <li><a href="#">Facebook</a></li>
      </ul>
    </li>
    <li><a href="/sepakung/pengunjung/contact.php">Hubungi Kami</a></li>
  </ul>
</nav>


  <div class="explore-container">
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-left">
      <h1><strong>EXPLORE</strong><br>SEPAKUNG</h1>
      <p>Travel is the movement of people between distant geographical locations. Travel can be done by foot, bicycle.</p>
    </div>
    <div class="hero-right">
  <div class="square-image">
    <img src="/sepakung/foto/g20.jpg" alt="Pantai">
  </div>
</div>

  </section>

  <!-- Discover Section -->
  <h2 class="discover-title">Discover the world</h2>
  <div class="discover-grid">
    <div class="card">
      <img src="/sepakung/foto/shadowpeak.jpg">
      <p>Colorado, USA</p>
      <h3>Shadowpeak Canyon</h3>
      <div class="card-footer">
        <span>$240/person</span>
        <button>View Details →</button>
      </div>
    </div>
    <div class="card">
      <img src="/sepakung/foto/crimson.jpg">
      <p>Wadi Rum Desert, Jordan</p>
      <h3>Crimson Rift</h3>
      <div class="card-footer">
        <span>$400/person</span>
        <button>View Details →</button>
      </div>
    </div>
    <div class="card">
      <img src="/sepakung/foto/whispering.jpg">
      <p>Namib Desert, Namibia</p>
      <h3>Whispering Dunes</h3>
      <div class="card-footer">
        <span>$300/person</span>
        <button>View Details →</button>
      </div>
    </div>
    <div class="card">
      <img src="/sepakung/foto/frostveil.jpg">
      <p>Svalbard, Norway</p>
      <h3>Frostveil Summit</h3>
      <div class="card-footer">
        <span>$300/person</span>
        <button>View Details →</button>
      </div>
    </div>
    <div class="card">
      <img src="/sepakung/foto/obsidian.jpg">
      <p>Iceland's Highlands</p>
      <h3>The Obsidian Hollow</h3>
      <div class="card-footer">
        <span>$250/person</span>
        <button>View Details →</button>
      </div>
    </div>
    <div class="card">
      <img src="/sepakung/foto/stormbreaker.jpg">
      <p>Faroe Islands, Denmark</p>
      <h3>Stormbreaker Isles</h3>
      <div class="card-footer">
        <span>$450/person</span>
        <button>View Details →</button>
      </div>
    </div>
  </div>
</div>

  <footer class="footer-info">
  <div class="footer-container">
    <div class="footer-left">
      <h2>INFO<br>KANTOR DESA SEPAKUNG</h2>
      <p>Whatsapp: <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></p>
      <p>Email: <a href="mailto:sepakung.id@gmail.com">sepakung.id@gmail.com</a></p>
      <p>Waktu Operasional:</p>
      <ul class="operational-time">
        <li>Senin – Kamis: 08.00 – 15.30 WIB</li>
        <li>Jum’at: 08.00 – 11.30 WIB</li>
      </ul>
      <p class="footer-bottom-text">
        Pemerintah Desa Sepakung | Kecamatan Banyubiru Kabupaten Semarang
      </p>
    </div>

    <div class="footer-right">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.571037560532!2d110.41673467415563!3d-7.938085579083659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b429d3e9aeb%3A0x1ec70ee7df2bc90a!2sKantor%20Kepala%20Desa%20Sepakung!5e0!3m2!1sen!2sid!4v1719140067952!5m2!1sen!2sid" 
        width="100%" 
        height="250" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</footer>


</body>
</html>