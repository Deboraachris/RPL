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

$sql = "SELECT id, judul, deskripsi, tanggal FROM berita ORDER BY tanggal DESC";
$result = $conn->query($sql);
$berita = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $berita[] = $row;
    }
}
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
        .header {
            position: sticky;
            top: 0;
            background-color: rgba(34, 34, 34, 0.9);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            z-index: 1000;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 120%;
            left: 0;
            background-color: #4a90e2;
            min-width: 200px;
            border-radius: 8px;
            list-style: none;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            z-index: 1001;
        }

        .dropdown-menu li a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-bottom: 1px solid #6faaf0;
            transition: background-color 0.3s;
        }

        .dropdown-menu li:last-child a {
            border-bottom: none;
        }

        .dropdown-menu li a:hover {
            background-color: #357ABD;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
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
        .category-box {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }
        .category-box button {
            padding: 12px 24px;
            background-color: #eee;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .category-box button:hover {
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
        .profile-info button {
            margin-top: 10px;
            background-color: #ffcc00;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 40px 20px;
            font-family: system-ui, sans-serif;
        }

        .footer-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .footer-info {
            background-color: #2f2f2f;
            padding: 25px;
            border: 1px solid #444;
            border-radius: 10px;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .footer-info:hover {
            transform: translateY(-5px);
        }

        .footer-info h3 {
            font-size: 26px;
            margin-bottom: 15px;
        }

        .footer-info p {
            font-size: 16px;
            margin-bottom: 8px;
            color: #ccc;
        }

        .footer-info a {
            color: #4a90e2;
            text-decoration: none;
        }

        .footer-info a:hover {
            text-decoration: underline;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #555;
        }

        .footer-bottom p {
            font-size: 14px;
            color: #aaa;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="logo">Pemerintah Desa Sepakung</div>
        <nav>
            <ul class="nav-links">
                <li><a href="/sepakung/pengunjung/home.php">Home</a></li>

                <li class="dropdown">
                    <a href="profil_pemerintahan.php">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a href="struktur_organisasi.php">Struktur Organisasi</a></li>
                        <li><a href="geografi.php">Geografi</a></li>
                        <li><a href="kesehatan.php">Kesehatan</a></li>
                        <li><a href="penduduk.php">Penduduk</a></li>
                        <li><a href="perekonomian.php">Perekonomian</a></li>
                        <li><a href="potensi_desa.php">Potensi Desa</a></li>
                        <li><a href="sarpras.php">Sarpras</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#">Dusun</a>
                    <ul class="dropdown-menu">
                        <li><a href="krajan.php">Krajan</a></li>
                        <li><a href="pagergedog.php">Pagergedog</a></li>
                        <li><a href="watulawang.php">Watulawang</a></li>
                        <li><a href="gojati.php">Gojati</a></li>
                        <li><a href="bungkah.php">Bungkah</a></li>
                        <li><a href="sepakung_wetan.php">Sepakung Wetan</a></li>
                        <li><a href="batur.php">Batur</a></li>
                        <li><a href="gowono.php">Gowono</a></li>
                        <li><a href="nglimut.php">Nglimut</a></li>
                        <li><a href="kenongo.php">Kenongo</a></li>
                        <li><a href="jingkol.php">Jingkol</a></li>
                        <li><a href="srandil.php">Srandil</a></li>
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
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h4>Nikmati petualangan dan keindahan Desa Sepakung!</h4>
            <h1>Desa Wisata Sepakung</h1>
            <p>Terletak di Banyubiru, Kabupaten Semarang</p>
            <button>JELAJAHI DESA</button>
        </div>
    </section>

    <!-- Kategori -->
    <section class="section category-selector">
        <div class="category-box">
            <button onclick="showContent('berita')">Berita</button>
            <button onclick="showContent('event')">Event</button>
            <button onclick="showContent('pemerintahan')">Kepemerintahan</button>
        </div>
    </section>

    <!-- Konten Dinamis -->
    <section class="section" id="berita" style="display: block;">
    <h2>Berita Desa Sepakung</h2>
    <div class="stories">
        <?php if (!empty($berita)): ?>
            <?php foreach ($berita as $row): ?>
                <div class="story-card">
                    <div style="padding: 15px;">
                        <h3><?= htmlspecialchars($row['judul']) ?></h3>
                        <p style="color:#888; font-size:14px; margin-bottom:10px;">
                            <?= date("d F Y", strtotime($row['tanggal'])) ?>
                        </p>
                        <p><?= nl2br(htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 150, '...'))) ?></p>
                        <a href="detail_berita.php?id=<?= $row['id'] ?>">
                            <button style="margin-top:10px; background-color:#ffcc00; padding:8px 16px; border:none; border-radius:20px; cursor:pointer;">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada berita tersedia.</p>
        <?php endif; ?>
    </div>
</section>

<?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "sepakung";

        $conn = new mysqli($host, $user, $pass, $dbname);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "SELECT id, judul, deskripsi, tanggal FROM eventt ORDER BY tanggal DESC";
        $result = $conn->query($sql);
        $eventt = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $eventt[] = $row;
            }
        }
        $conn->close();
        ?>

    <section class="section" id="event" style="display: none;">
        <h2>Event Desa Sepakung</h2>
        <div class="stories">
                <?php if (!empty($eventt)): ?>
            <?php foreach ($eventt as $row): ?>
                <div class="story-card">
                    <div style="padding: 15px;">
                        <h3><?= htmlspecialchars($row['judul']) ?></h3>
                        <p style="color:#888; font-size:14px; margin-bottom:10px;">
                            <?= date("d F Y", strtotime($row['tanggal'])) ?>
                        </p>
                        <p><?= nl2br(htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 150, '...'))) ?></p>
                        <a href="detail_eventt.php?id=<?= $row['id'] ?>">
                            <button style="margin-top:10px; background-color:#ffcc00; padding:8px 16px; border:none; border-radius:20px; cursor:pointer;">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada event tersedia.</p>
        <?php endif; ?>
        </div>
    </section>


<?php
// Debugging
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

$sql = "SELECT id, judul, deskripsi, tanggal FROM berita_pemerintah ORDER BY tanggal DESC";
$result = $conn->query($sql);
$berita_pemerintah = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $berita_pemerintah[] = $row;
    }
}
$conn->close();
?>

    <section class="section" id="pemerintahan" style="display: none;">
        <h2>Informasi Pemerintahan</h2>
        <div class="stories">
                <?php if (!empty($berita_pemerintah)): ?>
            <?php foreach ($berita_pemerintah as $row): ?>
                <div class="story-card">
                    <div style="padding: 15px;">
                        <h3><?= htmlspecialchars($row['judul']) ?></h3>
                        <p style="color:#888; font-size:14px; margin-bottom:10px;">
                            <?= date("d F Y", strtotime($row['tanggal'])) ?>
                        </p>
                        <p><?= nl2br(htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 150, '...'))) ?></p>
                        <a href="detail_berita_pemerintah.php?id=<?= $row['id'] ?>">
                            <button style="margin-top:10px; background-color:#ffcc00; padding:8px 16px; border:none; border-radius:20px; cursor:pointer;">Selengkapnya</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada event tersedia.</p>
        <?php endif; ?>
        </div>
    </section>

    <!-- Profil Pendaki -->
    <section class="profile section">
        <img src="https://source.unsplash.com/random/150x150/?climber" alt="Climber">
        <div class="profile-info">
            <h2>Climber Profile</h2>
            <p>The man, the myth, the legend.</p>
            <button>MEET JON MESSNER</button>
        </div>
    </section>

    <!-- Stories Section -->
<section class="stories section">
    <h2>Stories From The Peak</h2>
    <div class="story-grid">
        <div class="story-card">
            <h3>10 Things To Pack For Your Next Summit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="story-card">
            <h3>A Day in the Life of a Mountain Climber</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="story-card">
            <h3>Epic Climbs Around the World</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</section>

    <!-- Footer -->
<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-info">
            <h3>INFO</h3>
            <p><strong>KANTOR DESA SEPAKUNG</strong></p>
            <p>📱 Whatsapp :</p>
            <p>✉️ Email : <a href="mailto:sepakung.id@gmail.com">sepakung.id@gmail.com</a></p>
            <p><strong>Waktu Operasional :</strong></p>
            <p>Senin – Kamis : 08.00 – 15.30 WIB</p>
            <p>Jum’at : 08.00 – 11.30 WIB</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Pemerintah Desa Sepakung | Kecamatan Banyubiru Kabupaten Semarang</p>
    </div>
</footer>

    <!-- JS untuk Menampilkan Konten -->
    <script>
        function showContent(category) {
            document.getElementById("berita").style.display = "none";
            document.getElementById("event").style.display = "none";
            document.getElementById("pemerintahan").style.display = "none";
            document.getElementById(category).style.display = "block";
        }
    </script>
</body>
</html>