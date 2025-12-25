<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Berlian Tunas Sejahtera — Jasa Transportasi Angkutan Darat</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-bts.png') }}">
    
    <style>
        /* Hero Overlay Fix */
        .hero {
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0; 
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Overlay hitam transparan */
            z-index: 1;
        }
        .hero-content, .hero-contact {
            position: relative;
            z-index: 2; /* Ensure text is above overlay */
        }
        
        /* Grid Improvements for Clients */
        .clients {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            align-items: center;
            justify-items: center;
            text-align: center;
        }
        .client-logo-placeholder {
            width: 100%;
            height: 100px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-weight: bold;
            color: #555;
            border: 2px dashed #ddd;
        }
    </style>
</head>
<body>
    <!-- Top Bar - Contact Info -->
    <div class="top-bar">
        <div class="container">
            <div class="left-info">
                <i class="fas fa-phone"></i> 085100227961 / 087884170411
            </div>
            <div class="right-info">
                <i class="fas fa-envelope"></i> info@berliantunas.co.id
            </div>
        </div>
    </div>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <!-- WhatsApp Float -->
    <div class="footer-contact">
        <a href="https://wa.me/6285100227961?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20CV%20Berlian%20Tunas%20Sejahtera" class="contact-btn whatsapp-float" target="_blank">
            <i class="fab fa-whatsapp"></i> Hubungi WhatsApp
        </a>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
