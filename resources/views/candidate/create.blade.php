<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Candidate</title>
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 border-l border-white rounded-t-md hover:bg-gray-300 leading-tight">
            <span>Slot Management</span>
            <span>Pegawai</span>
          </a>

          <a href="{{ route('candidate.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
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

<!-- Breadcrumb -->
  <div class="text-sm text-gray-500">
    <a href="{{ route('candidate.management') }}" class="hover:underline">Candidate Management</a> 
    <span class="mx-2">/</span> 
    <span class="text-green-700 font-medium">Add Candidate</span>
  </div>

<h1 class="text-lg font-semibold">
  {{ isset($candidate) ? 'Edit Candidate' : 'Add Candidate' }}
</h1>

<!-- FORM -->
    <form class="px-6 py-6 space-y-5">

      <div class="grid grid-cols-3 items-center gap-4">
  <label class="text-xs text-gray-600">Fullname</label>
  <input type="text" name="name"
    value="{{ $candidate['name'] ?? '' }}"
    class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
</div>

      <div class="grid grid-cols-3 items-center gap-4">
  <label class="text-xs text-gray-600">Email</label>
  <input type="email" name="email"
    value="{{ $candidate['email'] ?? '' }}"
    class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
</div>

      <div class="grid grid-cols-3 items-center gap-4">
  <label class="text-xs text-gray-600">Phone Number</label>
  <input type="text" name="phone"
    value="{{ $candidate['phone'] ?? '' }}"
    class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
</div>

<div class="grid grid-cols-3 items-center gap-4">
  <label class="text-xs text-gray-600">Division</label>
  <input type="text" name="division"
    value="{{ $candidate['division'] ?? '' }}"
    class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
</div>

<div class="grid grid-cols-3 items-center gap-4">
  <label class="text-xs text-gray-600">Position Applied</label>
  <input type="text" name="position"
    value="{{ $candidate['position'] ?? '' }}"
    class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
</div>

      <div class="grid grid-cols-3 items-center gap-4">
  <label class="text-xs text-gray-600">Source</label>

  <select name="source"
    class="col-span-2 border rounded px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">

    <option value="">Select Source</option>

    <option value="Linkedin"
      {{ isset($candidate) && $candidate['source'] == 'Linkedin' ? 'selected' : '' }}>
      Linkedin
    </option>

    <option value="Jobstreet"
      {{ isset($candidate) && $candidate['source'] == 'Jobstreet' ? 'selected' : '' }}>
      Linkedin
    </option>

  </select>
</div>

      <div class="grid grid-cols-3 items-center gap-4">
        <label class="text-xs text-gray-600">Upload CV</label>
        <input type="file"
          class="col-span-2 text-sm file:mr-4 file:py-1 file:px-3 file:rounded file:border-0 file:text-xs file:font-medium file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300">
      </div>

      <!-- BUTTON -->
      <div class="flex justify-end gap-3 pt-6 border-t mt-6">
        <button type="button" id="cancelBtn"
          class="px-4 py-2 text-sm bg-gray-200 rounded hover:bg-gray-300">
          Cancel
        </button>

        <button type="submit"
          class="px-4 py-2 text-sm bg-green-600 text-white rounded hover:bg-green-700">
          Save Candidate
        </button>
      </div>

    </form>
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