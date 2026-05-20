<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/collections', function () {
    return view('collections');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'first_name' => 'required|string|max:100',
        'last_name'  => 'required|string|max:100',
        'email'      => 'required|email|max:255',
        'service'    => 'required|string',
        'message'    => 'required|string|min:10',
        'consent'    => 'required',
    ]);

    // TODO: send email / store in DB
    return back()->with('success', 'Thank you! We\'ll be in touch within 24 hours.');
});
