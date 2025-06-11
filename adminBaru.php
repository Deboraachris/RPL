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
$result = $conn->query("SELECT id, email, password FROM users ORDER BY id ASC");

// Cek notifikasi
$notif = '';
if (isset($_GET['hapus']) && $_GET['hapus'] == 'berhasil') {
    $notif = 'Admin berhasil dihapus.';
}
if (isset($_GET['ubah']) && $_GET['ubah'] == 'berhasil') {
    $notif = 'Password berhasil diubah.';
}
if (isset($_GET['tambah']) && $_GET['tambah'] == 'berhasil') {
    $notif = 'Admin baru berhasil ditambahkan.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] min-h-screen flex items-center justify-center p-4">

<div class="max-w-[2200px] w-full bg-white rounded-3xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] flex flex-col md:flex-row overflow-hidden">

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
            <a href="kritiksaran.php" class="text-white text-xl flex justify-center items-center relative"><i class="fas fa-envelope"></i><span class="absolute -top-1 -right-1 bg-[#ff4d4f] text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center">7</span></a>
            <a href="adminBaru.php" class="text-white text-xl flex justify-center items-center"><i class="fas fa-user-plus"></i></a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6 md:p-6 space-y-6 md:space-y-14">

        <h2 class="text-2xl font-bold mb-6 text-[#6B916B] text-center">Manajemen Admin</h2>

        <!-- Notifikasi -->
        <?php if (!empty($notif)): ?>
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg text-center">
                <?php echo $notif; ?>
            </div>
        <?php endif; ?>

        <!-- Daftar Admin -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Daftar Admin</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead class="bg-[#6B916B] text-white">
                        <tr>
                            <th class="py-2 px-4 border-b">ID</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Password</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr class="text-center">
                                    <td class="py-2 px-4 border-b"><?php echo $row['id']; ?></td>
                                    <td class="py-2 px-4 border-b"><?php echo $row['email']; ?></td>
                                    <td class="py-2 px-4 border-b text-xs break-all"><?php echo $row['password']; ?></td>
                                    <td class="py-2 px-4 border-b flex justify-center gap-2">
                                        <a href="ubah-password.php?id=<?php echo $row['id']; ?>" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600 text-sm">Ubah</a>
                                        <a href="hapus-admin.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus admin ini?')" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 text-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="4" class="py-4 text-center text-gray-500">Belum ada admin</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Form Tambah Admin -->
        <div>
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Tambah Admin Baru</h3>
            <form action="proses-tambah-admin.php" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="email">Email</label>
                    <input type="email" id="email" name="email" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#6B916B] focus:border-[#6B916B]">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1" for="password">Password</label>
                    <input type="password" id="password" name="password" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#6B916B] focus:border-[#6B916B]">
                </div>
                <button type="submit" class="w-full bg-[#6B916B] text-white py-2 rounded-lg font-semibold hover:bg-[#5a7d5a] transition">Simpan Admin</button>
            </form>
        </div>

        <div class="mt-6 text-center">
            <a href="dashboard.php" class="text-sm text-[#6B916B] font-semibold hover:underline">← Kembali ke Dashboard</a>
        </div>

    </main>
</div>

</body>
</html>

<?php $conn->close(); ?>
