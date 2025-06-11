<?php
$conn = new mysqli("localhost", "root", "", "sepakung");
if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error);

$id = $_GET['id'];
$sql = "SELECT foto FROM wisata WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("Content-type: image/jpeg");
    echo $row['foto'];
}
$conn->close();
?>
