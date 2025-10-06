<!-- Partners Section -->
<section id="copyrightPartners" class="py-16 bg-white opacity-0 transition-all duration-1000">
    <div class="max-w-5xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mb-4 transition-all duration-700 ease-in-out hover:text-pink-600 hover:scale-105">Partners who support us</h2>
        <div class="w-16 h-1 bg-pink-500 mx-auto mb-6 rounded"></div>
    <p class="text-lg text-gray-600 mb-10 transition-all duration-700 ease-in-out hover:text-blue-600">Lets know more! necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
        <div class="flex flex-wrap justify-center items-center gap-8 mb-8">
            <img src="https://dummyimage.com/120x40/eee/aaa.png&text=AAMC" alt="AAMC" class="h-10 transition-transform duration-500 hover:scale-110">
            <img src="https://dummyimage.com/120x40/eee/aaa.png&text=AWARDS" alt="Awards" class="h-10 transition-transform duration-500 hover:scale-110">
            <img src="https://dummyimage.com/120x40/eee/aaa.png&text=AUTHENTIC" alt="Authentic" class="h-10 transition-transform duration-500 hover:scale-110">
            <img src="https://dummyimage.com/120x40/eee/aaa.png&text=RETRODESIGN" alt="Retrodesign" class="h-10 transition-transform duration-500 hover:scale-110">
            <img src="https://dummyimage.com/120x40/eee/aaa.png&text=GERMAN+MEDICAL" alt="German Medical" class="h-10 transition-transform duration-500 hover:scale-110">
            <img src="https://dummyimage.com/120x40/eee/aaa.png&text=MOCHACCINO" alt="Mochaccino" class="h-10 transition-transform duration-500 hover:scale-110">
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer id="copyrightFooter" class="bg-gray-100 py-12 mt-10 opacity-0 transition-all duration-1000">
<script>
document.addEventListener('DOMContentLoaded', function() {
    var partners = document.getElementById('copyrightPartners');
    var footer = document.getElementById('copyrightFooter');
    function observeFadeIn(element) {
        if (element) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        element.classList.add('opacity-100', 'translate-y-0');
                        element.classList.remove('opacity-0');
                    }
                });
            }, { threshold: 0.2 });
            element.classList.add('translate-y-10');
            observer.observe(element);
        }
    }
    observeFadeIn(partners);
    observeFadeIn(footer);
});
</script>
<style>
.translate-y-10 { transform: translateY(40px); }
.translate-y-0 { transform: translateY(0); }
</style>
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
    animation: fadeIn 1s ease forwards;
}
.delay-300 {
    animation-delay: 0.3s;
}
</style>
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8 items-start">
        <div>
            <div class="flex items-center mb-4">
                <span class="text-pink-600 text-3xl mr-2"><i class="fas fa-notes-medical"></i></span>
                <span class="text-2xl font-bold text-gray-800 transition-all duration-700 hover:text-pink-600 hover:scale-105">RS Sehat Sentosa</span>
            </div>
            <p class="text-gray-600 mb-4">Tempat pelayanan kesehatan terpercaya untuk Anda dan keluarga.</p>
            <div class="flex gap-3 mb-4">
                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 mb-3 border-b-2 border-pink-500 inline-block transition-all duration-700 hover:text-blue-600">Department</h4>
            <ul class="text-gray-600 space-y-2 mt-2">
                <li>Surgery</li>
                <li>Women's Health</li>
                <li>Radiology</li>
                <li>Cardioc</li>
                <li>Medicine</li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 mb-3 border-b-2 border-pink-500 inline-block transition-all duration-700 hover:text-blue-600">Support</h4>
            <ul class="text-gray-600 space-y-2 mt-2">
                <li>Terms & Conditions</li>
                <li>Privacy Policy</li>
                <li>Company Support</li>
                <li>FAQ Questions</li>
                <li>Company Licence</li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold text-gray-800 mb-3 border-b-2 border-pink-500 inline-block transition-all duration-700 hover:text-blue-600">Get In Touch</h4>
            <ul class="text-gray-600 space-y-2 mt-2">
                <li><i class="fas fa-envelope mr-2"></i> Support@email.com</li>
                <li><i class="fas fa-clock mr-2"></i> Mon to Fri : 08:30 - 18:00</li>
                <li class="font-bold text-blue-700 text-lg"><i class="fas fa-phone mr-2"></i> +23-456-6588</li>
            </ul>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-4 mt-8 flex flex-col md:flex-row justify-between items-center border-t pt-6">
        <span class="text-gray-500 text-sm">© Copyright Reserved to RS Sehat Sentosa</span>
        <form class="flex items-center mt-4 md:mt-0">
            <input type="email" placeholder="Your Email address" class="px-4 py-2 rounded-l bg-white border border-gray-300 focus:outline-none">
            <button type="submit" class="px-4 py-2 bg-pink-500 text-white rounded-r font-semibold hover:bg-pink-600 transition">SUBSCRIBE</button>
        </form>
    </div>
</footer>
