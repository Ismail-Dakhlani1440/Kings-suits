@extends('layouts.app')

@section('title', 'Book an Appointment — Men\'s Suits King Fashion')
@section('meta_description', 'Contact Men\'s Suits King Fashion to book a fitting. Two locations in Ontario & Montclair, CA. Same-day alterations, suit & tuxedo rentals. Call (323) 747-4157.')

@section('content')

{{-- Hero --}}
<div class="page-hero">
    <div class="container">
        <div class="page-hero__inner">
            <p class="section-label">Get In Touch</p>
            <h1 class="page-hero__title">Book a Consultation</h1>
            <div class="gold-rule"></div>
            <p class="page-hero__sub">Take the first step toward your perfect suit. We'll be in touch within 24 hours.</p>
        </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="display:grid; grid-template-columns:3fr 2fr; gap:4rem; align-items:start;">

            {{-- FORM --}}
            <div>
                <p class="section-label">Enquiry Form</p>
                <h2 class="section-title" style="font-size:2rem; margin-bottom:0.5rem;">Let's Start Your Journey</h2>
                <div class="gold-rule"></div>

                @if(session('success'))
                    <div style="background:rgba(201,168,76,0.1); border:1px solid var(--gold); border-radius:4px; padding:1rem 1.25rem; margin-bottom:1.5rem; color:var(--gold);">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url('/contact') }}" method="POST" id="contact-form" style="margin-top:1.5rem;">
                    @csrf

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem;">
                        <div class="form-group">
                            <label class="form-label" for="first_name">First Name *</label>
                            <input class="form-input" type="text" id="first_name" name="first_name" required placeholder="James">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="last_name">Last Name *</label>
                            <input class="form-input" type="text" id="last_name" name="last_name" required placeholder="Whitfield">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email Address *</label>
                        <input class="form-input" type="email" id="email" name="email" required placeholder="james@example.com">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input class="form-input" type="tel" id="phone" name="phone" placeholder="+44 7700 900000">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="service">Service of Interest *</label>
                        <select class="form-select" id="service" name="service" required>
                            <option value="" disabled selected>Select a service…</option>
                            <option value="suit-rental">Suit Rental</option>
                            <option value="tuxedo-rental">Tuxedo Rental</option>
                            <option value="alterations">Same-Day Alterations</option>
                            <option value="wedding">Wedding Party Suits</option>
                            <option value="prom">Prom / Event Suits</option>
                            <option value="kids">Kids' Suits</option>
                            <option value="custom">Custom Order</option>
                            <option value="other">Other Enquiry</option>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="occasion_date">Occasion / Event Date (if applicable)</label>
                        <input class="form-input" type="date" id="occasion_date" name="occasion_date">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">Tell Us More *</label>
                        <textarea class="form-textarea" id="message" name="message" required placeholder="Tell us about your occasion, style preferences, any specific requirements…"></textarea>
                    </div>

                    <div class="form-group" style="display:flex; align-items:flex-start; gap:0.75rem;">
                        <input type="checkbox" id="consent" name="consent" required style="margin-top:3px; accent-color:var(--gold);">
                        <label for="consent" style="font-size:0.8rem; color:var(--mid-gray); line-height:1.6;">
                            I agree to be contacted by Men's Suits King Fashion regarding my enquiry. We will never share your data with third parties.
                        </label>
                    </div>

                    <button type="submit" class="btn btn-gold w-full" id="contact-submit" style="justify-content:center; width:100%; margin-top:0.5rem;">
                        Send Enquiry →
                    </button>
                </form>
            </div>

            {{-- CONTACT SIDEBAR --}}
            <div>
                <p class="section-label">Visit Us</p>
                <h2 class="section-title" style="font-size:1.75rem; margin-bottom:0.5rem;">Our Showrooms</h2>
                <div class="gold-rule"></div>

                <div style="display:flex; flex-direction:column; gap:1.5rem; margin-top:1.5rem;">
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:40px; height:40px; border:1px solid var(--gold); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:1rem;">📍</div>
                        <div>
                            <div style="font-weight:600; color:var(--white); margin-bottom:0.25rem; font-size:0.85rem; text-transform:uppercase; letter-spacing:0.08em;">Ontario</div>
                            <p style="color:var(--mid-gray); font-size:0.9rem; line-height:1.7;">4323 Mills Cir, #103<br>Ontario, CA 91764</p>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:40px; height:40px; border:1px solid var(--gold); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:1rem;">📍</div>
                        <div>
                            <div style="font-weight:600; color:var(--white); margin-bottom:0.25rem; font-size:0.85rem; text-transform:uppercase; letter-spacing:0.08em;">Montclair</div>
                            <p style="color:var(--mid-gray); font-size:0.9rem; line-height:1.7;">5505 Moreno St, 102 &amp; 103<br>Montclair, CA 91763</p>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:40px; height:40px; border:1px solid var(--gold); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:1rem;">☎</div>
                        <div>
                            <div style="font-weight:600; color:var(--white); margin-bottom:0.25rem; font-size:0.85rem; text-transform:uppercase; letter-spacing:0.08em;">Phone</div>
                            <a href="tel:3237474157" style="color:var(--mid-gray); font-size:0.9rem;">(323) 747-4157</a>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:40px; height:40px; border:1px solid var(--gold); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:1rem;">✉</div>
                        <div>
                            <div style="font-weight:600; color:var(--white); margin-bottom:0.25rem; font-size:0.85rem; text-transform:uppercase; letter-spacing:0.08em;">Email</div>
                            <a href="mailto:denisericotta1@gmail.com" style="color:var(--mid-gray); font-size:0.9rem;">denisericotta1@gmail.com</a>
                        </div>
                    </div>
                    <div style="display:flex; gap:1rem; align-items:flex-start;">
                        <div style="width:40px; height:40px; border:1px solid var(--gold); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:1rem;">🕐</div>
                        <div>
                            <div style="font-weight:600; color:var(--white); margin-bottom:0.25rem; font-size:0.85rem; text-transform:uppercase; letter-spacing:0.08em;">Store Hours</div>
                            <p style="color:var(--mid-gray); font-size:0.9rem; line-height:1.7;">
                                Mon – Fri: 10:00 AM – 8:00 PM<br>
                                Sat – Sun: 11:00 AM – 7:00 PM
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Map placeholder --}}
                <div style="margin-top:2rem; border:1px solid #2a2a2a; border-radius:4px; overflow:hidden; background:#1a1a1a;">
                    <iframe
                        id="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.4!2d-117.6!3d34.07!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s4323+Mills+Cir+Ontario+CA+91764!5e0!3m2!1sen!2sus!4v1"
                        width="100%"
                        height="220"
                        style="border:0; display:block;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div style="margin-top:1.5rem; background:rgba(201,168,76,0.08); border:1px solid rgba(201,168,76,0.2); border-radius:4px; padding:1.25rem;">
                    <p style="color:var(--gold); font-size:0.8rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:0.5rem;">Good to Know</p>
                    <p style="color:var(--mid-gray); font-size:0.875rem; line-height:1.7;">
                        ✔ No appointment needed — walk-ins welcome<br>
                        ✔ Same-day alterations in-house only<br>
                        ✔ No shoe rentals available<br>
                        ✔ No delivery — all fittings in store
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
