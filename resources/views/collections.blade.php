@extends('layouts.app')

@section('title', 'Suit Collections — Men\'s Suits King Fashion')
@section('meta_description', 'Browse Men\'s Suits King Fashion collections — Men\'s Suits, Tuxedos, Kids\' Suits, and Prom & Event looks. Ontario & Montclair, CA. Suits from $129.')

@section('content')

{{-- Hero --}}
<div class="page-hero">
    <div class="container">
        <div class="page-hero__inner">
            <p class="page-hero__label section-label">Our Range</p>
            <h1 class="page-hero__title">Our Collections</h1>
            <div class="gold-rule"></div>
            <p class="page-hero__sub">Curated styles for every occasion — from weddings and proms to everyday business wear.</p>
        </div>
    </div>
</div>

{{-- ═══════════════════ MEN'S SUITS ═══════════════════ --}}
<section class="section" id="suits">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div>
                <p class="section-label">Collection 01</p>
                <h2 class="section-title">Men's Suits</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom:2rem;">
                    Our flagship men's suit collection covers every colour, cut, and occasion. From classic navy and charcoal to bold contemporary tones — starting at just $129.
                </p>
                <ul style="margin-bottom: 2rem; display:flex; flex-direction:column; gap: 0.6rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Classic, slim & modern fits</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Single & double-breasted styles</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Two & three-piece options</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Sizes from regular to big & tall</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn btn-gold" id="suits-cta">Book a Fitting</a>
            </div>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #2a2520 0%, #1a1510 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">CC</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Charcoal Classic</div><p class="card__text" style="font-size:0.8rem;">Timeless single-breasted, slim fit</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #0d1a2e 0%, #071020 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">NS</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Navy Shadow</div><p class="card__text" style="font-size:0.8rem;">Deep navy, modern cut</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #3a3020 0%, #2a2015 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">DC</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Dark Caramel</div><p class="card__text" style="font-size:0.8rem;">Warm brown, double-breasted</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #888 0%, #666 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">MG</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Mid Grey</div><p class="card__text" style="font-size:0.8rem;">Versatile grey, regular fit</p></div></div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ TUXEDOS ═══════════════════ --}}
<section class="section section--light" id="tuxedos">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">MB</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Midnight Black</div><p class="card__text" style="font-size:0.8rem;">Classic satin lapel, slim cut</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">IW</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Ivory White</div><p class="card__text" style="font-size:0.8rem;">Wedding & summer events</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #1a2a1a 0%, #0d1a0d 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">HG</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Hunter Green</div><p class="card__text" style="font-size:0.8rem;">Bold & contemporary</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #4a0a4a 0%, #2d052d 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">DB</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Deep Burgundy</div><p class="card__text" style="font-size:0.8rem;">Rich colour, peak lapel</p></div></div>
            </div>
            <div>
                <p class="section-label">Collection 02</p>
                <h2 class="section-title">Tuxedos</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom:2rem;">
                    Curated tuxedo styles for proms, weddings, and black-tie events. Available in classic black, white, and a range of bold fashion colours. Complete accessory packages available.
                </p>
                <ul style="margin-bottom: 2rem; display:flex; flex-direction:column; gap: 0.6rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Classic & fashion colours</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Vests, bowties & pocket squares</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Group & bridal party packages</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Kids' tuxedo sizes available</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn btn-gold" id="tuxedos-cta">Book a Fitting</a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ KIDS' SUITS ═══════════════════ --}}
<section class="section" id="kids">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div>
                <p class="section-label">Collection 03</p>
                <h2 class="section-title">Kids' Suits</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom:2rem;">
                    Every young gentleman deserves to look sharp. We carry a full range of kids' suits in all sizes — from toddlers to teens — perfect for weddings, communions, and school events.
                </p>
                <ul style="margin-bottom: 2rem; display:flex; flex-direction:column; gap: 0.6rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Toddler to teen sizing</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Matching adult suit colours</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Shirt, tie & vest sets</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Same-day alterations for kids too</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn btn-gold" id="kids-cta">Book a Fitting</a>
            </div>
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #0d1a2e 0%, #071020 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">BN</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Boys' Navy</div><p class="card__text" style="font-size:0.8rem;">Classic navy, all ages</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #2a2520 0%, #1a1510 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">BC</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Boys' Charcoal</div><p class="card__text" style="font-size:0.8rem;">Sharp & timeless</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #c8b89a 0%, #a89070 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">CL</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Champagne Linen</div><p class="card__text" style="font-size:0.8rem;">Summer & outdoor events</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">MT</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Mini Tuxedo</div><p class="card__text" style="font-size:0.8rem;">Black-tie for little ones</p></div></div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ PROM & EVENTS ═══════════════════ --}}
<section class="section section--light" id="prom">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;">
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem;">
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #4a0a4a 0%, #2d052d 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">PR</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Prom Royale</div><p class="card__text" style="font-size:0.8rem;">Burgundy, black & gold</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #1a2a1a 0%, #0d1a0d 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">EN</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Emerald Night</div><p class="card__text" style="font-size:0.8rem;">Hunter green, peak lapel</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #152540 0%, #0a1828 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">RB</div><div class="card__body"><div class="card__title" style="font-size:1rem;">Royal Blue</div><p class="card__text" style="font-size:0.8rem;">Vibrant & modern</p></div></div>
                <div class="card"><div style="height:200px; background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%); display:flex; align-items:center; justify-content:center; font-family:var(--font-head); color:var(--gold); font-size:1.8rem; font-weight:700; letter-spacing:0.1em;">AW</div><div class="card__body"><div class="card__title" style="font-size:1rem;">All-White</div><p class="card__text" style="font-size:0.8rem;">Statement prom look</p></div></div>
            </div>
            <div>
                <p class="section-label">Collection 04</p>
                <h2 class="section-title">Prom & Events</h2>
                <div class="gold-rule"></div>
                <p class="section-subtitle" style="margin-bottom:2rem;">
                    Make prom night unforgettable. Our event collection features bold colours, sharp cuts, and coordinated group packages — designed to turn heads on your biggest night.
                </p>
                <ul style="margin-bottom: 2rem; display:flex; flex-direction:column; gap: 0.6rem;">
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Wide range of bold colours</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Coordinated group packages</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Matching vest & tie sets</li>
                    <li style="color:var(--mid-gray); font-size:0.9rem; display:flex; gap:0.75rem;"><span style="color:var(--gold);">✓</span> Quinceanera packages available</li>
                </ul>
                <a href="{{ url('/contact') }}" class="btn btn-gold" id="prom-cta">Book a Fitting</a>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════ WHY KING FASHION ═══════════════════ --}}
<section class="section" id="why-elite">
    <div class="container text-center">
        <p class="section-label">Why Choose Us</p>
        <h2 class="section-title">The King Fashion Difference</h2>
        <div class="gold-rule gold-rule--center"></div>

        <div class="grid-3" style="margin-top: 3rem;">
            <div style="padding: 2rem; border: 1px solid #2a2a2a; border-radius: 4px;">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-block; margin-bottom:1rem; width:36px; height:36px;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </span>
                <h3 style="font-family: var(--font-head); font-size: 1.2rem; color: var(--white); margin-bottom: 0.75rem;">30+ Years Experience</h3>
                <p style="color: var(--mid-gray); font-size: 0.9rem; line-height: 1.7;">Family-owned and operated since 1992. Generations of families trust us to dress them for their most important moments.</p>
            </div>
            <div style="padding: 2rem; border: 1px solid #2a2a2a; border-radius: 4px; border-top: 2px solid var(--gold);">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-block; margin-bottom:1rem; width:36px; height:36px;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="9.8" y1="8.2" x2="22" y2="20"></line><line x1="9.8" y1="15.8" x2="22" y2="4"></line></svg>
                </span>
                <h3 style="font-family: var(--font-head); font-size: 1.2rem; color: var(--white); margin-bottom: 0.75rem;">Same-Day Alterations</h3>
                <p style="color: var(--mid-gray); font-size: 0.9rem; line-height: 1.7;">Our expert in-house tailors can alter your suit on the spot — walk in and walk out looking sharp the same day.</p>
            </div>
            <div style="padding: 2rem; border: 1px solid #2a2a2a; border-radius: 4px;">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-block; margin-bottom:1rem; width:36px; height:36px;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                </span>
                <h3 style="font-family: var(--font-head); font-size: 1.2rem; color: var(--white); margin-bottom: 0.75rem;">Affordable Prices</h3>
                <p style="color: var(--mid-gray); font-size: 0.9rem; line-height: 1.7;">Quality doesn't have to break the bank. Men's suits starting from $129 — premium looks at prices that make sense.</p>
            </div>
        </div>
    </div>
</section>

@endsection
