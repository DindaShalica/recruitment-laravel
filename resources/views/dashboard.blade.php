<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

<!-- ================= TOP NAV ================= -->
<header class="bg-white w-full">

  <div class="max-w-7xl mx-auto px-6">
    <div class="flex justify-between items-end h-[60px]">

      <!-- LEFT -->
      <div class="flex items-end h-full">

        <!-- Logo -->
        <div class="flex items-center mr-6 pb-[6px] font-semibold text-sm">
          <span class="text-green-700">emp</span>
          <span class="text-yellow-600 ml-1">SIAP</span>
        </div>

        <!-- NAVBAR -->
        <nav class="flex items-end h-full text-[13px] font-medium gap-x-3">

          <a href="{{ route('dashboard') }}"
            class="px-5 h-[38px] flex items-center bg-green-700 text-white rounded-t-md">
            Dashboard
          </a>

          <a href="{{ route('rfp.monitoring') }}"
          class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
          <span>RFP</span>
          <span>Monitoring</span>
          </a>

          <a href="{{ route('rfp.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>RFP</span>
            <span>Management</span>
          </a>

          <a href="{{ route('slot.management-pegawai') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Slot Management</span>
            <span>Pegawai</span>
          </a>

          <a href="{{ route('candidate.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Candidate</span>
            <span>Management</span>
          </a>

         <a href="{{ route('recruitment.pipeline') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Recruitment</span>
            <span>Pipeline</span>
          </a>

          <a href="{{ route('task.approval') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Task</span>
            <span>Approval</span>
          </a>

          <a href="{{ route('report.monitoring-SLA') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Report &</span>
            <span>Monitoring SLA</span>
          </a>

        </nav>
      </div>

      <!-- PROFILE -->
      <div class="relative">

  <!-- Button Profile -->
  <button id="profileBtn" class="flex items-center gap-3 focus:outline-none">
  <img 
    src="https://i.pinimg.com/736x/ec/a5/bd/eca5bdf288baf3d4645f8a2f40a64ed0.jpg" 
    class="w-9 h-9 rounded-full object-cover border-2 border-green-600 shadow-sm"
  />
  <span class="text-sm font-medium text-gray-600">Thea</span>
</button>

  <!-- Dropdown -->
  <div id="profileMenu" 
     class="hidden absolute right-0 top-full mt-2 w-40 bg-white border rounded-lg shadow-lg z-50">

  <a href="{{ route('profile') }}"
     class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
     Profile
  </a>

  <div class="border-t"></div>

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
      class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
      Logout
    </button>
  </form>

</div>

</div>

    </div>
  </div>

  <div class="w-full h-[3px] bg-green-700"></div>
</header>

<!-- ================= MAIN ================= -->
<main class="max-w-7xl mx-auto px-6 py-6 space-y-6">

  <!-- TITLE -->
  <h1 class="text-lg font-semibold text-gray-800">Dashboard</h1>

  <!-- ================= SUMMARY CARDS ================= -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-blue-100 rounded-lg p-4">
      <p class="text-sm text-gray-600">RFP Aktif</p>
      <h2 class="text-xl font-semibold">13</h2>
    </div>

    <div class="bg-purple-100 rounded-lg p-4">
      <p class="text-sm text-gray-600">Interview</p>
      <h2 class="text-xl font-semibold">5</h2>
    </div>

    <div class="bg-yellow-50 rounded-lg p-4">
      <p class="text-sm text-gray-600">Psikotest</p>
      <h2 class="text-xl font-semibold">7</h2>
    </div>

    <div class="bg-red-50 rounded-lg p-4">
      <p class="text-sm text-gray-600">Offering</p>
      <h2 class="text-xl font-semibold">1</h2>
    </div>
  </div>

  <!-- ================= MIDDLE SECTION ================= -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- Approval Status -->
    <div class="bg-white rounded-xl shadow p-4">
      <h2 class="font-semibold text-gray-800 mb-4">Approval Status RFP</h2>

      <div class="flex items-end gap-16 h-48">
        <div class="text-center">
          <span class="text-sm font-medium">12</span>
          <div class="w-8 bg-gray-400 h-16 mx-auto rounded"></div>
          <p class="text-xs mt-2">Draft</p>
        </div>

        <div class="text-center">
          <span class="text-sm font-medium">25</span>
          <div class="w-8 bg-green-400 h-24 mx-auto rounded"></div>
          <p class="text-xs mt-2">Waiting</p>
        </div>

        <div class="text-center">
          <span class="text-sm font-medium">30</span>
          <div class="w-8 bg-yellow-400 h-16 mx-auto rounded"></div>
          <p class="text-xs mt-2">Approved</p>
        </div>

        <div class="text-center">
          <span class="text-sm font-medium">15</span>
          <div class="w-8 bg-red-400 h-10 mx-auto rounded"></div>
          <p class="text-xs mt-2">Rejected</p>
        </div>
      </div>
    </div>

    <!-- Recruitment Progress -->
    <div class="bg-white rounded-xl shadow p-4">
      <h2 class="font-semibold text-gray-800 mb-4">Recruitment Progress</h2>

      <div class="grid grid-cols-2 gap-4 text-center text-sm">
        <div>
          <div class="w-20 h-20 mx-auto rounded-full border-8 border-blue-400 flex items-center justify-center">
            50%
          </div>
          <p class="mt-2">Interview</p>
        </div>

        <div>
          <div class="w-20 h-20 mx-auto rounded-full border-8 border-yellow-400 flex items-center justify-center">
            20%
          </div>
          <p class="mt-2">MCU</p>
        </div>

        <div>
          <div class="w-20 h-20 mx-auto rounded-full border-8 border-red-400 flex items-center justify-center">
            20%
          </div>
          <p class="mt-2">Psikotest</p>
        </div>

        <div>
          <div class="w-20 h-20 mx-auto rounded-full border-8 border-green-400 flex items-center justify-center">
            10%
          </div>
          <p class="mt-2">Offering</p>
        </div>
      </div>
    </div>

  </div>

  <!-- ================= TABLE ================= -->
  <div class="bg-white rounded-xl shadow p-4">

    <div class="flex justify-between items-center mb-4">
      <h2 class="font-semibold text-gray-800">RFP Request</h2>
      <input type="text" placeholder="Search..." class="border rounded-md px-3 py-1 text-sm">
    </div>

    <table class="w-full text-sm table-fixed">
      <thead class="bg-gray-200 text-gray-800">
        <tr>
          <th class="w-[12%] px-3 py-2 text-left">RFP ID</th>
          <th class="w-[12%] px-3 py-2 text-left">Position</th>
          <th class="w-[12%] px-3 py-2 text-left">Division</th>
          <th class="w-[12%] px-3 py-2 text-left">Last Update</th>
          <th class="w-[12%] px-3 py-2 text-left">Status</th>
          <th class="w-[12%] px-3 py-2 text-center">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr class="border-b">
          <td class="px-3 py-2">RFP-023</td>
          <td class="px-3 py-2">UI/UX Design</td>
          <td class="px-3 py-2">IT</td>
          <td class="px-3 py-2">5 Januari 2026</td>
          <td class="px-3 py-2 text-green-600">Approved</td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('rfp.detail', 23) }}" class="text-blue-600 font-medium hover:underline">View</a>
            </a>
          </td>
        </tr>

        <tr class="border-b">
          <td class="px-3 py-2">RFP-024</td>
          <td class="px-3 py-2">Backend Developer</td>
          <td class="px-3 py-2">IT</td>
          <td class="px-3 py-2">7 Januari 2026</td>
          <td class="px-3 py-2 text-yellow-600">Waiting Approval</td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('rfp.detail', 24) }}" class="text-blue-600 font-medium hover:underline">View</a>
          </td>
        </tr>

       <tr class="border-b">
         <td class="px-3 py-2">RFP-025</td>
         <td class="px-3 py-2">Frontend Developer</td>
         <td class="px-3 py-2">IT</td>
         <td class="px-3 py-2">8 Januari 2026</td>
         <td class="px-3 py-2 text-green-600">Approved</td>
         <td class="px-3 py-2 text-center">
          <a href="{{ route('rfp.detail', 25) }}" class="text-blue-600 font-medium hover:underline">View</a>
      </td>
    </tr>

    <tr class="border-b">
         <td class="px-3 py-2">RFP-026</td>
         <td class="px-3 py-2">Financial Analyst</td>
         <td class="px-3 py-2">Finance</td>
         <td class="px-3 py-2">12 Januari 2026</td>
         <td class="px-3 py-2 text-yellow-600">Waiting Approval</td>
         <td class="px-3 py-2 text-center">
           <a href="{{ route('rfp.detail', 26) }}" class="text-blue-600 font-medium hover:underline">View</a>
      </td>
    </tr>

      </tbody>
    </table>

    <!-- VIEW ALL -->
    <div class="flex justify-end mt-3">
      <a href="#" class="inline-flex items-center gap-1 text-sm font-medium text-blue-600 hover:underline">
        <span>View All</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>

  </div>

</main>

<script>
  const profileBtn = document.getElementById("profileBtn");
  const profileMenu = document.getElementById("profileMenu");

  profileBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    profileMenu.classList.toggle("hidden");
  });

  window.addEventListener("click", function () {
    profileMenu.classList.add("hidden");
  });
</script>

</body>
</html>