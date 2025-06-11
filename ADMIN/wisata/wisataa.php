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

$sql = "SELECT id, judul, deskripsi, tanggal, maps_url FROM wisata ORDER BY tanggal DESC";
$result = $conn->query($sql);
$wisata = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $wisata[] = $row;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CRUD Wisata</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .table-container {
      height: 100%;
      overflow-y: auto;
    }
    thead th {
      position: sticky;
      top: 0;
      background-color: #e9ffdb;
      z-index: 10;
      box-shadow: 0 2px 2px -1px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body class="h-full bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] flex items-center justify-center p-4">

<div class="h-[90vh] w-full max-w-[2200px] bg-white rounded-3xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] flex overflow-hidden">

  <!-- Sidebar -->
  <aside class="bg-[#6B916B] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white flex-shrink-0">
    <div class="text-center text-sm font-semibold">Admin<br>Sepakung</div>
    <nav class="flex flex-col space-y-10 mt-6">
      <a href="/sepakung/admin/dashboard.php" class="text-white text-xl flex justify-center items-center" title="Dashboard"><i class="fas fa-home"></i></a>
      <a href="/sepakung/admin/berita/berita.php" class="text-white text-xl flex justify-center items-center" title="Berita"><i class="fas fa-newspaper"></i></a>
      <a href="/sepakung/admin/eventt/event.php" class="text-white text-xl flex justify-center items-center" title="Event"><i class="fas fa-bullhorn"></i></a>
      <a href="/sepakung/admin/kepemerintahan/beritaPemerintah.php" class="text-white text-xl flex justify-center items-center" title="Berita Pemerintah"><i class="fas fa-landmark"></i></a>
      <a href="/sepakung/admin/wisata/wisataa.php" class="text-white text-xl flex justify-center items-center" title="Wisata"><i class="fas fa-map"></i></a>
      <a href="/sepakung/admin/calender.php" class="text-white text-xl flex justify-center items-center" title="Kalender"><i class="fas fa-calendar-alt"></i></a>
      <a href="/sepakung/admin/kritiksaran.php" class="text-white text-xl flex justify-center items-center" title="Kritik & Saran"><i class="fas fa-envelope"></i></a>
      <a href="/sepakung/admin/adminAdmin/adminBaru.php" class="text-white text-xl flex justify-center items-center" title="Tambah Admin"><i class="fas fa-user-plus"></i></a>
      <a href="/sepakung/admin/settings.php" class="text-white text-xl flex justify-center items-center" title="Pengaturan"><i class="fas fa-cog"></i></a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 flex flex-col p-6 min-h-0">
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col min-h-0 h-full">

      <!-- Judul dan tombol -->
      <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Data Wisata</h1>
        <a href="tambah-wisata.php" class="bg-[#6B916B] hover:bg-[#ace1af] text-white px-4 py-2 rounded-md">
          + Tambah Wisata
        </a>
      </div>

      <!-- Scrollable Tabel -->
      <div class="table-container border rounded-lg flex-1">
        <?php if (count($wisata) > 0): ?>
          <div class="overflow-x-auto h-full">
            <table class="min-w-full table-auto">
              <thead>
                <tr>
                  <th class="py-3 px-4">Judul</th>
                  <th class="py-3 px-4">Tanggal</th>
                  <th class="py-3 px-4">Deskripsi</th>
                  <th class="py-3 px-4">Peta</th>
                  <th class="py-3 px-4">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($wisata as $row): ?>
                  <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4 font-semibold text-gray-800"><?= htmlspecialchars($row['judul']) ?></td>
                    <td class="py-3 px-4 text-gray-600"><?= date("d M Y H:i", strtotime($row['tanggal'])) ?></td>
                    <td class="py-3 px-4 text-gray-700 max-w-xs overflow-hidden text-ellipsis">
                      <?= nl2br(htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 100, '...'))) ?>
                    </td>
                    <td class="py-3 px-4">
                      <iframe src="<?= htmlspecialchars($row['maps_url']) ?>" width="200" height="150" class="rounded border"></iframe>
                    </td>
                    <td class="py-3 px-4 space-x-2">
                      <a href="edit-wisata.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Edit</a>
                      <a href="hapus-wisata.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="text-red-600 hover:underline">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <p class="text-gray-600 p-6">Belum ada data wisata yang ditambahkan.</p>
        <?php endif; ?>
      </div>

    </div>
  </main>
</div>
</body>
</html>
