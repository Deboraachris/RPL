<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kesehatan | Pemerintah Desa Sepakung</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
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

    ul {
      padding-left: 20px;
      line-height: 1.7;
    }

    ul li {
      font-size: 16px;
    }

    .chart-img {
      width: 100%;
      max-width: 700px;
      display: block;
      margin: 20px auto;
      border-radius: 8px;
      border: 4px solid #ccc;
    }

    .footer-info {
      background-color: #0c0c1d;
      color: white;
      padding: 50px 30px;
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 40px;
    }

    .footer-left,
    .footer-right {
      flex: 1;
      min-width: 300px;
    }

    .footer-left h2 {
      font-size: 24px;
      margin-bottom: 10px;
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
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <div class="container">
    <h2>KESEHATAN WARGA DESA SEPAKUNG</h2>

    <p><strong>Status kesehatan warga Desa Sepakung</strong> berdasarkan data Puskesmas dan Posyandu adalah sebagai berikut:</p>

    <ul>
      <li>👶 Balita sehat: 112 anak</li>
      <li>📏 Kasus stunting: 17 anak (menurun dari tahun sebelumnya)</li>
      <li>🧓 Lansia dengan layanan rutin Posyandu: 85 orang</li>
      <li>💉 Warga yang sudah vaksin lengkap: 1.230 jiwa</li>
      <li>❤️ Jumlah warga penderita penyakit kronis (hipertensi, diabetes): 76 orang</li>
    </ul>

    <br>

    <img src="https://sepakung.id/wp-content/uploads/2023/06/chart-kesehatan-sepakung.png"
         alt="Diagram Kesehatan Warga Desa Sepakung"
         class="chart-img">

    <img src="https://sepakung.id/wp-content/uploads/2023/06/bar-chart-kesehatan.png"
         alt="Diagram Batang Status Kesehatan"
         class="chart-img">
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
