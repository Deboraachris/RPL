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

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CRUD Berita Pemerintah</title>
  <script src="https://cdn.tailwindcss.com"></script> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .table-container {
      max-height: calc(90vh - 160px);
      overflow-y: auto;
    }
    thead th {
      position: sticky;
      top: 0;
      background-color: #f5f5f5;
      z-index: 10;
      box-shadow: 0 2px 2px -1px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body class="bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] min-h-screen flex items-center justify-center p-4">

  <div class="max-w-[2200px] w-full bg-white rounded-3xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] flex flex-col md:flex-row overflow-hidden h-[90vh]">

    <!-- Sidebar -->
    <aside class="bg-[#6B916B] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white select-none flex-shrink-0">
      <div class="text-center text-sm font-semibold leading-tight tracking-wide">Admin<br>Sepakung</div>
      <nav class="flex flex-col space-y-10 mt-6">
        <a href="dashboard.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-home"></i></a>
        <a href="berita.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-newspaper"></i></a>
        <a href="event.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-bullhorn"></i></a>
        <a href="beritaPemerintah.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-landmark"></i></a>
        <a href="calender.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-calendar-alt"></i></a>
        <a href="settings.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-cog"></i></a>
        <a href="kritiksaran.php" class="text-white text-xl flex justify-center items-center relative">
          <i class="fas fa-envelope"></i>
          <span class="absolute -top-1 -right-1 bg-[#ff4d4f] text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center">7</span>
        </a>
        <a href="adminBaru.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-user-plus"></i></a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 overflow-hidden">
      <div class="bg-white rounded-2xl shadow-lg p-6">

        <!-- Judul & Tombol -->
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold">Daftar Berita Pemerintah</h1>
          <a href="tambah-berita-pemerintah.php" class="bg-[#6B916B] hover:bg-[#ace1af] text-white px-4 py-2 rounded-md">
            + Tambah Berita Pemerintah
          </a>
        </div>

        <!-- Area Tabel Scrollable -->
        <div class="table-container border rounded-lg overflow-hidden">
          <?php if (count($berita_pemerintah) > 0): ?>
            <div class="overflow-x-auto">
              <table class="min-w-full table-auto">
                <thead class="bg-gray-200 text-left">
                  <tr>
                    <th class="py-3 px-4">Foto</th>
                    <th class="py-3 px-4">Judul</th>
                    <th class="py-3 px-4">Tanggal</th>
                    <th class="py-3 px-4">Deskripsi</th>
                    <th class="py-3 px-4">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($berita_pemerintah as $row): ?>
                    <tr class="hover:bg-gray-100">
                      <td class="py-3 px-4">
                        <img src="tampil-gambar-berita-pemerintah.php?id=<?= $row['id'] ?>" alt="<?= htmlspecialchars($row['judul']) ?>" class="w-16 h-16 object-cover rounded" />
                      </td>
                      <td class="py-3 px-4 font-semibold text-gray-800"><?= htmlspecialchars($row['judul']) ?></td>
                      <td class="py-3 px-4 text-gray-600"><?= date("d M Y H:i", strtotime($row['tanggal'])) ?></td>
                      <td class="py-3 px-4 text-gray-700 max-w-xs overflow-hidden text-ellipsis">
                        <?= nl2br(htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 100, '...'))) ?>
                      </td>
                      <td class="py-3 px-4 space-x-2">
                        <a href="edit-berita-pemerintah.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Edit</a>
                        <a href="hapus-berita-pemerintah.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')" class="text-red-600 hover:underline">Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php else: ?>
            <p class="text-gray-600 p-6">Belum ada berita pemerintah yang ditambahkan.</p>
          <?php endif; ?>
        </div>
        <!-- /Area Tabel Scrollable -->

      </div>
    </main>

  </div>
</body>
</html>
