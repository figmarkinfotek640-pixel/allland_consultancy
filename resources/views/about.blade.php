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
<section class="about-story-section">
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
            <a href="{{ route('contact') }}" class="btn-primary">Visit Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. CORE SERVICES & EXPERTISE (From OG Site Scope) -->
<section class="about-services-section">
  <div class="wrap">
    <div class="about-services-header">
      <span class="sec-tag"><span class="sec-tag-dot"></span> Comprehensive Capabilities</span>
      <h2 class="sec-h2">End-to-End Solutions with Low Cost &amp; Minimum Time</h2>
      <p class="sec-p">Our seasoned team provides first-hand expertise and effortless processing across every critical stage of your international journey.</p>
    </div>

    <div class="about-services-grid">
      <!-- 1. Admissions -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">🎓</div>
        <h3 class="about-pillar-title">Admissions Assistance</h3>
        <p class="about-pillar-desc">Direct shortlisting, application filing, and unconditional offer letters for top-tier universities and colleges across Germany, UK, Austria, Canada, and New Zealand.</p>
      </div>

      <!-- 2. Visa Assistance -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">🛂</div>
        <h3 class="about-pillar-title">Visa Assistance</h3>
        <p class="about-pillar-desc">Thorough dossier compilation, financial verification, blocked account guidance, and embassy interview coaching backed by a 99.2% approval track record.</p>
      </div>

      <!-- 3. Air Ticketing -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">✈️</div>
        <h3 class="about-pillar-title">Air Ticketing</h3>
        <p class="about-pillar-desc">Coordinated student concessional fares, extra luggage allowances, and transit assistance scheduled perfectly with your university intake orientation dates.</p>
      </div>

      <!-- 4. Insurance Services -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">🛡️</div>
        <h3 class="about-pillar-title">Insurance Services</h3>
        <p class="about-pillar-desc">Embassy-compliant overseas health and travel insurance packages that meet Schengen statutory standards and university enrollment prerequisites.</p>
      </div>

      <!-- 5. Certificate Attestation -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">📜</div>
        <h3 class="about-pillar-title">Certificate Attestation</h3>
        <p class="about-pillar-desc">State HRD, Home Department, Ministry of External Affairs (MEA), Apostille, and Embassy legalisation for all educational, professional, and personal documents.</p>
      </div>

      <!-- 6. Dataflow Services -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">🔬</div>
        <h3 class="about-pillar-title">Dataflow Services</h3>
        <p class="about-pillar-desc">Primary Source Verification (PSV) and DataFlow processing for healthcare professionals, registered nurses, doctors, and allied medical practitioners.</p>
      </div>

      <!-- 7. Placement Assistance -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">💼</div>
        <h3 class="about-pillar-title">Placement Assistance</h3>
        <p class="about-pillar-desc">Career guidance, CV formatting to European standards, interview preparation, and specialized employer connections for healthcare and professional placements.</p>
      </div>

      <!-- 8. Code of Ethics & Transparency -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">⚖️</div>
        <h3 class="about-pillar-title">Strict Code of Ethics</h3>
        <p class="about-pillar-desc">Zero hidden charges, transparent fee structures, and strict adherence to international education standards. We prioritize candidate trust above all else.</p>
      </div>

      <!-- 9. Personal Mentorship -->
      <div class="about-pillar-card">
        <div class="about-pillar-icon">🤝</div>
        <h3 class="about-pillar-title">Personal Mentorship</h3>
        <p class="about-pillar-desc">Our hallmark: dedicated senior counsellors assignable to each applicant, ensuring constant accessibility, progress updates, and personalized care throughout.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5. VERIFIED GOOGLE REVIEWS SECTION (4.9★ / 401 REVIEWS) -->
<section class="about-reviews-section">
  <div class="wrap">
    <div class="about-reviews-header-wrap">
      <div>
        <span class="sec-tag"><span class="sec-tag-dot"></span> Verified Google Reviews</span>
        <h2 class="sec-h2">What our candidates say about us.</h2>
        <p class="sec-p">Real experiences from students and professionals who achieved their international goals with All Land Consultancy.</p>
      </div>

      <div class="about-google-score-box">
        <div class="about-google-score-num">4.9</div>
        <div>
          <div class="about-google-stars">★★★★★</div>
          <div class="about-google-review-count">Based on 401+ Google Reviews</div>
        </div>
      </div>
    </div>

    <div class="about-reviews-grid">
      <!-- Review 1 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">A</div>
            <div class="about-user-meta">
              <span class="user-name">Aswathy Babu <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“I had a great experience with All Land Consultancy. The staff were very professional and helpful throughout the process. Highly recommended for overseas education.”</p>
      </article>

      <!-- Review 2 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">J</div>
            <div class="about-user-meta">
              <span class="user-name">JITHIN P <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Best consultancy in Aluva. They provided excellent guidance for my UK student visa. The process was smooth and they were always available to clear my doubts.”</p>
      </article>

      <!-- Review 3 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">S</div>
            <div class="about-user-meta">
              <span class="user-name">Shamin <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Highly recommended for Germany placement. They have deep knowledge about the process and helped me at every stage of my application journey.”</p>
      </article>

      <!-- Review 4 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">A</div>
            <div class="about-user-meta">
              <span class="user-name">Anandu <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Professional and reliable service. They handled my documentation with great care and ensured everything was submitted on time.”</p>
      </article>

      <!-- Review 5 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">R</div>
            <div class="about-user-meta">
              <span class="user-name">Riya <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Great support for visa documentation. Thank you team All Land for making my dream of studying abroad a reality!”</p>
      </article>

      <!-- Review 6 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">S</div>
            <div class="about-user-meta">
              <span class="user-name">Sinto Varghese <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Good service. I am happy with the guidance I received for my overseas career planning. Highly recommended.”</p>
      </article>

      <!-- Review 7 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">J</div>
            <div class="about-user-meta">
              <span class="user-name">Jeena George <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“I had an excellent experience with All Land Consultancy. The team was incredibly supportive and knowledgeable, guiding me through every step.”</p>
      </article>

      <!-- Review 8 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">M</div>
            <div class="about-user-meta">
              <span class="user-name">Megha Sunny <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Really a great experience. They helped me to get my German Student Visa more easier. Thank you All Land!”</p>
      </article>

      <!-- Review 9 -->
      <article class="about-review-card">
        <div class="about-review-header">
          <div class="about-review-user">
            <div class="about-user-avatar">R</div>
            <div class="about-user-meta">
              <span class="user-name">Rahul <span class="verified-icon" title="Verified Review">✓</span></span>
              <span class="review-source">Google Review</span>
            </div>
          </div>
          <div class="about-review-stars">★★★★★</div>
        </div>
        <p class="about-review-body">“Good experience overall. The staff was helpful and the process was well-explained. Satisfied with the service.”</p>
      </article>
    </div>
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

@endsection
