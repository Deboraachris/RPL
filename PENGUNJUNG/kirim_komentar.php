<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sepakung";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$subject = $_POST['subject'];
$message = $_POST['message'];
$nama = "Anonymous"; // default, tidak perlu diinput

$sql = "INSERT INTO komentar (nama, subjek, pesan) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nama, $subject, $message);

if ($stmt->execute()) {
  echo "<script>alert('Komentar berhasil dikirim!'); window.location.href='contact.php';</script>";
} else {
  echo "Gagal menyimpan komentar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
