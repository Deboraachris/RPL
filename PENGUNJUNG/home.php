<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk mengambil data
function fetchData($conn, $query) {
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Query gagal: " . $conn->error);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
}

// Fetch Berita
$berita = fetchData($conn, "SELECT * FROM berita ORDER BY tanggal DESC LIMIT 3");

// Fetch Event
$event = fetchData($conn, "SELECT * FROM eventt ORDER BY tanggal DESC LIMIT 3");

// Fetch Berita Pemerintah (perbaiki nama tabel di sini)
$berita_pemerintah = fetchData($conn, "SELECT * FROM berita_pemerintah ORDER BY tanggal DESC LIMIT 3");

// Tutup Koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Pemerintahan Desa Sepakung</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(to bottom, #f4f4f4, #fff);
        }

        /* Header Section */
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
      padding: 12px 16px;
      color: #111;
      font-weight: bold;
      border-bottom: 4px solid transparent;
      transition: 0.3s;
    }

    .navbar a:hover {
      border-bottom: 4px solid #f44336;
    }

    .nav-links {
  list-style: none;
  margin: 0;
  padding: 10px;
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

@media screen and (max-width: 768px) {
  .header-main {
    flex-direction: column;
    text-align: center;
  }
  .header-main img {
    margin-bottom: 10px;
  }
}
        /* Hero Section */
        .hero {
            position: relative;
            background-image: url('../foto/g20.jpg');
            background-size: cover;
            background-position: center top;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }
        .hero::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            z-index: 0;
        }
        .hero h1, .hero h4, .hero button {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .hero h4 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .hero button {
            padding: 12px 28px;
            background-color: #ffcc00;
            color: black;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .hero button:hover {
            background-color: #e6b800;
        }

        /* Kategori Button */
        .category-selector {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin: 30px 0;
}

.category-selector button {
    padding: 12px 24px;
    background-color: #eee;
    border: none;
    border-radius: 25px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.category-selector button:hover {
    background-color: #ffcc00;
    transform: scale(1.05);
}


        /* Sections */
        .section {
            padding: 50px 20px;
            max-width: 1200px;
            margin: auto;
        }
        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #222;
        }
        .section p {
            margin-bottom: 30px;
        }

        /* Story Card */
        .stories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        .story-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }
        .story-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .story-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }
        .story-card p {
            color: #666;
            font-size: 14px;
        }

        /* Profile Section */
        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            text-align: center;
        }
        .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        /* Footer Section */
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

.social-icons {
    display: flex;
    gap: 10px;
    margin: 15px 0;
}

.circle-icon {
    width: 25px;
    height: 25px;
    background-color: #003399;
    border-radius: 50%;
    display: inline-block;
}

.visitor-counter {
    margin-top: 10px;
}

.counter-box {
    background-color: #eee;
    color: black;
    font-weight: bold;
    padding: 8px 14px;
    display: inline-block;
    border-radius: 6px;
    margin-top: 5px;
}

.footer-right {
    flex: 1;
    min-width: 300px;
}


        .content-list {
    display: flex;
    flex-direction: column;
    gap: 30px;
    margin-top: 30px;
}

.content-item {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.content-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.content-text {
    padding: 20px;
}

.content-text h3 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #222;
}

.meta-info {
    font-size: 14px;
    color: #888;
    margin-bottom: 10px;
}

.content-text p {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

.tag {
    background-color: #eee;
    color: #444;
    display: inline-block;
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 14px;
}

.active-btn {
    background-color: #ffcc00;
    transform: scale(1.05);
}

.hidden {
    display: none;
}


    </style>
</head>
<body>

    <div class="header-top">
  Penetapan Calon Kepala Desa Sepakung Banyubiru dan Pengambilan nomer urut.
</div>

<div class="header-main">
  <img src="http://localhost/sepakung/foto/g21.png" alt="Logo Semarang">
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
        <li><a href="#">Whatsapp</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Youtube</a></li>
        <li><a href="#">Facebook</a></li>
      </ul>
    </li>
    <li><a href="/sepakung/pengunjung/contact.php">Berikan Masukan</a></li>
  </ul>
</nav>


    <!-- Hero Section -->
    <section class="hero">
    <div>
        <h4>Nikmati petualangan dan keindahan Desa Sepakung!</h4>
        <h1>Desa Wisata Sepakung</h1>
        <p>Terletak di Banyubiru, Kabupaten Semarang</p>
        <button>JELAJAHI DESA</button>
    </div>
</section>

<!-- Pilihan Kategori -->
<section class="section category-selector">
    <div class="flex justify-center my-6 gap-4">
        <button onclick="tampilkan('berita')">Berita</button>
        <button onclick="tampilkan('event')">Event</button>
        <button onclick="tampilkan('pemerintah')">Kepemerintahan</button>
    </div>
</section>

<!-- Konten Dinamis -->
<section id="berita" class="kategori hidden">
    <h2 class="text-2xl font-bold mb-4">Berita Umum</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <?php while($row = $berita->fetch_assoc()): ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="admin/berita/tampil-gambar-berita.php?id=<?= $row['id'] ?>" alt="<?= htmlspecialchars($row['judul']) ?>" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg"><?= htmlspecialchars($row['judul']) ?></h3>
                    <p class="text-sm text-gray-500"><?= date("d M Y", strtotime($row['tanggal'])) ?></p>
                    <p class="text-sm text-gray-700 mt-2"><?= mb_strimwidth(strip_tags($row['deskripsi']), 0, 100, "...") ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<section id="event" class="kategori hidden">
    <h2 class="text-2xl font-bold mb-4">Event Terbaru</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <?php while($row = $event->fetch_assoc()): ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="admin/eventt/tampil-gambar-event.php?id=<?= $row['id'] ?>" alt="<?= htmlspecialchars($row['judul']) ?>" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg"><?= htmlspecialchars($row['judul']) ?></h3>
                    <p class="text-sm text-gray-500"><?= date("d M Y", strtotime($row['tanggal'])) ?></p>
                    <p class="text-sm text-gray-700 mt-2"><?= mb_strimwidth(strip_tags($row['deskripsi']), 0, 100, "...") ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<section id="pemerintah" class="kategori hidden">
    <h2 class="text-2xl font-bold mb-4">Berita Pemerintah</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <?php while($row = $berita_pemerintah->fetch_assoc()): ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="admin/kepemerintahan/tampil-gambar-berita-pemerintah.php?id=<?= $row['id'] ?>" alt="<?= htmlspecialchars($row['judul']) ?>" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg"><?= htmlspecialchars($row['judul']) ?></h3>
                    <p class="text-sm text-gray-500"><?= date("d M Y", strtotime($row['tanggal'])) ?></p>
                    <p class="text-sm text-gray-700 mt-2"><?= mb_strimwidth(strip_tags($row['deskripsi']), 0, 100, "...") ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

    <!-- Footer Section -->
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

<script>
function tampilkan(kategori) {
    // Sembunyikan semua section konten
    const semua = document.querySelectorAll('.kategori');
    semua.forEach(el => el.classList.add('hidden'));

    // Tampilkan kategori yang dipilih
    const target = document.getElementById(kategori);
    if (target) {
        target.classList.remove('hidden');
    }

    // Reset semua tombol aktif
    const buttons = document.querySelectorAll('.category-selector button');
    buttons.forEach(btn => btn.classList.remove('active-btn'));

    // Tambahkan class active-btn ke tombol yang diklik
    const clickedBtn = Array.from(buttons).find(btn =>
        btn.getAttribute('onclick') === `tampilkan('${kategori}')`
    );
    if (clickedBtn) {
        clickedBtn.classList.add('active-btn');
    }
}

// Jalankan saat halaman dimuat
window.onload = function () {
    tampilkan('berita');
};
</script>



</body>
</html>