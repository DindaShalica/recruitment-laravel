<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Candidate</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Slot Management</span>
            <span>Pegawai</span>
          </a>

          <a href="{{ route('candidate.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md leading-tight">
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
    <a href="{{ route('candidate.management') }}"class="text-gray-600">Candidate Management</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-green-700 font-medium">Detail Candidate</span>
  </div>

  <!-- TITLE -->
  <h1 class="text-lg font-semibold text-gray-800">
    Detail Candidate
  </h1>

  <!-- CONTENT -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- LEFT CARD (PROFILE) -->
    <div class="bg-white rounded-xl shadow p-6">

      <div class="flex flex-col items-center text-center">

        <img src="https://i.pinimg.com/736x/20/b5/da/20b5dacaedd3ee0e46431e6af9a4931d.jpg"
             class="w-20 h-20 rounded-full object-cover mb-3">

        <h2 class="text-lg font-semibold text-gray-800">
          {{ $candidate['name'] }}
        </h2>
        
      </div>

      <div class="space-y-4 text-sm text-gray-700">

        <div class="flex items-center gap-3">
          <span>📱</span>
          <span>{{ $candidate['phone'] }}</span>
        </div>

        <div class="flex items-center gap-3">
          <span>📩</span>
          <span>{{ $candidate['email'] }}</span>
        </div>

        <div class="flex items-center gap-3">
          <span>📍</span>
          <span>{{ $candidate['location'] }}</span>
        </div>

      </div>

      <div class="mt-6 text-center">
        <button class="bg-green-700 text-white px-5 py-2 rounded-md text-sm hover:bg-green-800">
          Download CV
        </button>
      </div>

    </div>

    <!-- (CANDIDATE INFO) -->
    <div class="bg-white rounded-xl shadow p-6 space-y-4">

      <h2 class="font-semibold text-gray-800">Candidate Info</h2>

      <div class="text-sm space-y-3">

        <div class="flex justify-between border-b pb-2">
          <span class="text-gray-500">Position Applied</span>
          <span class="font-medium">{{ $candidate['position_applied'] }}</span>
        </div>

        <div class="flex justify-between border-b pb-2">
          <span class="text-gray-500">Applied Date</span>
          <span class="font-medium">{{ $candidate['applied_date'] }}</span>
        </div>

        <div class="flex justify-between border-b pb-2">
  <span class="text-gray-500">Status</span>

  @php
  $stage = $candidate['stage'] ?? '';

  if ($stage == 'Interview') {
      $stageClass = 'bg-gray-100 text-gray-700';
  } elseif ($stage == 'Psikotest') {
      $stageClass = 'bg-yellow-100 text-yellow-700';
  } elseif ($stage == 'MCU') {
      $stageClass = 'bg-blue-100 text-blue-700';
  } elseif ($stage == 'Offering') {
      $stageClass = 'bg-green-100 text-green-700';
  } elseif ($stage == 'Hired') {
      $stageClass = 'bg-blue-100 text-blue-700'; 
  } else {
      $stageClass = 'bg-gray-100 text-gray-700';
  }
@endphp

  <span class="px-3 py-1 rounded-full text-xs font-medium {{ $stageClass }}">
    {{ $candidate['stage'] ?? '-' }}
  </span>
</div>

        <div class="flex justify-between border-b pb-2">
          <span class="text-gray-500">Source</span>
          <span class="font-medium">{{ $candidate['source'] }}</span>
        </div>

        <div>
          <span class="text-gray-500 block mb-2">Notes</span>
          <textarea 
            class="w-full border rounded-md p-2 text-sm focus:ring-2 focus:ring-green-600"
            rows="3"
            placeholder="Tambahkan catatan..."
          ></textarea>

          <button class="mt-2 bg-green-700 text-white px-4 py-1 rounded-md text-sm hover:bg-green-800">
          Add Notes
        </button>
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