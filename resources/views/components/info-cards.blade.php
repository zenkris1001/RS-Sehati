<div id="infoCards" class="flex flex-col md:flex-row justify-center items-center gap-8 my-20 opacity-0 transition-all duration-1000">
<script>
document.addEventListener('DOMContentLoaded', function() {
    var infoCards = document.getElementById('infoCards');
    if (infoCards) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    infoCards.classList.add('opacity-100', 'translate-y-0');
                    infoCards.classList.remove('opacity-0');
                }
            });
        }, { threshold: 0.2 });
        infoCards.classList.add('translate-y-10');
        observer.observe(infoCards);
    }
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
</style>
    <!-- Card 1: Coba Tes -->
    <div class="bg-white rounded-2xl shadow-xl p-10 w-80 flex flex-col items-center justify-center text-center">
        <div>
            <div class="flex items-center justify-center mb-4">
                <i class="fas fa-vial text-blue-600 text-3xl"></i>
            </div>
            <h3 class="text-lg font-bold mb-2">Coba Tes</h3>
            <p class="text-gray-600 mb-6">Dapatkan akses tes kesehatan secara online dan cepat. Siap mendukung kebutuhan Anda.</p>
        </div>
        <a href="{{ route('takeatest') }}" class="bg-blue-700 text-white px-6 py-2 rounded font-semibold hover:bg-blue-800 transition w-full text-center">Mulai Tes</a>
    </div>
    <!-- Card 2: Jam Kerja -->
    <div class="bg-white rounded-2xl shadow-xl p-10 w-80 flex flex-col justify-between items-center">
        <div>
            <div class="flex items-center justify-center mb-4">
                <i class="fas fa-clock text-blue-600 text-3xl"></i>
            </div>
            <h3 class="text-lg font-bold mb-2">Jam Kerja</h3>
            <ul class="text-gray-600 mb-6">
                <li>Sen - Rab : <span class="font-semibold">08:00 - 17:00</span></li>
                <li>Kam - Jum : <span class="font-semibold">09:00 - 17:00</span></li>
                <li>Sabtu : <span class="font-semibold">10:00 - 17:00</span></li>
            </ul>
        </div>
    </div>
    <!-- Card 3: Kontak Darurat -->
    <div class="bg-white rounded-2xl shadow-xl p-10 w-80 flex flex-col justify-between items-center">
        <div>
            <div class="flex items-center justify-center mb-4">
                <i class="fas fa-phone-volume text-blue-600 text-3xl"></i>
            </div>
            <h3 class="text-lg font-bold mb-2">Kontak Darurat</h3>
            <p class="text-gray-600 mb-2">Hubungi kami untuk kebutuhan darurat kapan saja.</p>
            <div class="font-bold text-blue-700 text-xl">1-800-700-6200</div>
        </div>
    </div>
</div>
