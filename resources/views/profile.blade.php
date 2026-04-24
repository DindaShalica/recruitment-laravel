<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
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
            class="px-5 h-[38px] flex items-center bg-green-700 text-white rounded-t-md">
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
  <span>Thea</span>
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

<!-- BREADCRUMB -->
<div class="max-w-7xl mx-auto px-6 mt-4">
  <nav class="text-sm text-gray-500">
    <ol class="flex items-center gap-2">
      
      <li>
        <a href="{{ route('dashboard') }}" class="hover:text-green-700">
          Dashboard
        </a>
      </li>

      <li>/</li>

      <li class="text-gray-700 font-medium">
        Profile
      </li>

    </ol>
  </nav>
</div>

<!-- CONTENT -->
<div class="p-6">
    <h1 class="text-xl font-semibold mb-4">Ubah Profile</h1>

    <!-- FOTO PROFILE -->
<div class="mb-4 flex flex-col items-center">
  
  <!-- Preview Foto -->
  <img id="previewImage"
    src="https://i.pinimg.com/736x/ec/a5/bd/eca5bdf288baf3d4645f8a2f40a64ed0.jpg"
    class="w-24 h-24 rounded-full object-cover border-2 border-green-600 mb-3"
  />

  <!-- Input Upload -->
  <input type="file" id="imageInput" accept="image/*"
    class="text-sm"
  />

</div>

    <div class="bg-white p-6 rounded shadow w-[400px]">
        <form>
            <form enctype="multipart/form-data">
                <label class="block text-sm">Nama</label>
                <input type="text" class="w-full border rounded px-3 py-2" value="Thea">
            </div>

            <div class="mb-4">
                <label class="block text-sm">Email</label>
                <input type="email" class="w-full border rounded px-3 py-2" value="thea@email.com">
            </div>

            <div class="mb-4">
                <label class="block text-sm">Password</label>
                <input type="password" class="w-full border rounded px-3 py-2">
            </div>

            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Simpan
            </button>
        </form>
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

<script>
  const imageInput = document.getElementById("imageInput");
  const previewImage = document.getElementById("previewImage");

  imageInput.addEventListener("change", function () {
    const file = this.files[0];

    if (file) {
      const reader = new FileReader();

      reader.addEventListener("load", function () {
        previewImage.src = this.result;
      });

      reader.readAsDataURL(file);
    }
  });
</script>

</body>
</html>