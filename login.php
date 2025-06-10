<?php
session_start();
include 'koneksi.php';

$error_message = ""; // Initialize error message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($email) || empty($password)) {
        $error_message = 'Email dan password wajib diisi!';
    } else {
        // Query database
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verifikasi password
            if ($password === $user['password']) {
                $_SESSION['email'] = $user['email'];
                header("Location: dashboard.php");
                exit();
            } else {
                $error_message = 'Password salah!';
            }
        } else {
            $error_message = 'Email tidak ditemukan!';
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Admin</title>
  <script src="https://cdn.tailwindcss.com"></script> 
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
  />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    body {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background-image: url('gunung2.jpg'); /* Ganti dengan path gambar Anda */
    background-size: cover; /* Menyesuaikan gambar ke seluruh layar */
    background-position: center; /* Posisi tengah gambar */
    background-repeat: no-repeat; /* Tidak diulang */
    margin: 0;
    padding: 0;
}

    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-wrapper {
      position: relative;
      margin-top: 2.5rem;
    }

    @media (min-width: 640px) {
      .form-wrapper {
        width: 360px;
      }
    }

    .user-icon {
  position: absolute;
  top: -2.5rem; /* Setengah dari height ikon (5rem/2) */
  left: 50%;
  transform: translateX(-50%); /* Pusatkan horizontal */
  background-color: #8fbc8f;
  border-radius: 9999px;
  width: 5rem;
  height: 5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

    .form {
      background-color: #e9ffdb;
      backdrop-filter: blur(8px);
      border-radius: 2rem;
      padding: 2rem;
      padding-top: 5rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .input-group {
      margin-bottom: 1.5rem;
    }

    .input-wrapper {
      display: flex;
      align-items: center;
      overflow: hidden;
      border-radius: 0.375rem;
      background-color: #ace1af;
    }

    .input-icon {
      background-color: #8fbc8f;
      padding: 0.75rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .input-field {
      flex: 1;
      padding: 0.75rem 1rem;
      background-color: #ace1af;
      color: #ffffff;
      border: none;
      outline: none;
      font-size: 1rem;
      width: 100%;
    }

    .input-field::placeholder {
      color: #ffffff;
    }

    .checkbox-label {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.75rem;
      color: #5a5f6a;
    }

    .forgot-password {
      font-size: 0.75rem;
      color: #5a5f6a;
      text-decoration: underline;
      transition: opacity 0.2s ease;
    }

    .forgot-password:hover {
      opacity: 0.8;
    }

    .login-button {
      width: 100%;
      background-color: #ace1af;
      backdrop-filter: blur(8px);
      border-radius: 2rem;
      padding: 0.75rem;
      color: white;
      font-weight: bold;
      letter-spacing: 0.1em;
      box-shadow: 0 10px 10px rgba(201, 199, 209, 0.8);
      transition: all 0.3s ease-in-out;
    }

    .login-button:hover {
      filter: brightness(110%);
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="form-wrapper">
      <!-- Icon Profil Pengguna -->
      <div class="user-icon">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
    </svg>
  </div>

      <!-- Form Login -->
<form action="login.php" method="POST" class="form" onsubmit="return validateForm(event)">
    <div class="input-group">
        <div class="input-wrapper">
            <div class="input-icon">
                <i class="fas fa-user text-white text-lg"></i>
            </div>
            <input id="email" name="email" type="email" placeholder="Email ID" class="input-field" required />
        </div>
    </div>
    <div class="input-group">
        <div class="input-wrapper">
            <div class="input-icon">
                <i class="fas fa-lock text-white text-lg"></i>
            </div>
            <input id="password" name="password" type="password" placeholder="Password" class="input-field" required />
        </div>
    </div>
    <button type="submit" class="login-button">LOGIN</button>
</form>
    </div>
  </div>

  <!-- Tambahkan script untuk menampilkan alert -->
  <?php if ($error_message): ?>
  <script>
      alert('<?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?>');
  </script>
  <?php endif; ?>

  <script>
    function validateForm(event) {
      const emailInput = document.getElementById('email');
      const passwordInput = document.getElementById('password');

      if (!emailInput.value.trim()) {
        alert('Email wajib diisi!');
        emailInput.focus();
        return false;
      }

      if (!passwordInput.value.trim()) {
        alert('Password wajib diisi!');
        passwordInput.focus();
        return false;
      }

      // Lanjutkan submit form
      return true;
    }
  </script>
</body>
</html>