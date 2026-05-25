<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AdminDashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $totalCount     = Appointment::count();
        $pendingCount   = Appointment::where('status', 'pending')->count();
        $confirmedCount = Appointment::where('status', 'confirmed')->count();
        $cancelledCount = Appointment::where('status', 'cancelled')->count();

        $recentAppointments = Appointment::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalCount',
            'pendingCount',
            'confirmedCount',
            'cancelledCount',
            'recentAppointments'
        ));
    }
}
