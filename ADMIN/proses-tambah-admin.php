<?php
// Koneksi database
$host = "localhost";
$user = "root"; // ganti kalau user database kamu beda
$pass = "";      // ganti kalau ada password database
$db   = "sepakung"; // nama database kamu

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Validasi sederhana
if (empty($email) || empty($password)) {
    die("Email dan Password wajib diisi.");
}

// Cek apakah email sudah digunakan
$sql_check = "SELECT id FROM users WHERE email = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    echo "Email sudah terdaftar. <a href='adminBaru.php'>Kembali</a>";
    $stmt_check->close();
    $conn->close();
    exit;
}
$stmt_check->close();

// Hash password
$password_hashed = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);


if ($stmt->execute()) {
    echo "
    <div style='
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(to bottom right, #f0f2ff, #e9ebff, #f7f7ff);
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif;
    '>
        <div style='
            background: white;
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
        '>
            <div style='font-size: 50px; color: #6B916B; margin-bottom: 20px;'>
                <i class='fas fa-check-circle'></i>
            </div>
            <h2 style='font-size: 24px; font-weight: bold; color: #333;'>Admin berhasil ditambahkan!</h2>
            <a href='dashboard.php' style='
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background: #6B916B;
                color: white;
                border-radius: 10px;
                text-decoration: none;
                font-weight: 600;
                transition: background 0.3s;
            ' onmouseover=\"this.style.background='#5a7d5a'\" onmouseout=\"this.style.background='#6B916B'\">
                Kembali ke Dashboard
            </a>
        </div>
    </div>";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
