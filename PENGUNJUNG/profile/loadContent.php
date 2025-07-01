<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sepakung";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$kategori = $_GET['kategori'];

switch ($kategori) {
    case 'berita':
        $sql = "SELECT judul, deskripsi, tanggal FROM berita ORDER BY tanggal DESC";
        $tag = "#berita";
        break;
    case 'event':
        $sql = "SELECT judul, deskripsi, tanggal FROM event ORDER BY tanggal DESC";
        $tag = "#event";
        break;
    case 'pemerintahan':
        $sql = "SELECT judul, deskripsi, tanggal FROM berita_pemerintah ORDER BY tanggal DESC";
        $tag = "#kepemerintahan";
        break;
    default:
        echo "Kategori tidak valid.";
        exit;
}

$result = $conn->query($sql);
$data = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'judul' => $row['judul'],
            'deskripsi' => $row['deskripsi'],
            'tanggal' => date('d M Y', strtotime($row['tanggal'])),
            'tag' => $tag
        ];
    }
}
$conn->close();
header('Content-Type: application/json');
echo json_encode($data);
?>
