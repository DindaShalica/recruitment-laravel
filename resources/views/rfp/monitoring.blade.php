<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RFP Monitoring</title>
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
           class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
           Dashboard
          </a>

          <a href="{{ route('rfp.monitoring') }}"
          class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
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

  <!-- GARIS HIJAU FULL -->
  <div class="w-full h-[3px] bg-green-700"></div>

</header>

<!-- ================= MAIN ================= -->
<main class="max-w-7xl mx-auto px-6 py-6 space-y-6">

  <!-- TITLE -->
   <div>
    <h1 class="text-lg font-semibold text-gray-800">
    RFP Monitoring
    </h1>
    <p class="text-sm text-gray-500 mt-0">
    Pantau Status Pengajuan Kebutuhan Karyawan!
    </p>
   </div>

    <!-- TABS -->
  <div class="flex gap-40 flex-wrap">
    <button class="px-4 py-2 rounded-full bg-gray-200 text-sm">All (4)</button>
    <button class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm">
      Open (1)
    </button>
    <button class="px-4 py-2 rounded-full bg-blue-200 text-blue-700 text-sm">
      On Progress (2)
    </button>
    <button class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm">
      Evaluation (0)
    </button>
    <button class="px-4 py-2 rounded-full bg-red-100 text-red-700 text-sm">
      Close (1)
    </button>
  </div>

    <!-- SEARCH -->
    <div class="flex gap-20">
      <input
        type="text"
        placeholder="Search position"
        class="border rounded-md px-3 py-2 text-sm w-60"
      />

      <select class="border rounded-md px-3 py-2 text-sm">
        <option>Select Division</option>
        <option>IT</option>
        <option>Finance</option>
        <option>General Affairs</option>
        <option>Human Resource Development</option>
      </select>
    </div>

  </div>

  <!-- ================= TABLE ================= -->
  <div class="bg-white rounded-lg shadow-sm overflow-x-auto">
    <table class="w-full text-sm table-fixed">
      <thead class="bg-gray-200 text-gray-800">
        <tr>
          <th class="w-[12%] px-3 py-2 text-left">RFP ID</th>
          <th class="w-[12%] px-3 py-2 text-left">Job Title</th>
          <th class="w-[12%] px-3 py-2 text-left">Division</th>
          <th class="w-[12%] px-3 py-2 text-left">Requested By</th>
          <th class="px-3 py-2 text-left">Summary Candidate</th>
          <th class="w-[12%] px-3 py-2 text-left">Status</th>
          <th class="w-[12%] px-3 py-2 text-center">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr class="border-b">
          <td class="px-3 py-2">RFP-023</td>
          <td class="px-3 py-2">UI/UX Designer</td>
          <td class="px-3 py-2">IT</td>
          <td class="px-3 py-2">Budi</td>
          <td class="px-3 py-2">
  <div class="flex flex-wrap gap-2 text-xs">
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">2 Interview</span>
    <span class="bg-gray-100 text-gray700 px-2 py-1 rounded">1 MCU</span>
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">1 Hired</span>
  </div>
</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded">On Progress</span>
          </td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('monitoring.detail', 1) }}" class="text-blue-500">
            View
            </a>
          </td>
        </tr>

        <tr class="border-b">
          <td class="px-3 py-2">RFP-024</td>
          <td class="px-3 py-2">Backend Developer</td>
          <td class="px-3 py-2">IT</td>
          <td class="px-3 py-2">Budi</td>
          <td class="px-3 py-2">
  <div class="flex flex-wrap gap-2 text-xs">
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">2 Interview</span>
    <span class="bg-gray-100 text-gray700 px-2 py-1 rounded">1 MCU</span>
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">1 Hired</span>
  </div>
</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded">On Progress</span>
          </td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('monitoring.detail', 2) }}" class="text-blue-500">
            View
            </a>
          </td>
        </tr>

        <tr class="border-b">
          <td class="px-3 py-2">RFP-025</td>
          <td class="px-3 py-2">Frontend Developer</td>
          <td class="px-3 py-2">IT</td>
          <td class="px-3 py-2">Budi</td>
          <td class="px-3 py-2">
  <div class="flex flex-wrap gap-2 text-xs">
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">No candidates yet</span>
  </div>
</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">Open</span>
          </td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('monitoring.detail', 3) }}" class="text-blue-500">
            View
            </a>
          </td>
        </tr>

        <tr class="border-b">
          <td class="px-3 py-2">RFP-026</td>
          <td class="px-3 py-2">Financial Analyst</td>
          <td class="px-3 py-2">Finance</td>
          <td class="px-3 py-2">Budi</td>
          <td class="px-3 py-2">
  <div class="flex flex-wrap gap-2 text-xs">
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">2 Interview</span>
    <span class="bg-gray-100 text-gray700 px-2 py-1 rounded">1 MCU</span>
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">1 Hired</span>
  </div>
</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded">On Progress</span>
          </td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('monitoring.detail', 4) }}" class="text-blue-500">
            View
            </a>
          </td>
        </tr>

        <tr class="border-b">
          <td class="px-3 py-2">RFP-027</td>
          <td class="px-3 py-2">Internal Auditor</td>
          <td class="px-3 py-2">Finance</td>
          <td class="px-3 py-2">Budi</td>
          <td class="px-3 py-2">
  <div class="flex flex-wrap gap-2 text-xs">
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">2 Interview</span>
    <span class="bg-gray-100 text-gray700 px-2 py-1 rounded">1 MCU</span>
    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded">1 Hired</span>
  </div>
</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded">Close</span>
          </td>
          <td class="px-3 py-2 text-center">
            <a href="{{ route('monitoring.detail', 5) }}" class="text-blue-500">
            View
            </a>
          </td>
        </tr>

      </tbody>
    </table>

  </div>

  <!-- PAGINATION -->
  <div class="flex justify-end items-center gap-3 text-sm">
    <span>Page 1 of 3</span>
    <button class="px-3 py-1 border rounded">Previous</button>
    <button class="px-3 py-1 border rounded">Next</button>
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