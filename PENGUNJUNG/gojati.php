<?php
// Header dan koneksi tetap seperti di halaman sebelumnya
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gojati</title>
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

        .section {
            padding: 50px 20px;
            max-width: 1200px;
            margin: auto;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #222;
            text-align: center;
        }

        .section h3 {
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .section p,
        .section li {
            font-size: 18px;
            margin-bottom: 10px;
            color: #555;
        }

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

        .image-stack img {
            display: block;
            margin: 0 auto 25px auto; /* Tengah + spasi antar gambar */
            max-width: 500px;
            width: 90%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

    <!-- Isi Halaman -->
    <section class="section">
        <h2>GOJATI</h2>
        <div class="image-stack">
            <img src="../FOTO/g" alt="penduduk" style="max-width: 40%; height: auto;">
        </div>
        <p style="text-align:center">Peta Wilayah Desa Watulawang</p>
    </section>

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

</body>

</html>
