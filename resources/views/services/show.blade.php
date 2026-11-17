@extends('layouts.app')

@section('title', $service->title . ' - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset($service->image ?: 'images/banner-02.jpg') }}" alt="{{ $service->title }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('services.index') }}">Services</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $service->title }}</span>
        </div>
        <div class="subpage-badge">Professional Service</div>
      </div>
      <h1 class="subpage-title">{{ $service->title }}</h1>
      <p class="subpage-subtitle">{{ $service->excerpt }}</p>
    </div>
  </div>
</section>

<!-- SERVICE DETAIL CONTENT & FORM -->
<section class="page-section">
  <div class="wrap">
    <div class="grid-2col" style="grid-template-columns: 2fr 1fr; gap: 48px; align-items: start;">
      <div>
        @if($service->image)
          <div style="border-radius:18px;overflow:hidden;margin-bottom:32px;box-shadow:0 10px 30px rgba(0,0,0,0.08);">
            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" style="width:100%;height:auto;display:block;max-height:420px;object-fit:cover;">
          </div>
        @endif

        <div style="font-size:15.5px;line-height:1.75;color:#334155;margin-bottom:36px;">
          {!! $service->description ?: '<p>' . e($service->excerpt) . '</p>' !!}
        </div>

        @if(!empty($service->features) && is_array($service->features))
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:18px;padding:28px 32px;margin-bottom:36px;">
            <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:22px;color:#1d253a;margin-top:0;margin-bottom:16px;">Key Service Highlights</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
              @foreach($service->features as $item)
                <div style="display:flex;align-items:flex-start;gap:10px;font-size:13.5px;color:#334155;">
                  <span style="color:#0580C1;font-weight:800;font-size:16px;">✓</span>
                  <span>{{ $item }}</span>
                </div>
              @endforeach
            </div>
          </div>
        @endif

        <div style="display:flex;gap:16px;flex-wrap:wrap;">
          <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20need%20assistance%20with%20{{ urlencode($service->title) }}" target="_blank" rel="noopener" class="btn-primary" style="display:inline-flex;padding:12px 26px;">
            Enquire on WhatsApp
          </a>
          <a href="{{ route('contact') }}" class="btn-ghost" style="padding:12px 24px;">Book Office Appointment</a>
        </div>
      </div>

      <!-- Sidebar Form -->
      <aside>
        <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:18px;padding:30px;box-shadow:0 10px 25px rgba(0,0,0,0.05);position:sticky;top:90px;">
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:22px;color:#1d253a;margin-top:0;margin-bottom:8px;">Request Free Assistance</h3>
          <p style="font-size:13px;color:#64748b;margin-bottom:20px;">Fill this form and our senior counsellor will connect with you directly.</p>

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="service_interest" value="{{ $service->title }}">

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Your Name *</label>
              <input type="text" name="name" required placeholder="e.g. Rahul Nair" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">WhatsApp / Phone *</label>
              <input type="text" name="phone" required placeholder="+91 98765 43210" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Email Address *</label>
              <input type="email" name="email" required placeholder="name@email.com" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Preferred Country</label>
              <select name="destination" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;background:#FFFFFF;">
                <option value="Germany">Germany (Zero Tuition)</option>
                <option value="Canada">Canada (PGWP)</option>
                <option value="UK">United Kingdom</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div style="margin-bottom:18px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Your Query / Background</label>
              <textarea name="message" rows="3" placeholder="Tell us about your education or work history..." style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;"></textarea>
            </div>

            <button type="submit" class="btn-primary" style="width:100%;justify-content:center;padding:12px;">Submit Enquiry</button>
          </form>
        </div>
      </aside>
    </div>
  </div>
</section>

@endsection

