<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CRUD Berita</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
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
<body class="bg-[#f8fafc] font-sans text-[#1e293b]">
  <div class="max-w-[2200px] w-full bg-white rounded-3xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] flex flex-col md:flex-row overflow-hidden">
    <!-- Sidebar -->
    <aside class="bg-[#3b5de7] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white select-none">
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
     <a href="calender.php" aria-label="Calender" class="text-white text-xl flex justify-center items-center">
    <i class="fas fa-calendar-alt"></i>
    </a>
    <a aria-label="Settings" class="text-white text-xl flex justify-center items-center" href="settings.php">
      <i class="fas fa-cog">
      </i>
     </a>
     <a href="kritiksaran.php" aria-label="kritiksaran" class="text-white text-xl flex justify-center items-center relative">
      <i class="fas fa-envelope">
      </i>
     </a>
      <span class="absolute -top-1 -right-1 bg-[#ff4d4f] text-[10px] font-semibold rounded-full w-4 h-4 flex items-center justify-center">
       7
      </span>
     </button>
     <button aria-label="Help" class="text-white text-xl flex justify-center items-center">
      <i class="fas fa-question-circle">
      </i>
     </button>
    </nav>
   </aside>

    <div class="flex-1 flex flex-col">
      <header class="flex items-center justify-between px-6 py-4 border-b border-[#cbd5e1] bg-white">
        <nav class="flex space-x-8 text-sm font-medium text-[#334155]">
          <a href="#" class="hover:text-[#0f172a]">Messages</a>
          <a href="#" class="hover:text-[#0f172a]">Automation</a>
          <a href="#" class="text-[#0f172a] font-semibold border-b-2 border-[#0f172a] pb-1">Contacts</a>
          <a href="#" class="hover:text-[#0f172a]">Media Library</a>
        </nav>
        <div class="flex items-center space-x-4 text-sm text-[#334155]">
          <button aria-label="Notifications" class="relative hover:text-[#0f172a]">
            <i class="fas fa-bell"></i>
          </button>
          <button class="flex items-center space-x-1 border border-[#cbd5e1] rounded px-3 py-1 text-[#334155] hover:bg-[#f1f5f9]">
            <span>Lucinda Henry</span>
            <i class="fas fa-chevron-down text-xs"></i>
          </button>
        </div>
      </header>

      <main class="px-6 py-4 max-w-full overflow-auto">
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-[#334155] font-semibold text-sm">Contacts <span class="text-[#64748b] font-normal">20,002 contacts</span></h2>
          <button class="flex items-center space-x-1 border border-[#cbd5e1] rounded px-3 py-1 text-[#334155] hover:bg-[#f1f5f9] text-xs font-medium">
            <span>Settings</span>
            <i class="fas fa-chevron-down text-[10px]"></i>
          </button>
        </div>

        <div class="flex flex-wrap gap-2 mb-4">
          <button class="flex items-center space-x-1 bg-[#0f172a] text-white text-xs font-semibold rounded px-3 py-1 hover:bg-[#1e293b]">
            <i class="fas fa-plus text-[10px]"></i>
            <span>Add</span>
          </button>
          <button class="flex items-center space-x-1 border border-[#cbd5e1] rounded px-3 py-1 text-[#334155] text-xs font-semibold hover:bg-[#f1f5f9]">
            <i class="fas fa-upload text-[10px]"></i>
            <span>Upload</span>
          </button>
          <button class="flex items-center space-x-1 border border-[#cbd5e1] rounded px-3 py-1 text-[#334155] text-xs font-semibold hover:bg-[#f1f5f9]">
            <i class="fas fa-filter text-[10px]"></i>
            <span>Filter</span>
          </button>
          <input
            type="search"
            placeholder="Search"
            class="ml-auto border border-[#cbd5e1] rounded px-3 py-1 text-xs text-[#64748b] placeholder:text-[#94a3b8] focus:outline-none focus:ring-1 focus:ring-[#0f172a] focus:border-[#0f172a]"
          />
        </div>

        <div class="overflow-x-auto scrollbar-thin border border-[#cbd5e1] rounded">
          <table class="min-w-full text-xs text-left text-[#334155]">
            <thead class="bg-[#f1f5f9] text-[#64748b]">
              <tr>
                <th class="w-6 px-3 py-2">
                  <input type="checkbox" aria-label="Select all contacts" class="cursor-pointer" />
                </th>
                <th class="px-3 py-2 font-semibold">NAME</th>
                <th class="px-3 py-2 font-semibold">SURNAME</th>
                <th class="px-3 py-2 font-semibold">PHONE NUMBER</th>
                <th class="px-3 py-2 font-semibold">EMAIL</th>
                <th class="px-3 py-2 font-semibold">LISTS</th>
                <th class="px-3 py-2 font-semibold">TAGS</th>
                <th class="w-14 px-3 py-2"></th>
              </tr>
            </thead>
            <tbody>
              <!-- 15 rows as in screenshot -->
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
              <tr class="border-t border-[#cbd5e1] hover:bg-[#f8fafc]">
                <td class="px-3 py-2">
                  <input type="checkbox" aria-label="Select contact" class="cursor-pointer" />
                </td>
                <td class="px-3 py-2 font-medium text-[#334155]">Wan</td>
                <td class="px-3 py-2">Gergin</td>
                <td class="px-3 py-2">731-767-1344</td>
                <td class="px-3 py-2 text-[#64748b]">aranna.silman@hotmail.com</td>
                <td class="px-3 py-2">23</td>
                <td class="px-3 py-2 flex space-x-1">
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Development</span>
                  <span class="bg-[#e0e7ff] text-[#3730a3] rounded-full px-2 py-0.5">Marketing</span>
                </td>
                <td class="px-3 py-2 flex space-x-2 text-[#64748b]">
                  <button aria-label="Edit contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-pencil-alt text-xs"></i>
                  </button>
                  <button aria-label="Delete contact" class="hover:text-[#0f172a]">
                    <i class="fas fa-trash-alt text-xs"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <nav class="flex items-center justify-center space-x-2 mt-4 text-[#64748b] text-xs select-none">
          <button aria-label="Previous page" class="p-1 hover:text-[#0f172a]">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="px-2 py-1 rounded border border-[#cbd5e1] text-[#0f172a] font-semibold">1</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">2</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">3</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">4</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">5</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">6</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">7</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">8</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">9</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">10</button>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">11</button>
          <span class="px-2 py-1">...</span>
          <button class="px-2 py-1 rounded hover:bg-[#f1f5f9]">126</button>
          <button aria-label="Next page" class="p-1 hover:text-[#0f172a]">
            <i class="fas fa-chevron-right"></i>
          </button>
        </nav>
      </main>
    </div>
  </div>
</body>
</html>