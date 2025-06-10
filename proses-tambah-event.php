<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $conn->real_escape_string($_POST['judul']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);

    $imageData = file_get_contents($_FILES["foto"]["tmp_name"]);
    $imageData = $conn->real_escape_string($imageData);

    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        if ($_FILES["foto"]["size"] <= 2000000) {
            $sql = "INSERT INTO eventt (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$imageData')";
            if ($conn->query($sql) === TRUE) {
                header("Location: event.php");
                exit();
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Ukuran file terlalu besar.";
        }
    } else {
        echo "File bukan gambar.";
    }
}

$conn->close();
?>
