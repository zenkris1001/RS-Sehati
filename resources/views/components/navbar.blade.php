<!-- Navigation -->
<nav id="navbar" class="bg-gradient-to-r from-blue-500/90 via-cyan-500/90 to-blue-600/90 backdrop-blur-md shadow-lg fixed w-full top-0 z-50 transition-all duration-500 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-white drop-shadow-md">RS Sehat Sentosa</h1>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="/" class="text-white/90 hover:text-yellow-300 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1">Beranda</a>
                    <a href="{{route('doktor')}}" class="text-white/90 hover:text-yellow-300 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1">Dokter</a>
                    <a href="{{route('layanan')}}" class="text-white/90 hover:text-yellow-300 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1">Layanan</a>
                    <a href="{{route('department')}}" class="text-white/90 hover:text-yellow-300 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1">Departemen</a>
                    <a href="{{route('kontak')}}" class="text-white/90 hover:text-yellow-300 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1">Kontak</a>
                    <a href="{{route('takeatest')}}" class="text-white/90 hover:text-yellow-300 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out transform hover:-translate-y-1">Take a Test</a>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-white hover:text-yellow-300 hover:bg-white/10 transition-all duration-300">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gradient-to-b from-blue-600 to-cyan-600 border-t">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20 transition duration-300">Beranda</a>
            <a href="{{route('doktor')}}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20 transition duration-300">Dokter</a>
            <a href="{{route('layanan')}}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20 transition duration-300">Layanan</a>
            <a href="{{route('department')}}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20 transition duration-300">Departemen</a>
            <a href="{{route('kontak')}}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20 transition duration-300">Kontak</a>
            <a href="{{route('takeatest')}}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-white/20 transition duration-300">Take a Test</a>
        </div>
    </div>
</nav>

<script>
    // Efek transisi navbar saat scroll (transparan → solid)
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.remove('from-blue-500/90', 'via-cyan-500/90', 'to-blue-600/90');
            navbar.classList.add('from-blue-700', 'via-cyan-700', 'to-blue-800', 'shadow-2xl');
        } else {
            navbar.classList.add('from-blue-500/90', 'via-cyan-500/90', 'to-blue-600/90');
            navbar.classList.remove('from-blue-700', 'via-cyan-700', 'to-blue-800', 'shadow-2xl');
        }
    });

    // Toggle mobile menu
    const btn = document.querySelector('.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');
    btn.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>
