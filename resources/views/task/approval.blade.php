<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Task Approval</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
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
    <h1 class="text-lg font-semibold">Notifications / Task Approval</h1>
    <p class="text-sm text-gray-500">Daftar tugas yang membutuhkan persetujuan</p>
  </div>

  <!-- STATUS FILTER -->
  <div class="flex gap-40 flex-wrap">
    <button class="px-4 py-2 rounded-full bg-gray-200 text-sm font-medium">
      All (3)
    </button>
    <button class="px-4 py-2 rounded-full bg-yellow-100 text-yellow-700 text-sm font-medium">
      Approvals (2)
    </button>
    <button class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-medium">
      Completed (1)
    </button>
  </div>

  <!-- SEARCH -->
  <div class="flex items-center gap-3">
    <input
      type="text"
      placeholder="Search task / employee"
      class="px-4 py-2 border rounded-md text-sm w-64"
    />
  </div>

  <!-- TABLE -->
  <div class="bg-white rounded-xl shadow overflow-x-auto">
    <table class="w-full text-sm">
      <thead class="bg-gray-200 text-gray-800">
        <tr>
          <th class="w-[6%] px-3 py-2 text-left">No</th>
          <th class="w-[14%] px-3 py-2 text-left">Task Name</th>
          <th class="w-[14%] px-3 py-2 text-left">Division</th>
          <th class="w-[14%] px-3 py-2 text-left">Requester</th>
          <th class="w-[14%] px-3 py-2 text-left">Submitted Date</th>
          <th class="w-[14%] px-3 py-2 text-left">Due Date</th>
          <th class="w-[14%] px-3 py-2 text-left">Status</th>
          <th class="w-[14%] px-3 py-2 text-left">Action</th>
        </tr>
      </thead>

      <tbody class="divide-y">

        <tr>
          <td class="px-4 py-3">1</td>
          <td class="px-4 py-3">RFP Approval</td>
          <td class="px-4 py-3">IT</td>
          <td class="px-4 py-3">Rania</td>
          <td class="px-4 py-3">20 Jan 2026</td>
          <td class="px-4 py-3">25 Jan 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">
              Waiting Approval
            </span>
          </td>
          <td class="px-4 py-3 flex gap-2 items-center">

  <!-- DETAIL -->
  <a href="{{ route('task.approval.detail', 1) }}"
     class="px-3 py-1 bg-blue-100 text-blue-600 rounded text-xs hover:bg-blue-200">
    Detail
  </a>

  <!-- APPROVE -->
  <button class="approve-btn px-3 py-1 bg-green-600 text-white rounded text-xs"
    data-task="RFP Approval">
    Approve
  </button>

  <!-- REJECT -->
  <button class="reject-btn px-3 py-1 bg-red-100 text-red-600 rounded text-xs"
    data-task="RFP Approval">
    Reject
  </button>

</td>
        </tr>

        <tr>
          <td class="px-4 py-3">2</td>
          <td class="px-4 py-3">Overtime Request</td>
          <td class="px-4 py-3">Finance</td>
          <td class="px-4 py-3">Farhan</td>
          <td class="px-4 py-3">18 Jan 2026</td>
          <td class="px-4 py-3">24 Jan 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 flex gap-2 items-center">

  <a href="{{ route('task.approval.detail', 2) }}"
     class="px-3 py-1 bg-blue-100 text-blue-600 rounded text-xs hover:bg-blue-200">
    Detail
  </a>

  <span class="text-xs text-gray-500">Completed</span>

</td>
        </tr>

        <tr>
          <td class="px-4 py-3">3</td>
          <td class="px-4 py-3">New Slot Approval</td>
          <td class="px-4 py-3">Marketing</td>
          <td class="px-4 py-3">Cyntia</td>
           <td class="px-4 py-3">23 Jan 2026</td>
          <td class="px-4 py-3">26 Jan 2026</td>
          <td class="px-4 py-3">
            <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded rounded">
              Waiting Approval
            </span>
          </td>
          <td class="px-4 py-3 flex gap-2 items-center">

  <!-- DETAIL -->
  <a href="{{ route('task.approval.detail', 3) }}"
     class="px-3 py-1 bg-blue-100 text-blue-600 rounded text-xs hover:bg-blue-200">
    Detail
  </a>

  <!-- APPROVE -->
  <button class="approve-btn px-3 py-1 bg-green-600 text-white rounded text-xs"
    data-task="RFP Approval">
    Approve
  </button>

  <!-- REJECT -->
  <button class="reject-btn px-3 py-1 bg-red-100 text-red-600 rounded text-xs"
    data-task="RFP Approval">
    Reject
  </button>

</td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- PAGINATION -->
  <div class="flex justify-end items-center gap-3 text-sm">
    <span>Page 1 of 2</span>
    <button class="px-3 py-1 border rounded">Previous</button>
    <button class="px-3 py-1 border rounded">Next</button>
  </div>

</main>

<!-- ================= MODAL KONFIRMASI ================= -->
<div id="confirmModal" 
     class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">

  <div class="bg-white rounded-xl p-6 w-80 shadow-lg">
    <h2 class="text-sm font-semibold mb-3">Konfirmasi</h2>

    <p id="confirmText" class="text-sm text-gray-600 mb-6">
      Apakah Anda yakin?
    </p>

    <div class="flex justify-end gap-3">
      <button id="cancelBtn"
        class="px-4 py-1 text-sm bg-gray-200 rounded hover:bg-gray-300">
        Batal
      </button>

      <button id="confirmBtn"
        class="px-4 py-1 text-sm bg-red-600 text-white rounded hover:bg-red-700">
        Ya, Lanjutkan
      </button>
    </div>
  </div>
</div>

<script>
  const modal = document.getElementById("confirmModal");
  const confirmText = document.getElementById("confirmText");
  const confirmBtn = document.getElementById("confirmBtn");
  const cancelBtn = document.getElementById("cancelBtn");

  let selectedRow = null;
  let actionType = "";

  // APPROVE
  document.querySelectorAll(".approve-btn").forEach(button => {
    button.addEventListener("click", function () {
      const task = this.dataset.task;
      selectedRow = this.closest("tr");
      actionType = "approve";

      confirmText.innerText =
        "Anda yakin ingin menyetujui pengajuan \"" + task + "\"?";

      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });
  });

  // REJECT
  document.querySelectorAll(".reject-btn").forEach(button => {
    button.addEventListener("click", function () {
      const task = this.dataset.task;
      selectedRow = this.closest("tr");
      actionType = "reject";

      confirmText.innerText =
        "Anda yakin ingin menolak pengajuan \"" + task + "\"?";

      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });
  });

  // CANCEL
  cancelBtn.addEventListener("click", function () {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  });

  // CONFIRM
  confirmBtn.addEventListener("click", function () {
    if (selectedRow) {

      const statusCell = selectedRow.querySelector("td:nth-child(7)");
      const actionCell = selectedRow.querySelector("td:nth-child(8)");

      if (actionType === "approve") {
        statusCell.innerHTML = `
          <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
            Approved
          </span>
        `;
      } else {
        statusCell.innerHTML = `
          <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded">
            Rejected
          </span>
        `;
      }

      actionCell.innerHTML = `<span class="text-xs text-gray-500">Completed</span>`;
    }

    modal.classList.add("hidden");
    modal.classList.remove("flex");
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