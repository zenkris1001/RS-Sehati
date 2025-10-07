<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title>RS Sehati</x-title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Award Winning Patient Care Section -->
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <x-navbar></x-navbar>

    <x-hero-section 
        title="RS Sehati" 
        subtitle="Memberikan pelayanan kesehatan terbaik dengan profesionalisme, empati, dan teknologi modern." 
        serviceRoute="layanan" 
        contactRoute="kontak" 
    />

    

    <!-- Services Section -->
   <section id="services" class="py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="grid md:grid-cols-4 gap-8 justify-center items-center">

            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center transform transition duration-700 hover:scale-105">
                <span class="text-5xl font-bold text-blue-600 counter opacity-0 transition-all duration-700" data-target="58000">0</span>
                <span class="text-lg text-gray-700 mt-2 opacity-0 transition-all duration-700 delay-100">Happy People</span>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center transform transition duration-700 hover:scale-105">
                <span class="text-5xl font-bold text-pink-500 counter opacity-0 transition-all duration-700" data-target="700">0</span>
                <span class="text-lg text-gray-700 mt-2 opacity-0 transition-all duration-700 delay-100">Surgery Completed</span>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center transform transition duration-700 hover:scale-105">
                <span class="text-5xl font-bold text-red-500 counter opacity-0 transition-all duration-700" data-target="40">0</span>
                <span class="text-lg text-gray-700 mt-2 opacity-0 transition-all duration-700 delay-100">Expert Doctors</span>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center transform transition duration-700 hover:scale-105">
                <span class="text-5xl font-bold text-green-500 counter opacity-0 transition-all duration-700" data-target="20">0</span>
                <span class="text-lg text-gray-700 mt-2 opacity-0 transition-all duration-700 delay-100">Awards</span>
            </div>

        </div>
    </div>
</section>

<!-- Script count-up saat discroll -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    let animated = false; // agar hanya jalan sekali

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animated = true;

                counters.forEach(counter => {
                    counter.style.opacity = '1';
                    const label = counter.nextElementSibling;
                    if (label) label.style.opacity = '1';

                    const target = +counter.getAttribute('data-target');
                    let count = 0;
                    const duration = 3000; // 3 detik total
                    const stepTime = 30; // setiap 30ms
                    const increment = target / (duration / stepTime);

                    const update = () => {
                        count += increment;
                        if (count < target) {
                            counter.textContent = Math.floor(count).toLocaleString();
                            setTimeout(update, stepTime);
                        } else {
                            counter.textContent = target.toLocaleString();
                        }
                    };
                    update();
                });
            }
        });
    }, { threshold: 0.3 }); // mulai animasi jika 30% bagian terlihat

    observer.observe(document.querySelector('#services'));
});
</script>

     <section id="about" class="py-20 bg-gradient-to-b from-gray-100 to-white my-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Judul -->
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 opacity-0 animate-fadeIn">Tentang Kami</h2>
        <p class="text-lg text-gray-600 mb-12 opacity-0 animate-fadeIn delay-200">
            RS Sehat Sentosa berdiri sejak tahun 1995, berkomitmen memberikan pelayanan kesehatan yang berkualitas, aman, dan terpercaya.
        </p>

        <div class="grid md:grid-cols-2 gap-12 items-center text-left">
            <!-- Konten Teks -->
            <div class="space-y-6 opacity-0 animate-fadeIn delay-400">
                <h3 class="text-2xl font-bold mb-4 text-blue-600">Visi</h3>
                <p class="text-gray-700">Menjadi rumah sakit unggulan dengan pelayanan kesehatan terbaik dan berorientasi pada keselamatan pasien.</p>

                <h3 class="text-2xl font-bold mb-4 text-blue-600">Misi</h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i> Memberikan pelayanan medis berkualitas.</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i> Mengutamakan keselamatan dan kenyamanan pasien.</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i> Mengembangkan tenaga medis profesional.</li>
                    <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-3"></i> Memanfaatkan teknologi modern dalam pelayanan.</li>
                </ul>
            </div>

            <!-- Gambar -->
            <div class="opacity-0 animate-fadeIn delay-600">
                <img src="https://placeholder-image-service.onrender.com/image/600x400?prompt=modern+hospital+building&id=rs-profile" 
                     alt="Rumah Sakit" 
                     class="rounded-xl shadow-xl hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>
</section>

<!-- Animasi CSS -->
<style>
@keyframes fadeIn {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 1s forwards;
}
.delay-200 { animation-delay: 0.2s; }
.delay-400 { animation-delay: 0.4s; }
.delay-600 { animation-delay: 0.6s; }

/* Scroll trigger (opsional, untuk animasi saat muncul di viewport) */
</style>

<!-- Scroll-trigger JS (Opsional, supaya animasi muncul saat scroll) -->
<script>
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('animate-fadeIn');
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('#about .opacity-0').forEach(el => {
    observer.observe(el);
});
</script>



    <x-info-cards></x-info-cards>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>    
</body>
</html>
    <x-copyright />