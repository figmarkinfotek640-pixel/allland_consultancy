@extends('layouts.app')

@section('title', 'Contact Us - All Land Consultancy | Aluva, Ernakulam, Kerala')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-about.jpg') }}" alt="Contact All Land Consultancy" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>Contact Us</span>
        </div>
        <div class="subpage-badge">Aluva Head Office • Kerala</div>
      </div>
      <h1 class="subpage-title">We Are Here to Guide <span>Every Step of Your Journey</span></h1>
      <p class="subpage-subtitle">Visit our office at Pump Junction, Aluva, call our visa counsellors directly, or book a 1-on-1 consultation online. Initial profile assessment is 100% free.</p>
    </div>
  </div>
</section>

<!-- CONTACT FORM & DETAILS -->
<section class="page-section">
  <div class="wrap">
    <div class="contact-layout">

      <!-- Form Column -->
      <div class="contact-form-box">
        <p class="sec-tag"><span class="sec-tag-dot"></span> Free Consultation</p>
        <h2 style="font-family:'DM Serif Display',Georgia,serif;font-size:30px;color:#1d253a;margin:0 0 10px;">Book a Free 1-on-1 Counselling Session</h2>
        <p style="font-size:14.5px;color:#64748b;margin:0 0 28px;line-height:1.6;">Fill out this short form and our senior destination counsellor in Aluva will review your profile and reach out within 24 hours.</p>

        @if(session('success'))
          <div style="background:#ECFDF5;border:1px solid #10B981;color:#065F46;padding:16px 20px;border-radius:12px;margin-bottom:24px;font-size:14.5px;font-weight:600;">
            ✓ {{ session('success') }}
          </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
          @csrf

          <div class="form-row-2">
            <div class="form-field">
              <label for="fullName">Full Name *</label>
              <input type="text" name="name" id="fullName" value="{{ old('name') }}" placeholder="e.g. Rahul Nair" required>
            </div>
            <div class="form-field">
              <label for="phone">Phone / WhatsApp Number *</label>
              <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="+91 98765 43210" required>
            </div>
          </div>

          <div class="form-row-2">
            <div class="form-field">
              <label for="email">Email Address *</label>
              <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="rahul@example.com" required>
            </div>
            <div class="form-field">
              <label for="destination">Target Destination *</label>
              <select name="destination" id="destination" required>
                <option value="">Select Country</option>
                <option value="Germany" {{ old('destination') == 'Germany' ? 'selected' : '' }}>Germany (Zero Tuition)</option>
                <option value="Canada" {{ old('destination') == 'Canada' ? 'selected' : '' }}>Canada (PGWP)</option>
                <option value="United Kingdom" {{ old('destination') == 'United Kingdom' ? 'selected' : '' }}>United Kingdom (1-Yr Master's)</option>
                <option value="New Zealand" {{ old('destination') == 'New Zealand' ? 'selected' : '' }}>New Zealand (Green List)</option>
                <option value="Other" {{ old('destination') == 'Other' ? 'selected' : '' }}>Other / Not Sure Yet</option>
              </select>
            </div>
          </div>

          <div class="form-row-2">
            <div class="form-field">
              <label for="service">Service Needed</label>
              <select name="service_interest" id="service">
                <option value="Study Abroad Admission">Study Abroad Admission</option>
                <option value="Visa Assistance">Visa Assistance</option>
                <option value="German Nursing Ausbildung">German Nursing Ausbildung</option>
                <option value="Healthcare / Nursing Placement">Healthcare / Nursing Placement</option>
                <option value="Certificate Attestation / MEA">Certificate Attestation / MEA</option>
                <option value="German Blocked Account">German Blocked Account</option>
                <option value="Air Ticketing & Insurance">Air Ticketing &amp; Insurance</option>
              </select>
            </div>
            <div class="form-field">
              <label for="qualification">Current Qualification</label>
              <input type="text" name="qualification" id="qualification" value="{{ old('qualification') }}" placeholder="e.g. B.Tech Mechanical / BSc Nursing">
            </div>
          </div>

          <div class="form-field">
            <label for="message">Your Message / Specific Questions</label>
            <textarea name="message" id="message" rows="4" placeholder="Tell us about your budget, backlogs, preferred intake, or questions...">{{ old('message') }}</textarea>
          </div>

          <button type="submit" class="btn-primary" style="width:100%;padding:14px;font-size:15px;justify-content:center;">
            Submit Free Counselling Request →
          </button>
        </form>
      </div>

      <!-- Contact Info Column -->
      <div class="contact-info-panel">
        <div>
          <span class="subpage-badge" style="background:rgba(5,128,193,0.1);color:#0580C1;margin-bottom:14px;display:inline-block;">Visit Our Office</span>
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:24px;color:#1d253a;margin:0 0 16px;">All Land Consultancy</h3>
          <address style="font-style:normal;font-size:14px;color:#475569;line-height:1.65;margin-bottom:24px;">
            Laxmanas Tower, 11/56, Pump Junction,<br>
            Opp. Municipal Office, Periyar Nagar,<br>
            Aluva, Ernakulam, Kerala 683101
          </address>

          <div style="display:flex;flex-direction:column;gap:14px;margin-bottom:30px;">
            <a href="tel:+919074024242" style="display:flex;align-items:center;gap:12px;text-decoration:none;color:#1d253a;font-weight:700;font-size:14px;">
              <span style="width:36px;height:36px;border-radius:50%;background:#E0F2FE;color:#0580C1;display:flex;align-items:center;justify-content:center;font-size:14px;">📞</span>
              +91 9074 024 242
            </a>
            <a href="https://wa.me/918590724242" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:12px;text-decoration:none;color:#16a34a;font-weight:700;font-size:14px;">
              <span style="width:36px;height:36px;border-radius:50%;background:#DCFCE7;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:14px;">💬</span>
              WhatsApp: +91 8590 724 242
            </a>
            <a href="mailto:info@alllandconsultancy.com" style="display:flex;align-items:center;gap:12px;text-decoration:none;color:#0580C1;font-weight:600;font-size:14px;">
              <span style="width:36px;height:36px;border-radius:50%;background:#E0F2FE;color:#0580C1;display:flex;align-items:center;justify-content:center;font-size:14px;">✉️</span>
              info@alllandconsultancy.com
            </a>
          </div>

          <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:14px;padding:18px;">
            <div style="font-weight:800;color:#1d253a;font-size:13.5px;margin-bottom:8px;text-transform:uppercase;">Working Hours</div>
            <div style="font-size:13px;color:#64748b;line-height:1.6;">
              <div><strong>Monday – Saturday:</strong> 9:30 AM – 6:00 PM</div>
              <div><strong>Sunday:</strong> By Prior Appointment</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection

