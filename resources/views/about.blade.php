@extends('layouts.app')

@section('title', 'About Us - All Land Consultancy | Your Reliable Overseas Education Partner')
@section('meta_description', 'ALL-LAND Consultancy is run by young and dynamic professionals in Aluva, Kerala. Personal assistance is our speciality for admissions, visa assistance, air ticketing, insurance, certificate attestation, and dataflow.')

@section('content')

<!-- 1. SUBPAGE HERO BANNER -->
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
      <h1 class="subpage-title">About All Land Consultancy — <span>Your Reliable Overseas Education Partner</span></h1>
      <p class="subpage-subtitle">Run by young and dynamic professionals dedicated to helping candidates catch up their dreams with integrity, time-saving information, and personal assistance.</p>
    </div>
  </div>
</section>

<!-- 2. FOUNDING PHILOSOPHY & MOTTO BANNER -->
<section class="about-quote-section">
  <div class="wrap">
    <div class="about-quote-box">
      <div class="about-quote-icon">“</div>
      <p class="about-quote-text">“The future belongs to those who can imagine it, design it and execute it. It isn’t something you await, but rather create.”</p>
      <p class="about-quote-author">— The All Land Philosophy</p>
    </div>
  </div>
</section>

<!-- 3. WHO WE ARE & AUTHENTIC AGENCY NARRATIVE -->
<section class="page-section about-story-section">
  <div class="wrap">
    <div class="about-story-grid">
      <!-- Left Narrative Column -->
      <div class="about-narrative-col">
        <span class="sec-tag"><span class="sec-tag-dot"></span> Who We Are</span>
        <h2 class="sec-h2">Helping candidates catch up their dreams through personalized guidance.</h2>
        
        <p class="about-narrative-lead">
          ALL-LAND Consultancy is run by young and dynamic professionals, who helps candidates to catch-up their dreams. We have had numeric successful stories in a short term and we are always ready to assist you in every possible path to achieve your dreams.
        </p>

        <p class="about-narrative-text">
          Our firm has a determined focus to guide our candidates to the best career. Our entire team strongly believes that our success and forward foot prints are directly connected to our every single candidate success.
        </p>

        <p class="about-narrative-text">
          ALL-LAND team strictly comply with a code of ethics and are bestowed with the wealth of experience thereby offering the most innovative and time saving information about admissions, visa assistance, air ticketing, insurance services, certificate attestation, dataflow services and placement assistance that will make the candidates application process effortless. All of our team members have firsthand experience and knowledge about listed above services.
        </p>

        <p class="about-narrative-text">
          We assure you that, at ALL-LAND Consultancy will join hands with you to achieve your professional goals and provide the best solution with low cost and minimum time.
        </p>

        <div class="about-speciality-pill">
          <span class="pill-dot"></span>
          <span>Personal assistance is our speciality.</span>
        </div>

        <div class="about-stats-row">
          <div class="about-stat-card">
            <span class="stat-val">2,500+</span>
            <span class="stat-lbl">Visas Successfully Granted</span>
          </div>
          <div class="about-stat-card stat-orange">
            <span class="stat-val">99.2%</span>
            <span class="stat-lbl">Document Approval Rate</span>
          </div>
          <div class="about-stat-card stat-dark">
            <span class="stat-val">401+</span>
            <span class="stat-lbl">Verified 5-Star Reviews</span>
          </div>
        </div>
      </div>

      <!-- Right Showcase Media Column -->
      <div class="about-media-col">
        <div class="about-graphic-frame">
          <img src="{{ asset('images/edu.png') }}" alt="All Land Consultancy overseas education and visa consultancy services" class="about-edu-img">
          <div class="about-graphic-badge">
            <div class="about-graphic-badge-text">
              <div class="badge-title">Aluva Headquarters • Laxmanas Tower</div>
              <div class="badge-sub">Direct 1-on-1 In-Person &amp; Online Guidance</div>
            </div>
            <a href="{{ route('contact') }}" class="about-badge-btn">Visit Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. MISSION & VISION SECTION -->
<section class="about-mv-section">
  <div class="wrap">
    <div class="about-mv-header">
      <span class="sec-tag"><span class="sec-tag-dot"></span> Purpose &amp; Guiding Principles</span>
      <h2 class="sec-h2">Driven by Purpose. Defined by Integrity.</h2>
      <p class="sec-p">From our Aluva headquarters to world-class university campuses and healthcare institutions worldwide, our vision and mission guide every milestone.</p>
    </div>

    <div class="about-mv-grid">
      <!-- Vision Card -->
      <div class="about-mv-card about-mv-vision">
        <div class="about-mv-card-top">
          <div class="about-mv-icon-wrap vision-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="2" y1="12" x2="22" y2="12"></line>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
          </div>
          <span class="about-mv-badge">OUR VISION</span>
        </div>
        <h3 class="about-mv-title">Empowering Global Aspirations with Ethical Excellence</h3>
        <p class="about-mv-lead">
          To be Kerala’s most trusted, candidate-first overseas education and international placement consultancy, recognized for forging transparent, life-changing pathways to premier global universities and healthcare systems without false promises or hidden costs.
        </p>
        <div class="about-mv-pillars">
          <div class="about-mv-pillar">
            <span class="pillar-check">✓</span>
            <div>
              <strong>Global Footprint, Local Roots:</strong>
              <span>Bridging Kerala’s ambitious students and professionals to leading institutions in Germany, UK, Austria, Georgia, and the Gulf.</span>
            </div>
          </div>
          <div class="about-mv-pillar">
            <span class="pillar-check">✓</span>
            <div>
              <strong>Lifelong Career Impact:</strong>
              <span>Looking beyond mere admissions to ensure long-term career growth, financial security, and personal independence abroad.</span>
            </div>
          </div>
          <div class="about-mv-pillar">
            <span class="pillar-check">✓</span>
            <div>
              <strong>Uncompromising Ethics:</strong>
              <span>Setting the industry benchmark for truthful profile assessments, transparent documentation, and authentic candidate care.</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Mission Card -->
      <div class="about-mv-card about-mv-mission">
        <div class="about-mv-card-top">
          <div class="about-mv-icon-wrap mission-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="m12 14 4-4"></path>
              <path d="M3.34 19a10 10 0 1 1 17.32 0"></path>
              <path d="m9.09 9 3 3L22 2"></path>
            </svg>
          </div>
          <span class="about-mv-badge">OUR MISSION</span>
        </div>
        <h3 class="about-mv-title">Delivering Seamless Pathways to International Careers</h3>
        <p class="about-mv-lead">
          To eliminate paperwork confusion, bureaucratic anxiety, and unnecessary expenses by providing structured, time-saving guidance across every critical stage—delivering personalized one-on-one mentorship that empowers each candidate to achieve their dream with low cost and minimum time.
        </p>
        <div class="about-mv-pillars">
          <div class="about-mv-pillar">
            <span class="pillar-check">✓</span>
            <div>
              <strong>Personal Mentorship at Core:</strong>
              <span>Direct, accessible support from experienced senior counsellors throughout shortlisting, exams, and interviews.</span>
            </div>
          </div>
          <div class="about-mv-pillar">
            <span class="pillar-check">✓</span>
            <div>
              <strong>99.2% Visa &amp; Compliance Precision:</strong>
              <span>Meticulous dossier compilation, financial verification, and primary source verification (DataFlow) to avoid costly delays.</span>
            </div>
          </div>
          <div class="about-mv-pillar">
            <span class="pillar-check">✓</span>
            <div>
              <strong>End-to-End Relocation Care:</strong>
              <span>Standing by candidates with air ticketing, insurance, accommodation, and post-landing assistance until they are securely settled.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. REDESIGNED VERIFIED GOOGLE REVIEWS SECTION (4.9★ / 401+ REVIEWS) -->
<section class="about-reviews-section">
  <div class="wrap">
    <div class="about-reviews-header-wrap">
      <div class="about-reviews-header-left">
        <span class="sec-tag"><span class="sec-tag-dot"></span> Verified Google Reviews</span>
        <h2 class="sec-h2">Trusted by 2,500+ Students &amp; Families</h2>
        <p class="sec-p">Authentic experiences from candidates who achieved their international education and healthcare career milestones with All Land Consultancy.</p>
      </div>

      <div class="about-reviews-header-right">
        <!-- Official Google Scorecard Card -->
        <div class="about-google-score-card">
          <div class="google-logo-box">
            <svg class="google-svg-logo" width="34" height="34" viewBox="0 0 24 24" aria-hidden="true">
              <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
              <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
              <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
              <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
            </svg>
          </div>
          <div class="google-rating-info">
            <div class="google-rating-top">
              <span class="google-rating-num">4.9</span>
              <div class="google-rating-stars-wrap">
                <span class="google-stars-gold">★★★★★</span>
                <span class="google-reviews-count">401+ Google Reviews</span>
              </div>
            </div>
            <div class="google-verified-strip">
              <span class="google-check-icon">✓</span>
              <span>100% Verified Candidate Feedback</span>
            </div>
          </div>
        </div>

        <div class="about-reviews-controls">
          <button type="button" class="about-slider-nav-btn" id="aboutRevPrevBtn" aria-label="Previous Reviews" onclick="slideAboutReviews('prev')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>
          </button>
          <button type="button" class="about-slider-nav-btn" id="aboutRevNextBtn" aria-label="Next Reviews" onclick="slideAboutReviews('next')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </button>
        </div>
      </div>
    </div>

    <div class="about-reviews-slider-wrapper" id="aboutReviewsWrapper">
      <div class="about-reviews-slider-track" id="aboutReviewsTrack">
        <!-- Review 1: Aswathy Babu -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge">Study Abroad Counselling</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“I had a great experience with All Land Consultancy. The staff were very professional and helpful throughout the process. Highly recommended for overseas education.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-blue">A</div>
            <div class="about-user-meta">
              <span class="user-name">Aswathy Babu <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Aluva Candidate • Verified Feedback</span>
            </div>
          </div>
        </article>

        <!-- Review 2: JITHIN P -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge badge-teal">UK Student Visa</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Best consultancy in Aluva. They provided excellent guidance for my UK student visa. The process was smooth and they were always available to clear my doubts.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-indigo">J</div>
            <div class="about-user-meta">
              <span class="user-name">JITHIN P <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">UK Student Route • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 3: Shamin -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge badge-orange">Germany Placement</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Highly recommended for Germany placement. They have deep knowledge about the process and helped me at every stage of my application journey.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-green">S</div>
            <div class="about-user-meta">
              <span class="user-name">Shamin <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Germany Pathway • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 4: Anandu -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge badge-purple">Documentation &amp; Visa</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Professional and reliable service. They handled my documentation with great care and ensured everything was submitted on time.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-purple">A</div>
            <div class="about-user-meta">
              <span class="user-name">Anandu <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Visa Processing • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 5: Riya -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge badge-teal">Visa Dossier Filing</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Great support for visa documentation. Thank you team All Land for making my dream of studying abroad a reality!”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-pink">R</div>
            <div class="about-user-meta">
              <span class="user-name">Riya <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Study Abroad • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 6: Sinto Varghese -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge badge-orange">Overseas Career Guidance</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Good service. I am happy with the guidance I received for my overseas career planning. Highly recommended.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-teal">S</div>
            <div class="about-user-meta">
              <span class="user-name">Sinto Varghese <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Career Planning • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 7: Jeena George -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge">University Shortlisting</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“I had an excellent experience with All Land Consultancy. The team was incredibly supportive and knowledgeable, guiding me through every step.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-blue">J</div>
            <div class="about-user-meta">
              <span class="user-name">Jeena George <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Admissions Route • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 8: Megha Sunny -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge badge-orange">German Student Visa</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Really a great experience. They helped me to get my German Student Visa more easier. Thank you All Land!”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-amber">M</div>
            <div class="about-user-meta">
              <span class="user-name">Megha Sunny <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Germany Student Visa • Verified Review</span>
            </div>
          </div>
        </article>

        <!-- Review 9: Rahul -->
        <article class="about-review-card">
          <div class="about-review-top-bar">
            <span class="about-review-pathway-badge">Study Abroad Route</span>
            <div class="google-micro-logo" title="Google Verified Review">
              <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true">
                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
              </svg>
            </div>
          </div>
          
          <div class="about-review-stars-row">
            <span class="review-stars-amber">★★★★★</span>
            <span class="review-time-stamp">Verified Google Review</span>
          </div>

          <p class="about-review-body">“Good experience overall. The staff was helpful and the process was well-explained. Satisfied with the service.”</p>

          <div class="about-review-footer">
            <div class="about-user-avatar avatar-blue">R</div>
            <div class="about-user-meta">
              <span class="user-name">Rahul <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Global Admissions • Verified Review</span>
            </div>
          </div>
        </article>
      </div>
    </div>

    <!-- Pagination Dots -->
    <div class="about-reviews-slider-dots" id="aboutReviewsDots" role="tablist" aria-label="Reviews slider pagination"></div>
  </div>
</section>

    <!-- Pagination Dots -->
    <div class="about-reviews-slider-dots" id="aboutReviewsDots" role="tablist" aria-label="Reviews slider pagination"></div>
  </div>
</section>

<!-- 6. REASSURING CALL TO ACTION -->
<section class="cta-banner">
  <div class="cta-banner-bg">
    <img src="{{ asset('images/banner-about.jpg') }}" alt="All Land Consultation" class="banner-bg-img">
  </div>
  <div class="cta-banner-overlay"></div>
  <div class="cta-inner">
    <h2 class="cta-title">Ready to take your first step?</h2>
    <p class="cta-desc">Book a free 1-on-1 profile evaluation session with our senior counsellors at our Aluva office or connect directly over WhatsApp.</p>
    <div class="cta-btns">
      <a href="{{ route('contact') }}" class="btn-cta-primary">Book Free Counselling</a>
      <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20would%20like%20to%20know%20more%20about%20your%20services" target="_blank" rel="noopener" class="btn-cta-wa">Chat on WhatsApp</a>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var track = document.getElementById('aboutReviewsTrack');
  var prevBtn = document.getElementById('aboutRevPrevBtn');
  var nextBtn = document.getElementById('aboutRevNextBtn');
  var dotsContainer = document.getElementById('aboutReviewsDots');
  var wrapper = document.getElementById('aboutReviewsWrapper');
  if (!track) return;

  var cards = track.querySelectorAll('.about-review-card');
  if (!cards.length) return;

  function getCardsPerView() {
    if (window.innerWidth <= 640) return 1;
    if (window.innerWidth <= 992) return 2;
    return 3;
  }

  function getPageCount() {
    var perView = getCardsPerView();
    return Math.max(1, cards.length - perView + 1);
  }

  function renderDots() {
    if (!dotsContainer) return;
    dotsContainer.innerHTML = '';
    var pageCount = getPageCount();
    for (var i = 0; i < pageCount; i++) {
      (function(idx) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'about-slider-dot' + (idx === 0 ? ' active' : '');
        dot.setAttribute('aria-label', 'Go to review ' + (idx + 1));
        dot.addEventListener('click', function () {
          goToIndex(idx);
        });
        dotsContainer.appendChild(dot);
      })(i);
    }
  }

  function getStepWidth() {
    var card = cards[0];
    if (!card) return 320;
    return card.offsetWidth + 24;
  }

  function updateSliderState() {
    var scrollLeft = track.scrollLeft;
    var maxScroll = track.scrollWidth - track.clientWidth;
    var step = getStepWidth();
    var activeIdx = Math.round(scrollLeft / step);

    if (prevBtn) {
      prevBtn.disabled = scrollLeft <= 4;
    }
    if (nextBtn) {
      nextBtn.disabled = scrollLeft >= maxScroll - 4;
    }

    if (dotsContainer) {
      var dots = dotsContainer.querySelectorAll('.about-slider-dot');
      dots.forEach(function (dot, idx) {
        if (idx === activeIdx) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }
  }

  function goToIndex(idx) {
    var step = getStepWidth();
    track.scrollTo({
      left: idx * step,
      behavior: 'smooth'
    });
  }

  window.slideAboutReviews = function (dir) {
    var step = getStepWidth();
    var currentScroll = track.scrollLeft;
    var target = dir === 'next' ? currentScroll + step : currentScroll - step;
    track.scrollTo({
      left: target,
      behavior: 'smooth'
    });
  };

  var autoTimer = null;
  function startAutoPlay() {
    stopAutoPlay();
    autoTimer = setInterval(function () {
      var maxScroll = track.scrollWidth - track.clientWidth;
      if (track.scrollLeft >= maxScroll - 10) {
        track.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
        window.slideAboutReviews('next');
      }
    }, 5000);
  }

  function stopAutoPlay() {
    if (autoTimer) {
      clearInterval(autoTimer);
      autoTimer = null;
    }
  }

  if (wrapper) {
    wrapper.addEventListener('mouseenter', stopAutoPlay);
    wrapper.addEventListener('mouseleave', startAutoPlay);
    wrapper.addEventListener('touchstart', stopAutoPlay, { passive: true });
    wrapper.addEventListener('touchend', startAutoPlay, { passive: true });
  }

  track.addEventListener('scroll', updateSliderState, { passive: true });
  window.addEventListener('resize', function () {
    renderDots();
    updateSliderState();
  });

  renderDots();
  updateSliderState();
  startAutoPlay();
});
</script>

@endsection
