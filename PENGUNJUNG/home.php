<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Desa Sepakung</title>
    <link rel="stylesheet" href="/SEPAKUNG/PENGUNJUNG/home.css" />
</head>
<body>
        <?php
            echo '<header class="header-section">';
            echo '<nav class="navbar">';
            echo '<ul>';
            echo '<li><a href="#">HOME</a></li>';
            echo '<li><a href="#">WISATA</a></li>';
            echo '<li><a href="#">INFORMASI</a></li>';
            echo '<li><a href="#">CONTACT US</a></li>';
            echo '</ul>';
            echo '</nav>';
            echo '<div class="header-text">';
            echo '<h1>DESA SEPAKUNG</h1>';
            echo '<p>KABUPATEN SEMARANG</p>';
            echo '</div>';
            echo '</header>';

            echo '<section class="section-content-satu">';
            echo '<div class="section-title">';
            echo '<a href="#" class="btn-info">PROFIL</a>';
            echo '<a href="#" class="btn-info">DUSUN</a>';
            echo '<a href="#" class="btn-info">PPID</a>';
            echo '</div>';
            echo '</section>';

            echo '<section class="section-content section-wi-info">';
            echo '<div class="gambar">';
            echo '<img src="/RPL/img/air terjun.jpg" alt="Air Terjun" />';
            echo '<img src="/RPL/img/kali.jpg" alt="Kali" />';
            echo '</div>';

            echo '<div class="section-title-wi" style="margin-top: 60px;">';
            echo '<h2>WISATA</h2>';
            echo '<a href="#" class="btn-info">SEE MORE</a>';
            echo '</div>';

            echo '<div class="gambar">';
            echo '<img src="/RPL/img/rapat.jpg" alt="Kegiatan Warga" />';
            echo '<img src="/RPL/img/desa.jpg" alt="Musyawarah Desa" />';
            echo '</div>';

            echo '<div class="section-title-wi" style="margin-top: 60px;">';
            echo '<h2>INFORMASI</h2>';
            echo '<a href="#" class="btn-info">SEE MORE</a>';
            echo '</div>';
            echo '</section>';
        ?>
</body>
</html>
