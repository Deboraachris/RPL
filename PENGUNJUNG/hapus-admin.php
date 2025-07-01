<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sepakung";

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    // Cegah penghapusan admin utama (misal ID = 1)
    if ($id == 1) {
        header("Location: adminBaru.php?hapus=gagal");
        exit();
    }

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: adminBaru.php?hapus=berhasil");
    } else {
        header("Location: adminBaru.php?hapus=gagal");
    }
    $stmt->close();
}

$conn->close();
?>
