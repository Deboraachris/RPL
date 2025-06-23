<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Struktur Organisasi | Pemerintah Desa Sepakung</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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


    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: white;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    .container h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      color: #222;
    }

    .share-buttons {
      text-align: center;
      margin-bottom: 15px;
    }

    .share-buttons button {
      background-color: #eee;
      border: 1px solid #ccc;
      padding: 8px 14px;
      margin: 5px;
      border-radius: 4px;
      cursor: pointer;
    }

    .struktur-img {
      width: 100%;
      max-width: 100%;
      border: 6px solid gold;
      border-radius: 8px;
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
        <li><a href="/sepakung/pengunjung/strukturOrganisasi.php">Struktur Organisasi</a></li>
                            <li><a href="#">Geografi</a></li>
                            <li><a href="#">Kesehatan</a></li>
                            <li><a href="#">Penduduk</a></li>
                            <li><a href="#">Perekonomian</a></li>
                            <li><a href="#">Potensi Desa</a></li>
                            <li><a href="#">Sarpras</a></li>
      </ul>
    </li>

    <li class="dropdown">
                    <a href="#">Dusun</a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Krajan</a></li>
                    <li><a href="#">Pagergedog</a></li>
                    <li><a href="#">Watulawang</a></li>
                    <li><a href="#">Gojati</a></li>
                    <li><a href="#">Bungkah</a></li>
                    <li><a href="#">Sepakung Wetan</a></li>
                    <li><a href="#">Batur</a></li>
                    <li><a href="#">Gowono</a></li>
                    <li><a href="#">Nglimut</a></li>
                    <li><a href="#">Kenongo</a></li>
                    <li><a href="#">Jingkol</a></li>
                    <li><a href="#">Srandil</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">PPID</a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Profil PPID</a></li>
                    <li><a href="#">Struktur Organisasi PPID</a></li>
                    <li><a href="#">Maklumat Pelayanan PPID</a></li>
                    <li><a href="#">Standar Pelayanan Informasi</a></li>
                    <li><a href="#">Tugas PPID</a></li>
                    <li><a href="#">Form Pengajuan Informasi</a></li>
                    </ul>
                </li>
                <li><a href="#">Aplikasi Pamdes V2</a></li>
                <li><a href="#">Wisata Sepakung</a></li>
                <li class="dropdown">
                    <a href="#">Media Sosial</a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Facebook</a></li>
                    </ul>
                </li>
                <li><a href="#">Hubungi Kami</a></li>
  </ul>
</nav>


  <div class="container">
    <h2>STRUKTUR ORGANISASI</h2>

    <div class="share-buttons">
      <button>🔗 Share</button>
      <button>📌 Pin it</button>
      <button>🐦 Tweet</button>
      <button>📤 Send</button>
    </div>

    <img class="struktur-img" src="https://sepakung.id/wp-content/uploads/2023/06/struktor-desaaaaaa.jpg" alt="Struktur Organisasi Desa Sepakung">
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
