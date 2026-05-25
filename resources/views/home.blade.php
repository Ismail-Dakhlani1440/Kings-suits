@extends('layouts.app')

@section('title', 'Men\'s Suits King Fashion — Ontario & Montclair, CA')
@section('meta_description', 'Men\'s Suits King Fashion — Est. 1992. Suit rentals, tuxedo rentals & same-day alterations in Ontario & Montclair, CA. Suits starting from $129.')

@push('head')
<!-- Schema.org FAQPage Structured Data -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are your store hours?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We are open Monday through Friday 10am–8pm, and Saturday–Sunday 11am–7pm. We are open 7 days a week for your convenience — no appointment needed, but booking ahead is welcome."
      }
    },
    {
      "@type": "Question",
      "name": "How much do suits start at?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Men's suits start at $129. Prices vary depending on style, fabric, and accessories. We carry a wide range of options from entry-level to premium selections — there's something for every budget."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer same-day alterations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, same-day alterations are one of our signature services. All alterations are done in-house by our expert tailors. Please note we do not offer delivery; all fittings and alterations are strictly in-store."
      }
    },
    {
      "@type": "Question",
      "name": "Do you carry kids' and big & tall sizes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We stock suits and rentals in all sizes — from kids' suits right through to big & tall options. Everyone in the wedding party or at prom can be dressed by us."
      }
    },
    {
      "@type": "Question",
      "name": "Where are your stores located?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We have two convenient locations: 4323 Mills Cir, #103, Ontario, CA 91764 and 5505 Moreno St, 102 & 103, Montclair, CA 91763. Call us on (323) 747-4157 or use Google Maps to find us."
      }
    }
  ]
}
</script>
<style>
.hero-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 4rem;
    align-items: center;
    width: 100%;
}
.hero-image-col {
    display: none;
}
.hero-showcase-card:hover {
    transform: translateY(-8px) scale(1.02);
    border-color: var(--gold) !important;
    box-shadow: 0 25px 50px rgba(201,168,76,0.25) !important;
}

@media (min-width: 992px) {
    .hero-grid {
        grid-template-columns: 1.1fr 0.9fr;
    }
    .hero-image-col {
        display: block;
    }
}

.hero-trust-text {
    color: #FFFFFF !important;
    font-size: 0.9rem !important;
    font-weight: 600 !important;
}

.hero-svg-icon {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
    color: var(--gold);
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.hero-price-badge-section {
    display: inline-flex;
    align-items: center;
    gap: 1.5rem;
    background: rgba(201, 168, 76, 0.05);
    border: 1px solid rgba(201, 168, 76, 0.2);
    border-radius: 8px;
    padding: 0.8rem 1.5rem;
    margin-bottom: 2rem;
    transition: border-color 0.3s ease;
}
.hero-price-badge-section:hover {
    border-color: rgba(201, 168, 76, 0.4);
}

/* Light mode overrides */
body.light-mode .hero-price-badge-section {
    background: rgba(168, 135, 58, 0.03) !important;
    border-color: rgba(168, 135, 58, 0.15) !important;
}
body.light-mode .hero-trust-text {
    color: #111111 !important;
}
body.light-mode .hero-showcase-card {
    background: #FFFFFF !important;
    border-color: rgba(168, 135, 58, 0.25) !important;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
}
body.light-mode .hero-showcase-card h3 {
    color: var(--off-black) !important;
}
body.light-mode .hero-showcase-card p {
    color: var(--mid-gray) !important;
}
</style>
@endpush

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

    <div class="container" style="padding-top: 120px; padding-bottom: 80px; position: relative; z-index: 1;">
        <div class="hero-grid">
            <!-- Left Column: E-commerce Marketing & Trust Badges -->
            <div style="max-width: 650px;">
                <!-- E-commerce Pricing Tag -->
                <div class="animate-fadeup" style="
                    display: inline-flex;
                    align-items: center;
                    gap: 0.6rem;
                    background: rgba(201, 168, 76, 0.1);
                    border: 1px solid rgba(201, 168, 76, 0.35);
                    border-radius: 50px;
                    padding: 0.5rem 1.2rem;
                    margin-bottom: 1.5rem;
                ">
                    <span class="hero-svg-icon" style="color: var(--gold); display: flex; align-items: center;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    </span>
                    <span style="color: var(--gold); font-size: 0.85rem; font-weight: 600; letter-spacing: 0.05em; text-transform: uppercase;">
                        Premium Suits starting at $139
                    </span>
                </div>

                <p class="section-label animate-fadeup">Est. 1992 — Ontario & Montclair, CA</p>
                <h1 class="animate-fadeup delay-1" style="
                    font-family: var(--font-head);
                    font-size: clamp(2.3rem, 5.5vw, 4.2rem);
                    line-height: 1.15;
                    color: var(--white);
                    margin-bottom: 1.5rem;
                ">
                    Best Suit Shop &amp;<br>
                    <span style="color: var(--gold); font-style: italic;">Tuxedo Rentals</span><br>
                    in Ontario, CA
                </h1>
                
                <div class="gold-rule animate-fadeup delay-1"></div>
                
                <!-- Massive Attention Pricing Hook Section -->
                <div class="animate-fadeup delay-2 hero-price-badge-section">
                    <div style="display: flex; flex-direction: column;">
                        <span style="font-size: 0.8rem; color: var(--gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.1em; line-height: 1.2;">Premium Suits From</span>
                        <span style="font-size: 3.5rem; font-family: var(--font-head); font-weight: 800; color: var(--gold); line-height: 0.95; letter-spacing: -0.02em; margin-top: 0.2rem;">$139</span>
                    </div>
                    <div style="width: 1px; height: 50px; background: rgba(201, 168, 76, 0.25); flex-shrink: 0;"></div>
                    <p style="font-size: 0.95rem; color: var(--mid-gray); margin: 0; line-height: 1.5; font-weight: 400;">
                        Rent or buy wedding, prom, &amp; business suits. Same-day alterations done in-house by expert tailors.
                    </p>
                </div>

                <!-- Value Propositions & Badges (from PDF slides) -->
                <div class="animate-fadeup delay-2 hero-trust-grid">
                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        <span class="hero-svg-icon" style="background: rgba(201,168,76,0.1); border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="9.8" y1="8.2" x2="22" y2="20"></line><line x1="9.8" y1="15.8" x2="22" y2="4"></line></svg>
                        </span>
                        <span class="hero-trust-text">Same-Day Alterations Guaranteed</span>
                    </div>
                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        <span class="hero-svg-icon" style="background: rgba(201,168,76,0.1); border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </span>
                        <span class="hero-trust-text">Guaranteed In-Store Fit</span>
                    </div>
                    <div style="display: flex; gap: 0.75rem; align-items: center;">
                        <span class="hero-svg-icon" style="background: rgba(201,168,76,0.1); border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3h6a3 3 0 0 0-3-3z"></path><path d="M21 10h-4l-3-3H10L7 10H3a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z"></path></svg>
                        </span>
                        <span class="hero-trust-text">Toddler to Big & Tall Sizes</span>
                    </div>
                </div>

                <!-- High Conversion CTAs -->
                <div class="flex gap-4 animate-fadeup delay-3" style="flex-wrap: wrap;">
                    <a href="{{ url('/contact') }}" class="btn btn-gold" id="hero-cta-book" style="display: inline-flex; align-items: center; gap: 0.6rem; padding: 0.9rem 2rem;">
                        <span>Book a Fitting</span> <span style="font-size: 1rem;">→</span>
                    </a>
                    <a href="tel:3237474157" class="btn btn-outline" id="hero-cta-call" style="border-color: var(--gold); color: var(--gold); display: inline-flex; align-items: center; gap: 0.6rem; padding: 0.9rem 2rem;">
                        <span class="hero-svg-icon" style="color: var(--gold); width: 16px; height: 16px;">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </span>
                        <span>Call Now</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Stunning E-commerce Visual Showcase -->
            <div class="animate-fadeup delay-2 hero-image-col" style="position: relative; justify-self: center;">
                {{-- Decorative Backing Glow --}}
                <div style="
                    position: absolute;
                    inset: -20px;
                    background: radial-gradient(circle, rgba(201,168,76,0.15) 0%, transparent 70%);
                    z-index: 0;
                    filter: blur(10px);
                "></div>

                {{-- Product Showcase Frame --}}
                <div style="
                    position: relative;
                    z-index: 1;
                    border: 1px solid rgba(201, 168, 76, 0.4);
                    background: #141414;
                    padding: 1rem;
                    border-radius: 12px;
                    box-shadow: 0 20px 40px rgba(0,0,0,0.6);
                    max-width: 460px;
                    width: 100%;
                    transition: transform 0.3s ease, border-color 0.3s ease;
                " class="hero-showcase-card">
                    <div style="border-radius: 8px; overflow: hidden; position: relative;">
                        <img src="{{ asset('images/hero_suit_model.png') }}" alt="Men's Suits Showroom" style="width: 100%; display: block; object-fit: cover; aspect-ratio: 4/5;">
                        <div style="position: absolute; bottom: 12px; left: 12px; background: rgba(0,0,0,0.8); border: 1px solid var(--gold); border-radius: 4px; padding: 0.4rem 0.8rem;">
                            <span style="color: var(--gold); font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em;">Est. 1992</span>
                        </div>
                    </div>
                    <div style="padding-top: 1rem; text-align: left;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.25rem;">
                            <h3 style="font-family: var(--font-head); color: var(--white); font-size: 1.1rem; margin: 0;">Modern & Custom Fits</h3>
                            <span style="color: var(--gold); font-size: 1.1rem; font-weight: 700;">$139+</span>
                        </div>
                        <p style="color: var(--mid-gray); font-size: 0.8rem; margin: 0; line-height: 1.4;">Tailored in-house with guaranteed alterations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════ TRUST STRIP ════════════════════════════════ --}}
<div class="trust-strip">
    <div class="container">
        <div class="trust-strip__grid">
            <div class="trust-item">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-flex; width:24px; height:24px; justify-content:center; align-items:center; margin-bottom:0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                </span>
                <div class="trust-item__label">Est. 1992 — 30+ Years</div>
            </div>
            <div class="trust-item">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-flex; width:24px; height:24px; justify-content:center; align-items:center; margin-bottom:0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="9.8" y1="8.2" x2="22" y2="20"></line><line x1="9.8" y1="15.8" x2="22" y2="4"></line></svg>
                </span>
                <div class="trust-item__label">Same-Day Alterations</div>
            </div>
            <div class="trust-item">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-flex; width:24px; height:24px; justify-content:center; align-items:center; margin-bottom:0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3h6a3 3 0 0 0-3-3z"></path><path d="M21 10h-4l-3-3H10L7 10H3a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z"></path></svg>
                </span>
                <div class="trust-item__label">Suits from $129</div>
            </div>
            <div class="trust-item">
                <span class="hero-svg-icon" style="color:var(--gold); display:inline-flex; width:24px; height:24px; justify-content:center; align-items:center; margin-bottom:0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </span>
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
                    <div class="hero-svg-icon" style="width: 42px; height: 42px; margin: 0 auto 1rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3h6a3 3 0 0 0-3-3z"></path><path d="M21 10h-4l-3-3H10L7 10H3a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1z"></path></svg>
                    </div>
                    <h3 class="card__title">Suit Rentals</h3>
                    <p class="card__text">High-quality suit rentals in all sizes — from kids to big & tall. Perfect for weddings, proms, and every special occasion.</p>
                    <a href="{{ url('/services') }}#rentals" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Learn More About Suit Rentals</a>
                </div>
            </div>
            <div class="card" id="service-card-tuxedos">
                <div style="padding: 2rem; text-align:center;">
                    <div class="hero-svg-icon" style="width: 42px; height: 42px; margin: 0 auto 1rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12l1 5h-2l-1-3h-2v15H10V5H8l-1 3H5l1-5z"></path><path d="M12 5v4l2 2v2H10v-2l2-2V5z"></path></svg>
                    </div>
                    <h3 class="card__title">Tuxedo Rentals</h3>
                    <p class="card__text">Curated tuxedo styles at affordable prices for black-tie events, weddings, and prom. Vests, ties & accessories available.</p>
                    <a href="{{ url('/services') }}#tuxedos" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Learn More About Tuxedo Rentals</a>
                </div>
            </div>
            <div class="card" id="service-card-alterations">
                <div style="padding: 2rem; text-align:center;">
                    <div class="hero-svg-icon" style="width: 42px; height: 42px; margin: 0 auto 1rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="9.8" y1="8.2" x2="22" y2="20"></line><line x1="9.8" y1="15.8" x2="22" y2="4"></line></svg>
                    </div>
                    <h3 class="card__title">Same-Day Alterations</h3>
                    <p class="card__text">Expert on-the-spot adjustments for a perfect tailored fit. In-house only, open 7 days a week for your convenience.</p>
                    <a href="{{ url('/services') }}#alterations" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Learn More About Same-Day Alterations</a>
                </div>
            </div>
            <div class="card" id="service-card-custom">
                <div style="padding: 2rem; text-align:center;">
                    <div class="hero-svg-icon" style="width: 42px; height: 42px; margin: 0 auto 1rem; color: var(--gold); display: flex; align-items: center; justify-content: center;">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    </div>
                    <h3 class="card__title">Custom Orders</h3>
                    <p class="card__text">Have a specific vision? We'll bring any bespoke design to life — kids' suits, sport coats, matching bridal party sets and more.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-outline" style="margin-top: 1.5rem; font-size: 0.75rem; padding: 0.6rem 1.2rem;">Enquire Now</a>
                </div>
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
