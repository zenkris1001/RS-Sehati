<section id="home" class="pt-13 min-h-screen flex items-center bg-gradient-to-r from-blue-600 to-blue-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center text-white"
         x-data="{
            slide: 0,
            images: [
                'https://dummyimage.com/640x360/cccccc/333333.png&text=Foto+Dummy+1',
                'https://dummyimage.com/640x360/cccccc/333333.png&text=Foto+Dummy+2'
            ]
         }">

        <!-- Title & Subtitle -->
        <h1 class="text-4xl md:text-6xl font-bold mb-6 opacity-0 animate-fadeIn">
            {{ $title }}
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            {{ $subtitle }}
        </p>

        <!-- Buttons -->
        <div class="space-x-4">
            <a href="{{ route($serviceRoute) }}"
               class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold
                      hover:bg-gray-100 transition transform hover:scale-105 duration-150">
                Layanan Kami
            </a>
            <a href="{{ route($contactRoute) }}"
               class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold
                      hover:bg-white hover:text-blue-600 transition transform hover:scale-105 duration-150">
                Hubungi Kami
            </a>
        </div>

        <!-- Slideshow -->
        <div class="mb-6 mt-8">
            <div class="relative w-full h-56 flex justify-center items-center">

                <!-- Images -->
                <template x-for="(img, idx) in images" :key="idx">
                    <img x-show="slide === idx"
                         :src="img"
                         class="rounded-lg shadow-lg object-cover w-full h-56 transition-all duration-700" />
                </template>

                <!-- Prev Button -->
                <button @click="slide = (slide === 0 ? images.length - 1 : slide - 1)"
                        class="absolute left-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-70
                               rounded-full p-2 text-blue-600 hover:bg-blue-100 transition">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Next Button -->
                <button @click="slide = (slide === images.length - 1 ? 0 : slide + 1)"
                        class="absolute right-2 top-1/2 -translate-y-1/2 bg-white bg-opacity-70
                               rounded-full p-2 text-blue-600 hover:bg-blue-100 transition">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Indicators -->
            <div class="flex justify-center mt-2 gap-2">
                <template x-for="(img, idx) in images" :key="idx">
                    <button @click="slide = idx"
                            :class="{
                                'bg-blue-600': slide === idx,
                                'bg-gray-300': slide !== idx
                            }"
                            class="w-3 h-3 rounded-full transition"></button>
                </template>
            </div>
        </div>
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
