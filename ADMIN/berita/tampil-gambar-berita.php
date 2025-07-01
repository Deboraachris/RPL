<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = intval($_GET['id']);
$sql = "SELECT foto FROM berita WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $gambarData = $row['foto'];

    // Deteksi MIME type otomatis
    $finfo = finfo_open();
    $mimeType = finfo_buffer($finfo, $gambarData, FILEINFO_MIME_TYPE);
    finfo_close($finfo);

    header("Content-Type: $mimeType");
    echo $gambarData;
} else {
    http_response_code(404);
    echo "Gambar tidak ditemukan.";
}
$conn->close();
?>
