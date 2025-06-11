<?php
// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sepakung";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Untuk keamanan: pastikan admin tidak menghapus dirinya sendiri (jika perlu, tambahkan session login)
    // if ($id == $_SESSION['admin_id']) { die("Tidak bisa menghapus diri sendiri."); }

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: adminBaru.php?hapus=berhasil");
    } else {
        echo "Gagal menghapus admin: " . $conn->error;
    }
    $stmt->close();
} else {
    echo "ID admin tidak ditemukan.";
}

$conn->close();
?>
