<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminAppointmentController extends Controller
{
    /**
     * Display a listing of appointments with searching, filtering, and pagination.
     */
    public function index(Request $request)
    {
        $query = Appointment::query();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search by name, phone, or email
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $appointments = $query->latest()->paginate(10)->withQueryString();

        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Update the status of an appointment.
     */
    public function updateStatus(Request $request, Appointment $appointment)
    {
        $request->validate([
            'status' => 'required|string|in:pending,confirmed,cancelled',
        ]);

        $appointment->update([
            'status' => $request->status,
        ]);

        return back()->with('success', "Appointment status updated to " . ucfirst($request->status) . " successfully.");
    }

    /**
     * Mark the appointment as contacted.
     */
    public function markContacted(Appointment $appointment)
    {
        $currentMessage = $appointment->message;

        // If not already contacted, prepend the contacted prefix
        if (!str_contains($currentMessage, '[CONTACTED]')) {
            $appointment->update([
                'message' => '[CONTACTED] ' . $currentMessage
            ]);
            return back()->with('success', "Appointment marked as contacted successfully.");
        }

        return back()->with('info', "Appointment was already marked as contacted.");
    }
}
