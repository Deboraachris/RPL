<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = date("Y-m-d H:i:s");

    $gambar = null;
    $tipe_foto = null;

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
        $gambar = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $tipe_foto = $_FILES['foto']['type'];
    }

    $sql = "INSERT INTO berita (judul, deskripsi, tanggal, foto) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $judul, $deskripsi, $tanggal, $gambar);
    
    if ($stmt->execute()) {
        header("Location: berita.php");
        exit;
    } else {
        echo "Gagal menambahkan berita: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah Berita</title>
  <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 p-6">

  <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-4">Tambah Berita Baru</h1>

    <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <label for="judul" class="block text-gray-700 font-medium mb-1">Judul Berita</label>
        <input type="text" name="judul" id="judul" required
               class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="deskripsi" class="block text-gray-700 font-medium mb-1">Deskripsi Berita</label>
        <textarea name="deskripsi" id="deskripsi" rows="4" required
                  class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
      </div>

      <div>
        <label for="foto" class="block text-gray-700 font-medium mb-1">Foto Berita</label>
        <div class="flex items-center border rounded-md overflow-hidden">
          <button type="button" id="browseButton"
                  class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-l-md">
            Telusuri...
          </button>
          <input type="file" name="foto" id="foto" accept="image/*" required class="hidden" />
          <span id="fileName" class="px-4 py-2 text-gray-500 truncate w-full">Tidak ada file dipilih.</span>
        </div>
      </div>

      <button type="submit"
              class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md transition duration-200">
        Simpan Berita
      </button>
    </form>
  </div>

  <script>
    document.getElementById('foto').addEventListener('change', function () {
      const fileName = this.files[0] ? this.files[0].name : 'Tidak ada file dipilih.';
      document.getElementById('fileName').textContent = fileName;
    });

    document.getElementById('browseButton').addEventListener('click', function () {
      document.getElementById('foto').click();
    });
  </script>

</body>
</html>