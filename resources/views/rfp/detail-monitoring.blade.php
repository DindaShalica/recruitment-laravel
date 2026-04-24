<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Monitoring Rekrutmen</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md leading-tight">
            <span>RFP</span>
            <span>Monitoring</span>
          </a>

          <a href="{{ route('rfp.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300 leading-tight">
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

  <!-- BREADCRUMB -->
  <div class="text-sm">
    <a href="{{ route('rfp.monitoring') }}" class="text-gray-600">RFP Monitoring</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-green-700 font-medium">Detail Monitoring</span>
  </div>

  <!-- TITLE -->
  <h1 class="text-xl font-semibold text-gray-800">
    Monitoring Rekrutmen Detail
  </h1>

  <!-- TOP CARDS -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- INFORMASI -->
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="font-semibold mb-4">Informasi Rekrutmen</h2>

      <div class="text-sm space-y-2">
        <div class="flex justify-between">
          <span class="text-gray-500">Judul</span>
          <span class="font-medium">{{ $item['judul'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">ID Rekrutmen</span>
          <span class="font-medium">{{ $item['id_rekrutmen'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Tanggal Dibuat</span>
          <span class="font-medium">{{ $item['tanggal_dibuat'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Deadline</span>
          <span class="font-medium">{{ $item['deadline'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Last Updated</span>
          <span class="font-medium">{{ $item['last_updated'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Status</span>
          <span class="font-medium text-green-600">{{ $item['status'] }}</span>
        </div>
      </div>
    </div>

    <!-- PIC -->
    <div class="bg-white rounded-xl shadow p-6">
      <h2 class="font-semibold mb-4">PIC Rekrutmen</h2>

      <div class="text-sm space-y-2">
        <div class="flex justify-between">
          <span class="text-gray-500">Nama</span>
          <span class="font-medium">{{ $item['pic_nama'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Divisi</span>
          <span class="font-medium">{{ $item['divisi'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Email</span>
          <span class="font-medium">{{ $item['email'] }}</span>
        </div>

        <div class="flex justify-between">
          <span class="text-gray-500">Telepon</span>
          <span class="font-medium">{{ $item['telepon'] }}</span>
        </div>
      </div>
    </div>

  </div>

  <!-- PROGRESS -->
<div class="bg-white rounded-xl shadow p-6">

  <!-- Header -->
  <div class="flex justify-between items-center mb-2">
    <h2 class="font-semibold">
      Status: 
      <span class="text-green-600">{{ $item['status'] }}</span>
    </h2>

    <span class="text-green-600 font-semibold">
      {{ $item['progress'] }}%
    </span>
  </div>

  <!-- Progress Bar -->
  <div class="w-full bg-gray-200 rounded-full h-3">
    <div 
      class="bg-green-600 h-3 rounded-full transition-all duration-300"
      style="width: {{ $item['progress'] }}%">
    </div>
  </div>

  <!-- Footer -->
  <p class="text-xs text-gray-500 mt-2">
    Last Updated: {{ $item['last_updated'] }}
  </p>

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