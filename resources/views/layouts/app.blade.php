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

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
