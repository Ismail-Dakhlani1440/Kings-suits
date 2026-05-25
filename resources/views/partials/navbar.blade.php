<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar__inner">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="navbar__logo" id="nav-logo">
                King<span>Fashion</span>
            </a>

            <!-- Desktop Links -->
            <ul class="navbar__links" id="nav-links">
                <li>
                    <a href="{{ url('/') }}" class="navbar__link">Home</a>
                </li>
                <li class="navbar__dropdown">
                    <a href="{{ url('/collections') }}" class="navbar__link">
                        Collections ▾
                    </a>
                    <div class="navbar__dropdown-menu">
                        <a href="{{ url('/collections') }}#suits">Men's Suits</a>
                        <a href="{{ url('/collections') }}#tuxedos">Tuxedos</a>
                        <a href="{{ url('/collections') }}#kids">Kids' Suits</a>
                        <a href="{{ url('/collections') }}#prom">Prom & Events</a>
                    </div>
                </li>
                <li>
                    <a href="{{ url('/services') }}" class="navbar__link">Services</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="navbar__link">Contact</a>
                </li>
            </ul>

            <!-- CTA -->
            <a href="{{ url('/contact') }}" class="btn btn-gold" id="nav-cta">
                Book Appointment
            </a>

            <!-- Theme Toggle -->
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle light/dark mode" title="Toggle light/dark mode">
                <span class="theme-toggle__knob">
                    <span class="theme-toggle__icon theme-toggle__icon--moon">☾</span>
                    <span class="theme-toggle__icon theme-toggle__icon--sun">☀</span>
                </span>
                <span class="theme-toggle__track-label">Light</span>
            </button>

            <!-- Hamburger -->
            <button class="navbar__hamburger" id="hamburger" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="navbar__mobile" id="mobileMenu">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/collections') }}">Collections</a>
    <a href="{{ url('/services') }}">Services</a>
    <a href="{{ url('/contact') }}">Contact</a>
    <a href="{{ url('/contact') }}" class="btn btn-gold" style="display: block; text-align: center; margin-top: 1.5rem; justify-content: center;">Book Appointment</a>
    <button class="theme-toggle theme-toggle--mobile" id="themeToggleMobile" aria-label="Toggle light/dark mode">
        <span class="theme-toggle__knob">
            <span class="theme-toggle__icon theme-toggle__icon--moon">☾</span>
            <span class="theme-toggle__icon theme-toggle__icon--sun">☀</span>
        </span>
        <span class="theme-toggle__label">Switch to Light Mode</span>
    </button>
</div>
