<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') — Men's Suits King Fashion</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        /* Admin-specific layout enhancements */
        .admin-nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 1000;
            height: var(--nav-h);
            display: flex;
            align-items: center;
            background: rgba(17,17,17,0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(201,168,76,0.15);
            transition: var(--transition);
        }
        body.light-mode .admin-nav {
            background: rgba(248,245,239,0.97);
            border-bottom-color: rgba(201,168,76,0.2);
        }
        .admin-nav__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }
        .admin-nav__links {
            display: flex;
            align-items: center;
            gap: 2rem;
        }
        .admin-nav__user {
            font-size: 0.8rem;
            color: var(--light-gray);
            margin-right: 1rem;
        }
        body.light-mode .admin-nav__user {
            color: #555;
        }
        .admin-nav__user span {
            color: var(--gold);
            font-weight: 600;
        }
        .admin-content {
            padding-top: calc(var(--nav-h) + 2.5rem);
            padding-bottom: 4rem;
            min-height: 100vh;
        }
        .admin-footer {
            background: #0a0a0a;
            border-top: 1px solid #2a2a2a;
            padding: 2rem 0;
            text-align: center;
            font-size: 0.8rem;
            color: var(--mid-gray);
        }
        body.light-mode .admin-footer {
            background: #EDE8DF;
            border-top-color: #ddd;
        }
        /* Dashboard Stats Card Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2.5rem;
        }
        .stat-card {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 4px;
            padding: 1.75rem;
            transition: var(--transition);
        }
        body.light-mode .stat-card {
            background: #FFFFFF;
            border-color: #E0DBD0;
        }
        .stat-card:hover {
            border-color: var(--gold);
            transform: translateY(-2px);
        }
        .stat-card__label {
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--light-gray);
            margin-bottom: 0.5rem;
        }
        body.light-mode .stat-card__label {
            color: #6B6B6B;
        }
        .stat-card__value {
            font-family: var(--font-head);
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--white);
            line-height: 1;
        }
        body.light-mode .stat-card__value {
            color: var(--off-black);
        }
        /* Custom Badges */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 999px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .badge-pending {
            background: rgba(201,168,76,0.15);
            color: var(--gold);
            border: 1px solid rgba(201,168,76,0.3);
        }
        .badge-confirmed {
            background: rgba(34,197,94,0.15);
            color: #22c55e;
            border: 1px solid rgba(34,197,94,0.3);
        }
        .badge-cancelled {
            background: rgba(239,68,68,0.15);
            color: #ef4444;
            border: 1px solid rgba(239,68,68,0.3);
        }
        /* Table Styles */
        .admin-table-container {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        body.light-mode .admin-table-container {
            background: #FFFFFF;
            border-color: #E0DBD0;
        }
        .admin-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        .admin-table th {
            background: #111;
            padding: 1rem 1.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--gold);
            border-bottom: 1px solid #2a2a2a;
        }
        body.light-mode .admin-table th {
            background: #F8F5EF;
            border-bottom-color: #E0DBD0;
            color: var(--gold-dark);
        }
        .admin-table td {
            padding: 1rem 1.25rem;
            font-size: 0.875rem;
            border-bottom: 1px solid #222;
            color: var(--cream);
        }
        body.light-mode .admin-table td {
            border-bottom-color: #EDE8DF;
            color: var(--off-black);
        }
        .admin-table tr:last-child td {
            border-bottom: none;
        }
        .admin-table tr:hover td {
            background: rgba(255,255,255,0.02);
        }
        body.light-mode .admin-table tr:hover td {
            background: rgba(0,0,0,0.01);
        }
        
        /* Filter panel */
        .filter-panel {
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 4px;
            padding: 1.25rem;
            margin-bottom: 1.5rem;
            display: flex;
            gap: 1.5rem;
            align-items: center;
            flex-wrap: wrap;
        }
        body.light-mode .filter-panel {
            background: #FFFFFF;
            border-color: #E0DBD0;
        }
        .filter-panel .filter-group {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0;
        }
        .filter-panel label {
            font-size: 0.8rem;
            margin-bottom: 0;
        }
        .filter-panel select, .filter-panel input {
            padding: 0.5rem 0.75rem;
            font-size: 0.85rem;
            background: #222;
            border-color: #333;
            width: auto;
            border-radius: 3px;
        }
        body.light-mode .filter-panel select, body.light-mode .filter-panel input {
            background: #F8F5EF;
            border-color: #ccc;
            color: var(--off-black);
        }
    </style>
    @stack('head')
</head>
<body>
    
    {{-- Admin Navbar --}}
    <nav class="admin-nav">
        <div class="container">
            <div class="admin-nav__inner">
                <!-- Logo -->
                <a href="{{ route('admin.dashboard') }}" class="navbar__logo">
                    King<span>Fashion</span> <span style="font-size:0.75rem; vertical-align:middle; background:rgba(201,168,76,0.12); padding:2px 8px; border-radius:4px; margin-left:5px; border:1px solid rgba(201,168,76,0.25);">Admin</span>
                </a>

                <!-- Nav Links -->
                <ul class="admin-nav__links">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="navbar__link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.appointments') }}" class="navbar__link {{ Request::routeIs('admin.appointments') ? 'active' : '' }}">Appointments</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}" class="navbar__link" target="_blank">View Site ↗</a>
                    </li>
                </ul>

                <!-- Right items (User info & Logout & Theme) -->
                <div style="display:flex; align-items:center; gap:1.5rem;">
                    @auth
                        <div class="admin-nav__user">
                            Welcome, <span>{{ Auth::user()->name }}</span>
                        </div>
                    @endauth

                    <!-- Theme Toggle -->
                    <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode" title="Toggle light/dark mode">
                        <span class="theme-toggle__knob">
                            <span class="theme-toggle__icon theme-toggle__icon--moon">☾</span>
                            <span class="theme-toggle__icon theme-toggle__icon--sun">☀</span>
                        </span>
                        <span class="theme-toggle__track-label">Light</span>
                    </button>

                    @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline" style="padding:0.4rem 1rem; font-size:0.75rem; border-radius:3px;">
                            Logout
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Area --}}
    <main class="admin-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- Admin Footer --}}
    <footer class="admin-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Men's Suits King Fashion Admin. All Rights Reserved.</p>
        </div>
    </footer>

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
            document.querySelectorAll('.theme-toggle__track-label').forEach(el => {
                el.textContent = isLight ? 'Dark' : 'Light';
            });
        }

        // Set initial label
        updateLabel(body.classList.contains('light-mode'));

        document.querySelectorAll('#themeToggle').forEach(btn => {
            btn.addEventListener('click', () => {
                const isLight = body.classList.toggle('light-mode');
                localStorage.setItem(STORAGE_KEY, isLight ? 'light' : 'dark');
                updateLabel(isLight);
            });
        });
    })();
    </script>
    @stack('scripts')
</body>
</html>
