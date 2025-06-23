<?php
// Header dan koneksi tetap seperti di halaman sebelumnya
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Profil Pemerintah Desa Sepakung</title>
    <style>
        /* Tambahkan CSS yang sama seperti di home.php kamu */
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
        .section p, .section li {
            font-size: 18px;
            margin-bottom: 10px;
            color: #555;
        }
        .footer {
            background-color: #222;
            color: white;
            padding: 40px 20px;
            text-align: center;
            margin-top: 50px;
        }
        .footer h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .footer button {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: black;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .footer button:hover {
            background-color: #e6b800;
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
                <a href="#">Profil</a>
                <ul class="dropdown-menu">
                    <li><a href="struktur_organisasi.php">Struktur Organisasi</a></li>
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
</header>

<!-- Isi Halaman -->
<section class="section">
    <h2>PROFIL</h2>

    <h3>Visi</h3>
    <li>Mewujudkan Desa Sepakung Menjadi Desa Mandiri Melalui Bidang Pertanian, Industri Kecil dan Wisata Desa.</li>


    <h3>Misi</h3>
    <ul>
        <li>Memperbaiki dan menambah sarana dan prasarana yang dibutuhkan untuk meningkatkan SDM melalui pendidikan formal maupun informal.</li>
        <li>Bekerja sama dengan petugas penyuluh lapangan untuk meningkatkan hasil pertanian.</li>
        <li>Meningkatkan usaha Pertanian.</li>
        <li>Meningkatkan dan mengelola Pendapatan Asli Desa.</li>
        <li>Mewujudkan pemerintahan yang baik dan bersih melalui pelaksanaan Otonomi Daerah.</li>
    </ul>
</section>

<!-- Footer -->
<footer class="footer">
    <h2>About The Summit</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
    <button>LEARN MORE</button>
</footer>

</body>
</html>
