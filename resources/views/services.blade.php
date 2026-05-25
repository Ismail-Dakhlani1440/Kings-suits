@extends('layouts.app')

@section('title', 'Our Services — Men\'s Suits King Fashion')
@section('meta_description', 'Suit rentals, tuxedo rentals & same-day alterations at Men\'s Suits King Fashion. Serving Ontario & Montclair, CA since 1992. Suits from $129.')

@section('content')

{{-- Hero --}}
<div class="page-hero">
    <div class="container">
        <div class="page-hero__inner">
            <p class="section-label">What We Do</p>
            <h1 class="page-hero__title">Our Services</h1>
            <div class="gold-rule"></div>
            <p class="page-hero__sub">From suit rentals and tuxedos to same-day alterations — we dress every man for every occasion.</p>
        </div>
    </div>
</div>

{{-- ═══════════════════ SUIT RENTALS ═══════════════════ --}}
<section class="section" id="rentals">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">
            <div>
                <p class="section-label">Service 01</p>
                <h2 class="section-title">Suit Rentals</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom: 2rem;">
                    High-quality suit rentals in all sizes — from kids to big & tall. Whether it's a wedding, prom night, or a black-tie event, we have the perfect suit waiting for you.
                </p>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:2rem;">
                    <div style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Starting From</div>
                        <div style="color:var(--white); font-size:0.9rem;">$129</div>
                    </div>
                    <div style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Sizes</div>
                        <div style="color:var(--white); font-size:0.9rem;">Kids to Big & Tall</div>
                    </div>
                    <div style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Availability</div>
                        <div style="color:var(--white); font-size:0.9rem;">Open 7 days a week</div>
                    </div>
                    <div style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Alterations</div>
                        <div style="color:var(--white); font-size:0.9rem;">Same-day in-house</div>
                    </div>
                </div>

                <h3 style="font-family:var(--font-head); color:var(--white); margin-bottom:1rem; font-size:1.1rem;">What's Included</h3>
                <ul style="display:flex; flex-direction:column; gap:0.6rem; margin-bottom:2rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Full suit (jacket + trousers)</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Dress shirt & tie options</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Vest / waistcoat add-on available</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Wide colour range — classic to contemporary</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Kids' sizes always in stock</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Same-day fitting & alterations</li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                    <a href="{{ url('/contact') }}" class="btn btn-gold" id="rentals-cta">Book a Fitting</a>
                    <a href="tel:3237474157" class="btn btn-outline" style="border-color:var(--gold); color:var(--gold); display:inline-flex; align-items:center; gap:0.5rem;">
                        <span class="hero-svg-icon" style="color: var(--gold); width: 14px; height: 14px; display: inline-flex; align-items: center; justify-content: center;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </span>
                        Call Now
                    </a>
                </div>
            </div>

            <div style="background: linear-gradient(160deg,#1a1000,#0d0d0d); border:1px solid #2a2a2a; border-radius:4px; padding: 3rem 2rem; text-align:center;">
                <div class="hero-svg-icon" style="width: 80px; height: 80px; margin: 0 auto 1.5rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3h6a3 3 0 0 0-3-3z"></path><path d="M21 10h-4l-3-3H10L7 10H3a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z"></path></svg>
                </div>
                <h3 style="font-family:var(--font-head); color:var(--white); font-size:1.5rem; margin-bottom:1rem;">Dressed Right, Every Time</h3>
                <p style="color:var(--mid-gray); line-height:1.8; margin-bottom:2rem;">Our experienced staff — some who know your size the moment you walk through the door — ensure every rental fits perfectly. Walk in, get fitted, walk out sharp.</p>
                <div style="border-top:1px solid #2a2a2a; padding-top:2rem;">
                    <div style="color:var(--gold); font-size:0.75rem; font-weight:600; letter-spacing:0.15em; text-transform:uppercase; margin-bottom:0.5rem;">Our Promise</div>
                    <p style="color:var(--white); font-style:italic; font-family:var(--font-head);">"You'll look great — or we'll make it right."</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ TUXEDO RENTALS ═══════════════════ --}}
<section class="section section--light" id="tuxedos">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">
            <div style="background: linear-gradient(160deg,#1a1a1a,#111); border:1px solid #2a2a2a; border-radius:4px; padding: 3rem 2rem; text-align:center;">
                <div class="hero-svg-icon" style="width: 80px; height: 80px; margin: 0 auto 1.5rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l1 5h-2l-1-3h-2v15H10V5H8l-1 3H5l1-5z"></path><path d="M12 5v4l2 2v2H10v-2l2-2V5z"></path></svg>
                </div>
                <h3 style="font-family:var(--font-head); color:var(--white); font-size:1.5rem; margin-bottom:1rem;">Black-Tie Ready</h3>
                <p style="color:var(--mid-gray); line-height:1.8; margin-bottom:2rem;">A well-fitted tuxedo commands a room. Our curated tuxedo collection pairs classic black-tie elegance with modern styling — complete with accessories to finish the look.</p>
                <div style="border-top:1px solid #2a2a2a; padding-top:2rem;">
                    <div style="color:var(--gold); font-size:0.75rem; font-weight:600; letter-spacing:0.15em; text-transform:uppercase; margin-bottom:0.5rem;">Accessories</div>
                    <p style="color:var(--white); font-style:italic; font-family:var(--font-head);">Vests, bowties, pocket squares & more.</p>
                </div>
            </div>
            <div>
                <p class="section-label">Service 02</p>
                <h2 class="section-title">Tuxedo Rentals</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom: 2rem;">
                    Look sharp for any black-tie event, prom, or wedding. Our tuxedo rental collection includes curated styles in a range of fits and colours — complete with vest, tie, and accessory packages.
                </p>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:2rem;">
                    <div style="background:#222; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Styles</div>
                        <div style="color:var(--white); font-size:0.9rem;">Classic & Modern</div>
                    </div>
                    <div style="background:#222; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Occasions</div>
                        <div style="color:var(--white); font-size:0.9rem;">Prom, Weddings, Galas</div>
                    </div>
                </div>

                <ul style="display:flex; flex-direction:column; gap:0.6rem; margin-bottom:2rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Classic black & white tuxedos</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Coloured vests & ties available</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Matching bridal party packages</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Kids' tuxedo sizes available</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> In-store same-day fitting</li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                    <a href="{{ url('/contact') }}" class="btn btn-gold" id="tuxedos-cta">Book a Tuxedo Fitting</a>
                    <a href="tel:3237474157" class="btn btn-outline" style="border-color:var(--gold); color:var(--gold); display:inline-flex; align-items:center; gap:0.5rem;">
                        <span class="hero-svg-icon" style="color: var(--gold); width: 14px; height: 14px; display: inline-flex; align-items: center; justify-content: center;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </span>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ SAME-DAY ALTERATIONS ═══════════════════ --}}
<section class="section" id="alterations">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:start;">
            <div>
                <p class="section-label">Service 03</p>
                <h2 class="section-title">Same-Day Alterations</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom: 2rem;">
                    Our in-house tailors deliver expert alterations on the spot — no waiting days or weeks. Slim your sleeves, hem your trousers, or take in the waist while you wait.
                </p>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:2rem;">
                    <div style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Turnaround</div>
                        <div style="color:var(--white); font-size:0.9rem;">Same Day</div>
                    </div>
                    <div style="background:#1a1a1a; border:1px solid #2a2a2a; border-radius:4px; padding:1.25rem;">
                        <div style="color:var(--gold); font-weight:600; font-size:0.8rem; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.4rem;">Location</div>
                        <div style="color:var(--white); font-size:0.9rem;">In-Store Only</div>
                    </div>
                </div>

                <ul style="display:flex; flex-direction:column; gap:0.6rem; margin-bottom:2rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Sleeve & trouser hemming</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Waist & seat adjustments</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Jacket taking in & letting out</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Shirt alterations</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Works on rented & purchased suits</li>
                </ul>
                <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                    <a href="{{ url('/contact') }}" class="btn btn-gold" id="alterations-cta">Book Alteration Appointment</a>
                    <a href="tel:3237474157" class="btn btn-outline" style="border-color:var(--gold); color:var(--gold); display:inline-flex; align-items:center; gap:0.5rem;">
                        <span class="hero-svg-icon" style="color: var(--gold); width: 14px; height: 14px; display: inline-flex; align-items: center; justify-content: center;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </span>
                        Call Now
                    </a>
                </div>
            </div>

            <div style="background: linear-gradient(160deg,#1a1800,#111); border:1px solid #2a2a2a; border-radius:4px; padding: 3rem 2rem; text-align:center;">
                <div class="hero-svg-icon" style="width: 80px; height: 80px; margin: 0 auto 1.5rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="9.8" y1="8.2" x2="22" y2="20"></line><line x1="9.8" y1="15.8" x2="22" y2="4"></line></svg>
                </div>
                <h3 style="font-family:var(--font-head); color:var(--white); font-size:1.5rem; margin-bottom:1rem;">Precision In Every Stitch</h3>
                <p style="color:var(--mid-gray); line-height:1.8; margin-bottom:2rem;">We've been perfecting fits since 1992. Our tailors work quickly and accurately — many clients walk in needing alterations and walk out the same day, perfectly dressed.</p>
                <div style="border-top:1px solid #2a2a2a; padding-top:2rem;">
                    <div style="color:var(--gold); font-size:0.75rem; font-weight:600; letter-spacing:0.15em; text-transform:uppercase; margin-bottom:0.5rem;">Please Note</div>
                    <p style="color:var(--white); font-style:italic; font-family:var(--font-head);">All alterations are in-store only. No delivery service available.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Kids & Prom banner --}}
<section style="background:var(--charcoal); padding:4rem 0; border-top:1px solid #2a2a2a;" id="kids-prom">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; gap:2rem; flex-wrap:wrap;">
        <div>
            <p class="section-label">Also Available</p>
            <h2 style="font-family:var(--font-head); font-size:1.75rem; color:var(--white);">Kids' Suits & Prom Packages</h2>
            <p style="color:var(--mid-gray); margin-top:0.5rem;">We stock a full range of kids' suits and event packages for prom, quinceaneras, and group bookings. Call us at <a href="tel:3237474157" style="color:var(--gold);">(323) 747-4157</a> to discuss your needs.</p>
        </div>
        <a href="{{ url('/contact') }}" class="btn btn-outline" id="kids-prom-cta">Enquire Now</a>
    </div>
</section>

@endsection
