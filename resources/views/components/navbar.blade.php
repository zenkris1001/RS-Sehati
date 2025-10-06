    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-blue-600">RS Sehat Sentosa</h1>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                        <a href="/" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                        <a href="{{route("doktor")}}" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Dokter</a>
                        <a href="{{route("layanan")}}" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Layanan</a>
                        <a href="{{route("department")}}" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Departemen</a>
                        <a href="{{route(  "kontak")}}" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                        <a href="{{route("takeatest")}}" class="text-gray-900 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Take a Test</a>
                        
                        </
                    div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-blue-600">Beranda</a>
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-blue-600">Tentang Kami</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-blue-600">Layanan</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-blue-600">Kontak</a>
            </div>
        </div>
    </nav>