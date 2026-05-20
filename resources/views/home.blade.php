@extends('layouts.app')

@section('title', 'Men\'s Suits King Fashion — Ontario & Montclair, CA')
@section('meta_description', 'Men\'s Suits King Fashion — Est. 1992. Suit rentals, tuxedo rentals & same-day alterations in Ontario & Montclair, CA. Suits starting from $129.')

@section('content')

{{-- ═══════════════════════════════════ HERO ═══════════════════════════════════ --}}
<section id="home-hero" style="
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    background: linear-gradient(160deg, #080808 0%, #141414 40%, #1a1200 100%);
">
    {{-- Background decorative lines --}}
    <div style="
        position: absolute; inset: 0;
        background-image: repeating-linear-gradient(90deg, rgba(201,168,76,0.03) 0px, rgba(201,168,76,0.03) 1px, transparent 1px, transparent 80px);
        pointer-events: none;
    "></div>

    <div class="container" style="padding-top: 120px; padding-bottom: 80px; position: relative; z-index:1;">
        <div style="max-width: 700px;">
            <p class="section-label animate-fadeup">Est. 1992 — Ontario & Montclair, CA</p>
            <h1 class="animate-fadeup delay-1" style="
                font-family: var(--font-head);
                font-size: clamp(3rem, 7vw, 5.5rem);
                line-height: 1.1;
                color: var(--white);
                margin-bottom: 1.5rem;
            ">
                Elevating Style<br>
                for <em style="color: var(--gold); font-style: italic;">Generations</em>
            </h1>
            <div class="gold-rule animate-fadeup delay-1"></div>
            <p class="animate-fadeup delay-2" style="font-size: 1.15rem; color: var(--mid-gray); max-width: 520px; line-height: 1.9; margin-bottom: 2.5rem;">
                Suits, tuxedos &amp; same-day alterations for every occasion. Men's suits from $129 — perfect for weddings, prom, business, and beyond. Serving Ontario &amp; Montclair, CA since 1992.
            </p>
            <div class="flex gap-4 animate-fadeup delay-3">
                <a href="{{ url('/contact') }}" class="btn btn-gold" id="hero-cta-book">Book an Appointment</a>
                <a href="{{ url('/collections') }}" class="btn btn-outline" id="hero-cta-collections">View Collections</a>
            </div>
        </div>
    </div>

    {{-- Gold accent shape --}}
    <div style="
        position: absolute;
        right: -80px; top: 50%;
        transform: translateY(-50%);
        width: 560px; height: 560px;
        border-radius: 50%;
        border: 1px solid rgba(201,168,76,0.12);
        pointer-events: none;
    "></div>
    <div style="
        position: absolute;
        right: -20px; top: 50%;
        transform: translateY(-50%);
        width: 400px; height: 400px;
        border-radius: 50%;
        border: 1px solid rgba(201,168,76,0.08);
        pointer-events: none;
    "></div>
</section>

{{-- ═══════════════════════════════ TRUST STRIP ════════════════════════════════ --}}
<div class="trust-strip">
    <div class="container">
        <div class="trust-strip__grid">
            <div class="trust-item">
                <div class="trust-item__icon">🏆</div>
                <div class="trust-item__label">Est. 1992 — 30+ Years</div>
            </div>
            <div class="trust-item">
                <div class="trust-item__icon">✂️</div>
                <div class="trust-item__label">Same-Day Alterations</div>
            </div>
            <div class="trust-item">
                <div class="trust-item__icon">👔</div>
                <div class="trust-item__label">Suits from $129</div>
            </div>
            <div class="trust-item">
                <div class="trust-item__icon">⭐</div>
                <div class="trust-item__label">Open 7 Days a Week</div>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════ SERVICES GRID ══════════════════════════════ --}}
<section class="section" id="home-services">
    <div class="container">
        <div class="text-center mb-12">
            <p class="section-label">What We Offer</p>
            <h2 class="section-title">Our Services</h2>
            <div class="gold-rule gold-rule--center"></div>
            <p class="section-subtitle">From rental suits to custom alterations — we dress you right for every moment that matters.</p>
        </div>

        <div class="grid-4">
            <div class="card" id="service-card-rentals">
                <div style="padding: 2rem; text-align:center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">👔</div>
                    <h3 class="card__title">Suit Rentals</h3>
                    <p class="card__text">High-quality suit rentals in all sizes — from kids to big & tall. Perfect for weddings, proms, and every special occasion.</p>
                    <a href="{{ url('/services') }}#rentals" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Learn More</a>
                </div>
            </div>
            <div class="card" id="service-card-tuxedos">
                <div style="padding: 2rem; text-align:center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">🤵</div>
                    <h3 class="card__title">Tuxedo Rentals</h3>
                    <p class="card__text">Curated tuxedo styles at affordable prices for black-tie events, weddings, and prom. Vests, ties & accessories available.</p>
                    <a href="{{ url('/services') }}#tuxedos" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Learn More</a>
                </div>
            </div>
            <div class="card" id="service-card-alterations">
                <div style="padding: 2rem; text-align:center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">✂️</div>
                    <h3 class="card__title">Same-Day Alterations</h3>
                    <p class="card__text">Expert on-the-spot adjustments for a perfect tailored fit. In-house only, open 7 days a week for your convenience.</p>
                    <a href="{{ url('/services') }}#alterations" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Learn More</a>
                </div>
            </div>
            <div class="card" id="service-card-custom">
                <div style="padding: 2rem; text-align:center;">
                    <div style="font-size: 2.5rem; margin-bottom: 1rem;">✨</div>
                    <h3 class="card__title">Custom Orders</h3>
                    <p class="card__text">Have a specific vision? We'll bring any bespoke design to life — kids' suits, sport coats, matching bridal party sets and more.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════ HOW IT WORKS ═══════════════════════════════ --}}
<section class="section section--light" id="home-how-it-works">
    <div class="container">
        <div class="text-center mb-12">
            <p class="section-label">The Process</p>
            <h2 class="section-title">How It Works</h2>
            <div class="gold-rule gold-rule--center"></div>
            <p class="section-subtitle">Getting fitted has never been simpler. Walk in or book ahead.</p>
        </div>

        <div class="steps-grid">
            <div class="step">
                <div class="step__num">01</div>
                <div class="step__title">Walk In or Book</div>
                <p class="step__text">Visit either of our showrooms in Ontario or Montclair, or call ahead to schedule your appointment.</p>
            </div>
            <div class="step">
                <div class="step__num">02</div>
                <div class="step__title">Browse & Select</div>
                <p class="step__text">Choose from our wide range of suits, tuxedos, sport coats and accessories in all sizes.</p>
            </div>
            <div class="step">
                <div class="step__num">03</div>
                <div class="step__title">Get Measured</div>
                <p class="step__text">Our experienced staff — some knowing your size the moment you walk in — will ensure a perfect fit.</p>
            </div>
            <div class="step">
                <div class="step__num">04</div>
                <div class="step__title">Same-Day Alterations</div>
                <p class="step__text">Alterations done in-house on the spot. No long waits — you could walk out dressed to impress the same day.</p>
            </div>
            <div class="step">
                <div class="step__num">05</div>
                <div class="step__title">Walk Out in Style</div>
                <p class="step__text">Leave looking and feeling your absolute best — confident, sharp, and ready for any occasion.</p>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════ TESTIMONIALS ═══════════════════════════════ --}}
<section class="section" id="home-testimonials">
    <div class="container">
        <div class="text-center mb-12">
            <p class="section-label">Client Reviews</p>
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="gold-rule gold-rule--center"></div>
        </div>

        <div class="grid-3">
            <div class="testimonial">
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__text">"Moncef's professionalism, clarity, and tailoring speed are second to none. I am a lifelong customer and will never go anywhere else."</p>
                <div class="testimonial__author">Jonté M. — Verified Client</div>
            </div>
            <div class="testimonial">
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__text">"Anne knew my size the minute I walked through the door. She made it very quick and easy to find a nice, affordable suit for my daughter's wedding."</p>
                <div class="testimonial__author">Jerrel H. — Wedding Client</div>
            </div>
            <div class="testimonial">
                <div class="testimonial__stars">★★★★★</div>
                <p class="testimonial__text">"Got my son fitted, dressed, altered and ready for a wedding the next day — all in 45 minutes. Close attention to detail. Absolutely outstanding."</p>
                <div class="testimonial__author">Othman C. — Happy Parent</div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════ FAQ ════════════════════════════════════ --}}
<section class="section section--light" id="home-faq">
    <div class="container" style="max-width: 780px;">
        <div class="text-center mb-12">
            <p class="section-label">Questions & Answers</p>
            <h2 class="section-title">Frequently Asked</h2>
            <div class="gold-rule gold-rule--center"></div>
        </div>

        <div class="faq-item">
            <button class="faq-question" id="faq-q1">
                What are your store hours?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer"><p>We're open Monday through Friday 10am–8pm, and Saturday–Sunday 11am–7pm. We're open 7 days a week for your convenience — no appointment needed, but booking ahead is welcome.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question" id="faq-q2">
                How much do suits start at?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer"><p>Men's suits start at $129. Prices vary depending on style, fabric, and accessories. We carry a wide range of options from entry-level to premium selections — there's something for every budget.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question" id="faq-q3">
                Do you offer same-day alterations?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer"><p>Yes — same-day alterations are one of our signature services. All alterations are done in-house by our expert tailors. Please note we do not offer delivery; all fittings and alterations are strictly in-store.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question" id="faq-q4">
                Do you carry kids' and big & tall sizes?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer"><p>Absolutely. We stock suits and rentals in all sizes — from kids' suits right through to big & tall options. Everyone in the wedding party or at prom can be dressed by us.</p></div>
        </div>
        <div class="faq-item">
            <button class="faq-question" id="faq-q5">
                Where are your stores located?
                <span class="faq-icon">+</span>
            </button>
            <div class="faq-answer"><p>We have two convenient locations: 4323 Mills Cir, #103, Ontario, CA 91764 and 5505 Moreno St, 102 & 103, Montclair, CA 91763. Call us on (323) 747-4157 or use Google Maps to find us.</p></div>
        </div>
    </div>
</section>

@endsection
