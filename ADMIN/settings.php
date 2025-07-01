<?php
session_start();

// Cek apakah admin sudah login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sepakung";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data admin dari database
$admin_id = $_SESSION['id'];
$sql = "SELECT nama, email, foto FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $admin = $result->fetch_assoc();
} else {
    session_destroy();
    header("Location: login.php?error=notfound");
    exit();
}
?>


<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Settings Admin
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Custom scrollbar for table container */
    .scrollbar-thin::-webkit-scrollbar {
      height: 6px;
    }
    .scrollbar-thin::-webkit-scrollbar-thumb {
      background-color: #cbd5e1;
      border-radius: 10px;
    }
  </style>
 </head>
<body class="bg-gradient-to-br from-[#f0f2ff] via-[#e9ebff] to-[#f7f7ff] min-h-screen flex items-center justify-center p-4">
  <div class="max-w-[2200px] w-full bg-white rounded-3xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] flex flex-col md:flex-row overflow-hidden">
   <!-- Sidebar -->
   <aside class="bg-[#6B916B] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white select-none">
    <div class="text-center text-sm font-semibold leading-tight tracking-wide">
     Admin
     <br/>
     Sepakung
    </div>
    <nav class="flex flex-col space-y-10 mt-6">
    <a href="/sepakung/admin/dashboard.php" class="text-white text-xl flex justify-center items-center" title="Dashboard"><i class="fas fa-home"></i></a>
    <a href="/sepakung/admin/berita/berita.php" class="text-white text-xl flex justify-center items-center" title="Berita Umum"><i class="fas fa-newspaper"></i></a>
    <a href="/sepakung/admin/eventt/event.php" class="text-white text-xl flex justify-center items-center" title="Event"><i class="fas fa-bullhorn"></i></a>
    <a href="/sepakung/admin/kepemerintahan/beritaPemerintah.php" class="text-white text-xl flex justify-center items-center" title="Berita Pemerintah"><i class="fas fa-landmark"></i></a>
    <a href="/sepakung/admin/wisata/wisataa.php" class="text-white text-xl flex justify-center items-center" tittle="Wisata"><i class="fas fa-map"></i></a>
    <a href="/sepakung/admin/calender.php" class="text-white text-xl flex justify-center items-center" title="Kalender"><i class="fas fa-calendar-alt"></i></a>
    <a href="/sepakung/admin/kritiksaran.php" class="text-white text-xl flex justify-center items-center relative" title="Kritik & Saran"><i class="fas fa-envelope"></i><span class="absolute -top-1 -right-1 bg-red-500 text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center">7</span></a>
    <a href="/sepakung/admin/adminAdmin/adminBaru.php" class="text-white text-xl flex justify-center items-center" title="Tambah Admin"><i class="fas fa-user-plus"></i></a>
    <a href="/sepakung/admin/settings.php" class="text-white text-xl flex justify-center items-center" title="Pengaturan"><i class="fas fa-cog"></i></a>
  </nav>
   </aside>
   <div class="flex-1 flex flex-col min-w-0">
    <!-- Main Content -->
    <main class="main-content flex-1 overflow-auto">
     <!-- Left Section -->
     <section class="left-section max-w-full">
      <!-- Main content -->
      <div class="flex-1 p-6 md:p-8 max-w-full">
       <!-- Settings header -->
       <h1 class="text-lg font-semibold text-gray-900 mb-4">
        Settings
       </h1>
       <div class="flex flex-col md:flex-row border border-gray-200 rounded-md overflow-hidden h-[400px] max-h-[400px]">
        <!-- Left menu -->
        <nav class="w-full md:w-48 bg-white border-b md:border-b-0 md:border-r border-gray-200 flex flex-row md:flex-col text-xs text-gray-600 overflow-x-auto md:overflow-x-visible">
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 bg-[#f3f1ff] text-[#6B916B] font-semibold whitespace-nowrap" href="#">
          <i class="fas fa-info-circle text-[14px] w-4">
          </i>
          <span>
           General Information
          </span>
         </a>
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 hover:bg-gray-50 whitespace-nowrap" href="#">
          <i class="fas fa-sliders-h text-[14px] w-4">
          </i>
          <span>
           Preferences
          </span>
         </a>
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 hover:bg-gray-50 whitespace-nowrap" href="#">
          <i class="fas fa-lock text-[14px] w-4">
          </i>
          <span>
           Security
          </span>
         </a>
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 hover:bg-gray-50 whitespace-nowrap" href="#">
          <i class="fas fa-bell text-[14px] w-4">
          </i>
          <span>
           Notifications
          </span>
         </a>
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 hover:bg-gray-50 whitespace-nowrap" href="#">
          <i class="fas fa-user text-[14px] w-4">
          </i>
          <span>
           Account
          </span>
         </a>
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 hover:bg-gray-50 whitespace-nowrap" href="#">
          <i class="fas fa-user-cog text-[14px] w-4">
          </i>
          <span>
           Account Manager
          </span>
         </a>
         <a class="flex items-center space-x-2 px-4 py-3 border-r md:border-r-0 md:border-b border-gray-200 hover:bg-gray-50 whitespace-nowrap" href="#">
          <i class="fas fa-file-invoice-dollar text-[14px] w-4">
          </i>
          <span>
           Billings
          </span>
         </a>
        </nav>
        <!-- Right content -->
        <section class="flex-1 p-6 overflow-y-auto bg-white">
         <h2 class="text-sm font-semibold text-gray-900 mb-1">
          General Information
         </h2>
         <p class="text-xs text-gray-500 mb-6">
          Lorem ipsum dolor sit amet consectetur.
         </p>
         <!-- Profile picture upload -->
         <div class="mb-8">
          <label class="block text-xs font-semibold text-gray-700 mb-2">
           Profile picture upload
          </label>
          <div class="flex items-center space-x-4">
  <img src="<?php echo $admin['foto'] ? '/sepakung/uploads/' . $admin['foto'] : 'https://via.placeholder.com/150'; ?>" class="rounded-full bg-gray-300 object-cover w-10 h-10">
  <div class="flex flex-col text-xs font-semibold text-gray-900">
    <span><?php echo htmlspecialchars($admin['nama']); ?></span>
    <span class="font-normal text-gray-400"><?php echo htmlspecialchars($admin['email']); ?></span>
  </div>
  <form method="POST" action="update_profil.php" enctype="multipart/form-data">
    <input type="file" name="foto" class="hidden" id="uploadFoto" onchange="this.form.submit();">
    <label for="uploadFoto" class="bg-[#6B916B] text-white text-xs rounded px-3 py-1 hover:bg-[#ace1af] cursor-pointer transition">Upload New Photo</label>
  </form>
  <form method="POST" action="hapus_foto.php" onsubmit="return confirm('Yakin hapus foto profil?');">
    <button type="submit" class="border border-gray-300 text-gray-600 text-xs rounded px-3 py-1 hover:bg-gray-100 transition">Delete</button>
  </form>
</div>
         </div>
         <!-- Organization Information -->
         <div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">
           Organization Information
          </label>
          <div class="grid grid-cols-2 gap-x-6 gap-y-4 text-xs text-gray-400 mb-6">
           <input class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]" placeholder="Business Name" type="text"/>
           <input class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]" placeholder="Email Address" type="email"/>
           <input class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]" placeholder="Phone Number" type="text"/>
           <select class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]">
            <option>
             Fax
            </option>
           </select>
          </div>
          <label class="block text-xs font-semibold text-gray-700 mb-1">
           Address
          </label>
          <div class="grid grid-cols-2 gap-x-6 gap-y-4 text-xs text-gray-400">
           <select class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]">
            <option>
             Country
            </option>
           </select>
           <input class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]" placeholder="City" type="text"/>
           <input class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]" placeholder="Postcode" type="text"/>
           <input class="border border-gray-300 rounded px-3 py-1 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#3b0e8a]" placeholder="State" type="text"/>
          </div>
         </div>
        </section>
       </div>
       <!-- Buttons -->
       <div class="flex justify-end space-x-3 mt-6">
        <button class="border border-[#6B916B] text-[#6B916B] text-xs rounded px-4 py-1 hover:bg-[#f3f1ff] transition" type="button">
         Cancel
        </button>
        <button class="bg-[#6B916B] text-white text-xs rounded px-4 py-1 hover:bg-[#ace1af] transition" type="button">
         Save Changes
        </button>
       </div>
      </div>
     </section>
    </main>
   </div>
  </div>
 </body>
</html>
