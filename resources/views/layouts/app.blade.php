<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Elite Suits — Bespoke tailoring crafted for the modern gentleman. Wedding, Business & Casual suits made to measure.')">
    <title>@yield('title', 'Elite Suits') — Bespoke Tailoring</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])

    <!-- Schema.org LocalBusiness Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ClothingStore",
          "@id": "https://www.menssuitskingfashion.com/#ontario",
          "name": "Men's Suits King Fashion - Ontario Showroom",
          "url": "{{ url('/') }}",
          "telephone": "(323) 747-4157",
          "priceRange": "$$",
          "image": "{{ asset('images/ontario-showroom.jpg') }}",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "4323 Mills Cir, #103",
            "addressLocality": "Ontario",
            "addressRegion": "CA",
            "postalCode": "91764",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 34.0732, 
            "longitude": -117.5539
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
              "opens": "10:00",
              "closes": "20:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Saturday", "Sunday"],
              "opens": "11:00",
              "closes": "19:00"
            }
          ]
        },
        {
          "@type": "ClothingStore",
          "@id": "https://www.menssuitskingfashion.com/#montclair",
          "name": "Men's Suits King Fashion - Montclair Showroom",
          "url": "{{ url('/') }}",
          "telephone": "(323) 747-4157",
          "priceRange": "$$",
          "image": "{{ asset('images/montclair-showroom.jpg') }}",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "5505 Moreno St, 102 & 103",
            "addressLocality": "Montclair",
            "addressRegion": "CA",
            "postalCode": "91763",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 34.0883,
            "longitude": -117.6908
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
              "opens": "10:00",
              "closes": "20:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Saturday", "Sunday"],
              "opens": "11:00",
              "closes": "19:00"
            }
          ]
        }
      ]
    }
    </script>

    @stack('head')
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
    // ── Theme Toggle ──
    (function () {
        const body = document.body;
        const STORAGE_KEY = 'elite-suits-theme';

        // Apply saved preference immediately (no flash)
        if (localStorage.getItem(STORAGE_KEY) === 'light') {
            body.classList.add('light-mode');
        }

        function updateLabel(isLight) {
            // Mobile: full sentence label
            document.querySelectorAll('.theme-toggle__label').forEach(el => {
                el.textContent = isLight ? 'Switch to Dark Mode' : 'Switch to Light Mode';
            });
            // Desktop pill: short label
            document.querySelectorAll('.theme-toggle__track-label').forEach(el => {
                el.textContent = isLight ? 'Dark' : 'Light';
            });
        }

        // Set initial label
        updateLabel(body.classList.contains('light-mode'));

        document.querySelectorAll('#themeToggle, #themeToggleMobile').forEach(btn => {
            btn.addEventListener('click', () => {
                const isLight = body.classList.toggle('light-mode');
                localStorage.setItem(STORAGE_KEY, isLight ? 'light' : 'dark');
                updateLabel(isLight);
            });
        });
    })();

    // ── Mobile menu toggle ──
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });
    }

    // ── FAQ Accordion ──
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.faq-item');
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });

    // ── Active nav link ──
    const links = document.querySelectorAll('.navbar__link');
    links.forEach(link => {
        if (link.href && window.location.pathname === new URL(link.href).pathname) {
            link.classList.add('active');
        }
    });
    </script>
    @stack('scripts')
</body>
</html>
