<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Hapus data dari tabel
    $sql = "DELETE FROM eventt WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: event.php?pesan=hapus-sukses");
        exit();
    } else {
        echo "Gagal menghapus event: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
