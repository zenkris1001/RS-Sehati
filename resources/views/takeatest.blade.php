<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title>Take a Tes | RS Sehati</x-title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <x-navbar></x-navbar>
    <x-hero-section 
        title="Coba Tes Singkat!" 
        subtitle="Informasi Lebih Lanjut:" 
        serviceRoute="layanan" 
        contactRoute="kontak" 
    />

    <div class="container mx-auto max-w-6xl mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 p-6">

        <!-- KOTAK RISIKO JANTUNG -->
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
            <h2 class="text-2xl font-bold text-center text-blue-600 mb-4">Cek Risiko Jantung</h2>

            <form id="heartForm" class="space-y-4">
                <div>
                    <label class="block mb-1 font-semibold">Apakah Anda merokok?</label>
                    <select name="smoke" class="w-full border rounded px-3 py-2">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Seberapa sering Anda berolahraga?</label>
                    <select name="exercise" class="w-full border rounded px-3 py-2">
                        <option value="jarang">Jarang</option>
                        <option value="kadang">Kadang-kadang</option>
                        <option value="rutin">Rutin</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Berat Badan (kg)</label>
                    <input type="number" name="bb" class="w-full border rounded px-3 py-2" min="30" max="200" required>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Tinggi Badan (cm)</label>
                    <input type="number" name="tb" class="w-full border rounded px-3 py-2" min="100" max="250" required>
                </div>

                <button type="button" onclick="cekJantung()" class="w-full bg-blue-600 text-white py-2 rounded font-semibold hover:bg-blue-700 transition">
                    Cek Risiko Jantung
                </button>
            </form>

            <div id="hasilJantung" class="mt-4 text-center font-semibold"></div>
        </div>

        <!-- KOTAK RISIKO DIABETES -->
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
            <h2 class="text-2xl font-bold text-center text-green-600 mb-4">Cek Risiko Diabetes</h2>

            <form id="diabetesForm" class="space-y-4">
                <div>
                    <label class="block mb-1 font-semibold">Umur Anda</label>
                    <input type="number" name="umur" class="w-full border rounded px-3 py-2" min="10" max="100" required>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Konsumsi makanan/minuman manis</label>
                    <select name="gula" class="w-full border rounded px-3 py-2">
                        <option value="jarang">Jarang</option>
                        <option value="sering">Sering</option>
                        <option value="setiap_hari">Hampir setiap hari</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Riwayat keluarga diabetes?</label>
                    <select name="riwayat" class="w-full border rounded px-3 py-2">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Sering merasa haus / mudah lelah?</label>
                    <select name="gejala" class="w-full border rounded px-3 py-2">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Berat Badan (kg)</label>
                    <input type="number" name="bb" class="w-full border rounded px-3 py-2" min="30" max="200" required>
                </div>

                <div>
                    <label class="block mb-1 font-semibold">Tinggi Badan (cm)</label>
                    <input type="number" name="tb" class="w-full border rounded px-3 py-2" min="100" max="250" required>
                </div>

                <button type="button" onclick="cekDiabetes()" class="w-full bg-green-600 text-white py-2 rounded font-semibold hover:bg-green-700 transition">
                    Cek Risiko Diabetes
                </button>
            </form>

            <div id="hasilDiabetes" class="mt-4 text-center font-semibold"></div>
        </div>
    </div>

    <script>
    function cekJantung() {
        const form = document.getElementById('heartForm');
        const smoke = form.smoke.value;
        const exercise = form.exercise.value;
        const bb = parseFloat(form.bb.value);
        const tb = parseFloat(form.tb.value);

        let resiko = 0;
        const bmi = bb / Math.pow(tb / 100, 2);

        if (smoke === 'ya') resiko += 2;
        if (exercise === 'jarang') resiko += 2;
        if (exercise === 'kadang') resiko += 1;
        if (bmi > 30) resiko += 2;
        else if (bmi > 25) resiko += 1;

        let hasil = '';
        if (resiko >= 4) hasil = 'Resiko jantung Anda <span class="text-red-600">TINGGI</span>. Segera konsultasi ke dokter.';
        else if (resiko >= 2) hasil = 'Resiko jantung Anda <span class="text-yellow-500">SEDANG</span>. Jaga pola hidup sehat.';
        else hasil = 'Resiko jantung Anda <span class="text-green-600">RENDAH</span>. Pertahankan gaya hidup sehat!';

        document.getElementById('hasilJantung').innerHTML = hasil;
    }

    function cekDiabetes() {
        const form = document.getElementById('diabetesForm');
        const umur = parseInt(form.umur.value);
        const gula = form.gula.value;
        const riwayat = form.riwayat.value;
        const gejala = form.gejala.value;
        const bb = parseFloat(form.bb.value);
        const tb = parseFloat(form.tb.value);

        let resiko = 0;
        const bmi = bb / Math.pow(tb / 100, 2);

        if (umur > 45) resiko += 1;
        if (umur > 55) resiko += 2;
        if (gula === 'sering') resiko += 1;
        if (gula === 'setiap_hari') resiko += 2;
        if (riwayat === 'ya') resiko += 2;
        if (gejala === 'ya') resiko += 2;
        if (bmi > 30) resiko += 1;

        let hasil = '';
        if (resiko >= 5) hasil = 'Resiko diabetes Anda <span class="text-red-600">TINGGI</span>. Disarankan periksa gula darah.';
        else if (resiko >= 3) hasil = 'Resiko diabetes Anda <span class="text-yellow-500">SEDANG</span>. Kurangi konsumsi gula.';
        else hasil = 'Resiko diabetes Anda <span class="text-green-600">RENDAH</span>. Pertahankan gaya hidup sehat!';

        document.getElementById('hasilDiabetes').innerHTML = hasil;
    }
    </script>

    <x-copyright />
</body>
</html>
