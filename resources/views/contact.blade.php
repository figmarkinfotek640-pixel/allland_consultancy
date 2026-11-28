@extends('layouts.app')

@section('title', 'Contact Us - All Land Consultancy | 3 Offices in Kerala: Aluva & Pala')

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
        <div class="subpage-badge">3 Offices in Kerala • Aluva &amp; Pala</div>
      </div>
      <h1 class="subpage-title">We Are Here to Guide <span>Every Step of Your Journey</span></h1>
      <p class="subpage-subtitle">Visit any of our 3 official branches in Aluva and Pala, call our senior counsellors directly, or schedule a personalized 1-on-1 career consultation online. Free initial assessment.</p>
      
      <div class="contact-hero-pills">
        <span class="hero-pill-item"><span class="pill-check">✓</span> 100% Free Profile Assessment</span>
        <span class="hero-pill-item"><span class="pill-check">✓</span> Walk-in Consultations Welcome</span>
        <span class="hero-pill-item"><span class="pill-check">✓</span> 4.9★ Rated on Google (400+ Reviews)</span>
      </div>
    </div>
  </div>
</section>

<!-- 3 BRANCH OFFICES SECTION -->
<section class="contact-branches-section">
  <div class="wrap">
    <div class="sec-head-center" style="text-align:center; max-width:720px; margin:0 auto 42px;">
      <p class="sec-tag" style="justify-content:center; margin-bottom:12px;"><span class="sec-tag-dot"></span> Official Branches</p>
      <h2 class="sec-title" style="font-family:'DM Serif Display',Georgia,serif; font-size:clamp(28px, 3.5vw, 40px); color:#1D253A; margin:0 0 14px; line-height:1.25;">Visit Our <span style="color:#0580C1;">Offices Across Kerala</span></h2>
      <p class="sec-desc" style="font-size:15.5px; color:#475569; line-height:1.65; margin:0 auto; max-width:620px;">Walk into our fully-equipped branch offices for face-to-face academic counselling, eligibility verification, blocked account support, and visa file preparation.</p>
    </div>

    <div class="contact-branches-grid">
      
      <!-- BRANCH 1: PALA -->
      <div class="contact-branch-card">
        <div class="branch-circle-icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"/>
            <path d="M9 22v-4h6v4"/>
            <path d="M8 6h.01"/>
            <path d="M16 6h.01"/>
            <path d="M12 6h.01"/>
            <path d="M12 10h.01"/>
            <path d="M12 14h.01"/>
            <path d="M16 10h.01"/>
            <path d="M16 14h.01"/>
            <path d="M8 10h.01"/>
            <path d="M8 14h.01"/>
          </svg>
        </div>
        <span class="branch-pill-badge">Branch Office</span>
        <h3 class="branch-title">All Land Tourism Pvt.Ltd</h3>
        <address class="branch-card-address">
          First Floor, Vettukallel Arcade,<br>
          Near SBI Bank Bharananganam, Pala,<br>
          Kerala, 686578
        </address>
        <a href="https://maps.google.com/?q=Vettukallel+Arcade+Bharananganam+Pala+Kerala+686578" target="_blank" rel="noopener" class="branch-directions-btn">
          Get Directions
        </a>
      </div>

      <!-- BRANCH 2: ALUVA -->
      <div class="contact-branch-card">
        <div class="branch-circle-icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"/>
            <path d="M9 22v-4h6v4"/>
            <path d="M8 6h.01"/>
            <path d="M16 6h.01"/>
            <path d="M12 6h.01"/>
            <path d="M12 10h.01"/>
            <path d="M12 14h.01"/>
            <path d="M16 10h.01"/>
            <path d="M16 14h.01"/>
            <path d="M8 10h.01"/>
            <path d="M8 14h.01"/>
          </svg>
        </div>
        <span class="branch-pill-badge">Branch Office</span>
        <h3 class="branch-title">All Land Tourism Pvt.Ltd</h3>
        <address class="branch-card-address">
          Laxmanas Tower, 11/56, Pump Junction<br>
          Opposite Municipal Office, Periyar Nagar Aluva,<br>
          Ernakulam, Kerala, 683101
        </address>
        <a href="https://maps.google.com/?q=All+Land+Consultancy+Laxmanas+Tower+Pump+Junction+Aluva+Kerala+683101" target="_blank" rel="noopener" class="branch-directions-btn">
          Get Directions
        </a>
      </div>

      <!-- BRANCH 3: ADOOR -->
      <div class="contact-branch-card">
        <div class="branch-circle-icon">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"/>
            <path d="M9 22v-4h6v4"/>
            <path d="M8 6h.01"/>
            <path d="M16 6h.01"/>
            <path d="M12 6h.01"/>
            <path d="M12 10h.01"/>
            <path d="M12 14h.01"/>
            <path d="M16 10h.01"/>
            <path d="M16 14h.01"/>
            <path d="M8 10h.01"/>
            <path d="M8 14h.01"/>
          </svg>
        </div>
        <span class="branch-pill-badge">Branch Office</span>
        <h3 class="branch-title">All Land Tourism Pvt.Ltd</h3>
        <address class="branch-card-address">
          Prasan Plaza, Vaidyarupadi,<br>
          Pannivizha, Adoor,<br>
          Pathanamthitta, Kerala, 691523
        </address>
        <a href="https://maps.google.com/?q=Prasan+Plaza+Vaidyarupadi+Pannivizha+Adoor+Pathanamthitta+Kerala+691523" target="_blank" rel="noopener" class="branch-directions-btn">
          Get Directions
        </a>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT FORM & DETAILS SECTION -->
<section class="page-section contact-main-section">
  <div class="wrap">
    <div class="contact-layout">

      <!-- Form Column -->
      <div class="contact-form-box">
        <div class="form-box-badge"><span class="badge-dot"></span> Free Personalized Counselling</div>
        <h2 class="form-box-title">Book a 1-on-1 Profile Assessment</h2>
        <p class="form-box-desc">Submit your details below. A dedicated overseas education and placement counsellor from our nearest branch will review your profile and connect with you within 24 hours.</p>

        @if(session('success'))
          <div class="alert-success-box">
            <div class="alert-success-icon">✓</div>
            <div>
              <strong>Inquiry Received Successfully!</strong>
              <p style="margin:4px 0 0;font-size:13.5px;font-weight:400;">{{ session('success') }}</p>
            </div>
          </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="consultation-form">
          @csrf

          <div class="form-row-2">
            <div class="form-field">
              <label for="fullName">Full Name <span class="req">*</span></label>
              <input type="text" name="name" id="fullName" value="{{ old('name') }}" placeholder="e.g. Rahul Nair" required>
            </div>
            <div class="form-field">
              <label for="phone">Phone / WhatsApp Number <span class="req">*</span></label>
              <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" placeholder="+91 98765 43210" required>
            </div>
          </div>

          <div class="form-row-2">
            <div class="form-field">
              <label for="email">Email Address <span class="req">*</span></label>
              <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="rahul@example.com" required>
            </div>
            <div class="form-field">
              <label for="preferredOffice">Preferred Branch / Meeting Mode</label>
              <select name="preferred_intake" id="preferredOffice">
                <option value="Aluva Head Office (Pump Junction)">Aluva Head Office (Pump Junction)</option>
                <option value="Pala Branch Office (Bharananganam)">Pala Branch Office (Bharananganam)</option>
                <option value="Adoor Branch Office (Pathanamthitta)">Adoor Branch Office (Pathanamthitta)</option>
                <option value="Online / Video Consultation">Online / WhatsApp Video Consultation</option>
              </select>
            </div>
          </div>

          <div class="form-row-2">
            <div class="form-field">
              <label for="destination">Target Destination <span class="req">*</span></label>
              <select name="destination" id="destination" required>
                <option value="">Select Destination</option>
                <option value="Germany" {{ old('destination') == 'Germany' ? 'selected' : '' }}>Germany (Zero Tuition &amp; Nursing)</option>
                <option value="United Kingdom" {{ old('destination') == 'United Kingdom' ? 'selected' : '' }}>United Kingdom (NHS &amp; Universities)</option>
                <option value="Canada" {{ old('destination') == 'Canada' ? 'selected' : '' }}>Canada (Colleges &amp; PGWP)</option>
                <option value="New Zealand" {{ old('destination') == 'New Zealand' ? 'selected' : '' }}>New Zealand (Green List Pathways)</option>
                <option value="Austria" {{ old('destination') == 'Austria' ? 'selected' : '' }}>Austria (Higher Education)</option>
                <option value="Georgia" {{ old('destination') == 'Georgia' ? 'selected' : '' }}>Georgia (Medical &amp; Nursing Programs)</option>
                <option value="Tajikistan" {{ old('destination') == 'Tajikistan' ? 'selected' : '' }}>Tajikistan (NMC Recognized MBBS)</option>
                <option value="Saudi Arabia" {{ old('destination') == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia &amp; Gulf (MOH Placement)</option>
                <option value="Israel" {{ old('destination') == 'Israel' ? 'selected' : '' }}>Israel (PIBA Caregiver Program)</option>
                <option value="Other" {{ old('destination') == 'Other' ? 'selected' : '' }}>Other / Undecided</option>
              </select>
            </div>
            <div class="form-field">
              <label for="service">Service Needed</label>
              <select name="service_interest" id="service">
                <option value="Study Abroad Admission">Study Abroad Admission &amp; University Shortlisting</option>
                <option value="Visa Assistance">Visa Assistance &amp; Embassy Interview Prep</option>
                <option value="German Nursing Ausbildung">German Nursing Ausbildung (Stipend-backed)</option>
                <option value="Healthcare Placement">Healthcare / Nursing Career Placement</option>
                <option value="Certificate Attestation">Certificate Attestation &amp; MEA / HRD Legalization</option>
                <option value="German Blocked Account">German Blocked Account &amp; Financial Dossier</option>
                <option value="Air Ticketing & Insurance">Student Flight Booking &amp; Travel Insurance</option>
              </select>
            </div>
          </div>

          <div class="form-field">
            <label for="qualification">Current Academic / Professional Qualification</label>
            <input type="text" name="qualification" id="qualification" value="{{ old('qualification') }}" placeholder="e.g. Plus Two / B.Tech Computer Science / BSc Nursing with 2 yrs exp">
          </div>

          <div class="form-field">
            <label for="message">Your Message / Specific Questions</label>
            <textarea name="message" id="message" rows="4" placeholder="Mention any specific university, preferred intake (e.g., Winter 2025/2026), language exam score, or doubts...">{{ old('message') }}</textarea>
          </div>

          <button type="submit" class="btn-primary form-submit-btn">
            <span>Schedule Free Consultation</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </form>
      </div>

      <!-- Contact Info & Support Column -->
      <div class="contact-info-panel">
        
        <!-- Central Support Card -->
        <div class="info-sidebar-card">
          <div class="sidebar-card-badge">Instant Support</div>
          <h3 class="sidebar-card-title">Central Helpline &amp; WhatsApp</h3>
          <p class="sidebar-card-desc">Have urgent questions regarding admission deadlines, visa slots, or document attestation? Connect immediately with our support desk.</p>
          
          <div class="sidebar-contact-list">
            <a href="tel:+919074024242" class="sidebar-contact-item">
              <div class="sidebar-icon-circle tel-bg">📞</div>
              <div>
                <span class="sidebar-item-label">Main Helpline</span>
                <span class="sidebar-item-value">+91 9074 024 242</span>
              </div>
            </a>

            <a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="sidebar-contact-item">
              <div class="sidebar-icon-circle wa-bg">💬</div>
              <div>
                <span class="sidebar-item-label">WhatsApp Fast Response</span>
                <span class="sidebar-item-value">+91 8590 724 242</span>
              </div>
            </a>

            <a href="mailto:info@alllandconsultancy.com" class="sidebar-contact-item">
              <div class="sidebar-icon-circle mail-bg">✉️</div>
              <div>
                <span class="sidebar-item-label">General Enquiries</span>
                <span class="sidebar-item-value">info@alllandconsultancy.com</span>
              </div>
            </a>
          </div>
        </div>

        <!-- Working Hours Card -->
        <div class="info-sidebar-card hours-card">
          <div class="hours-header">
            <span class="clock-icon">🕒</span>
            <h4 class="hours-title">Working Hours</h4>
          </div>
          <div class="hours-grid">
            <div class="hours-row">
              <span class="hours-day">Monday – Saturday</span>
              <span class="hours-time">9:30 AM – 6:00 PM</span>
            </div>
            <div class="hours-row">
              <span class="hours-day">Sunday</span>
              <span class="hours-time note-time">Prior Appointment Only</span>
            </div>
            <div class="hours-row">
              <span class="hours-day">Online WhatsApp Support</span>
              <span class="hours-time active-time">24/7 Response Active</span>
            </div>
          </div>
        </div>

        <!-- Trust Badges Card -->
        <div class="info-sidebar-card trust-card">
          <div class="trust-grid">
            <div class="trust-stat">
              <span class="trust-stat-num">4.9 ★</span>
              <span class="trust-stat-label">Google Rating (400+ Reviews)</span>
            </div>
            <div class="trust-stat">
              <span class="trust-stat-num">99.2%</span>
              <span class="trust-stat-label">Visa Approval Success</span>
            </div>
            <div class="trust-stat">
              <span class="trust-stat-num">10+</span>
              <span class="trust-stat-label">Years of Career Excellence</span>
            </div>
            <div class="trust-stat">
              <span class="trust-stat-num">100%</span>
              <span class="trust-stat-label">Ethical &amp; Transparent</span>
            </div>
          </div>
        </div>

        <!-- Interactive Map Embed (Pump Junction, Aluva Head Office) -->
        <div class="info-sidebar-card map-card">
          <div class="map-card-header">
            <div>
              <h4 class="map-card-title">Aluva Head Office Map</h4>
              <p class="map-card-sub">Laxmanas Tower, Pump Junction, Aluva</p>
            </div>
            <a href="https://maps.google.com/?q=All+Land+Consultancy+Laxmanas+Tower+Pump+Junction+Aluva+Kerala+683101" target="_blank" rel="noopener" class="map-open-link">Open in Maps ↗</a>
          </div>
          <div class="map-frame">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.349666068832!2d76.35334867576595!3d10.111003489998188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0805c8680d2875%3A0xc3b83f3e97022802!2sPump%20Jn%2C%20Aluva%2C%20Kerala%20683101!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
              style="border:0; width:100%; height:100%;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

@endsection
