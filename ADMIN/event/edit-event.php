<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT * FROM eventt WHERE id = $id";
$result = $conn->query($sql);
$eventt = $result->fetch_assoc();

if (!$eventt) {
    echo "Event tidak ditemukan!";
    exit;
}

// Proses update jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    // Update data (jika ada file baru diunggah)
    if ($_FILES['gambar']['error'] == 0) {
        $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
        $stmt = $conn->prepare("UPDATE eventt SET judul=?, deskripsi=?, foto=?, tanggal=NOW() WHERE id=?");
        $stmt->bind_param("sssi", $judul, $deskripsi, $gambar, $id);
    } else {
        $stmt = $conn->prepare("UPDATE eventt SET judul=?, deskripsi=?, tanggal=NOW() WHERE id=?");
        $stmt->bind_param("ssi", $judul, $deskripsi, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Event berhasil diperbarui.'); window.location='event.php';</script>";
    } else {
        echo "Gagal memperbarui event: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Event</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Edit Event</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-4">
        <label class="block font-semibold mb-1">Judul</label>
        <input type="text" name="judul" value="<?= htmlspecialchars($eventt['judul']); ?>" required class="w-full border px-3 py-2 rounded" />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="5" required class="w-full border px-3 py-2 rounded"><?= htmlspecialchars($eventt['deskripsi']); ?></textarea>
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Gambar Baru (Opsional)</label>
        <input type="file" name="gambar" accept="image/*" class="w-full" />
        <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Gambar Saat Ini</label>
        <img src="tampil-gambar-event.php?id=<?= $eventt['id']; ?>" alt="Gambar Event" class="w-32 h-32 object-cover rounded border" />
      </div>

      <div class="flex justify-between mt-6">
        <a href="event.php" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan Perubahan</button>
      </div>
    </form>
  </div>
</body>
</html>
