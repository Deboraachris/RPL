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

// Ambil data dari form
$judul = trim($_POST['judul']);
$deskripsi = trim($_POST['deskripsi']);
$maps_url = trim($_POST['maps_url']);

// Validasi data
if (empty($judul) || empty($deskripsi) || empty($maps_url)) {
    die("Semua field wajib diisi.");
}

// Upload foto
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_data = addslashes(file_get_contents($foto_tmp)); // simpan sebagai BLOB
} else {
    die("Upload foto gagal.");
}

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO wisata (judul, deskripsi, maps_url, foto) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $judul, $deskripsi, $maps_url, $foto_data);

if ($stmt->execute()) {
    echo "<script>alert('Wisata berhasil ditambahkan.'); window.location.href='wisataa.php';</script>";
} else {
    echo "Gagal menambahkan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
