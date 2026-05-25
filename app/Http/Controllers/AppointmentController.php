<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Store a newly created appointment in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'phone'          => 'required|string|max:50',
            'email'          => 'nullable|email|max:255',
            'service'        => 'required|string',
            'preferred_date' => 'required|date',
            'message'        => 'nullable|string',
        ]);

        $serviceReadable = ucwords(str_replace('-', ' ', $request->input('service')));
        $formattedMessage = "[Service: {$serviceReadable}]";
        if ($request->filled('message')) {
            $formattedMessage .= "\n\n" . $request->input('message');
        }

        Appointment::create([
            'name'           => $request->input('name'),
            'phone'          => $request->input('phone'),
            'email'          => $request->input('email'),
            'preferred_date' => $request->input('preferred_date'),
            'message'        => $formattedMessage,
            'status'         => 'pending',
        ]);

        return back()->with('success', 'Thank you! Your appointment booking request has been submitted. We will be in touch within 24 hours to confirm.');
    }
}
