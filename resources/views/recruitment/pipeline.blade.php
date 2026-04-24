<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recruitment Pipeline</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
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
    <h1 class="text-lg font-semibold">Recruitment Pipeline</h1>
    <p class="text-sm text-gray-500">Pantau Progress Rekrutmen Kandidat!</p>
  </div>

  <!-- FILTER -->
    <div class="flex flex-wrap gap-10 items-center">
    <input type="text" placeholder="Search candidate/recruiter/position"
      class="px-4 py-2 border rounded-md text-sm w-64" />

  <div class="flex flex-wrap gap-10 items-center">
    <select class="px-4 py-2 border rounded-md text-sm">
      <option>Division</option>
      <option>IT</option>
      <option>Finance</option>
      <option>Marketing</option>
      <option>Procurement / Purchasing</option>
    </select>
  </div>

  <!-- PIPELINE -->
  <div class="grid grid-cols-1 md:grid-cols-4 gap-20">

    <!-- INTERVIEW -->
    <div class="bg-gray-100 rounded-xl p-4 shadow">
      <h3 class="font-semibold text-sm mb-4 flex justify-between text-gray-800">
        Interview <span class="text-gray-700">(4)</span>
      </h3>

    <!-- Scroll Down Interview -->

      <div class="space-y-3 max-h-[420px] overflow-y-auto pr-1">

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Najla</p>
          <p class="text-xs text-gray-500">UI/UX Designer</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button 
            class="approve-btn w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs"
            data-name="Najla">
            ✓
            </button>

            <button 
            class="reject-btn w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs"
            data-name="Najla">
            ✕
           </button>
          </div>
        </div>

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Rey</p>
          <p class="text-xs text-gray-500">Backend Developer</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button 
            class="approve-btn w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs"
            data-name="Rey">
            ✓
            </button>

            <button 
            class="reject-btn w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs"
            data-name="Rey">
            ✕
           </button>

          </div>
        </div>

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Harris</p>
          <p class="text-xs text-gray-500">Backend Developer</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

      </div>
    </div>

    <!-- PSIKOTEST -->
     <div class="bg-yellow-100 rounded-xl p-4 shadow">
      <h3 class="font-semibold text-sm mb-4 flex justify-between text-yellow-800">
        Psikotest <span class="text-yellow-700">(4)</span>
      </h3>

      <!-- Scroll Down Psikotest -->
      <div class="space-y-3 max-h-[420px] overflow-y-auto pr-1">

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Haviza</p>
          <p class="text-xs text-gray-500">Financial Analsyt</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Angie</p>
          <p class="text-xs text-gray-500">Tax Officer</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Sabrina</p>
          <p class="text-xs text-gray-500">Payroll Staff</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Ciara</p>
          <p class="text-xs text-gray-500">Digital Marketing Specialist</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>
        
      </div>
    </div>

    <!-- MCU -->
    <div class="bg-blue-100 rounded-xl p-4 shadow">
      <h3 class="font-semibold text-sm mb-4 flex justify-between text-blue-800">
        MCU <span class="text-blue-700">(3)</span>
      </h3>
      
      <!-- Scroll Down MCU -->
      <div class="space-y-3 max-h-[420px] overflow-y-auto pr-1">

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Tiara</p>
          <p class="text-xs text-gray-500">Digital Marketing Specialist</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Adi</p>
          <p class="text-xs text-gray-500">Purchasing Staff</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Ryan</p>
          <p class="text-xs text-gray-500">Supply Chain Analyst</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Rakha</p>
          <p class="text-xs text-gray-500">Helpdesk</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Febby</p>
          <p class="text-xs text-gray-500">Payroll Staff</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

      </div>
    </div>

    <!-- OFFERING -->
    <div class="bg-purple-100 rounded-xl p-4 shadow">
      <h3 class="font-semibold text-sm mb-4 flex justify-between text-purple-800">
        Offering <span class="text-purple-700">(5)</span>
      </h3>

      <!-- Scroll Down Offering -->
      <div class="space-y-3 max-h-[420px] overflow-y-auto pr-1">

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Ranty</p>
          <p class="text-xs text-gray-500">UI/UX Design</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Michelle</p>
          <p class="text-xs text-gray-500">UI/UX Design</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

         <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Nadira</p>
          <p class="text-xs text-gray-500">Internal Auditor</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Fajar</p>
          <p class="text-xs text-gray-500">Frontend Developer</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

        <div class="bg-white border rounded-lg p-3">
          <p class="font-semibold text-sm">Marsha</p>
          <p class="text-xs text-gray-500">Digital Marketing Specialist</p>
          <p class="text-xs text-gray-400">Linkedin</p>

          <div class="flex justify-end gap-2 mt-3">
            <button class="w-7 h-7 bg-green-100 text-green-700 rounded hover:bg-green-200 text-xs">✓</button>
            <button class="w-7 h-7 bg-red-100 text-red-700 rounded hover:bg-red-200 text-xs">✕</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>

<!-- ================= MODAL KONFIRMASI ================= -->
<div id="confirmModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
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

  let selectedCard = null;
  let actionType = "";

  // APPROVE BUTTON
  document.querySelectorAll(".approve-btn").forEach(button => {
    button.addEventListener("click", function () {
      const name = this.dataset.name;
      selectedCard = this.closest(".bg-white");
      actionType = "approve";

      confirmText.innerText = 
        "Anda yakin ingin melanjutkan kandidat " + name + "?";

      modal.classList.remove("hidden");
      modal.classList.add("flex");
    });
  });

  // REJECT BUTTON
  document.querySelectorAll(".reject-btn").forEach(button => {
    button.addEventListener("click", function () {
      const name = this.dataset.name;
      selectedCard = this.closest(".bg-white");
      actionType = "reject";

      confirmText.innerText = 
        "Anda yakin ingin menolak kandidat " + name + "?";

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
    if (selectedCard) {
      selectedCard.remove(); // hapus card kandidat
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