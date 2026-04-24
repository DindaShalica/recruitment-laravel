<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Report & Monitoring SLA</title>
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

      <!-- NAV -->
        <nav class="flex items-end h-full text-[13px] font-medium gap-x-3">

          <a href="{{ route('dashboard') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
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
  <div>
    <h1 class="text-lg font-semibold text-gray-800">
      Report & Monitoring SLA
    </h1>
  </div>

  <!-- SLA SUMMARY -->
  <div class="flex gap-60 flex-wrap">
    <span class="px-4 py-2 rounded-full bg-gray-200 text-sm">
      All
    </span>
    <span class="px-4 py-2 rounded-full bg-purple-100 text-purple-700 text-sm">
      Total SLA (5)
    </span>
    <span class="px-4 py-2 rounded-full bg-red-100 text-red-700 text-sm">
      Overdue (2)
    </span>
    <span class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm">
      On Track (3)
    </span>
  </div>

  <!-- FILTER -->
  <div class="flex items-center gap-12 flex-wrap">
    <select class="border rounded-md px-3 py-2 text-sm">
      <option>All Status</option>
      <option>On Track</option>
      <option>Overdue</option>
      <option>Warning</option>
    </select>

    <select class="border rounded-md px-3 py-2 text-sm">
      <option>All Division</option>
      <option>IT</option>
      <option>Finance</option>
    </select>

    <input
      type="text"
      placeholder="Search RFP ID"
      class="border rounded-md px-3 py-2 text-sm w-56"
    />

    <button class="ml-auto px-4 py-2 text-sm border rounded-md hover:bg-gray-100">
      Export
    </button>
  </div>

  <!-- ================= TABLE ================= -->
  <div class="bg-white rounded-lg shadow-sm overflow-x-auto">
    <table class="w-full text-sm">
      <thead class="bg-gray-200 text-gray-700">
        <tr>
          <th class="px-3 py-2 text-left">RFP ID</th>
          <th class="px-3 py-2 text-left">Job Title</th>
          <th class="px-3 py-2 text-left">Division</th>
          <th class="px-3 py-2 text-left">Reason for Recruitment</th>
          <th class="px-3 py-2 text-left">Hiring Point</th>
          <th class="px-3 py-2 text-left">Created Date</th>
          <th class="px-3 py-2 text-left">SLA</th>
          <th class="px-3 py-2 text-left">Status</th>
        </tr>
      </thead>

      <tbody class="divide-y">
        <tr>
          <td class="px-3 py-2">RFP-023</td>
          <td class="px-3 py-2">UI/UX Design</td>
          <td class="px-3 py-2">IT</td>
          <td class="px-3 py-2">
            <span class="px-2 py-1 text-xs bg-gray-50 text-gray-700 rounded">Addition</span>
          </td>
          <td class="px-3 py-2">EMP Bentu</td>
          <td class="px-3 py-2">18 Januari 2026</td>
          <td class="px-3 py-2">2 Days</td>
          <td class="px-3 py-2">
            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
              On Track
            </span>
          </td>
        </tr>

        <tr>
          <td class="px-3 py-2">RFP-026</td>
          <td class="px-3 py-2">Financial Analyst</td>
          <td class="px-3 py-2">Finance</td>
          <td class="px-3 py-2">
            <span class="px-2 py-1 text-xs bg-gray-50 text-gray-700 rounded">Addition</span>
          </td>
          <td class="px-3 py-2">EMP Tonga</td>
          <td class="px-3 py-2">18 Januari 2026</td>
          <td class="px-3 py-2">5 Days</td>
          <td class="px-3 py-2">
            <span class="px-2 py-1 text-xs bg-red-50 text-red-700 rounded">
              Overdue
            </span>
          </td>
        </tr>

        <tr>
          <td class="px-3 py-2">RFP-027</td>
          <td class="px-3 py-2">Payroll Staff</td>
          <td class="px-3 py-2">Finance</td>
          <td class="px-3 py-2">
            <span class="px-2 py-1 text-xs bg-gray-50 text-gray-700 rounded">Addition</span>
          </td>
          <td class="px-3 py-2">EMP Tonga</td>
          <td class="px-3 py-2">18 Januari 2026</td>
          <td class="px-3 py-2">3 Days</td>
          <td class="px-3 py-2">
            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">
              Warning
            </span>
          </td>
        </tr>

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
      </tbody>
    </table>
  </div>
</main>
</body>
</html>