@extends('layouts.admin')

@section('title', 'Manage Appointments')

@section('content')
<div class="animate-fadeup">
    <!-- Header -->
    <div style="display:flex; justify-content:between; align-items:center; margin-bottom:2rem;">
        <div>
            <p class="section-label" style="margin-bottom:0.25rem;">Staff Registry</p>
            <h1 class="section-title" style="font-size:2.25rem; margin-bottom:0.25rem;">Customer Bookings</h1>
            <p style="color:var(--mid-gray); font-size:0.9rem;">Sort, filter, and manage fitting appointments submitted by clients.</p>
        </div>
    </div>

    <!-- Divider -->
    <div class="gold-rule" style="margin-top:0; margin-bottom:2rem;"></div>

    <!-- Banners -->
    @if(session('success'))
        <div style="background:rgba(34,197,94,0.1); border:1px solid #22c55e; border-radius:4px; padding:1rem 1.25rem; margin-bottom:1.5rem; color:#22c55e; font-size:0.9rem;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('info'))
        <div style="background:rgba(201,168,76,0.1); border:1px solid var(--gold); border-radius:4px; padding:1rem 1.25rem; margin-bottom:1.5rem; color:var(--gold); font-size:0.9rem;">
            {{ session('info') }}
        </div>
    @endif

    <!-- Search & Filter Panel -->
    <form action="{{ route('admin.appointments') }}" method="GET" class="filter-panel">
        <div class="filter-group">
            <label for="search" class="form-label" style="color:var(--light-gray); font-size:0.8rem; font-weight:600; text-transform:uppercase;">Search:</label>
            <input type="text" id="search" name="search" value="{{ request('search') }}" placeholder="Name, phone, or email..." style="padding:0.4rem 0.8rem; font-size:0.85rem; border:1px solid #333; background:#222; color:#fff; border-radius:3px;">
        </div>

        <div class="filter-group">
            <label for="status" class="form-label" style="color:var(--light-gray); font-size:0.8rem; font-weight:600; text-transform:uppercase;">Status:</label>
            <select id="status" name="status" style="padding:0.4rem 0.8rem; font-size:0.85rem; border:1px solid #333; background:#222; color:#fff; border-radius:3px;">
                <option value="">All Statuses</option>
                <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ request('status') === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="cancelled" {{ request('status') === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>

        <div style="display:flex; gap:0.5rem; margin-left:auto;">
            <button type="submit" class="btn btn-gold" style="font-size:0.75rem; padding:0.5rem 1.25rem;">
                Apply Filters
            </button>
            @if(request('search') || request('status'))
                <a href="{{ route('admin.appointments') }}" class="btn btn-outline" style="font-size:0.75rem; padding:0.5rem 1.25rem;">
                    Clear
                </a>
            @endif
        </div>
    </form>

    <!-- Table -->
    <div class="admin-table-container">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:18%;">Customer</th>
                    <th style="width:20%;">Contact Info</th>
                    <th style="width:18%;">Preferred Date</th>
                    <th style="width:24%;">Message / Details</th>
                    <th style="width:10%;">Status</th>
                    <th style="width:10%; text-align:right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appt)
                    <tr>
                        <td style="font-weight:600; color:var(--white); vertical-align:top;">
                            {{ $appt->name }}
                        </td>
                        <td style="vertical-align:top;">
                            <div style="display:flex; flex-direction:column; gap:4px;">
                                <span style="font-size:0.85rem;">📞 {{ $appt->phone }}</span>
                                @if($appt->email)
                                    <span style="font-size:0.75rem; color:var(--mid-gray);">✉ {{ $appt->email }}</span>
                                @else
                                    <span style="font-size:0.75rem; color:var(--mid-gray); font-style:italic;">No Email</span>
                                @endif
                            </div>
                        </td>
                        <td style="vertical-align:top;">
                            <div style="font-weight:500;">
                                {{ \Carbon\Carbon::parse($appt->preferred_date)->format('M d, Y') }}
                            </div>
                            <div style="font-size:0.75rem; color:var(--mid-gray); margin-top:2px;">
                                {{ \Carbon\Carbon::parse($appt->preferred_date)->format('h:i A') }}
                            </div>
                        </td>
                        <td style="vertical-align:top; line-height:1.5;">
                            @php
                                $isContacted = str_contains($appt->message, '[CONTACTED]');
                                $displayMsg = $isContacted ? str_replace('[CONTACTED] ', '', $appt->message) : $appt->message;
                            @endphp
                            
                            @if($isContacted)
                                <span style="display:inline-block; font-size:0.65rem; font-weight:700; color:#22c55e; border:1px solid rgba(34,197,94,0.3); background:rgba(34,197,94,0.1); padding:1px 6px; border-radius:3px; text-transform:uppercase; margin-bottom:0.4rem; letter-spacing:0.05em;">
                                    ✓ Contacted
                                </span>
                            @endif
                            <div style="font-size:0.85rem; color:var(--cream); white-space:pre-line;">{{ $displayMsg }}</div>
                        </td>
                        <td style="vertical-align:top;">
                            @if($appt->status === 'pending')
                                <span class="badge badge-pending">Pending</span>
                            @elseif($appt->status === 'confirmed')
                                <span class="badge badge-confirmed">Confirmed</span>
                            @elseif($appt->status === 'cancelled')
                                <span class="badge badge-cancelled">Cancelled</span>
                            @endif
                        </td>
                        <td style="text-align:right; vertical-align:top;">
                            <div style="display:flex; flex-direction:column; gap:0.5rem; align-items:flex-end;">
                                {{-- Status Update triggers --}}
                                @if($appt->status !== 'confirmed')
                                    <form action="{{ route('admin.appointments.update', $appt->id) }}" method="POST" style="margin:0;">
                                        @csrf
                                        <input type="hidden" name="status" value="confirmed">
                                        <button type="submit" class="btn btn-gold" style="font-size:0.7rem; padding:0.3rem 0.75rem; background:#22c55e; color:#fff; border:none; text-transform:none; border-radius:3px; min-width:85px; justify-content:center;">
                                            Confirm
                                        </button>
                                    </form>
                                @endif

                                @if($appt->status !== 'cancelled')
                                    <form action="{{ route('admin.appointments.update', $appt->id) }}" method="POST" style="margin:0;">
                                        @csrf
                                        <input type="hidden" name="status" value="cancelled">
                                        <button type="submit" class="btn btn-outline" style="font-size:0.7rem; padding:0.3rem 0.75rem; border-color:#ef4444; color:#ef4444; text-transform:none; border-radius:3px; min-width:85px; justify-content:center;">
                                            Cancel
                                        </button>
                                    </form>
                                @endif

                                {{-- Mark Contacted trigger --}}
                                @if(!$isContacted)
                                    <form action="{{ route('admin.appointments.contact', $appt->id) }}" method="POST" style="margin:0;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline" style="font-size:0.7rem; padding:0.3rem 0.75rem; border-color:var(--gold); color:var(--gold); text-transform:none; border-radius:3px; min-width:85px; justify-content:center;">
                                            Mark Contacted
                                        </button>
                                    </form>
                                @else
                                    <span style="font-size:0.75rem; color:#22c55e; font-weight:600; padding:0.3rem 0.75rem;">Contacted ✓</span>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align:center; padding:4rem; color:var(--mid-gray);">
                            No appointments match the selected search or filter criteria.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Bespoke Elegant Pagination Grid -->
    @if($appointments->total() > $appointments->perPage())
        <div style="margin-top:1.5rem; display:flex; justify-content:space-between; align-items:center;">
            <div style="font-size:0.85rem; color:var(--mid-gray);">
                Showing <strong>{{ $appointments->firstItem() }}</strong> to <strong>{{ $appointments->lastItem() }}</strong> of <strong>{{ $appointments->total() }}</strong> bookings
            </div>
            <div style="display:flex; gap:0.5rem;">
                @if ($appointments->onFirstPage())
                    <span class="btn btn-outline" style="opacity:0.4; cursor:not-allowed; padding:0.4rem 1rem; font-size:0.75rem; text-transform:none; border-radius:3px;">&laquo; Previous</span>
                @else
                    <a href="{{ $appointments->previousPageUrl() }}" class="btn btn-outline" style="padding:0.4rem 1rem; font-size:0.75rem; text-transform:none; border-radius:3px;">&laquo; Previous</a>
                @endif

                @if ($appointments->hasMorePages())
                    <a href="{{ $appointments->nextPageUrl() }}" class="btn btn-outline" style="padding:0.4rem 1rem; font-size:0.75rem; text-transform:none; border-radius:3px;">Next &raquo;</a>
                @else
                    <span class="btn btn-outline" style="opacity:0.4; cursor:not-allowed; padding:0.4rem 1rem; font-size:0.75rem; text-transform:none; border-radius:3px;">Next &raquo;</span>
                @endif
            </div>
        </div>
    @endif
</div>
@endsection
