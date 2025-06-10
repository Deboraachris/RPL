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

// Ambil data berita berdasarkan ID
$sql = "SELECT * FROM berita_pemerintah WHERE id = $id";
$result = $conn->query($sql);
$berita_pemerintah = $result->fetch_assoc();

if (!$berita_pemerintah) {
    echo "Berita tidak ditemukan!";
    exit;
}

// Proses update jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    // Update data (jika ada file baru diunggah)
    if ($_FILES['gambar']['error'] == 0) {
        $gambar = file_get_contents($_FILES['gambar']['tmp_name']);
        $stmt = $conn->prepare("UPDATE berita_pemerintah SET judul=?, deskripsi=?, foto=?, tanggal=NOW() WHERE id=?");
        $stmt->bind_param("sssi", $judul, $deskripsi, $gambar, $id);
    } else {
        $stmt = $conn->prepare("UPDATE berita_pemerintah SET judul=?, deskripsi=?, tanggal=NOW() WHERE id=?");
        $stmt->bind_param("ssi", $judul, $deskripsi, $id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Berita Pemerintah berhasil diperbarui.'); window.location='beritaPemerintah.php';</script>";
    } else {
        echo "Gagal memperbarui berita pemerintah: " . $conn->error;
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
  <title>Edit Berita Pemerintah</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-4">Edit Berita Pemerintah</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-4">
        <label class="block font-semibold mb-1">Judul</label>
        <input type="text" name="judul" value="<?= htmlspecialchars($berita_pemerintah['judul']); ?>" required class="w-full border px-3 py-2 rounded" />
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Deskripsi</label>
        <textarea name="deskripsi" rows="5" required class="w-full border px-3 py-2 rounded"><?= htmlspecialchars($berita_pemerintah['deskripsi']); ?></textarea>
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Gambar Baru (Opsional)</label>
        <input type="file" name="gambar" accept="image/*" class="w-full" />
        <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
      </div>

      <div class="mb-4">
        <label class="block font-semibold mb-1">Gambar Saat Ini</label>
        <img src="tampil-gambar-berita-pemerintah.php?id=<?= $berita_pemerintah['id']; ?>" alt="Gambar Berita" class="w-32 h-32 object-cover rounded border" />
      </div>

      <div class="flex justify-between mt-6">
        <a href="beritaPemerintah.php" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded">Batal</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan Perubahan</button>
      </div>
    </form>
  </div>
</body>
</html>
