<?php
// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sepakung";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil semua admin
$result = $conn->query("SELECT id, nama, email FROM users ORDER BY id ASC");

// Cek notifikasi
$notif = '';
if (isset($_GET['tambah']) && $_GET['tambah'] == 'berhasil') {
    $notif = 'Admin baru berhasil ditambahkan.';
}
if (isset($_GET['hapus']) && $_GET['hapus'] == 'berhasil') {
    $notif = 'Admin berhasil dihapus.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] min-h-screen flex items-center justify-center p-4">

<div class="max-w-[2200px] w-full bg-white rounded-3xl shadow-lg flex flex-col md:flex-row overflow-hidden">

    <!-- Sidebar -->
    <aside class="bg-[#6B916B] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white select-none">
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
    <main class="flex-1 p-6 md:p-10 space-y-6">

        <h2 class="text-2xl font-bold text-center text-[#6B916B] mb-6">Manajemen Admin</h2>

        <?php if (!empty($notif)): ?>
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg text-center">
                <?php echo $notif; ?>
            </div>
        <?php endif; ?>

        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Admin</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-[#6B916B] text-white">
                        <tr>
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Nama</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
  <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr class="text-center">
        <td class="py-2 px-4 border-b"><?php echo $row['id']; ?></td>
        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['nama']); ?></td>
        <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['email']); ?></td>
        <td class="py-2 px-4 border-b">
          <?php if ($row['id'] != 1): ?>
            <form action="hapus-admin.php" method="POST" onsubmit="return confirm('Yakin ingin menghapus admin ini?');">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                Hapus
              </button>
            </form>
          <?php else: ?>
            <span class="text-gray-400 italic">Tidak bisa dihapus</span>
          <?php endif; ?>
        </td>
      </tr>
    <?php endwhile; ?>
  <?php else: ?>
    <tr>
      <td colspan="4" class="py-4 text-center text-gray-500">Belum ada admin</td>
    </tr>
  <?php endif; ?>
</tbody>

                </table>
            </div>
        </div>

        <div class="text-center">
            <a href="tambah-admin.php" class="bg-[#6B916B] text-white py-2 px-6 rounded-lg font-semibold hover:bg-[#5a7d5a] transition">
                Tambah Admin Baru
            </a>
        </div>

    </main>
</div>

</body>
</html>

<?php $conn->close(); ?>
                            