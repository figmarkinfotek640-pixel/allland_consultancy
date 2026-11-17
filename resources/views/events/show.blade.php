@extends('layouts.app')

@section('title', $event->title . ' - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-blog.jpg') }}" alt="{{ $event->title }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('events.index') }}">Events</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $event->type_label }}</span>
        </div>
        <div class="subpage-badge">{{ $event->type_label }}</div>
      </div>
      <h1 class="subpage-title">{{ $event->title }}</h1>
      <p class="subpage-subtitle">{{ $event->event_date->format('l, F d, Y') }} · {{ $event->formatted_time }} · {{ $event->location }}</p>
    </div>
  </div>
</section>

<!-- EVENT DETAIL & BOOKING FORM -->
<section class="page-section">
  <div class="wrap">
    <div class="grid-2col" style="grid-template-columns: 2fr 1fr; gap: 48px; align-items: start;">
      <div>
        <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:18px;padding:24px 28px;margin-bottom:32px;display:flex;gap:24px;align-items:center;flex-wrap:wrap;">
          <div style="background:#FFFFFF;border:2px solid #0580C1;border-radius:14px;padding:12px 20px;text-align:center;min-width:70px;">
            <div style="font-size:12px;font-weight:800;color:#0580C1;text-transform:uppercase;">{{ $event->month_name }}</div>
            <div style="font-size:28px;font-weight:800;color:#1d253a;line-height:1;">{{ $event->day_number }}</div>
            <div style="font-size:12px;color:#64748b;font-weight:600;">{{ $event->day_of_week }}</div>
          </div>
          <div>
            <div style="font-size:15px;font-weight:800;color:#1d253a;margin-bottom:4px;">Timing: {{ $event->formatted_time }}</div>
            <div style="font-size:14px;color:#64748b;">Venue: <strong>{{ $event->location }}</strong> ({{ ucfirst($event->mode) }})</div>
            <div style="font-size:12px;color:#0580C1;margin-top:4px;font-weight:700;">{{ $event->seats_available }} seats remaining</div>
          </div>
        </div>

        <div style="font-size:15.5px;line-height:1.75;color:#334155;margin-bottom:36px;">
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:24px;color:#1d253a;margin-top:0;margin-bottom:14px;">About This Session</h3>
          <p>{{ $event->description ?: 'Join our senior international education specialists for an interactive counselling and spot admissions evaluation session. Bring your academic transcripts and marklists for instant course matching.' }}</p>
          
          <h4 style="font-size:18px;color:#1d253a;margin-top:24px;margin-bottom:12px;">What You Will Learn:</h4>
          <ul>
            <li>Intakes and admission cut-offs for top universities.</li>
            <li>Cost breakdown, scholarships, and collateral-free loan assistance.</li>
            <li>Visa interview simulation and documentation prerequisites.</li>
            <li>Direct 1-on-1 Q&amp;A with registered foreign admissions mentors.</li>
          </ul>
        </div>

        <div style="display:flex;gap:14px;flex-wrap:wrap;">
          <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20want%20to%20attend%20{{ urlencode($event->title) }}" target="_blank" rel="noopener" class="btn-primary" style="display:inline-flex;padding:12px 26px;">
            Reserve on WhatsApp
          </a>
          <a href="{{ route('events.index') }}" class="btn-ghost" style="padding:12px 24px;">Browse Other Dates</a>
        </div>
      </div>

      <!-- Reservation Sidebar -->
      <aside>
        <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:18px;padding:30px;box-shadow:0 10px 25px rgba(0,0,0,0.05);position:sticky;top:90px;">
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:22px;color:#1d253a;margin-top:0;margin-bottom:8px;">Reserve Free Seat</h3>
          <p style="font-size:13px;color:#64748b;margin-bottom:20px;">Seats are limited to ensure personalized attention.</p>

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="service_interest" value="Event: {{ $event->title }}">

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Full Name *</label>
              <input type="text" name="name" required placeholder="e.g. Arun Kumar" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">WhatsApp / Phone *</label>
              <input type="text" name="phone" required placeholder="+91 98765 43210" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Email Address *</label>
              <input type="email" name="email" required placeholder="name@email.com" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:18px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Country of Interest</label>
              <select name="destination" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;background:#FFFFFF;">
                <option value="Germany">Germany (€0 Tuition)</option>
                <option value="Canada">Canada (PGWP)</option>
                <option value="UK">United Kingdom</option>
                <option value="New Zealand">New Zealand</option>
              </select>
            </div>

            <button type="submit" class="btn-primary" style="width:100%;justify-content:center;padding:12px;">Confirm Registration</button>
          </form>
        </div>
      </aside>
    </div>
  </div>
</section>

@endsection

