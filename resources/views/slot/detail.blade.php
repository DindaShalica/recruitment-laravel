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
    <span class="text-green-700 font-medium hover:underline">Detail Slot</span>
  </div>

  <!-- TITLE -->
  <h1 class="text-xl font-semibold">Detail Slot Pegawai</h1>

  <!-- CARD 1 -->
  <div class="bg-white rounded-xl shadow p-6">
    <h2 class="font-semibold mb-4">Detail Slot</h2>

    <div class="grid grid-cols-3 gap-6 text-sm">

        <div>
        <p class="text-gray-400">Division</p>
        <p class="font-medium">{{ $slot['division'] }}</p>
        </div>

        <div>
        <p class="text-gray-400">Slot</p>
        <p class="font-medium">{{ $slot['total_slot'] }} Slot</p>
        </div>

        <div>
        <p class="text-gray-400">Status</p>

        @if($slot['status'] == 'On Recruitment')
  <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded text-xs">
    On Recruitment
  </span>

@elseif($slot['status'] == 'Open')
  <span class="px-2 py-1 bg-yellow-100 text-yellow-600 rounded text-xs">
    Open
  </span>

@elseif($slot['status'] == 'Full')
  <span class="px-2 py-1 bg-green-100 text-green-600 rounded text-xs">
    Full
  </span>

@else
  <span class="px-2 py-1 bg-gray-200 text-gray-600 rounded text-xs">
    Close
  </span>
@endif

      </div>

        <div>
        <p class="text-gray-400">Created Date</p>
        <p class="font-medium">{{ $slot['date'] ?? '-' }}</p>
      </div>
      </div>
    </div>


    <!-- ===== JOB REQUIREMENTS ===== -->
    <div class="bg-gray rounded-lg shadow p-6 mb-6">

      <h2 class="text-lg font-semibold mb-4 text-gray-700">
        Information Slot Requirements
      </h2>

      <div class="text-sm text-gray-700 space-y-3">

        <div>
          <p class="font-medium mb-1">Qualifications</p>
          <ul class="list-disc list-inside text-gray-600">
  @foreach($slot['requirements']['qualification'] as $q)
    <li>{{ $q }}</li>
  @endforeach
</ul>
        </div>

        <div class="grid md:grid-cols-3 gap-4 pt-3">
          <div>
            <p class="font-medium">{{ $slot['requirements']['level'] }}</p>
          </div>
          <div>
            <p class="font-medium">{{ $slot['requirements']['location'] }}</p>
          </div>
          <div>
            <p class="font-medium">{{ $slot['requirements']['employment_type'] }}</p>
          </div>
        </div>

        <div>
          <p class="font-medium">{{ $slot['requirements']['salary'] }}</p>
        </div>

      </div>
    </div>


    <!-- ===== CANDIDATE LIST ===== -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">

      <h2 class="text-lg font-semibold mb-4 text-gray-700">
        Candidate on Selected Slot
      </h2>

      <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left">
          <thead class="text-gray-500 border-b">
            <tr>
              <th class="py-3">No</th>
              <th>Candidate Name</th>
              <th>Email</th>
              <th>Source</th>
              <th>Recruitment Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">

@forelse($slot['candidates'] as $i => $c)
  <tr class="border-b">
    <td class="py-3">{{ $i + 1 }}</td>
    <td>{{ $c['name'] }}</td>
    <td>{{ $c['email'] }}</td>
    <td>{{ $c['source'] }}</td>
    <td>
    @if($c['status'] == 'Offering')
        <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
            Offering
        </span>

    @elseif($c['status'] == 'Hired')
        <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-600">
            Hired
        </span>

    @elseif($c['status'] == 'Interview')
        <span class="px-3 py-1 text-xs rounded-full bg-gray-100 text-gray-600">
            Interview
        </span>

    @elseif($c['status'] == 'Psikotest')
        <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-600">
            Psikotest
        </span>

    @else
        <span class="px-3 py-1 text-xs rounded-full bg-gray-100 text-gray-600">
            {{ $c['status'] }}
        </span>
    @endif
</td>
  </tr>

@empty
  <tr>
    <td colspan="5" class="text-center py-5 text-gray-400">
      No candidate available
    </td>
  </tr>
@endforelse

</tbody>
        </table>
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