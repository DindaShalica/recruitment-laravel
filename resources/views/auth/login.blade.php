<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">

  <!-- Header -->
  <header class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-6 h-14 flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center gap-2">
        <span class="font-semibold text-green-700">emp</span>
        <span class="font-semibold text-yellow-600">SIAP</span>
      </div>

      <!-- Menu -->
      <span class="text-sm bg-green-600 text-white px-4 py-1.5 rounded-md font-medium">
        Login
      </span>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

      <!-- Login Card -->
      <div class="flex justify-center">
        <div class="w-full max-w-sm bg-white rounded-xl shadow p-6">
          <h1 class="text-lg font-semibold text-gray-800">
            MASUK
          </h1>
          <p class="text-sm text-gray-500 mb-6">
            Selamat Datang di Aplikasi Rekrutmen
          </p>

          <div class="space-y-4">
            <!-- Email -->
            <input
              type="email"
              placeholder="Masukkan Email"
              class="w-full border rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500"
            />

            <!-- Password -->
<div class="relative">
  <input
    id="password"
    type="password"
    placeholder="Masukkan Password"
    class="w-full border rounded-md px-3 py-2 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-green-500"
  />

  <!-- Icon Mata -->
  <button
    type="button"
    onclick="togglePassword()"
    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-green-600"
  >
    <!-- Eye Icon -->
    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" 
      class="h-5 w-5" fill="none" viewBox="0 0 24 24" 
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M2.458 12C3.732 7.943 7.523 5 12 5
           c4.477 0 8.268 2.943 9.542 7
           -1.274 4.057-5.065 7-9.542 7
           -4.477 0-8.268-2.943-9.542-7z" />
    </svg>
  </button>
</div>

            <!-- Remember -->
            <label class="flex items-center gap-2 text-sm text-gray-600">
              <input type="checkbox" class="rounded border-gray-300 text-green-600">
              Ingat Saya
            </label>

            <!-- Button Link ke dashboard-->
            <a
              href="dashboard"
              class="block w-full text-center bg-green-600 hover:bg-green-700 text-white py-2 rounded-md font-medium"
            >
              Masuk
            </a>
          </div>
        </div>
      </div>

      <!-- Illustration Slider -->
<div class="hidden md:flex justify-center">
  <div class="relative w-full max-w-md overflow-hidden">

    <!-- Slides -->
    <div id="slider" class="flex transition-transform duration-700 ease-in-out">

      <img
        src="https://illustrations.popsy.co/green/work-from-home.svg"
        class="w-full flex-shrink-0"
        alt="Slide 1"
      />

      <img
        src="https://illustrations.popsy.co/green/remote-work.svg"
        class="w-full flex-shrink-0"
        alt="Slide 2"
      />

      <img
        src="https://illustrations.popsy.co/green/work-from-home.svg"
        class="w-full flex-shrink-0"
        alt="Slide 3"
      />

    </div>

  </div>
</div>

    </div>
  </main>

  <script>
  const slider = document.getElementById("slider");
  const slides = slider.children;
  let index = 0;

  function autoSlide() {
    index++;
    if (index >= slides.length) {
      index = 0;
    }
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(autoSlide, 3000); // ganti slide 
</script>

<script>
  function togglePassword() {
    const password = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    if (password.type === "password") {
      password.type = "text";
    } else {
      password.type = "password";
    }
  }
</script>

</body>
</html>