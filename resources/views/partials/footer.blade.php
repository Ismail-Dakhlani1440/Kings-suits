<!-- Footer CTA Banner -->
<section id="footer-cta-banner" style="background: linear-gradient(90deg, #1a1400 0%, #2a1f00 50%, #1a1400 100%); border-top: 1px solid rgba(201,168,76,0.3); padding: 4rem 0;">
    <div class="container text-center">
        <p class="section-label">Ready to Begin?</p>
        <h2 class="section-title" style="margin-bottom: 1.5rem;">Your Perfect Suit Awaits</h2>
        <p class="section-subtitle" style="margin: 0 auto 2rem;">
            Visit our showroom or book a same-day appointment. Suits from $129 — alterations, rentals &amp; custom orders available.
        </p>
        <div class="flex flex-center gap-4">
            <a href="{{ url('/contact') }}" class="btn btn-gold" id="footer-cta-book">Book an Appointment</a>
            <a href="{{ url('/services') }}" class="btn btn-outline" id="footer-cta-services">View Services</a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <!-- Brand -->
            <div>
                <div class="footer__brand-name">King<span>Fashion</span></div>
                <p class="footer__brand-desc">
                    Men's Suits King Fashion — elevating style for generations since 1992. Suits, tuxedos &amp; same-day alterations in Ontario &amp; Montclair, CA.
                </p>
                <p style="font-size: 0.8rem; color: var(--mid-gray); margin-bottom: 0.6rem; line-height: 1.8;">
                    <span style="color:var(--gold); font-weight:600;">Ontario:</span> 4323 Mills Cir, #103, Ontario, CA 91764<br>
                    <span style="color:var(--gold); font-weight:600;">Montclair:</span> 5505 Moreno St, 102 &amp; 103, Montclair, CA 91763
                </p>
                <p style="font-size: 0.8rem; color: var(--mid-gray); margin-bottom: 1rem; line-height: 1.8;">
                    <span style="color:var(--gold); font-weight:600;">Phone:</span> <a href="tel:3237474157" style="color:var(--mid-gray);">(323) 747-4157</a><br>
                    <span style="color:var(--gold); font-weight:600;">Email:</span> <a href="mailto:denisericotta1@gmail.com" style="color:var(--mid-gray);">denisericotta1@gmail.com</a>
                </p>
                <div class="footer__social">
                    <a href="https://www.instagram.com/mens_suitsking_fashion/" target="_blank" rel="noopener" id="footer-social-ig" aria-label="Instagram">IG</a>
                    <a href="https://www.facebook.com/profile.php?id=61572955861080" target="_blank" rel="noopener" id="footer-social-fb" aria-label="Facebook">FB</a>
                    <a href="https://www.yelp.com/biz/men-s-suits-king-fashion-montclair" target="_blank" rel="noopener" id="footer-social-yelp" aria-label="Yelp">YP</a>
                    <a href="https://maps.app.goo.gl/4xjotWtuPCFyksTU7" target="_blank" rel="noopener" id="footer-social-gmap" aria-label="Google Maps">GM</a>
                </div>
            </div>

            <!-- Services -->
            <div>
                <div class="footer__col-title">Services</div>
                <ul class="footer__links">
                    <li><a href="{{ url('/services') }}#rentals">Suit Rentals</a></li>
                    <li><a href="{{ url('/services') }}#tuxedos">Tuxedo Rentals</a></li>
                    <li><a href="{{ url('/services') }}#alterations">Same-Day Alterations</a></li>
                    <li><a href="{{ url('/collections') }}#kids">Kids' Suits</a></li>
                    <li><a href="{{ url('/collections') }}#prom">Prom &amp; Events</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <div class="footer__col-title">Quick Links</div>
                <ul class="footer__links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/collections') }}">Collections</a></li>
                    <li><a href="{{ url('/services') }}">Services</a></li>
                    <li><a href="{{ url('/contact') }}">Book Appointment</a></li>
                    <li><a href="https://www.yelp.com/biz/men-s-suits-king-fashion-montclair" target="_blank" rel="noopener">Reviews on Yelp</a></li>
                </ul>
            </div>

            <!-- Hours -->
            <div>
                <div class="footer__col-title">Store Hours</div>
                <ul class="footer__links">
                    <li><a>Mon – Fri: 10am – 8pm</a></li>
                    <li><a>Saturday: 11am – 7pm</a></li>
                    <li><a>Sunday: 11am – 7pm</a></li>
                </ul>
                <div style="margin-top: 1.5rem;">
                    <div class="footer__col-title">Appointments</div>
                    <a href="{{ url('/contact') }}" class="btn btn-outline" style="font-size: 0.75rem; padding: 0.6rem 1.2rem;" id="footer-mini-book">Book Now</a>
                </div>
            </div>
        </div>

        <div class="footer__bottom" style="flex-direction: column; gap: 1.25rem; align-items: center; border-top: 1px solid #1a1a1a; padding-top: 2rem;">
            <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <span>&copy; {{ date('Y') }} Men's Suits King Fashion. All rights reserved.</span>
                <span style="color: #444;">Est. 1992 — Ontario &amp; Montclair, CA</span>
                <span>
                    <a href="/accessibility_page" style="color: var(--mid-gray); margin-right: 1rem;">Accessibility</a>
                    <a href="https://www.yelp.com/biz/men-s-suits-king-fashion-montclair" target="_blank" rel="noopener" style="color: var(--mid-gray); margin-right: 1rem;">Yelp</a>
                    <a href="https://maps.app.goo.gl/4xjotWtuPCFyksTU7" target="_blank" rel="noopener" style="color: var(--mid-gray);">Google Maps</a>
                </span>
            </div>

            <div style="font-size: 0.75rem; color: #444; border-top: 1px solid rgba(255,255,255,0.02); width: 100%; padding-top: 1rem; text-align: center;">
                @auth
                    <span style="color: var(--gold-light); font-weight: 500;">Staff Console:</span>
                    <a href="{{ route('admin.dashboard') }}" style="color: var(--light-gray); margin: 0 0.5rem; text-decoration: underline;">Dashboard</a> |
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-footer').submit();" style="color: var(--light-gray); margin: 0 0.5rem; text-decoration: underline;">Logout</a>
                    <form id="logout-form-footer" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <span>Are you a member of our team? <a href="{{ route('login') }}" style="color: var(--gold-dark); text-decoration: underline; font-weight: 500; margin-left: 0.25rem;">Access the Staff Portal to manage client requests</a></span>
                @endauth
            </div>
        </div>
    </div>
</footer>
