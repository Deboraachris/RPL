<?php
$conn = new mysqli("localhost", "root", "", "sepakung");
if ($conn->connect_error) die("Koneksi gagal: " . $conn->connect_error);

$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    if ($_FILES['foto']['tmp_name']) {
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $sql = "UPDATE wisata SET judul='$judul', deskripsi='$deskripsi', foto='$foto' WHERE id=$id";
    } else {
        $sql = "UPDATE wisata SET judul='$judul', deskripsi='$deskripsi' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        header("Location: wisataa.php");
        exit;
    } else {
        echo "Gagal mengedit: " . $conn->error;
    }
}

$sql = "SELECT * FROM wisata WHERE id = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
$conn->close();
?>

<!-- Form Edit -->
<form method="post" enctype="multipart/form-data">
  <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required>
  <textarea name="deskripsi" required><?= htmlspecialchars($data['deskripsi']) ?></textarea>
  <input type="file" name="foto">
  <button type="submit">Simpan</button>
</form>
