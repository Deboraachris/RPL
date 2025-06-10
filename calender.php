<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Jadwal Admin Sepakung</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
    /* Custom scrollbar for Firefox */
    * {
      scrollbar-width: thin;
      scrollbar-color: #4b5563 #1f2937;
    }
    /* Custom scrollbar for WebKit */
    *::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    *::-webkit-scrollbar-track {
      background: #1f2937;
      border-radius: 9999px;
    }
    *::-webkit-scrollbar-thumb {
      background-color: #4b5563;
      border-radius: 9999px;
    }
  </style>
</head>
<body class="bg-[#ffffff] text-white min-h-screen flex flex-row">
  <aside
    class="bg-[#3b5de7] w-16 md:w-20 flex flex-col items-center py-8 space-y-8 rounded-l-3xl text-white select-none flex-shrink-0"
  >
    <div class="text-center text-sm font-semibold leading-tight tracking-wide">
      Admin
      <br />
      Sepakung
    </div>
    <nav class="flex flex-col space-y-10 mt-6">
      <a
        href="dashboard.php"
        aria-label="Home"
        class="text-white text-xl flex justify-center items-center"
        ><i class="fas fa-home"></i
      ></a>
      <a
        href="berita.php"
        aria-label="Berita"
        class="text-white text-xl flex justify-center items-center"
        ><i class="fas fa-newspaper"></i
      ></a>
      <a
        href="event.php"
        aria-label="Event"
        class="text-white text-xl flex justify-center items-center"
        ><i class="fas fa-bullhorn"></i
      ></a>
      <a
        href="beritaPemerintah.php"
        aria-label="BeritaPemerintah"
        class="text-white text-xl flex justify-center items-center"
        ><i class="fas fa-landmark"></i
      ></a>
      <a
        href="calender.php"
        aria-label="Calender"
        class="text-white text-xl flex justify-center items-center"
        ><i class="fas fa-calendar-alt"></i
      ></a>
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
      <button
        aria-label="Help"
        class="text-white text-xl flex justify-center items-center"
      >
        <i class="fas fa-question-circle"></i>
      </button>
    </nav>
  </aside>
  <div class="px-4 sm:px-6 lg:px-8 py-6 max-w-[1440px] mx-auto w-full flex flex-col overflow-hidden">
    <!-- Header -->
    <header
      class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4"
    >
      <div>
        <h1 class="text-white font-semibold text-base sm:text-lg leading-5">
          Welcome to Your Productivity Hub
        </h1>
        <p class="text-gray-500 text-xs sm:text-sm leading-4 mt-0.5">
          Transform Plans into Success Stories
        </p>
      </div>
      <div class="flex items-center gap-4 w-full sm:w-auto">
        <div class="relative flex-grow sm:flex-grow-0">
          <input
            class="bg-[#1E1E1E] rounded-md text-gray-400 placeholder-gray-400 text-xs sm:text-sm pl-9 pr-3 py-2 w-full sm:w-64 focus:outline-none focus:ring-1 focus:ring-blue-600"
            placeholder="Search ..."
            type="search"
          />
          <i
            class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs sm:text-sm"
          ></i>
        </div>
        <button
          aria-label="Notifications"
          class="text-gray-400 hover:text-white transition text-lg sm:text-xl"
        >
          <i class="fas fa-bell"></i>
        </button>
        <div class="flex -space-x-2">
          <img
            alt="User avatar 1, round face with short hair"
            class="w-7 h-7 rounded-full border-2 border-[#121212]"
            height="28"
            src="https://storage.googleapis.com/a1aa/image/4f94f93d-a65d-4915-3e2e-552b477ee7eb.jpg"
            width="28"
          />
          <img
            alt="User avatar 2, round face with medium hair"
            class="w-7 h-7 rounded-full border-2 border-[#121212]"
            height="28"
            src="https://storage.googleapis.com/a1aa/image/0f9510f3-c935-4da7-48e0-64912fe7b91c.jpg"
            width="28"
          />
          <img
            alt="User avatar 3, round face with long hair"
            class="w-7 h-7 rounded-full border-2 border-[#121212]"
            height="28"
            src="https://storage.googleapis.com/a1aa/image/2fdae621-12b3-431e-9094-189187d8b77c.jpg"
            width="28"
          />
          <img
            alt="User avatar 4, round face with glasses"
            class="w-7 h-7 rounded-full border-2 border-[#121212]"
            height="28"
            src="https://storage.googleapis.com/a1aa/image/136646f5-8b47-4206-2d08-38512570fadb.jpg"
            width="28"
          />
        </div>
        <button
          aria-label="Open user menu"
          class="text-gray-400 hover:text-white transition text-lg sm:text-xl"
        >
          <i class="fas fa-chevron-down"></i>
        </button>
        <button
          aria-label="Add new item"
          class="bg-[#2F2F2F] hover:bg-[#3B3B3B] transition rounded-full p-2 text-white text-lg sm:text-xl"
        >
          <i class="fas fa-plus"></i>
        </button>
        <button
          class="bg-[#2563EB] hover:bg-[#1E40AF] transition rounded-md px-4 py-2 text-sm sm:text-base font-semibold flex items-center gap-2"
          type="button"
        >
          <i class="fas fa-plus"></i> New Project
        </button>
      </div>
    </header>
    <!-- Search and Filters -->
    <section
      class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6"
    >
      <div class="flex-grow max-w-full sm:max-w-xs">
        <input
          class="bg-[#1E1E1E] rounded-md text-gray-400 placeholder-gray-400 text-xs sm:text-sm pl-3 pr-3 py-2 w-full focus:outline-none focus:ring-1 focus:ring-blue-600"
          placeholder="Search task..."
          type="search"
        />
      </div>
      <div class="flex flex-wrap gap-2 justify-start sm:justify-end">
        <button
          class="flex items-center gap-1 bg-[#1E1E1E] text-gray-400 text-xs sm:text-sm rounded-md px-3 py-1 hover:bg-[#2A2A2A] transition"
          type="button"
        >
          <i class="fas fa-filter"></i> Filter
        </button>
        <button
          class="flex items-center gap-1 bg-[#1E1E1E] text-gray-400 text-xs sm:text-sm rounded-md px-3 py-1 hover:bg-[#2A2A2A] transition"
          type="button"
        >
          <i class="fas fa-sort"></i> Sort by
        </button>
        <button
          class="flex items-center gap-1 bg-[#1E1E1E] text-blue-600 text-xs sm:text-sm rounded-md px-3 py-1 hover:bg-[#2A2A2A] transition"
          type="button"
        >
          <i class="fas fa-list"></i> Group by status
        </button>
        <button
          class="flex items-center gap-1 bg-[#1E1E1E] text-gray-400 text-xs sm:text-sm rounded-md px-3 py-1 hover:bg-[#2A2A2A] transition"
          type="button"
        >
          <i class="fas fa-share-alt"></i> Share
        </button>
      </div>
    </section>
    <!-- Task Boards Container -->
    <section
      class="flex gap-20 overflow-x-auto pb-4 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-gray-900"
      style="scrollbar-width: thin"
    >
      <!-- To Do Column -->
      <div class="flex-shrink-0 w-[280px] flex flex-col gap-4">
        <div
          class="flex items-center justify-between bg-[#FF5722] rounded-t-md px-3 py-1.5 text-xs font-semibold text-white"
        >
          <span>To Do</span>
          <div class="flex items-center gap-2">
            <span
              class="bg-[#FF7043] rounded text-[10px] font-semibold px-2 py-0.5 leading-none select-none"
              >08</span
            >
            <button
              aria-label="Add task"
              class="text-white text-lg leading-none font-bold"
            >
              +
            </button>
            <button
              aria-label="More options"
              class="text-white text-lg leading-none font-bold"
            >
              ...
            </button>
          </div>
        </div>
        <!-- Task 1 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#D84315] bg-[#3E1F17] rounded px-1.5 py-0.5 w-max select-none"
            >High</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Stakeholder and Requirement Gathering
          </p>
          <div class="h-1 bg-[#FF7043] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 1 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/4610f7b7-ff96-4bd1-fb64-9c70eb140295.jpg"
                width="20"
              />
              <img
                alt="User avatar 2 assigned to task, round face with medium hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/269af76e-a8b8-4a44-f7e2-a3e66056a30e.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+3</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 2 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#7B7B7B] bg-[#2E2E2E] rounded px-1.5 py-0.5 w-max select-none"
            >Low</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Design High-Fidelity Mockups
          </p>
          <div class="h-1 bg-[#D84315] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 3 assigned to task, round face with long hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/b088efc0-379c-4fa8-1190-c7e1998a1995.jpg"
                width="20"
              />
              <img
                alt="User avatar 4 assigned to task, round face with glasses"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/d70a6069-d3da-4dfe-23ca-1706aa17e11e.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+5</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 3 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#A3A35D] bg-[#3B3B2B] rounded px-1.5 py-0.5 w-max select-none"
            >Medium</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Create a Style Guide
          </p>
          <div class="h-1 bg-[#D84315] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 5 assigned to task, round face with beard"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/97644f56-b38a-4b3c-2de4-83e3abad15bf.jpg"
                width="20"
              />
              <img
                alt="User avatar 6 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/1dab7021-24c7-47dd-7ab6-de3ddc8cd8b8.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+6</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- In Progress Column -->
      <div class="flex-shrink-0 w-[280px] flex flex-col gap-4">
        <div
          class="flex items-center justify-between bg-[#F59E0B] rounded-t-md px-3 py-1.5 text-xs font-semibold text-white"
        >
          <span>In Progress</span>
          <div class="flex items-center gap-2">
            <span
              class="bg-[#FBBF24] rounded text-[10px] font-semibold px-2 py-0.5 leading-none select-none"
              >17</span
            >
            <button
              aria-label="Add task"
              class="text-white text-lg leading-none font-bold"
            >
              +
            </button>
            <button
              aria-label="More options"
              class="text-white text-lg leading-none font-bold"
            >
              ...
            </button>
          </div>
        </div>
        <!-- Task 1 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#A3A35D] bg-[#3B3B2B] rounded px-1.5 py-0.5 w-max select-none"
            >Medium</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Define User Personas
          </p>
          <div class="h-1 bg-[#FBBF24] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 7 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/541bfe72-142e-4d42-5de7-516370d987d3.jpg"
                width="20"
              />
              <img
                alt="User avatar 8 assigned to task, round face with medium hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/fe8d4cb9-3173-40ba-dde7-fbaf5a5bd82a.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+4</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>17 Jan - 19</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 2 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2 border border-blue-600"
        >
          <span
            class="text-[10px] font-semibold text-[#D84315] bg-[#1E1E1E] border border-[#D84315] rounded px-1.5 py-0.5 w-max select-none"
            >High</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Review Development Implementation
          </p>
          <div class="h-1 bg-[#D9D74D] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 9 assigned to task, round face with beard"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/0316cbd7-2948-451a-9738-c4a6cb3c20a7.jpg"
                width="20"
              />
              <img
                alt="User avatar 10 assigned to task, round face with glasses"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/0fe21be3-943b-44f1-0eed-1220d333145f.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+3</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 3 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#7B7B7B] bg-[#2E2E2E] rounded px-1.5 py-0.5 w-max select-none"
            >Low</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Design Error Messages
          </p>
          <div
            class="h-1 bg-[#D9D74D] rounded-full mt-1 mb-1.5"
            style="width: 75%"
          ></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 11 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/8b2860d0-cff1-45ff-9dba-ede846b53dd4.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+2</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- To Review Column -->
      <div class="flex-shrink-0 w-[280px] flex flex-col gap-4">
        <div
          class="flex items-center justify-between bg-[#D500F9] rounded-t-md px-3 py-1.5 text-xs font-semibold text-white"
        >
          <span>To Review</span>
          <div class="flex items-center gap-2">
            <span
              class="bg-[#E040FB] rounded text-[10px] font-semibold px-2 py-0.5 leading-none select-none"
              >08</span
            >
            <button
              aria-label="Add task"
              class="text-white text-lg leading-none font-bold"
            >
              +
            </button>
            <button
              aria-label="More options"
              class="text-white text-lg leading-none font-bold"
            >
              ...
            </button>
          </div>
        </div>
        <!-- Task 1 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#7B7B7B] bg-[#2E2E2E] rounded px-1.5 py-0.5 w-max select-none"
            >Low</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Perform Competitive Analysis
          </p>
          <div class="h-1 bg-[#40C4FF] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 12 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/cab597c2-0334-4250-1309-4b576190e013.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+4</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 2 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#A3A35D] bg-[#3B3B2B] rounded px-1.5 py-0.5 w-max select-none"
            >Medium</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Develop Information Architecture
          </p>
          <div class="h-1 bg-[#40C4FF] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 13 assigned to task, round face with medium hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/241fa1ca-03bc-45dd-ae46-92b7a4beef5a.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+5</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 3 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <span
            class="text-[10px] font-semibold text-[#7B7B7B] bg-[#2E2E2E] rounded px-1.5 py-0.5 w-max select-none"
            >Low</span
          >
          <p class="text-[11px] font-normal leading-snug text-white">
            Update Design System
          </p>
          <div class="h-1 bg-[#40C4FF] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 14 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/659431ca-fe9e-472f-1fbe-c9cba455f174.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+3</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Completed Column -->
      <div class="flex-shrink-0 w-[280px] flex flex-col gap-4">
        <div
          class="flex items-center justify-between bg-[#22C55E] rounded-t-md px-3 py-1.5 text-xs font-semibold text-white"
        >
          <span>Completed</span>
          <div class="flex items-center gap-2">
            <span
              class="bg-[#4ADE80] rounded text-[10px] font-semibold px-2 py-0.5 leading-none select-none"
              >50</span
            >
            <button
              aria-label="Add task"
              class="text-white text-lg leading-none font-bold"
            >
              +
            </button>
            <button
              aria-label="More options"
              class="text-white text-lg leading-none font-bold"
            >
              ...
            </button>
          </div>
        </div>
        <!-- Task 1 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <p class="text-[11px] font-normal leading-snug text-white">
            Create User Flows
          </p>
          <p class="text-[10px] font-semibold text-gray-400">Completed</p>
          <div class="h-1 bg-[#22C55E] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 15 assigned to task, round face with short hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/0f18a30e-ac09-4bdd-279f-e4c523c8177f.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+6</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 2 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <p class="text-[11px] font-normal leading-snug text-white">
            Perform A/B Testing
          </p>
          <p class="text-[10px] font-semibold text-gray-400">Completed</p>
          <div class="h-1 bg-[#22C55E] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+5</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Task 3 -->
        <div
          class="bg-[#1E1E1E] rounded-md p-3 flex flex-col gap-2"
        >
          <p class="text-[11px] font-normal leading-snug text-white">
            Analyze User Feedback
          </p>
          <p class="text-[10px] font-semibold text-gray-400">Completed</p>
          <div class="h-1 bg-[#22C55E] rounded-full mt-1 mb-1.5"></div>
          <div class="flex items-center gap-1">
            <div class="flex -space-x-2">
              <img
                alt="User avatar 16 assigned to task, round face with medium hair"
                class="w-5 h-5 rounded-full border-2 border-[#1E1E1E]"
                height="20"
                src="https://storage.googleapis.com/a1aa/image/7b7b661e-131b-48b1-3b37-ba2daee85db5.jpg"
                width="20"
              />
              <span
                class="bg-[#2563EB] text-[10px] font-semibold rounded-full px-1.5 py-0.5 select-none"
                >+4</span
              >
            </div>
          </div>
          <div
            class="flex items-center justify-between text-gray-400 text-[10px] mt-2"
          >
            <div class="flex items-center gap-1">
              <i class="far fa-calendar-alt text-xs"></i>
              <span>10 Jan - 15</span>
            </div>
            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1">
                <i class="far fa-comment text-xs"></i>
                <span>02</span>
              </div>
              <div class="flex items-center gap-1">
                <i class="far fa-eye text-xs"></i>
                <span>03</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>