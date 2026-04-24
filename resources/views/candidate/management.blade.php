<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Candidate Management</title>
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

  <!-- HEADER -->
  <div>
    <h1 class="text-lg font-semibold">Candidate Management</h1>
    <p class="text-sm text-gray-500">Kelola data dan progress kandidat</p>
  </div>

  <!-- TABS -->
  <div class="flex gap-40 flex-wrap">
    <button class="px-4 py-2 rounded-full bg-gray-200 text-sm">All (10)</button>
    <button class="px-4 py-2 rounded-full bg-purple-200 text-sm">In Progress (3)</button>
    <button class="px-4 py-2 rounded-full bg-blue-200 text-sm">Hired (5)</button>
    <button class="px-4 py-2 rounded-full bg-red-200 text-sm">Rejected (2)</button>
  </div>

  <!-- FILTER -->
  <div class="flex flex-wrap gap-20 items-center">
    <input type="text" placeholder="Search name / position"
      class="px-4 py-2 border rounded-md text-sm w-64" />

    <select class="px-4 py-2 border rounded-md text-sm">
      <option>Division</option>
      <option>IT</option>
      <option>Finance</option>
    </select>

    <select class="px-4 py-2 border rounded-md text-sm">
      <option>Last Update</option>
      <option>Yesterday</option>
      <option>2 Hours Ago</option>
      <option>3 Hours Ago</option>
    </select>

    <a href="{{ route('candidate.create') }}"
  class="ml-auto px-4 py-2 bg-green-600 text-white rounded-md text-sm hover:bg-green-700">
  + Add Candidate
</a>
  </div>

<!-- ================= MAIN CONTENT ================= -->
<div class="p-6">

  <div class="bg-white rounded-xl shadow-sm border overflow-visible">

    <div class="p-4 border-b flex justify-between items-center">
      <h2 class="text-lg font-semibold">Candidate List</h2>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-sm text-left text-black-600">
        <thead class="bg-gray-50 text-xs uppercase text-black-500">
          <tr>
          <th class="w-[14%] px-3 py-2 text-left">Name</th>
          <th class="w-[14%] px-3 py-2 text-left">Position</th>
          <th class="w-[14%] px-3 py-2 text-left">Division</th>
          <th class="w-[14%] px-3 py-2 text-left">Source</th>
          <th class="w-[14%] px-3 py-2 text-left">Status</th>
          <th class="w-[14%] px-3 py-2 text-left">Last Update</th>
          <th class="w-[14%] px-3 py-2 text-left">Recruiter</th>
          <th class="w-[14%] px-3 py-2 text-left">Action</th>
          </tr>
        </thead>

        <tbody class="divide-y">
@foreach ($candidates as $candidate)
<tr class="hover:bg-gray-50">
  <td class="px-4 py-3 font-medium text-gray-900">
    {{ $candidate['name'] }}
  </td>

  <td class="px-4 py-3">
    {{ $candidate['position'] }}
  </td>

  <td class="px-4 py-3">
    {{ $candidate['division'] }}
  </td>

  <td class="px-4 py-3">
    {{ $candidate['source'] }}
  </td>

  <td class="px-4 py-3">
  <span class="
    px-3 py-1 rounded-full text-xs font-medium
    @if($candidate['status'] == 'Hired') bg-blue-100 text-blue-700
    @elseif($candidate['status'] == 'In Progress') bg-purple-100 text-purple-700
    @elseif($candidate['status'] == 'Offering') bg-green-100 text-green-700
    @elseif($candidate['status'] == 'Rejected') bg-red-100 text-red-700
    @else bg-gray-100 text-gray-700
    @endif
  ">
    {{ $candidate['status'] }}
  </span>
</td>

  <td class="px-4 py-3">
    {{ $candidate['last_update'] }}
  </td>

  <td class="px-4 py-3">
    {{ $candidate['recruiter'] }}
  </td>

  <td class="px-4 py-3 text-right relative">

  <!-- KEBAB BUTTON -->
  <button onclick="toggleMenu(this)" 
          class="inline-flex items-center justify-center w-8 h-8 rounded hover:bg-gray-100">
    •••
  </button>

  <!-- DROPDOWN -->
  <div class="hidden absolute right-4 top-8 w-28 bg-white border rounded-md shadow-md z-10">

    <a href="{{ route('candidate.detail', $candidate['id']) }}"
       class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
      Detail
    </a>

    <a href="{{ route('candidate.edit', $candidate['id']) }}"
       class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
      Edit
    </a>

    <form action="{{ route('candidate.delete', $candidate['id']) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"
        class="w-full px-4 py-2 text-left text-sm text-red-600 hover:bg-red-50">
        Delete
      </button>
    </form>

  </div>
</td>

</tr>
@endforeach
</tbody>

      </table>
    </div>

  </div>
</div>

<!-- PAGINATION -->
  <div class="flex justify-end items-center gap-3 text-sm">
    <span>Page 1 of 3</span>
    <button class="px-3 py-1 border rounded">Previous</button>
    <button class="px-3 py-1 border rounded">Next</button>
  </div>

</main>

<!-- SCRIPT DROPDOWN -->
<script>
function toggleMenu(btn) {
  document.querySelectorAll(".dropdown-menu").forEach(m => {
    if (m !== btn.nextElementSibling) m.classList.add("hidden");
  });
  btn.nextElementSibling.classList.toggle("hidden");
}

document.addEventListener("click", e => {
  if (!e.target.closest("td")) {
    document.querySelectorAll(".dropdown-menu").forEach(m => m.classList.add("hidden"));
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