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



<!-- TITLE -->
<div class="mb-4">
    <h1 class="text-xl font-semibold">Detail Task Approval</h1>
    <p class="text-gray-500 text-sm">Informasi detail sebelum melakukan approval</p>
</div>

<!-- CARD -->
<div class="bg-white rounded-xl shadow p-6">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-lg font-semibold">{{ $task['task_name'] }}</h2>
            <p class="text-sm text-gray-500">{{ $task['rfp_code'] }}</p>
        </div>

        <span class="px-3 py-1 text-sm rounded-full
    @if($task['status'] == 'Waiting Approval') bg-yellow-100 text-yellow-700
    @elseif($task['status'] == 'Approved') bg-green-100 text-green-700
    @elseif($task['status'] == 'Rejected') bg-red-100 text-red-700
    @endif
">
    {{ $task['status'] }}
</span>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-2 gap-6 text-sm">

        <div>
            <p class="text-gray-500">Division</p>
            <p class="font-medium">{{ $task['division'] }}</p>
        </div>

        <div>
            <p class="text-gray-500">Requester</p>
            <p class="font-medium">{{ $task['requester'] }}</p>
        </div>

        <div>
            <p class="text-gray-500">Submitted Date</p>
            <p class="font-medium">{{ $task['submitted_date'] }}</p>
        </div>

        <div>
            <p class="text-gray-500">Due Date</p>
            <p class="font-medium">{{ $task['due_date'] }}</p>
        </div>

        <div>
            <p class="text-gray-500">Jumlah Kebutuhan</p>
            <p class="font-medium">{{ $task['jumlah'] }}</p>
        </div>

        <div>
            <p class="text-gray-500">Priority</p>
            <p class="font-medium">{{ $task['priority'] }}</p>
        </div>

    </div>

    <!-- DESCRIPTION -->
    <div class="mt-6">
        <p class="text-gray-500 text-sm mb-1">Deskripsi</p>
        <p class="text-sm">
            {{ $task['description'] }}
        </p>
    </div>

    <!-- ACTION -->
    <div class="flex justify-between items-center mt-8">

        <a href="{{ route('task.approval') }}"
           class="px-4 py-2 bg-gray-200 rounded-lg text-sm">
            Back
        </a>

        @if($task['status'] == 'Waiting Approval')
    <div class="flex gap-2">
        <form action="{{ route('task.approval.approve', $task['id']) }}" method="POST">
            @csrf
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg text-sm">
                Approve
            </button>
        </form>

        <form action="{{ route('task.approval.reject', $task['id']) }}" method="POST">
            @csrf
            <button class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm">
                Reject
            </button>
        </form>
    </div>
@else
    <span class="text-sm text-gray-500">Completed</span>
@endif

    </div>

</div>