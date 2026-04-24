<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RFP Management</title>
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
          class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
          <span>RFP</span>
          <span>Monitoring</span>
          </a>

          <a href="{{ route('rfp.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
            <span>RFP</span>
            <span>Management</span>
          </a>

          <a href="{{ route('slot.management-pegawai') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Slot Management</span>
            <span>Pegawai</span>
          </a>

          <a href="{{ route('candidate.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Candidate</span>
            <span>Management</span>
          </a>

          <a href="{{ route('recruitment.pipeline') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Recruitment</span>
            <span>Pipeline</span>
          </a>

          <a href="{{ route('task.approval') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Task</span>
            <span>Approval</span>
          </a>

          <a href="{{ route('report.monitoring-SLA') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
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

  <!-- HEADER -->
<div class="flex justify-between items-start">


  <div>
    <h1 class="text-lg font-semibold">RFP Management</h1>
    <p class="text-sm text-gray-500">
      Kelola pengajuan kebutuhan karyawan dari draft hingga approval
    </p>
  </div>

</div>

  <!-- TABS -->
  <div class="flex gap-40 flex-wrap">
    <button class="px-4 py-2 rounded-full bg-gray-200 text-sm">All (8)</button>
    <button class="px-4 py-2 rounded-full bg-gray-100 text-sm">Draft (3)</button>
    <button class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm">
      Waiting Approval (2)
    </button>
    <button class="px-4 py-2 rounded-full bg-green-200 text-green-700 text-sm">
      Approved (2)
    </button>
    <button class="px-4 py-2 rounded-full bg-red-100 text-red-700 text-sm">
      Rejected (1)
    </button>
  </div>

  <!-- FILTER -->
  <div class="flex justify-between items-center mt-6">

    <!-- FILTER LEFT -->
  <div class="flex gap-5 items-center">
    <input type="text"
      placeholder="Search RFP ID / Position"
      class="border rounded-md px-3 py-2 text-sm w-64">
    
    <input type="text"
      placeholder="Search RFP ID / Position"
      class="px-4 py-2 border rounded-md text-sm w-64"/>

    <select class="border rounded-md px-3 py-2 text-sm">
      <option>Select Division</option>
      <option>IT</option>
      <option>Finance</option>
    </select>

    <select class="border rounded-md px-3 py-2 text-sm">
      <option>Sort Last Updated</option>
      <option>Yesterday</option>
      <option>2 Hours Ago</option>
      <option>3 Hours Ago</option>
    </select>
  </div>

  <!-- CREATE BUTTON RIGHT -->
  <a href="{{ route('rfp.create') }}"
   class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">
   + Create
</a>

</div>


  <!-- TABLE -->
  <div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="w-full text-sm">
      <thead class="bg-gray-200 text-gray-800">
        <tr>
          <th class="px-4 py-3 text-left">RFP ID</th>
          <th class="px-4 py-3 text-left">Job Title</th>
          <th class="px-4 py-3 text-left">Division</th>
          <th class="px-4 py-3 text-left">Employment Type</th>
          <th class="px-4 py-3 text-left">Hiring Date</th>
          <th class="px-4 py-3 text-left">Status</th>
          <th class="px-4 py-3 text-left">Last Updated</th>
          <th class="px-4 py-3 text-center">Action</th>
        </tr>
      </thead>

      <tbody class="divide-y">

        <!-- ROW -->
        <tr>
          <td class="px-4 py-3">RFP-023</td>
          <td class="px-4 py-3">UI/UX Designer</td>
          <td class="px-4 py-3">IT</td>
          <td class="px-4 py-3"><span class="px-2 py-1 text-xs">PKWT</span></td>
          <td class="px-4 py-3">18 Januari 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Approved</span>
          </td>
          <td class="px-4 py-3">2 Hours Ago</td>

          <td class="px-4 py-3 text-center relative">
            <button onclick="toggleMenu(this)"
              class="p-2 rounded-full hover:bg-gray-100 transition">
              •••
            </button>

            <div class="hidden absolute right-4 top-8 w-28 bg-white border rounded-md shadow-md z-10">

              <a href="{{ route('rfp.detail', 23) }}"
              class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
              View Detail
              </a>

              <a href="{{ route('rfp.edit', 23) }}"class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Edit RFP</a>

              <button
                class="block w-full px-4 py-2 text-sm text-left text-red-600 hover:bg-red-50">
                Delete
              </button>

            </div>
          </td>
        </tr>

        <tr>
          <td class="px-4 py-3">RFP-024</td>
          <td class="px-4 py-3">Backend Developer</td>
          <td class="px-4 py-3">IT</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs text-black-700">PKWT</span>
          </td>
          <td class="px-4 py-3">20 Januari 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">
              Waiting Approval
            </span>
          </td>
          <td class="px-4 py-3">Yesterday</td>

          <td class="px-4 py-3 text-center relative">
            <button onclick="toggleMenu(this)" class="px-2 py-1 rounded hover:bg-gray-100">
              •••
            </button>

            <div class="hidden absolute right-4 top-8 w-28 bg-white border rounded-md shadow-md z-10">
              <a href="{{ route('rfp.detail', 24) }}"
              class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
              View Detail
              </a>

              <a href="{{ route('rfp.edit', 24) }}"class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Edit RFP</a>

              <button class="block w-full px-4 py-2 text-sm text-left text-red-600 hover:bg-red-50">
                Delete
              </button>
            </div>
          </td>
        </tr>

        <tr>
          <td class="px-4 py-3">RFP-025</td>
          <td class="px-4 py-3">Frontend Developer</td>
          <td class="px-4 py-3">IT</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs text-black-700">
              TPC
            </span>
          </td>
          <td class="px-4 py-3">20 Januari 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
              Approved
            </span>
          </td>
          <td class="px-4 py-3">2 Hours Ago</td>
          
          <td class="px-4 py-3 text-center relative">
            <button onclick="toggleMenu(this)" class="px-2 py-1 rounded hover:bg-gray-100">
              •••
            </button>

            <div class="hidden absolute right-4 top-8 w-28 bg-white border rounded-md shadow-md z-10">
              <a href="{{ route('rfp.detail', 25) }}"
              class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
              View Detail
              </a>

              <a href="{{ route('rfp.edit', 25) }}"class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Edit RFP</a>

              <button class="w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50">
                Delete
              </button>
            </div>
          </td>
        </tr>

        <tr>
          <td class="px-4 py-3">RFP-026</td>
          <td class="px-4 py-3">Financial Analyst</td>
          <td class="px-4 py-3">Finance</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs text-black-700">
              Permanent
            </span>
          </td>
          <td class="px-4 py-3">20 Januari 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">
              Waiting Approval
            </span>
          </td>
          <td class="px-4 py-3">2 Hours Ago</td>

          <td class="px-4 py-3 text-center relative">
            <button onclick="toggleMenu(this)" class="px-2 py-1 rounded hover:bg-gray-100">
              •••
            </button>

            <div class="hidden absolute right-4 top-8 w-28 bg-white border rounded-md shadow-md z-10">
              <a href="{{ route('rfp.detail', 26) }}"
              class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
              View Detail
              </a>

              <a href="{{ route('rfp.edit', 26) }}"class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Edit RFP</a>

              <button class="w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50">
                Delete
              </button>
            </div>
          </td>
        </tr>

        <tr>
          <td class="px-4 py-3">RFP-027</td>
          <td class="px-4 py-3">Internal Auditor</td>
          <td class="px-4 py-3">Finance</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs text-black-700">
              TPC
            </span>
          </td>
          <td class="px-4 py-3">20 Januari 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded">
              Rejected
            </span>
          </td>
          <td class="px-4 py-3">2 Hours Ago</td>

          <td class="px-4 py-3 text-center relative">
            <button onclick="toggleMenu(this)" class="px-2 py-1 rounded hover:bg-gray-100">
              •••
            </button>

            <div class="hidden absolute right-4 top-8 w-28 bg-white border rounded-md shadow-md z-10">
              <a href="detail_RFP.html?id=RFP-023"
              class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
              View Detail
            </a>

              <a href="{{ route('rfp.edit', 27) }}"class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Edit RFP</a>

              <button class="w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50">
                Delete
              </button>
            </div>
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
function toggleMenu(button) {
  document.querySelectorAll("td .absolute").forEach(menu => {
    if (menu !== button.nextElementSibling) {
      menu.classList.add("hidden");
    }
  });

  button.nextElementSibling.classList.toggle("hidden");
}

document.addEventListener("click", function (e) {
  if (!e.target.closest("td")) {
    document.querySelectorAll("td .absolute").forEach(menu => {
      menu.classList.add("hidden");
    });
  }
});
</script>

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