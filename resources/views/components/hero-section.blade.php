<section id="home" class="pt-24 min-h-screen flex flex-col justify-center items-center bg-gradient-to-b from-white to-gray-200 text-center text-gray-800">
    <!-- Ikon medis -->
    <div class="text-blue-600 mb-4">
        <i class="fas fa-heartbeat text-5xl animate-pulse"></i>
    </div>

    <!-- Judul -->
    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-gray-900 animate-fadeIn">
        {{ $title }}
    </h1>

    <!-- Subjudul -->
    <p class="text-lg md:text-2xl mb-10 max-w-2xl mx-auto text-gray-600">
        {{ $subtitle }}
    </p>

    <!-- Deskripsi singkat -->
    <p class="text-base md:text-lg text-gray-700 mb-10 max-w-3xl leading-relaxed">
        Selamat datang di <span class="text-blue-600 font-semibold">RS Sehat Sentosa</span> —
        kami berkomitmen memberikan pelayanan medis terbaik, dengan teknologi modern dan tenaga profesional
        yang siap membantu Anda setiap saat.
    </p>

    <!-- Tombol -->
    <div class="space-x-4">
        <a href="{{ route($serviceRoute) }}"
           class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold
                  hover:bg-blue-700 transition transform hover:scale-105 duration-200 shadow-md">
            <i class="fas fa-stethoscope mr-2"></i> Layanan Kami
        </a>
        <a href="{{ route($contactRoute) }}"
           class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold
                  hover:bg-blue-600 hover:text-white transition transform hover:scale-105 duration-200">
            <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami
        </a>
    </div>
</section>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fadeIn {
    animation: fadeIn 1s ease forwards;
}
</style>
