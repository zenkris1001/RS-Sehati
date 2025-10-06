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
        title="RS Sehat Sentosa" 
        subtitle="Memberikan pelayanan kesehatan terbaik dengan profesionalisme, empati, dan teknologi modern." 
        serviceRoute="layanan" 
        contactRoute="kontak" 
    />

    

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="grid md:grid-cols-4 gap-8 justify-center items-center">
                <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <span class="text-5xl font-bold text-blue-600">58k</span>
                    <span class="text-lg text-gray-700 mt-2">Happy People</span>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <span class="text-5xl font-bold text-pink-500">700+</span>
                    <span class="text-lg text-gray-700 mt-2">Surgery Completed</span>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <span class="text-5xl font-bold text-red-500">40+</span>
                    <span class="text-lg text-gray-700 mt-2">Expert Doctors</span>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col items-center">
                    <span class="text-5xl font-bold text-green-500">20</span>
                    <span class="text-lg text-gray-700 mt-2">Awards</span>
                </div>
            </div>
        </div>
    </section>
     <section id="about" class="py-20 bg-white my-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
            <p class="text-lg text-gray-600 mb-12">RS Sehat Sentosa berdiri sejak tahun 1995, berkomitmen memberikan pelayanan kesehatan yang berkualitas, aman, dan terpercaya.</p>
            <div class="grid md:grid-cols-2 gap-12 items-center text-left">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Visi</h3>
                    <p class="text-gray-600 mb-6">Menjadi rumah sakit unggulan dengan pelayanan kesehatan terbaik dan berorientasi pada keselamatan pasien.</p>
                    <h3 class="text-2xl font-bold mb-4">Misi</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Memberikan pelayanan medis berkualitas.</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Mengutamakan keselamatan dan kenyamanan pasien.</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Mengembangkan tenaga medis profesional.</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Memanfaatkan teknologi modern dalam pelayanan.</li>
                    </ul>
                </div>
                <div>
                    <img src="https://placeholder-image-service.onrender.com/image/600x400?prompt=modern+hospital+building&id=rs-profile" alt="Rumah Sakit" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>


    <x-info-cards></x-info-cards>
    </body>
</html>
    <x-copyright />