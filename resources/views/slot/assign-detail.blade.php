<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Slot Pegawai</title>
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
            class="px-5 h-[38px] flex items-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            Dashboard
          </a>

          <a href="{{ route('rfp.monitoring') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
            <span>RFP</span>
            <span>Monitoring</span>
          </a>

          <a href="{{ route('rfp.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
            <span>RFP</span>
            <span>Management</span>
          </a>

          <a href="{{ route('slot.management-pegawai') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md leading-tight">
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
<main class="max-w-7xl mx-auto px-6 py-8 space-y-6">

<!-- ===== BREADCRUMB ===== -->
  <div class="text-sm">
    <a href="{{ route('slot.management-pegawai') }}"class="text-gray-600">Slot Management Pegawai</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-green-700 font-medium hover:underline">Assign Candidate Detail</span>
  </div>

   <!-- TITLE -->
  <h1 class="text-lg font-semibold mb-6 text-center">
    Assign Candidate to Position
  </h1>

  <!-- CANDIDATE INFO -->
  <div class="flex items-center gap-3 mb-6">
    <div class="w-10 h-10 rounded-full bg-gray-300"></div>
    <div>
      <p class="font-semibold">{{ $candidate['name'] ?? 'Michelle' }}</p>
      <p class="text-xs text-gray-500">
        RFP - 025 / IT - Frontend Developer
      </p>
    </div>
  </div>

  <!-- FORM -->
  <div class="space-y-4">

    <div>
      <label class="text-xs text-gray-500">RFP / Job Detail</label>
      <input type="text" value="RFP - 025 Frontend Developer"
        class="w-full border rounded px-3 py-2 text-sm">
    </div>

    <div>
      <label class="text-xs text-gray-500">Division</label>
      <input type="text" value="IT"
        class="w-full border rounded px-3 py-2 text-sm">
    </div>

    <div>
      <label class="text-xs text-gray-500">Recruitment Stage</label>
      <input type="text" value="Offering"
        class="w-full border rounded px-3 py-2 text-sm">
    </div>

    <div>
      <label class="text-xs text-gray-500">PIC / Recruiter</label>
      <input type="text" value="Rizky"
        class="w-full border rounded px-3 py-2 text-sm">
    </div>

    <div>
      <label class="text-xs text-gray-500">Notes</label>
      <textarea
        class="w-full border rounded px-3 py-2 text-sm"></textarea>
    </div>

  </div>

  <!-- BUTTON -->
  <div class="flex justify-end gap-3 mt-6">
    <a href="{{ url()->previous() }}"
       class="px-4 py-2 bg-gray-200 rounded text-sm">
      Cancel
    </a>

    <button
      class="px-4 py-2 bg-blue-600 text-white rounded text-sm">
      Send Offering Letter
    </button>
  </div>

</div>

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