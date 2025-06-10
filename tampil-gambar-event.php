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
$sql = "SELECT foto FROM eventt WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("Content-Type: image/jpeg"); // sesuaikan jika perlu
    echo $row['foto'];
} else {
    http_response_code(404);
    echo "Gambar tidak ditemukan.";
}
$conn->close();
?>
