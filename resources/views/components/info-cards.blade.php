<div id="infoCards" class="flex flex-col md:flex-row justify-center items-center gap-8 my-20">
    <!-- Card 1: Coba Tes -->
    <div class="info-card bg-white rounded-2xl shadow-xl p-10 w-80 flex flex-col items-center justify-center text-center opacity-0 translate-y-10">
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
    <div class="info-card bg-white rounded-2xl shadow-xl p-10 w-80 flex flex-col justify-between items-center opacity-0 translate-y-10">
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
    <div class="info-card bg-white rounded-2xl shadow-xl p-10 w-80 flex flex-col justify-between items-center opacity-0 translate-y-10">
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

<style>
.info-card {
    transition: all 0.8s ease;
}
.translate-y-10 { transform: translateY(40px); }
.translate-y-0 { transform: translateY(0); }
.opacity-0 { opacity: 0; }
.opacity-100 { opacity: 1; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.info-card');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.classList.add('opacity-100', 'translate-y-0');
                        card.classList.remove('opacity-0', 'translate-y-10');
                    }, index * 300); // delay 300ms per card
                });
                observer.unobserve(entry.target); // animasi hanya sekali
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
});
</script>
