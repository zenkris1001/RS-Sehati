<!-- resources/views/components/navbartop.blade.php -->
<nav class="bg-blue-600 text-white shadow px-6 py-4 flex justify-between items-center sticky top-0 z-50 w-full">
    <!-- Logo / Judul -->
    <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-6 8h6m-6 4h6m-6 4h6M4 21h16" />
        </svg>
        <h1 class="text-xl font-bold">RS App Backend</h1>
    </div>

    <!-- Menu / Logout -->
    <div class="flex items-center space-x-4">
        <!-- Greeting dinamis dari session -->
        @if(session()->has('username'))
            <span class="hidden md:inline">Hai, {{ session('username') }}!</span>
        @else
            <span class="hidden md:inline">Hai, Admin!</span>
        @endif
        
        <!-- Logout Button -->
        <a href="{{ route('logout') }}" 
           class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded transition duration-200">
           Logout
        </a>
    </div>
</nav>
