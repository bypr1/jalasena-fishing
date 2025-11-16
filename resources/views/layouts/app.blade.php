<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jalasena Fishing Tournament 2025 - Turnamen Memancing Terbesar di Bali</title>
    <meta name="description" content="Bergabunglah dengan Turnamen Memancing Jalasena 2025 di Benoa, Bali. Hadiah total 93++ juta rupiah! Kategori Jukung & Perahu. 14 Desember 2025.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Build Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional SEO meta tags -->
    <meta property="og:title" content="Jalasena Fishing Tournament 2025">
    <meta property="og:description" content="Turnamen Memancing Terbesar di Bali dengan Total Hadiah 93++ Juta Rupiah">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="https://jalasenafishingtournament.my.id">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body class="font-sans antialiased bg-white">
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-ocean-blue bg-opacity-90 backdrop-blur-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#hero" class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Jalasena Fishing Tournament" class="h-10 w-auto">
                        <span class="text-white font-bold text-lg hidden md:block">Jalasena Fishing Tournament 2025</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#hero" class="nav-link text-white hover:text-ocean-light px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            Beranda
                        </a>
                        <a href="#about" class="nav-link text-white hover:text-ocean-light px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            Tentang
                        </a>
                        <a href="#prizes" class="nav-link text-white hover:text-ocean-light px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            Hadiah
                        </a>
                        <a href="#register" class="nav-link text-white hover:text-ocean-light px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            Pendaftaran
                        </a>
                        <!-- <a href="#gallery" class="nav-link text-white hover:text-ocean-light px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            Galeri
                        </a> -->
                        <a href="#contact" class="nav-link text-white hover:text-ocean-light px-3 py-2 rounded-md text-sm font-medium transition-colors">
                            Kontak
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-toggle" class="text-white hover:text-ocean-light focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-ocean-blue bg-opacity-95">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#hero" class="nav-link block text-white hover:text-ocean-light px-3 py-2 rounded-md text-base font-medium">
                    Beranda
                </a>
                <a href="#about" class="nav-link block text-white hover:text-ocean-light px-3 py-2 rounded-md text-base font-medium">
                    Tentang
                </a>
                <a href="#prizes" class="nav-link block text-white hover:text-ocean-light px-3 py-2 rounded-md text-base font-medium">
                    Hadiah
                </a>
                <a href="#register" class="nav-link block text-white hover:text-ocean-light px-3 py-2 rounded-md text-base font-medium">
                    Pendaftaran
                </a>
                <!-- <a href="#gallery" class="nav-link block text-white hover:text-ocean-light px-3 py-2 rounded-md text-base font-medium">
                    Galeri
                </a> -->
                <a href="#contact" class="nav-link block text-white hover:text-ocean-light px-3 py-2 rounded-md text-base font-medium">
                    Kontak
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Logo and Description -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Jalasena" class="h-10 w-auto">
                        <span class="font-bold text-lg">Jalasena Fishing Tournament</span>
                    </div>
                    <p class="text-gray-400">
                        Turnamen memancing terbesar di Bali dengan tradisi persaudaraan dan sportivitas yang tinggi.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">Tentang Tournament</a></li>
                        <li><a href="#prizes" class="text-gray-400 hover:text-white transition-colors">Hadiah</a></li>
                        <li><a href="#register" class="text-gray-400 hover:text-white transition-colors">Pendaftaran</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Kontak Panitia</h3>
                    <div class="space-y-2 text-gray-400">
                        <div class="flex items-center space-x-2">
                            <i class="fab fa-whatsapp"></i>
                            <span>Deck Sotto: 087721333344</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fab fa-whatsapp"></i>
                            <span>Komang Trigunadi: 081239392399</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Benoa, Bali, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Jalasena Fishing Tournament. Semua Hak Dilindungi.</p>
                <p class="mt-2">Dibuat dengan ❤️ untuk komunitas memancing Bali</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking nav links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-opacity-100');
                navbar.classList.remove('bg-opacity-90');
            } else {
                navbar.classList.add('bg-opacity-90');
                navbar.classList.remove('bg-opacity-100');
            }
        });
    </script>
</body>
</html>