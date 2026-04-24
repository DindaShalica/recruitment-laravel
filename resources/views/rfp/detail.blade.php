<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail RFP Management</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md leading-tight">
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
<main class="max-w-7xl mx-auto px-6 py-8 space-y-6">

<!-- ===== BREADCRUMB ===== -->
  <div class="text-sm">
    <a href="{{ route('rfp.management') }}"class="text-gray-600">RFP Management</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-green-700 font-medium hover:underline">Detail RFP</span>
  </div>

  <!-- TITLE -->
  <h1 class="text-lg font-semibold text-gray-800">
    Detail RFP dan Timeline {{ $rfp['id'] }}
  </h1>

  <!-- CONTENT -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- LEFT CARD -->
    <div class="bg-white rounded-xl shadow p-6 space-y-4">

      <h2 class="font-semibold text-gray-800">{{ $rfp['id'] }} Detail</h2>

      <div class="text-sm space-y-2">
        <div class="flex justify-between">
          <span class="text-gray-500">Position</span>
          <span class="font-medium">{{ $rfp['position'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Division</span>
          <span class="font-medium">{{ $rfp['division'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Requested Slot</span>
          <span class="font-medium">{{ $rfp['requested slot'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Submitted by</span>
          <span class="font-medium">{{ $rfp['submitted by'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Submission Date</span>
          <span class="font-medium">{{ $rfp['submission date'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Status</span>
          <span class="font-medium">{{ $rfp['status'] }}</span>
        </div>
      </div>

      <!-- COMMENT -->
      <div class="pt-4 border-t">
        <label class="text-sm text-gray-600">Comment</label>
        <textarea class="w-full mt-1 border rounded-md p-2 text-sm focus:ring-2 focus:ring-green-600"
          rows="3"
          placeholder="Tambahkan komentar..."></textarea>

        <button class="mt-2 bg-green-700 text-white px-4 py-1 rounded-md text-sm hover:bg-green-800">
          Add Comment
        </button>
      </div>

      <!-- ACTION BUTTON -->
      <div class="flex gap-3 pt-4">
        <button class="bg-green-600 text-white px-4 py-2 rounded-md text-sm hover:bg-green-700">
          Approve
        </button>
        <button class="bg-red-500 text-white px-4 py-2 rounded-md text-sm hover:bg-red-600">
          Reject
        </button>
      </div>

    </div>

    <!-- RIGHT CARD - TIMELINE -->
    <div class="bg-white rounded-xl shadow p-6">

      <h2 class="font-semibold text-gray-800 mb-6">Approval Timeline</h2>

      <div class="relative border-l-2 border-green-600 pl-6 space-y-8">

        <div>
          <div class="absolute -left-[9px] w-4 h-4 bg-green-600 rounded-full"></div>
          <p class="text-sm font-medium">Request Submitted</p>
          <p class="text-xs text-gray-500">20 Januari 2026</p>
        </div>

        <div>
          <div class="absolute -left-[9px] w-4 h-4 bg-green-600 rounded-full"></div>
          <p class="text-sm font-medium">Manager Approval</p>
          <p class="text-xs text-gray-500">21 Januari 2026</p>
        </div>

        <div>
          <div class="absolute -left-[9px] w-4 h-4 bg-yellow-500 rounded-full"></div>
          <p class="text-sm font-medium">HR Approval</p>
          <p class="text-xs text-gray-500">Waiting Approval</p>
        </div>

        <div>
          <div class="absolute -left-[9px] w-4 h-4 bg-gray-300 rounded-full"></div>
          <p class="text-sm font-medium text-gray-400">Final Approved</p>
          <p class="text-xs text-gray-400">Pending</p>
        </div>

     </div>

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