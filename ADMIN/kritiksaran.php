<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kritik & Saran - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
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

    <main class="flex-1 p-6 md:p-10 space-y-6">
      <h1 class="text-2xl md:text-3xl font-bold text-[#6B916B] mb-4">Kritik & Saran Pengunjung</h1>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white border border-gray-100 shadow-md rounded-xl p-5">
          <div class="flex items-center mb-3">
            <div class="bg-[#6B916B] text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h3 class="text-sm font-bold text-gray-800">Dewi Lestari</h3>
              <p class="text-xs text-gray-400">10 Juni 2025</p>
            </div>
          </div>
          <p class="text-sm text-gray-700">
            Website ini sangat membantu, tapi akan lebih baik jika informasi kegiatan lebih sering di-update. Terima kasih!
          </p>
        </div>

        <div class="bg-white border border-gray-100 shadow-md rounded-xl p-5">
          <div class="flex items-center mb-3">
            <div class="bg-[#6B916B] text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h3 class="text-sm font-bold text-gray-800">Budi Santoso</h3>
              <p class="text-xs text-gray-400">9 Juni 2025</p>
            </div>
          </div>
          <p class="text-sm text-gray-700">
            Tampilan dashboard sangat bagus dan mudah digunakan. Semoga ke depan bisa ditambahkan fitur statistik kegiatan.
          </p>
        </div>

        <div class="bg-white border border-gray-100 shadow-md rounded-xl p-5">
          <div class="flex items-center mb-3">
            <div class="bg-[#6B916B] text-white rounded-full w-10 h-10 flex items-center justify-center mr-3">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h3 class="text-sm font-bold text-gray-800">Siti Aisyah</h3>
              <p class="text-xs text-gray-400">8 Juni 2025</p>
            </div>
          </div>
          <p class="text-sm text-gray-700">
            Mohon ditambahkan fitur pencarian berita agar pengunjung mudah menemukan informasi yang dibutuhkan.
          </p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
