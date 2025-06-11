<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    $sql = "INSERT INTO wisata (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$foto')";
    if ($conn->query($sql) === TRUE) {
        header("Location: wisataa.php");
        exit;
    } else {
        echo "Gagal menambahkan: " . $conn->error;
    }
}
$conn->close();
?>
