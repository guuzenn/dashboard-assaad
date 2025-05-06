<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/as-saad.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/as-saad.png') }}">

  <!-- Custom Style -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/bundle.js') }}" defer></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

  <div class="bg-white shadow-lg rounded-lg flex w-full max-w-5xl h-[600px] md:h-[650px] lg:h-[700px] overflow-hidden">
    
    <!-- Left Image Section -->
    <div class="md:w-1/2 w-full hidden md:block">
      <img 
        src="{{ asset('assets/images/cover/image_login.jpeg') }}"
        alt="Login Illustration"
        class="h-full w-full object-cover"
      />
    </div>

    <!-- Right Login Section -->
    <div class="w-full md:w-1/2 flex flex-col items-center justify-center px-6 sm:px-10 py-10 relative">
      
      <!-- Close Button -->
      <div class="absolute top-4 right-4 text-xl text-gray-700 cursor-pointer hover:text-black md:block hidden">&times;</div>

      <!-- Form -->
      <form method="POST" action="{{ route('login') }}" class="space-y-4 w-full max-w-sm">
        @csrf

        <!-- Title -->
        <h2 class="text-5xl font-bold text-gray-800 mb-6 text-left">Admin Login</h2>

        <!-- Email Input -->
        <div class="flex flex-col text-left">
          <label for="email" class="mb-2 text-gray-700">Email</label>
          <input 
            type="email" 
            id="email"
            name="email"
            placeholder="Email"
            class="w-full px-4 py-3 border rounded-xl text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#99BC85]"
            required
          />
        </div>

        <!-- Password Input -->
        <div class="relative flex flex-col text-left">
          <label for="password" class="mb-1 text-gray-700">Password</label>
          <input 
            type="password" 
            id="password"
            name="password"
            placeholder="Enter your password"
            class="w-full px-4 py-3 border rounded-xl text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#99BC85]"
            required
          />

          <!-- Eye Toggle Icon -->
          <button 
            type="button" 
            onclick="togglePassword()"
            class="absolute right-3 top-10 text-gray-500 cursor-pointer"
          >
            <!-- Eye (visible) -->
            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>

            <!-- Eye Off (hidden) -->
            <svg id="eyeOffIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.703-4.362m2.254-1.733A9.965 9.965 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.958 9.958 0 01-1.255 2.592M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />
            </svg>
          </button>
        </div>

        <!-- Login Button -->
        <div>
          <button 
            type="submit"
            class="w-full bg-[#99BC85] hover:bg-[#88AB75] text-white font-semibold py-3 rounded-xl transition"
          >
            Login
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Toggle Password Script -->
  <script>
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");
      const eyeOffIcon = document.getElementById("eyeOffIcon");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.classList.add("hidden");
        eyeOffIcon.classList.remove("hidden");
      } else {
        passwordInput.type = "password";
        eyeIcon.classList.remove("hidden");
        eyeOffIcon.classList.add("hidden");
      }
    }
  </script>

</body>
</html>