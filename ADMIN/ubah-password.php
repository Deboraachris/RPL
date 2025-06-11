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

    // Ambil data admin
    $stmt = $conn->prepare("SELECT email FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->fetch();
    $stmt->close();
} else {
    die("ID admin tidak ditemukan.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = trim($_POST['password']);
    if (empty($new_password)) {
        echo "Password tidak boleh kosong.";
    } else {
        $password_hashed = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->bind_param("si", $password_hashed, $id);
        if ($stmt->execute()) {
            header("Location: adminBaru.php?ubah=berhasil");
        } else {
            echo "Gagal mengubah password: " . $conn->error;
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Password Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-3xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-[#6B916B] mb-6">Ubah Password</h2>

        <p class="mb-4 text-center">Admin: <strong><?php echo htmlspecialchars($email); ?></strong></p>

        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-1" for="password">Password Baru</label>
                <input type="password" id="password" name="password" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-[#6B916B] focus:border-[#6B916B]">
            </div>

            <button type="submit" class="w-full bg-[#6B916B] text-white py-2 rounded-lg font-semibold hover:bg-[#5a7d5a] transition">
                Simpan Password Baru
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="adminBaru.php" class="text-sm text-[#6B916B] font-semibold hover:underline">
                ← Kembali ke Manajemen Admin
            </a>
        </div>
    </div>

</body>
</html>
