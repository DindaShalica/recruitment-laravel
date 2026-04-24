<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create RFP</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

<!-- ================= NAVBAR ================= -->
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
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            Dashboard
          </a>

          <a href="{{ route('rfp.monitoring') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            <span>RFP</span>
            <span>Monitoring</span>
          </a>

          <a href="{{ route('rfp.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-green-700 text-white rounded-t-md">
            <span>RFP</span>
            <span>Management</span>
          </a>

          <a href="{{ route('slot.management-pegawai') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            <span>Slot Management</span>
            <span>Pegawai</span>
          </a>

          <a href="{{ route('candidate.management') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            <span>Candidate</span>
            <span>Management</span>
          </a>

          <a href="{{ route('recruitment.pipeline') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            <span>Recruitment</span>
            <span>Pipeline</span>
          </a>

          <a href="{{ route('task.approval') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
            <span>Task</span>
            <span>Approval</span>
          </a>

          <a href="{{ route('report.monitoring-SLA') }}"
            class="px-5 h-[38px] flex flex-col items-center justify-center bg-gray-200 text-gray-700 rounded-t-md hover:bg-gray-300">
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
<main class="max-w-4xl mx-auto px-6 py-10 space-y-8">

  <!-- Breadcrumb -->
  <div class="text-sm text-gray-500">
    <a href="{{ route('rfp.management') }}" class="hover:underline">RFP Management</a> 
    <span class="mx-2">/</span> 
    <span class="text-green-700 font-medium">Create RFP</span>
  </div>

  <h1>
  {{ isset($rfp) ? 'Edit RFP' : 'Create RFP' }}
</h1>

  <!-- FORM -->
  <div class="bg-white rounded-xl shadow-md p-8 space-y-10">

    <!-- BASIC REQUEST -->
    <div class="space-y-6">
      <h2 class="text-lg font-semibold border-b pb-2">Basic Request Information</h2>

      <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-1">
          <label class="text-sm font-medium">Job Title</label>
          <input type="text" name="job_title"
           value="{{ $rfp['job_title'] ?? '' }}"
           class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
        </div>

        <div class="space-y-1">
          <label class="text-sm font-medium">Department / Division</label>
          <input type="text" name="division"
          value="{{ $rfp['division'] ?? '' }}"
          class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
        </div>

        <div class="space-y-1">
          <label class="text-sm font-medium">Reports To</label>
          <input type="text" class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
        </div>

        <div class="space-y-1">
          <label class="text-sm font-medium">Level</label>
          <select class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
            <option>Select</option>
            <option>SR.Staff</option>
            <option>Staff</option>
            <option>Non Staff</option>
          </select>
        </div>

        <div>
          <label class="text-sm">Number of Required Person</label>
          <input type="number" class="border rounded-md px-3 py-2 text-sm">
        </div>
      </div>
    </div>

    <!-- EMPLOYMENT & LOCATION -->
    <div class="space-y-6">
      <h2 class="text-lg font-semibold border-b pb-2">Employment & Location</h2>

      <div>
      <label class="text-sm font-medium">Company Hiring Point</label>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>EMP Malacca Strait</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>EMP Gebang</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>EMP Bentu</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Visi Multi Artha</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>EMP Tonga</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>EMP Tbk</span>
        </label>

      </div>
    </div>

    <!-- Work Location -->
    <div>
      <label class="text-sm font-medium">Work Location</label>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Office Based (Jakarta)</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Field Based (Kurau/Segat/Tonga/Sangatta/...)</span>
        </label>

      </div>
    </div>

    <!-- Point of Hire -->
    <div>
      <label class="text-sm font-medium">Point of Hire</label>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Jakarta</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Pekanbaru</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>S.Pakning</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Kurau dan Sekitarnya</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Others</span>
        </label>

      </div>
    </div>

    <div class="space-y-1">
          <label class="text-sm font-medium">Preference</label>
          <select class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
            <option>Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>No Preference</option>
          </select>
        </div>

     <!-- Employment Status + Budget State -->
    <div class="grid md:grid-cols-2 gap-6">

      <div class="space-y-1">
          <label class="text-sm font-medium">Employment Status</label>
<select name="employment_type"
  class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">

  <option value="">Select</option>

  <option value="Permanent"
    {{ (isset($rfp) && $rfp['employment_type'] == 'Permanent') ? 'selected' : '' }}>
    Permanent
  </option>

  <option value="PKWT"
    {{ (isset($rfp) && $rfp['employment_type'] == 'PKWT') ? 'selected' : '' }}>
    Direct Contract (PKWT)
  </option>

  <option value="TPC"
    {{ (isset($rfp) && $rfp['employment_type'] == 'TPC') ? 'selected' : '' }}>
    Third Party Contract (TPC)
  </option>

</select>
        </div>

       <div>
      <label class="text-sm font-medium">Work Schedule</label>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>5/2</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>2/2</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>2/1</span>
        </label>

          </div>
        </div>
      </div>
    </div>

    <div class="space-y-1">
          <label class="text-sm font-medium">Budget State</label>
          <select class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none">
            <option>Select</option>
            <option>Budget (Planned)</option>
            <option>Not Budgeted (Unplanned)</option>
          </select>
        </div>

        <!-- Reason for Recruitment -->
    <div>
      <label class="text-sm font-medium">Reason for Recruitment</label>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Addition</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Replacement</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Contract Extantion</span>
        </label>

        <label class="flex items-center gap-2">
          <input type="checkbox" class="accent-green-600">
          <span>Status Change</span>
        </label>
        
      </div>
    </div>

    <!-- Duties of Position -->
    <div class="space-y-4">
      <h2 class="text-lg font-semibold border-b pb-2">Duties of Position</h2>
      <textarea rows="3"
        class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
        placeholder=""></textarea>
    </div>

    <!-- Qualifications required for the position -->
    <div class="space-y-4">
      <h2 class="text-lg font-semibold border-b pb-2">Qualifications Required for the Position</h2>
      <textarea rows="3"
        class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
        placeholder=""></textarea>
    </div>

    <!-- JOB DETAIL -->
    <div class="space-y-4">
      <h2 class="text-lg font-semibold border-b pb-2">Job Detail</h2>
      <textarea rows="4"
        class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
        placeholder=""></textarea>
    </div>

    <div class="overflow-x-auto">
    <table class="w-full text-sm border border-gray-300">
      <thead class="bg-gray-50">
        <tr class="text-left">
          <th class="p-3 border"></th>
          <th class="p-3 border">Name</th>
          <th class="p-3 border">Job Title</th>
          <th class="p-3 border">Signature</th>
          <th class="p-3 border">Date</th>
        </tr>
      </thead>

      <tbody class="divide-y">

        <tr>
          <td class="p-3 border font-medium">Initiator (min. grade 18 & above)</td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="date" class="w-full border-b outline-none"></td>
        </tr>

        <tr>
          <td class="p-3 border font-medium">Approver (next level superior)</td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="date" class="w-full border-b outline-none"></td>
        </tr>

        <tr>
          <td class="p-3 border font-medium">GM **)</td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="date" class="w-full border-b outline-none"></td>
        </tr>

        <tr>
          <td class="p-3 border font-medium">Function Leader ***)</td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="date" class="w-full border-b outline-none"></td>
        </tr>

        <tr>
          <td class="p-3 border font-medium">Ops. Manager ****)</td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="text" class="w-full border-b outline-none"></td>
          <td class="p-3 border"><input type="date" class="w-full border-b outline-none"></td>
        </tr>

      </tbody>
    </table>
  </div>

  <!-- Notes -->
  <div class="text-xs text-gray-500 space-y-1">
    <p>**) for hiring personnel in Business Unit</p>
    <p>***) for hiring personnel in Support Function</p>
    <p>****) for hiring personnel in Field Operation Area</p>
  </div>

  <!-- ================= HR SECTION ================= -->
<div class="mt-10">

  <div class="grid grid-cols-4 border text-sm">

    <!-- HR NOTE -->
    <div class="border p-4">
      <p class="font-medium mb-2">HR Note</p>
      <textarea rows="4" class="w-full border rounded-md p-2"></textarea>
    </div>

    <!-- RECEIVED BY -->
    <div class="border p-4">
      <p class="font-medium mb-2">Received by & Date</p>
      <input type="text" placeholder="Name"
        class="w-full border rounded-md px-2 py-1 mb-2">
      <input type="date"
        class="w-full border rounded-md px-2 py-1">
    </div>

    <!-- HR VERIFICATION -->
    <div class="border p-4">
      <p class="font-medium mb-2">HR Verification</p>
      <input type="text"
        class="w-full border rounded-md px-2 py-1">
    </div>

    <!-- HR ENDORSEMENT -->
    <div class="border p-4">
      <p class="font-medium mb-2">HR Endorsement</p>
      <input type="text"
        class="w-full border rounded-md px-2 py-1">
    </div>

  </div>
</div>

<!-- ================= BUTTON  ================= -->
<div class="flex justify-end gap-4 mt-8 pt-6 border-t">
  <button class="px-5 py-2 border rounded-md hover:bg-gray-100">
    Save as Draft
  </button>
  <button class="px-5 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
    Submit RFP
  </button>
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