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
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CRUD Berita</title>
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
      background-color: #f5f5f5;
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
    <nav class="flex flex-col space-y-10 mt-6 text-xl">
      <a href="dashboard.php"><i class="fas fa-home"></i></a>
      <a href="berita.php"><i class="fas fa-newspaper"></i></a>
      <a href="event.php"><i class="fas fa-bullhorn"></i></a>
      <a href="beritaPemerintah.php"><i class="fas fa-landmark"></i></a>
      <a href="calender.php"><i class="fas fa-calendar-alt"></i></a>
      <a href="settings.php"><i class="fas fa-cog"></i></a>
      <a href="kritiksaran.php"><i class="fas fa-envelope"></i></a>
      <a href="adminBaru.php"><i class="fas fa-user-plus"></i></a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 flex flex-col p-6 min-h-0">
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col min-h-0 h-full">

      <!-- Judul dan tombol -->
      <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Daftar Berita</h1>
        <a href="tambahberita.php" class="bg-[#6B916B] hover:bg-[#ace1af] text-white px-4 py-2 rounded-md">
          + Tambah Berita
        </a>
      </div>

      <!-- Scrollable Tabel -->
      <div class="table-container border rounded-lg flex-1">
        <?php if (count($berita) > 0): ?>
          <div class="overflow-x-auto h-full">
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
                <?php foreach ($berita as $row): ?>
                  <tr class="hover:bg-gray-100">
                    <td class="py-3 px-4">
                      <img src="tampil-gambar-berita.php?id=<?= $row['id'] ?>" alt="<?= htmlspecialchars($row['judul']) ?>" class="w-16 h-16 object-cover rounded" />
                    </td>
                    <td class="py-3 px-4 font-semibold text-gray-800"><?= htmlspecialchars($row['judul']) ?></td>
                    <td class="py-3 px-4 text-gray-600"><?= date("d M Y H:i", strtotime($row['tanggal'])) ?></td>
                    <td class="py-3 px-4 text-gray-700 max-w-xs overflow-hidden text-ellipsis">
                      <?= nl2br(htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 100, '...'))) ?>
                    </td>
                    <td class="py-3 px-4 space-x-2">
                      <a href="edit-berita.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Edit</a>
                      <a href="hapus-berita.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')" class="text-red-600 hover:underline">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <p class="text-gray-600 p-6">Belum ada berita yang ditambahkan.</p>
        <?php endif; ?>
      </div>

    </div>
  </main>
</div>
</body>
</html>
