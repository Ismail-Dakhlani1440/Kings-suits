<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Men\'s Suits King Fashion') }} — Admin Console</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- CSS/JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: var(--font-body); background: linear-gradient(135deg, #0a0a0a 0%, #151515 50%, #1a1200 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; color: var(--cream); margin: 0; padding: 2rem 1rem; box-sizing: border-box;">
    
    <div class="container animate-fadeup" style="max-width: 480px; width: 100%;">
        <!-- Brand Logo Header -->
        <div style="text-align: center; margin-bottom: 2rem;">
            <a href="/" style="font-family: var(--font-head); font-size: 2rem; color: var(--white); text-decoration: none; display: inline-block;">
                King<span style="color: var(--gold);">Fashion</span>
            </a>
            <p style="font-size: 0.8rem; color: var(--gold); text-transform: uppercase; letter-spacing: 0.15em; font-weight: 600; margin-top: 0.25rem;">Admin Console</p>
            <div class="gold-rule gold-rule--center" style="margin-top: 0.75rem; margin-bottom: 0;"></div>
        </div>

        <!-- Main Card Body -->
        <div class="card" style="padding: 2.5rem 2rem; border-color: rgba(201,168,76,0.35); background: #141414; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
