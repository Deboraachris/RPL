<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sepakung";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM komentar ORDER BY waktu DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kritik & Saran - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] min-h-screen flex items-center justify-center p-4">
  <div class="max-w-[2200px] w-full bg-white rounded-3xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] flex flex-col md:flex-row overflow-hidden">

    <!-- Sidebar -->
    <aside class="bg-[#6B916B] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white select-none">
      <div class="text-center text-sm font-semibold leading-tight tracking-wide">
        Admin<br/>Sepakung
      </div>
      <nav class="flex flex-col space-y-10 mt-6">
        <a href="/sepakung/admin/dashboard.php" title="Dashboard"><i class="fas fa-home"></i></a>
        <a href="/sepakung/admin/berita/berita.php" title="Berita Umum"><i class="fas fa-newspaper"></i></a>
        <a href="/sepakung/admin/eventt/event.php" title="Event"><i class="fas fa-bullhorn"></i></a>
        <a href="/sepakung/admin/kepemerintahan/beritaPemerintah.php" title="Berita Pemerintah"><i class="fas fa-landmark"></i></a>
        <a href="/sepakung/admin/wisata/wisataa.php" title="Wisata"><i class="fas fa-map"></i></a>
        <a href="/sepakung/admin/calender.php" title="Kalender"><i class="fas fa-calendar-alt"></i></a>
        <a href="/sepakung/admin/kritiksaran.php" class="relative" title="Kritik & Saran">
          <i class="fas fa-envelope"></i>
          <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center">
            <?= $result->num_rows ?>
          </span>
        </a>
        <a href="/sepakung/admin/adminAdmin/adminBaru.php" title="Tambah Admin"><i class="fas fa-user-plus"></i></a>
        <a href="/sepakung/admin/settings.php" title="Pengaturan"><i class="fas fa-cog"></i></a>
      </nav>
    </aside>

    <main class="flex-1 p-6 md:p-10 space-y-6">
      <h1 class="text-2xl md:text-3xl font-bold text-[#6B916B] mb-4">Kritik & Saran Pengunjung</h1>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="bg-white border border-gray-100 shadow-md rounded-xl p-5">
            <div class="flex items-center mb-3">
              <div class="bg-[#6B916B] text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
                <i class="fas fa-user"></i>
              </div>
              <div>
                <h3 class="text-sm font-bold text-gray-800"><?= htmlspecialchars($row['nama']) ?></h3>
                <p class="text-xs text-gray-400"><?= date("d M Y, H:i", strtotime($row['waktu'])) ?></p>
              </div>
            </div>
            <p class="text-sm text-gray-700 font-semibold mb-1"><?= htmlspecialchars($row['subjek']) ?></p>
            <p class="text-sm text-gray-700"><?= nl2br(htmlspecialchars($row['pesan'])) ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </main>
  </div>
</body>
</html>

<?php $conn->close(); ?>