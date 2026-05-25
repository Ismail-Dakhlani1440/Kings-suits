@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="animate-fadeup">
    <!-- Header -->
    <div style="display:flex; justify-content:between; align-items:center; margin-bottom:2rem;">
        <div>
            <p class="section-label" style="margin-bottom:0.25rem;">Management Console</p>
            <h1 class="section-title" style="font-size:2.25rem; margin-bottom:0.25rem;">Admin Dashboard</h1>
            <p style="color:var(--mid-gray); font-size:0.9rem;">Overview of fitting and booking requests submitted by public clients.</p>
        </div>
        <div style="margin-left:auto;">
            <a href="{{ route('admin.appointments') }}" class="btn btn-gold" style="font-size:0.75rem; padding:0.6rem 1.25rem;">
                Manage All Bookings →
            </a>
        </div>
    </div>

    <!-- Divider -->
    <div class="gold-rule" style="margin-top:0; margin-bottom:2rem;"></div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <p class="stat-card__label">Total Bookings</p>
            <h3 class="stat-card__value">{{ $totalCount }}</h3>
        </div>
        <div class="stat-card" style="border-left:3px solid var(--gold);">
            <p class="stat-card__label">Pending Review</p>
            <h3 class="stat-card__value" style="color:var(--gold);">{{ $pendingCount }}</h3>
        </div>
        <div class="stat-card" style="border-left:3px solid #22c55e;">
            <p class="stat-card__label">Confirmed Fittings</p>
            <h3 class="stat-card__value" style="color:#22c55e;">{{ $confirmedCount }}</h3>
        </div>
        <div class="stat-card" style="border-left:3px solid #ef4444;">
            <p class="stat-card__label">Cancelled Fittings</p>
            <h3 class="stat-card__value" style="color:#ef4444;">{{ $cancelledCount }}</h3>
        </div>
    </div>

    <!-- Recent Bookings Table -->
    <div>
        <h2 class="section-title" style="font-size:1.5rem; margin-bottom:1rem; color:var(--white);">Recent Appointment Requests</h2>
        
        <div class="admin-table-container">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Contact info</th>
                        <th>Preferred Date &amp; Time</th>
                        <th>Status</th>
                        <th style="text-align:right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentAppointments as $appt)
                        <tr>
                            <td style="font-weight:600; color:var(--white);">
                                {{ $appt->name }}
                            </td>
                            <td>
                                <div style="display:flex; flex-direction:column; gap:2px;">
                                    <span>📞 {{ $appt->phone }}</span>
                                    @if($appt->email)
                                        <span style="font-size:0.75rem; color:var(--mid-gray);">✉ {{ $appt->email }}</span>
                                    @else
                                        <span style="font-size:0.75rem; color:var(--mid-gray); font-style:italic;">No Email</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <span style="font-weight:500;">
                                    {{ \Carbon\Carbon::parse($appt->preferred_date)->format('M d, Y @ h:i A') }}
                                </span>
                            </td>
                            <td>
                                @if($appt->status === 'pending')
                                    <span class="badge badge-pending">Pending</span>
                                @elseif($appt->status === 'confirmed')
                                    <span class="badge badge-confirmed">Confirmed</span>
                                @elseif($appt->status === 'cancelled')
                                    <span class="badge badge-cancelled">Cancelled</span>
                                @endif
                            </td>
                            <td style="text-align:right;">
                                <a href="{{ route('admin.appointments') }}?search={{ urlencode($appt->name) }}" class="btn btn-outline" style="font-size:0.7rem; padding:0.4rem 0.8rem; text-transform:none; border-radius:3px;">
                                    Review
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align:center; padding:3rem; color:var(--mid-gray);">
                                No appointments found. Submitted bookings will appear here instantly.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
