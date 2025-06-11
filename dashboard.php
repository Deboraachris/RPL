<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Dashboard Admin
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
     <a href="dashboard.php" aria-label="Home" class="text-white text-xl flex justify-center items-center">
    <i class="fas fa-home"></i>
    </a>
    <a href="berita.php" aria-label="Berita" class="text-white text-xl flex justify-center items-center">
    <i class="fas fa-newspaper"></i>
    </a>
    <a href="event.php" aria-label="Event" class="text-white text-xl flex justify-center items-center">
    <i class="fas fa-bullhorn"></i>
    </a>
    <a href="beritaPemerintah.php" aria-label="BeritaPemerintah" class="text-white text-xl flex justify-center items-center">
    <i class="fas fa-landmark"></i>
    </a>
     <a href="calender.php" aria-l  abel="Calender" class="text-white text-xl flex justify-center items-center">
    <i class="fas fa-calendar-alt"></i>
    </a>
    <a aria-label="Settings" class="text-white text-xl flex justify-center items-center" href="settings.php">
      <i class="fas fa-cog">
      </i>
     </a>
     <a href="kritiksaran.php" aria-label="kritiksaran" class="text-white text-xl flex justify-center items-center relative">
      <i class="fas fa-envelope">
      </i>
      <span class="absolute -top-1 -right-1 bg-[#ff4d4f] text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center">
       7
      </span> </a>
     <a aria-label="Tambah Admin" class="text-white text-xl flex justify-center items-center" href="adminBaru.php">
  <i class="fas fa-user-plus"></i>
</a>

    </nav>
   </aside>
   <!-- Main content -->
   <main class="flex-1 p-6 md:p-6 space-y-6 md:space-y-14">
    <!-- Top banner -->
    <section class="bg-[#6B916B] rounded-2xl flex flex-col md:flex-row items-center md:items-stretch gap-6 md:gap-0 md:justify-between p-6 md:p-8">
     <div class="flex items-center space-x-3 text-white">
      <div class="bg-[ #8fbc8f] rounded-md px-3 py-1 text-xs font-semibold flex items-center space-x-2">
       <i class="fas fa-calendar-alt text-sm">
       </i>
       <span>
        Apr 13, 2021
       </span>
       <span class="text-[10px] font-normal">
        2:12 pm
       </span>
      </div>
      <div class="flex-1">
       <h2 class="text-xl font-semibold leading-tight">
        Good Day, Cece!
       </h2>
       <p class="text-sm font-normal opacity-90">
        Have a Nice Day!
       </p>
      </div>
     </div>
     <div class="flex-shrink-0">
      <img alt="Illustration of a male doctor with stethoscope and medical items floating around on blue background" class="w-[120px] h-[120px] object-contain" height="120" src="https://storage.googleapis.com/a1aa/image/bb18ab0d-e66a-4fd2-e351-6a62916aeab8.jpg" width="120"/>
     </div>
    </section>
    <!-- Cards row 1 -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 text-sm font-semibold">
     <!-- Offline Work -->
     <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col space-y-2 border border-gray-100">
      <div class="uppercase text-xs text-gray-400 font-semibold">
       Offline Work
      </div>
      <div class="text-3xl text-[#d94a4a] font-bold leading-none">
       27
      </div>
      <div class="text-xs text-[#d94a4a] font-semibold bg-[#fceaea] rounded-md px-2 py-0.5 w-max">
       hospital patients
      </div>
      <div class="text-[10px] text-[#d94a4a] font-semibold mt-auto">
       -6% than average
      </div>
     </div>
     <!-- Online Work -->
     <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col space-y-2 border border-gray-100">
      <div class="uppercase text-xs text-gray-400 font-semibold">
       Online Work
      </div>
      <div class="text-3xl text-[#3b5de7] font-bold leading-none">
       9
      </div>
      <div class="text-xs text-[#3b5de7] font-semibold bg-[#e6eaff] rounded-md px-2 py-0.5 w-max">
       online consultations
      </div>
      <div class="text-[10px] text-[#3b5de7] font-semibold mt-auto">
       +12% than average
      </div>
     </div>
     <!-- Laboratory Work -->
     <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col space-y-2 border border-gray-100">
      <div class="uppercase text-xs text-gray-400 font-semibold">
       Laboratory Work
      </div>
      <div class="text-3xl text-[#6b6bdb] font-bold leading-none">
       19
      </div>
      <div class="text-xs text-[#6b6bdb] font-semibold bg-[#e6e6ff] rounded-md px-2 py-0.5 w-max">
       laboratory analysis
      </div>
      <div class="text-[10px] text-[#6b6bdb] font-semibold mt-auto">
       +0% than average
      </div>
     </div>
    </section>
    <!-- Cards row 2 -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 text-sm font-semibold">
     <!-- My Scheduled Events -->
     <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col space-y-4 border border-gray-100">
      <div class="flex justify-between items-center">
       <div class="uppercase text-xs text-gray-400 font-semibold">
        My Scheduled Events
       </div>
       <button class="text-xs text-gray-500 font-semibold bg-gray-100 rounded-md px-3 py-1" type="button">
        Today
        <i class="fas fa-chevron-down ml-1 text-[10px]">
        </i>
       </button>
      </div>
      <div class="flex justify-center items-center">
       <svg class="w-20 h-20" fill="none" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="45" stroke="#e5e7eb" stroke-width="10">
        </circle>
        <circle cx="50" cy="50" r="45" stroke="url(#gradient)" stroke-dasharray="282.6" stroke-dashoffset="14.13" stroke-linecap="round" stroke-width="10" transform="rotate(-90 50 50)">
        </circle>
        <defs>
         <lineargradient id="gradient" x1="0" x2="1" y1="0" y2="1">
          <stop stop-color="#3b5de7">
          </stop>
          <stop offset="1" stop-color="#d94a4a">
          </stop>
         </lineargradient>
        </defs>
        <text fill="#3b5de7" font-family="Inter, sans-serif" font-size="20" font-weight="700" text-anchor="middle" x="50" y="55">
         95%
        </text>
       </svg>
      </div>
      <div class="space-y-1 text-gray-700">
       <div class="flex justify-between">
        <span>
         Consultations
        </span>
        <span>
         25
        </span>
       </div>
       <div class="flex justify-between">
        <span>
         Laboratory analyzes
        </span>
        <span>
         10
        </span>
       </div>
       <div class="flex justify-between">
        <span>
         Meetings
        </span>
        <span>
         3
        </span>
       </div>
      </div>
     </div>
     <!-- My Plans Done -->
     <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col space-y-4 border border-gray-100">
      <div class="flex justify-between items-center">
       <div class="uppercase text-xs text-gray-400 font-semibold">
        My Plans Done
       </div>
       <button class="text-xs text-gray-500 font-semibold bg-gray-100 rounded-md px-3 py-1" type="button">
        Today
        <i class="fas fa-chevron-down ml-1 text-[10px]">
        </i>
       </button>
      </div>
      <div class="space-y-3 text-xs font-semibold text-gray-700">
       <div>
        <div class="flex justify-between mb-1">
         <span>
          Consultations
         </span>
         <span>
          64%
         </span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
         <div class="bg-[#3b5de7] h-2 rounded-full" style="width: 64%">
         </div>
        </div>
       </div>
       <div>
        <div class="flex justify-between mb-1">
         <span>
          Analyys
         </span>
         <span>
          50%
         </span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
         <div class="bg-[#d94a4a] h-2 rounded-full" style="width: 50%">
         </div>
        </div>
       </div>
       <div>
        <div class="flex justify-between mb-1">
         <span>
          Meetings
         </span>
         <span>
          33%
         </span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-2">
         <div class="bg-pink-400 h-2 rounded-full" style="width: 33%">
         </div>
        </div>
       </div>
      </div>
      <button class="border border-gray-300 rounded-xl text-gray-500 text-xs font-semibold py-2 mt-auto hover:bg-gray-100 flex justify-center items-center" type="button">
       Add plan
       <i class="fas fa-plus ml-2">
       </i>
      </button>
     </div>
     <!-- Profile and Calendar container for smaller screens -->
     <div class="hidden md:block">
     </div>
    </section>
   </main>
  </div>
 </body>
</html>
