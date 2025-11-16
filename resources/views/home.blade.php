@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-ocean-blue to-ocean-light">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/332.jpg') }}')"></div>
    
    <div class="relative z-10 text-center text-white max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
            <span class="block">Jalasena Fishing</span>
            <span class="block text-ocean-light">Tournament 2025</span>
        </h1>
        
        <p class="text-xl md:text-2xl mb-8 text-gray-200">
            Minggu, 14 Desember 2025 — Benoa, Bali
        </p>
        
        <div class="mb-8">
            <p class="text-lg mb-4">Turnamen Dimulai Dalam:</p>
            <div id="countdown" class="flex justify-center space-x-4">
                <div class="countdown-item">
                    <div id="days" class="text-2xl md:text-3xl font-bold">--</div>
                    <div class="text-sm">Hari</div>
                </div>
                <div class="countdown-item">
                    <div id="hours" class="text-2xl md:text-3xl font-bold">--</div>
                    <div class="text-sm">Jam</div>
                </div>
                <div class="countdown-item">
                    <div id="minutes" class="text-2xl md:text-3xl font-bold">--</div>
                    <div class="text-sm">Menit</div>
                </div>
                <div class="countdown-item">
                    <div id="seconds" class="text-2xl md:text-3xl font-bold">--</div>
                    <div class="text-sm">Detik</div>
                </div>
            </div>
        </div>
        
        <a href="#register" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
            <i class="fas fa-fish mr-2"></i>
            Daftar Sekarang
        </a>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="animate-bounce">
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Tentang Tournament
            </h2>
            <div class="w-24 h-1 bg-ocean-blue mx-auto mb-8"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    Semangat Persaudaraan dan Sportivitas
                </h3>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Jalasena Fishing Tournament 2025 adalah ajang kompetisi memancing terbesar di Bali yang menghadirkan 
                    persatuan, persaudaraan, dan sportivitas tinggi. Tournament ini terbuka untuk kategori 
                    <strong>Jukung</strong> dan <strong>Boat</strong>.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Dengan total hadiah mencapai <strong class="text-ocean-blue">93++ juta rupiah</strong>, 
                    tournament ini bukan hanya tentang kompetisi, tetapi juga tentang membangun komunitas 
                    memancing yang solid dan saling mendukung.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-ocean-blue">
                        <i class="fas fa-calendar-alt text-ocean-blue text-2xl mb-3"></i>
                        <h4 class="font-bold text-gray-800 mb-2">Tanggal</h4>
                        <p class="text-gray-600">14 Desember 2025</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-ocean-light">
                        <i class="fas fa-map-marker-alt text-ocean-light text-2xl mb-3"></i>
                        <h4 class="font-bold text-gray-800 mb-2">Lokasi</h4>
                        <p class="text-gray-600">Benoa, Bali</p>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <img src="{{ asset('images/logo.png') }}" alt="Tournament Jalasena" 
                     class="">
            </div>
        </div>
    </div>
</section>

<!-- Prizes Section -->
<section id="prizes" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Total Hadiah 93++ Juta Rupiah!
            </h2>
            <div class="w-24 h-1 bg-ocean-blue mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">
                Hadiah menarik menanti para peserta terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Heaviest Catch Category -->
            <div class="col-span-1 md:col-span-2 lg:col-span-2">
                <div class="bg-gradient-to-br from-yellow-400 to-orange-500 p-8 rounded-xl shadow-xl text-white">
                    <div class="text-center mb-6">
                        <i class="fas fa-trophy text-4xl mb-4"></i>
                        <h3 class="text-2xl md:text-3xl font-bold">
                            Kategori Tangkapan Terberat (Per Ikan)
                        </h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold mb-2">🥇</div>
                            <div class="font-semibold">Juara 1</div>
                            <div class="text-xl font-bold">Rp 30.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold mb-2">🥈</div>
                            <div class="font-semibold">Juara 2</div>
                            <div class="text-xl font-bold">Rp 20.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                            <div class="text-3xl font-bold mb-2">🥉</div>
                            <div class="font-semibold">Juara 3</div>
                            <div class="text-xl font-bold">Rp 10.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">🏆</div>
                            <div class="font-semibold">Hiburan 1</div>
                            <div class="text-lg font-bold">Rp 3.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">🏆</div>
                            <div class="font-semibold">Hiburan 2</div>
                            <div class="text-lg font-bold">Rp 2.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                            <div class="text-2xl font-bold mb-2">🏆</div>
                            <div class="font-semibold">Hiburan 3</div>
                            <div class="text-lg font-bold">Rp 1.000.000</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Species Category -->
            <div class="space-y-8">
                <div class="bg-gradient-to-br from-green-400 to-blue-500 p-6 rounded-xl shadow-xl text-white">
                    <div class="text-center mb-4">
                        <i class="fas fa-fish text-3xl mb-3"></i>
                        <h3 class="text-xl font-bold">Kategori Spesies</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg text-center">
                            <div class="font-semibold">Catch & Release GT</div>
                            <div class="text-lg font-bold">Rp 10.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg text-center">
                            <div class="font-semibold">Catch Queen Snapper</div>
                            <div class="text-lg font-bold">Rp 10.000.000</div>
                        </div>
                    </div>
                </div>
                
                <!-- Other Awards -->
                <div class="bg-gradient-to-br from-purple-400 to-pink-500 p-6 rounded-xl shadow-xl text-white">
                    <div class="text-center mb-4">
                        <i class="fas fa-award text-3xl mb-3"></i>
                        <h3 class="text-xl font-bold">Penghargaan Lainnya</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg text-center">
                            <div class="font-semibold">Total Catch (per Jukung)</div>
                            <div class="text-lg font-bold">Rp 5.000.000</div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-3 rounded-lg text-center">
                            <div class="font-semibold">Best Captain (Jukung)</div>
                            <div class="text-lg font-bold">Rp 2.000.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Section -->
<section id="register" class="py-20 bg-gradient-to-br from-ocean-blue to-ocean-light text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Pendaftaran Tournament
            </h2>
            <div class="w-24 h-1 bg-white mx-auto mb-8"></div>
            <p class="text-xl text-blue-100">
                Segera daftarkan diri Anda dan raih kesempatan memenangkan hadiah jutaan rupiah!
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Registration Info -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-xl">
                <h3 class="text-2xl font-bold mb-6">
                    <i class="fas fa-info-circle mr-3"></i>
                    Informasi Pendaftaran
                </h3>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-orange-500 p-3 rounded-full">
                            <i class="fas fa-money-bill-wave text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">Biaya Pendaftaran</h4>
                            <p class="text-blue-100">Rp 500.000 per orang</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-500 p-3 rounded-full">
                            <i class="fas fa-calendar-check text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">Batas Pendaftaran</h4>
                            <p class="text-blue-100">13 Desember 2025</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-500 p-3 rounded-full">
                            <i class="fas fa-ship text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg">Kategori</h4>
                            <p class="text-blue-100">Jukung & Boat</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Payment Info -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm p-8 rounded-xl">
                <h3 class="text-2xl font-bold mb-6">
                    <i class="fas fa-credit-card mr-3"></i>
                    Informasi Pembayaran
                </h3>
                
                <div class="space-y-6">
                    <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                        <h4 class="font-semibold text-lg mb-2">
                            <i class="fas fa-university mr-2"></i>
                            Bank Mandiri
                        </h4>
                        <p class="text-blue-100 mb-1">Nama: Riko Soetardi</p>
                        <p class="font-mono text-lg font-semibold">1450017270063</p>
                    </div>
                    
                    <div class="bg-white bg-opacity-10 p-4 rounded-lg">
                        <h4 class="font-semibold text-lg mb-2">
                            <i class="fas fa-university mr-2"></i>
                            Bank BRI
                        </h4>
                        <p class="text-blue-100 mb-1">Nama: Riko Soetardi</p>
                        <p class="font-mono text-lg font-semibold">017401100363503</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Buttons -->
        <div class="text-center mt-12">
            <h3 class="text-2xl font-bold mb-8">Hubungi Panitia</h3>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="https://wa.me/62087721333344" target="_blank" 
                   class="whatsapp-btn inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg">
                    <i class="fab fa-whatsapp text-2xl mr-3"></i>
                    Deck Sotto - 087721333344
                </a>
                <a href="https://wa.me/6281239392399" target="_blank" 
                   class="whatsapp-btn inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full text-lg">
                    <i class="fab fa-whatsapp text-2xl mr-3"></i>
                    Komang Trigunadi - 081239392399
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<!-- <section id="gallery" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Galeri Tournament
            </h2>
            <div class="w-24 h-1 bg-ocean-blue mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">
                Dokumentasi tournament-tournament sebelumnya
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery 1" 
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-expand-alt text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
            </div>
            
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1558618047-3c8c76ca7c73?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery 2" 
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-expand-alt text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
            </div>
            
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1583212292454-1fe6229603b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery 3" 
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-expand-alt text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
            </div>
            
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1602434228300-a645bce6891b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery 4" 
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-expand-alt text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
            </div>
            
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1485962398705-ef6a13c41e8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery 5" 
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-expand-alt text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
            </div>
            
            <div class="relative group overflow-hidden rounded-xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1549598147-75a4db76b08e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Gallery 6" 
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                    <i class="fas fa-expand-alt text-white text-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></i>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Location & Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Lokasi & Kontak
            </h2>
            <div class="w-24 h-1 bg-ocean-blue mx-auto mb-8"></div>
            <p class="text-xl text-gray-600">
                Informasi lokasi tournament dan kontak panitia
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Google Maps -->
            <div class="bg-gray-100 rounded-xl overflow-hidden shadow-lg">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8102.556666768437!2d115.21097202632924!3d-8.74171981760744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd243dcb99e9a15%3A0x1ddefc07969b364a!2sPelabuhan%20Benoa%20Denpasar%20Selatan!5e0!3m2!1sen!2sid!4v1763309050634!5m2!1sen!2sid" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <!-- Contact Information -->
            <div class="space-y-8">
                <div class="bg-gradient-to-br from-ocean-blue to-ocean-light p-8 rounded-xl text-white">
                    <h3 class="text-2xl font-bold mb-6">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        Lokasi Tournament
                    </h3>
                    <div class="space-y-4">
                        <p class="text-lg">
                            <strong>Benoa, Bali, Indonesia</strong>
                        </p>
                        <p class="text-blue-100">
                            Pelabuhan Benoa merupakan lokasi strategis untuk tournament memancing 
                            dengan akses ke perairan dalam yang kaya akan berbagai jenis ikan.
                        </p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-green-50 border border-green-200 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 p-3 rounded-full mr-4">
                                <i class="fab fa-whatsapp text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Deck Sotto</h4>
                                <p class="text-gray-600">Koordinator Tournament</p>
                            </div>
                        </div>
                        <p class="text-lg font-semibold text-gray-800">087721333344</p>
                        <a href="https://wa.me/62087721333344" target="_blank" 
                           class="inline-block mt-3 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Chat WhatsApp
                        </a>
                    </div>
                    
                    <div class="bg-green-50 border border-green-200 p-6 rounded-xl">
                        <div class="flex items-center mb-4">
                            <div class="bg-green-500 p-3 rounded-full mr-4">
                                <i class="fab fa-whatsapp text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Komang Trigunadi</h4>
                                <p class="text-gray-600">Sekretaris Tournament</p>
                            </div>
                        </div>
                        <p class="text-lg font-semibold text-gray-800">081239392399</p>
                        <a href="https://wa.me/6281239392399" target="_blank" 
                           class="inline-block mt-3 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Chat WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection