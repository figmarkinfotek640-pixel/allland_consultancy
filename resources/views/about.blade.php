@extends('layouts.app')

@section('title', 'About Us - All Land Consultancy | Kerala’s Trusted Study Abroad Advisory')

@section('content')

<!-- 3. SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-about.jpg') }}" alt="About All Land Consultancy" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>About Us</span>
        </div>
        <div class="subpage-badge">Est. 2014 • Aluva, Kerala</div>
      </div>
      <h1 class="subpage-title">Kerala's Trusted Gateway to <span>Global Education &amp; Careers</span></h1>
      <p class="subpage-subtitle">Founded on ethics, transparency, and personal mentorship. Helping students and professionals achieve life-changing admissions and visas across Germany, Canada, the UK, and New Zealand.</p>
    </div>
  </div>
</section>

<!-- 4. WHO WE ARE & MISSION -->
<section class="page-section">
  <div class="wrap">
    <div class="grid-2col">
      <div>
        <p class="sec-tag"><span class="sec-tag-dot"></span> Who We Are</p>
        <h2 class="sec-h2">A dedicated team driven by your international success.</h2>
        <p class="sec-p" style="margin-bottom:18px;">
          Headquartered at Pump Junction in Aluva, <strong>All Land Consultancy</strong> was built with a single mission: to provide authentic, transparent, and comprehensive guidance for students and professionals aspiring to study and work abroad.
        </p>
        <p class="sec-p" style="margin-bottom:24px;">
          Unlike mass commercial agencies, our counsellors possess firsthand knowledge of European and Commonwealth education systems, visa regulations, and post-study settlement pathways. We take pride in evaluating each candidate's unique profile, career aspirations, and financial plan to recommend legitimate, high-return destinations.
        </p>
        <div style="display:flex;gap:20px;flex-wrap:wrap;">
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px 20px;flex:1;min-width:160px;">
            <span style="font-size:24px;font-weight:800;color:#0580C1;display:block;">2,500+</span>
            <span style="font-size:12.5px;color:#64748b;font-weight:600;">Visas Successfully Granted</span>
          </div>
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px 20px;flex:1;min-width:160px;">
            <span style="font-size:24px;font-weight:800;color:#D9561A;display:block;">99.2%</span>
            <span style="font-size:12.5px;color:#64748b;font-weight:600;">Document Approval Rate</span>
          </div>
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px 20px;flex:1;min-width:160px;">
            <span style="font-size:24px;font-weight:800;color:#1d253a;display:block;">100%</span>
            <span style="font-size:12.5px;color:#64748b;font-weight:600;">Free Initial Counselling</span>
          </div>
        </div>
      </div>

      <div class="media-frame">
        <img src="{{ asset('images/campus-friends.jpg') }}" alt="All Land Consultancy Students Celebrating Success">
        <div class="media-frame-badge">
          <div>
            <div style="font-weight:800;color:#1d253a;font-size:15px;">Aluva Headquarters</div>
            <div style="font-size:12.5px;color:#64748b;">Direct 1-on-1 In-Person &amp; Online Guidance</div>
          </div>
          <a href="{{ route('contact') }}" class="btn-primary" style="padding:8px 18px;font-size:12.5px;">Visit Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. OUR PILLARS & ETHICS -->
<section class="page-section-alt">
  <div class="wrap">
    <div style="text-align:center;max-width:700px;margin:0 auto 48px;">
      <p class="sec-tag" style="justify-content:center"><span class="sec-tag-dot"></span> Core Values</p>
      <h2 class="sec-h2" style="text-align:center">The principles behind our 99.2% success rate.</h2>
      <p class="sec-p" style="text-align:center">We reject misleading claims and false promises. Every application is handled with meticulous legal diligence and genuine care.</p>
    </div>

    <div class="grid-3col">
      <div class="card-white">
        <div class="card-icon-wrap">🎯</div>
        <h3 class="card-title">100% Transparent Advice</h3>
        <p class="card-desc">Clear disclosure of tuition fees, blocked account amounts, realistic living expenses, and embassy timelines. No hidden charges or surprise costs at any step.</p>
      </div>

      <div class="card-white">
        <div class="card-icon-wrap orange">📜</div>
        <h3 class="card-title">Strict Code of Ethics</h3>
        <p class="card-desc">We represent only accredited, government-recognized universities and verified immigration programs. We never compromise on document authenticity or embassy guidelines.</p>
      </div>

      <div class="card-white">
        <div class="card-icon-wrap">🤝</div>
        <h3 class="card-title">End-to-End Handholding</h3>
        <p class="card-desc">From university shortlisting and SOP editing to visa dossier compilation, VFS mock interviews, airport pickup, and accommodation booking in your study country.</p>
      </div>

      <div class="card-white">
        <div class="card-icon-wrap orange">💼</div>
        <h3 class="card-title">Healthcare &amp; Nursing Focus</h3>
        <p class="card-desc">Specialized placement division assisting nurses, doctors, and allied medical professionals with DataFlow verification, German B2 licensing, and UK NHS recruitment.</p>
      </div>

      <div class="card-white">
        <div class="card-icon-wrap">🌍</div>
        <h3 class="card-title">Global University Network</h3>
        <p class="card-desc">Direct tie-ups with 400+ public and top-tier institutions across Germany, Canada, the United Kingdom, and New Zealand with priority admissions and fee waiver options.</p>
      </div>

      <div class="card-white">
        <div class="card-icon-wrap orange">⭐</div>
        <h3 class="card-title">4.9★ Student Satisfaction</h3>
        <p class="card-desc">Over 401 verified 5-star Google reviews from satisfied candidates and proud parents who trusted All Land to shape their international career.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6. CTA CALL -->
<section class="cta-banner">
  <div class="cta-banner-bg">
    <img src="{{ asset('images/banner-about.jpg') }}" alt="Global University Landmark" class="banner-bg-img">
  </div>
  <div class="cta-banner-overlay"></div>
  <div class="cta-inner">
    <h2 class="cta-title">Ready to take your first step?</h2>
    <p class="cta-desc">Book a free 1-on-1 profile evaluation session with our senior counsellors at our Aluva office or connect directly over video call.</p>
    <div class="cta-btns">
      <a href="{{ route('contact') }}" class="btn-cta-primary">Book Free Counselling</a>
      <a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="btn-cta-wa">Chat on WhatsApp</a>
    </div>
  </div>
</section>

@endsection

