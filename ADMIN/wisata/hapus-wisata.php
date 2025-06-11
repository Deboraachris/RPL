<?php
$conn = new mysqli("localhost", "root", "", "sepakung");
if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error);

$id = $_GET['id'];
$sql = "DELETE FROM wisata WHERE id = $id";
$conn->query($sql);
$conn->close();

header("Location: wisataa.php");
exit;
?>
