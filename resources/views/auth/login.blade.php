@extends('layouts.app')

@section('title', 'Admin Login — Men\'s Suits King Fashion')
@section('meta_description', 'Log in to the Men\'s Suits King Fashion Admin Console to manage client fitting appointments and booking requests.')

@section('content')
<section class="section animate-fadeup" style="min-height: 85vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #0a0a0a 0%, #151515 50%, #1a1200 100%); padding-top: calc(var(--nav-h) + 2rem);">
    <div class="container" style="max-width: 480px;">
        <div class="card" style="padding: 2.5rem 2rem; border-color: rgba(201,168,76,0.35); background: #141414; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
            <div style="text-align: center; margin-bottom: 2rem;">
                <h1 style="font-family: var(--font-head); font-size: 2rem; color: var(--white); margin-bottom: 0.5rem;">
                    King<span style="color: var(--gold);">Fashion</span>
                </h1>
                <p style="font-size: 0.8rem; color: var(--gold); text-transform: uppercase; letter-spacing: 0.15em; font-weight: 600;">Admin Console</p>
                <div class="gold-rule gold-rule--center" style="margin-top: 0.75rem; margin-bottom: 1.25rem;"></div>
                <p style="font-size: 0.85rem; color: var(--mid-gray);">Log in to manage appointments & fitting requests.</p>
            </div>

            <!-- Session Status / Errors -->
            @if (session('status'))
                <div style="background: rgba(34, 197, 94, 0.1); border: 1px solid rgba(34, 197, 94, 0.3); color: #22c55e; padding: 0.75rem 1rem; border-radius: 4px; font-size: 0.85rem; margin-bottom: 1.5rem;">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.3); color: #ef4444; padding: 0.75rem 1rem; border-radius: 4px; font-size: 0.85rem; margin-bottom: 1.5rem;">
                    <ul style="list-style: none; padding-left: 0; margin: 0;">
                        @foreach ($errors->all() as $error)
                            <li style="margin-bottom: 0.25rem;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="name@example.com" />
                </div>

                <!-- Password -->
                <div class="form-group" style="margin-top: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                        <label for="password" class="form-label" style="margin-bottom: 0;">Password</label>
                        @if (Route::has('password.request'))
                            <a style="font-size: 0.75rem; color: var(--gold); text-decoration: none;" href="{{ route('password.request') }}">
                                Forgot?
                            </a>
                        @endif
                    </div>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
                </div>

                <!-- Remember Me -->
                <div style="display: flex; align-items: center; margin-top: 1.25rem; margin-bottom: 1.5rem;">
                    <input id="remember_me" type="checkbox" name="remember" style="accent-color: var(--gold); cursor: pointer; width: 15px; height: 15px; margin-right: 0.5rem;" />
                    <label for="remember_me" style="font-size: 0.8rem; color: var(--light-gray); cursor: pointer; user-select: none;">
                        Remember this device
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-gold w-full" style="justify-content: center; padding: 0.875rem 0; width: 100%; border-radius: 3px;">
                    Log In to Console
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Light mode styling helper -->
<style>
body.light-mode section[style*="linear-gradient"] {
    background: linear-gradient(135deg, #EDE8DF 0%, #F5F1EA 50%, #EAE4D8 100%) !important;
}
body.light-mode .card[style*="background"] {
    background: #FFFFFF !important;
    border-color: rgba(168, 135, 58, 0.25) !important;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
}
body.light-mode .card[style*="background"] h1 {
    color: var(--off-black) !important;
}
body.light-mode .card[style*="background"] p[style*="color: var(--mid-gray)"] {
    color: var(--mid-gray) !important;
}
</style>
@endsection
