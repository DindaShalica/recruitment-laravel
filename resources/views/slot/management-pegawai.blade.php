<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Slot Management Pegawai</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
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

  <!-- HEADER -->
  <div>
    <h1 class="text-lg font-semibold">Slot Management Pegawai</h1>
    <p class="text-sm text-gray-500">
      Kelola Ketersediaan dan Posisi Pegawai!
    </p>
  </div>

  <!-- TABS + CREATE -->
<div class="space-y-4">

  <!-- TABS -->
  <div class="flex gap-60 flex-wrap">
    <button class="px-4 py-2 rounded-full bg-gray-200 text-sm">All (5)</button>
    <button class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm">
      On Recruitment (2)
    </button>
    <button class="px-4 py-2 rounded-full bg-green-200 text-green-700 text-sm">
      Full (2)
    </button>
    <button class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm">
      Open (2)
    </button>
  </div>

  <!-- FILTER + CREATE -->
  <div class="flex justify-between items-end flex-wrap gap-4">

    <!-- FILTER SECTION -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 w-full md:w-auto">

      <div>
        <label class="text-sm text-gray-600">Divisi</label>
        <select class="mt-1 w-full border rounded-md px-3 py-2 text-sm">
          <option>All</option>
          <option>IT</option>
          <option>Finance</option>
        </select>
      </div>

      <div>
        <label class="text-sm text-gray-600">Position</label>
        <select class="mt-1 w-full border rounded-md px-3 py-2 text-sm">
          <option>All</option>
        </select>
      </div>

      <div>
        <label class="text-sm text-gray-600">Search</label>
        <input type="text"
          placeholder="Search name"
          class="mt-1 w-full border rounded-md px-3 py-2 text-sm"/>
      </div>

    </div>

    <!-- CREATE SLOT BUTTON -->
    <div class="flex justify-end w-full md:w-auto">
      <button id="openModalBtn"
        class="px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
        + Create Slot
      </button>
    </div>

  </div>

</div>


  <!-- Table -->
    <div class="bg-white rounded-lg shadow-sm overflow-x-auto">
      <table class="w-full text-sm text-left">
        <thead class="bg-gray-200 text-gray-800">
          <tr>
            <th class="w-[14%] px-3 py-2 text-left">Divisi</th>
            <th class="w-[14%] px-3 py-2 text-left">Posisi</th>
            <th class="w-[14%] px-3 py-2 text-left">Total Slot</th>
            <th class="w-[14%] px-3 py-2 text-left">Filled</th>
            <th class="w-[14%] px-3 py-2 text-left">Empty</th>
            <th class="w-[14%] px-3 py-2 text-left">Status</th>
            <th class="w-[16%] px-3 py-2 text-left">Action</th>
          </tr>
        </thead>

      <tbody class="divide-y">

          <tr>
            <td class="px-4 py-3">IT</td>
            <td class="px-4 py-3">UI/UX Design</td>
            <td class="px-4 py-3 text-left">3</td>
            <td class="px-4 py-3 text-left">1</td>
            <td class="px-4 py-3 text-left">2</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded">
                On Recruitment
              </span>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center gap-5">
                <a href="{{ route('slot.detail', 1) }}"class="text-blue-600 hover:underline text-sm">
                Detail
                </a>

                <button 
                class="text-green-600 hover:underline text-sm assignBtn">
                Assign Candidate
                </button>

              </div>
            </td>
          </tr>

          <tr>
            <td class="px-4 py-3">Finance</td>
            <td class="px-4 py-3">Financial Analyst</td>
            <td class="px-4 py-3 text-left">2</td>
            <td class="px-4 py-3 text-left">0</td>
            <td class="px-4 py-3 text-left">2</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">
                Open
              </span>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center gap-5">
                <a href="{{ route('slot.detail', 2) }}"class="text-blue-600 hover:underline text-sm">
                Detail
                </a>

                <button class="text-gray-400 hover:underline text-sm">
                 Assign Candidate
                </button>
              </div>
            </td>
          </tr>

          <tr>
            <td class="px-4 py-3">IT</td>
            <td class="px-4 py-3">Frontend Developer</td>
            <td class="px-4 py-3 text-left">3</td>
            <td class="px-4 py-3 text-left">0</td>
            <td class="px-4 py-3 text-left">3</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded">
                On Recruitment
              </span>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center gap-5">
                <a href="{{ route('slot.detail', 3) }}"class="text-blue-600 hover:underline text-sm">
                Detail
                </a>

                <button class="text-green-600 hover:underline text-sm">
                 Assign Candidate
                </button>
              </div>
            </td>
          </tr>

          <tr>
            <td class="px-4 py-3">IT</td>
            <td class="px-4 py-3">Backend Developer</td>
            <td class="px-4 py-3 text-left">4</td>
            <td class="px-4 py-3 text-left">4</td>
            <td class="px-4 py-3 text-left">0</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                Full
              </span>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center gap-5">
                <button class="text-blue-600 hover:underline text-sm">
                 Detail
                </button>

                <button class="text-gray-400 hover:underline text-sm">
                 Assign Candidate
                </button>
              </div>
            </td>
          </tr>

          <tr>
            <td class="px-4 py-3">Finance</td>
            <td class="px-4 py-3">Internal Auditor</td>
            <td class="px-4 py-3 text-left">1</td>
            <td class="px-4 py-3 text-left">1</td>
            <td class="px-4 py-3 text-left">0</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                Full
              </span>
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center gap-5">
                <button class="text-blue-600 hover:underline text-sm">
                 Detail
                </button>

                <button class="text-gray-400 hover:underline text-sm">
                 Assign Candidate
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

<!-- SCRIPT -->
<script>
function toggleMenu(btn) {
  document.querySelectorAll("td .absolute").forEach(m => {
    if (m !== btn.nextElementSibling) m.classList.add("hidden");
  });
  btn.nextElementSibling.classList.toggle("hidden");
}

document.addEventListener("click", e => {
  if (!e.target.closest("td")) {
    document.querySelectorAll("td .absolute").forEach(m => m.classList.add("hidden"));
  }
});
</script>

<!-- ================= CREATE SLOT ================= -->
<div id="candidateModal"
     class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">

  <div class="bg-white w-full max-w-2xl rounded-xl shadow-lg">

    <!-- HEADER -->
    <div class="flex justify-between items-center px-6 py-4 border-b">
      <h2 class="text-sm font-semibold">Create Slot</h2>
      <button id="closeModalBtn" class="text-gray-400 hover:text-gray-600 text-lg">
        &times;
      </button>
    </div>

    <!-- FORM -->
    <form class="px-6 py-6 space-y-5">

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Position</label>
        <input type="text"
          class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
      </div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Division</label>
        <input type="email"
          class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
      </div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Slot Count</label>
        <input type="number" class="border rounded-md px-3 py-2 text-sm">
      </div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Hiring Manager</label>
        <input type="text"
          class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
      </div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Hiring Type</label>
       <select class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
            <option>Full Time</option>
            <option>Part Time</option>
            <option>Internship</option>
          </select>
      </div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Salary Range</label>
        <select class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
            <option>RP.5.000.000 - Rp. 7.000.000</option>
            <option>RP.7.000.000 - Rp. 9.000.000</option>
            <option>RP.9.000.000 - Rp. 11.000.000</option>
          </select>
      </div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Description</label>
        <input type="text"
          class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
      </div>

      <!-- BUTTON -->
      <div class="flex justify-end gap-3 pt-6 border-t mt-6">
        <button type="button" id="cancelBtn"
          class="px-4 py-2 text-sm bg-gray-200 rounded hover:bg-gray-300">
          Cancel
        </button>

        <button type="submit"
          class="px-4 py-2 text-sm bg-green-600 text-white rounded hover:bg-green-700">
          Create Slot
        </button>
      </div>

    </form>

  </div>

</div>

    <script>
document.addEventListener("DOMContentLoaded", function () {

  const openBtn = document.getElementById("openModalBtn");
  const modal = document.getElementById("candidateModal");
  const closeBtn = document.getElementById("closeModalBtn");
  const cancelBtn = document.getElementById("cancelBtn");

  // OPEN
  openBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
    modal.classList.add("flex");
  });

  // CLOSE (X)
  closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  });

  // CANCEL BUTTON
  cancelBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  });

  // CLOSE ketika klik background
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }
  });

});
</script>

<!-- ================= ASSIGN CANDIDATE MODAL ================= -->
<div id="assignModal"
     class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">

  <div class="bg-white w-full max-w-4xl rounded-xl shadow-lg">

    <!-- HEADER -->
    <div class="flex justify-between items-center px-6 py-4 border-b">
      <div>
        <h2 class="text-sm font-semibold">Assign Candidate</h2>
        <p class="text-xs text-gray-500">Position: UI/UX Design</p>
      </div>
      <button id="closeAssignModal" class="text-gray-400 hover:text-gray-600 text-lg">
        &times;
      </button>
    </div>

    <!-- TABLE -->
    <div class="px-6 py-6">

      <table class="w-full text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-4 py-2 text-left"></th>
            <th class="px-4 py-2 text-left">Candidate Name</th>
            <th class="px-4 py-2 text-left">Email</th>
            <th class="px-4 py-2 text-left">Applied for</th>
            <th class="px-4 py-2 text-left">Status</th>
            <th class="px-4 py-2 text-left">Action</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <tr>
            <td class="px-4 py-3">
              <input type="radio" name="candidate">
            </td>
            <td class="px-4 py-3">Michelle</td>
            <td class="px-4 py-3">michelle@gmail.com</td>
            <td class="px-4 py-3">UI/UX Design</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                Offering
              </span>
            </td>

            <td class="px-4 py-3">
            <a href="{{ route('assign.candidate.detail', 1) }}"
             class="text-blue-600 hover:underline text-sm">
             Detail
            </a>
          </td>
          </tr>

          <tr>
            <td class="px-4 py-3">
              <input type="radio" name="candidate">
            </td>
            <td class="px-4 py-3">Ranty</td>
            <td class="px-4 py-3">ranty@gmail.com</td>
            <td class="px-4 py-3">UI/UX Design</td>
            <td class="px-4 py-3">
              <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                Offering
              </span>
            </td>

            <td class="px-4 py-3">
           <a href="{{ route('assign.candidate.detail', 2) }}"
             class="text-blue-600 hover:underline text-sm">
             Detail
            </a>
          </td>
        
          </tr>

        </tbody>
      </table>

      <!-- BUTTON -->
      <div class="flex justify-end gap-3 pt-6 border-t mt-6">
        <button id="cancelAssignBtn"
          class="px-4 py-2 text-sm bg-gray-200 rounded hover:bg-gray-300">
          Cancel
        </button>

        <button
          class="px-4 py-2 text-sm bg-green-600 text-white rounded hover:bg-green-700">
          Assign
        </button>
      </div>

    </div>

  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const assignButtons = document.querySelectorAll(".assignBtn");
  const assignModal = document.getElementById("assignModal");
  const closeAssignModal = document.getElementById("closeAssignModal");
  const cancelAssignBtn = document.getElementById("cancelAssignBtn");

  // OPEN MODAL
  assignButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      assignModal.classList.remove("hidden");
      assignModal.classList.add("flex");
    });
  });

  // CLOSE (X)
  closeAssignModal.addEventListener("click", () => {
    assignModal.classList.add("hidden");
    assignModal.classList.remove("flex");
  });

  // CANCEL
  cancelAssignBtn.addEventListener("click", () => {
    assignModal.classList.add("hidden");
    assignModal.classList.remove("flex");
  });

  // CLOSE CLICK BACKGROUND
  assignModal.addEventListener("click", (e) => {
    if (e.target === assignModal) {
      assignModal.classList.add("hidden");
      assignModal.classList.remove("flex");
    }
  });

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