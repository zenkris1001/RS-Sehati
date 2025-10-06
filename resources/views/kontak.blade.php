<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title>Kontak | RS Sehati</x-title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <x-navbar></x-navbar>
    <x-hero-section 
        title="Kabarmu Kami Dengar!" 
        subtitle="Informasi Lebih Lanjut :" 
        serviceRoute="layanan" 
        contactRoute="kontak" 
    />

    <div class="container mx-auto max-w-lg mt-10 p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4 text-center">Kontak Kami</h2>
        <ul class="space-y-3">
            <li><i class="fab fa-instagram text-pink-500 mr-2"></i> Instagram: <a href="#" class="text-blue-600">@dummy_ig</a></li>
            <li><i class="fab fa-whatsapp text-green-500 mr-2"></i> WhatsApp: <a href="#" class="text-blue-600">0812-3456-7890</a></li>
            <li><i class="fab fa-facebook text-blue-700 mr-2"></i> Facebook: <a href="#" class="text-blue-600">facebook.com/dummyfb</a></li>
            <li><i class="fas fa-envelope text-gray-500 mr-2"></i> Email: <a href="#" class="text-blue-600">dummy@email.com</a></li>
        </ul>
    </div>


</body>
</html>
<x-copyright />