@extends('layouts.app')

@section('title', 'All Land Consultancy – Study Abroad & Overseas Education in Kerala')

@section('content')

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     3. HERO SECTION WITH CINEMATIC BANNER
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="top" class="hero">
  <div class="hero-bg-banner">
    <video class="hero-bg-video" autoplay muted loop playsinline preload="auto" poster="{{ asset('images/hero-video-poster.jpg') }}">
      <source src="{{ asset('videos/LATEST MIX.mp4') }}" type="video/mp4">
    </video>
  </div>
  <div class="hero-bg-overlay"></div>

  <div class="hero-inner">
    <div class="hero-left">
      <h1 class="hero-h1">
        Every journey<br>
        starts with<br>
        <span class="accent-word">one step.</span><br>
       
      </h1>

      <p class="hero-p">
        Study, work and settle in <strong>Germany, Canada, the UK and New Zealand</strong>.
        From €0 tuition university admissions to scholarship guidance, visa documentation
        and post-landing support — one dedicated team in Aluva guides every milestone.
      </p>

      <div class="hero-btns">
        <a href="#destinations" class="btn-primary">
          Explore Destinations
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
        </a>
        <a href="{{ route('about') }}" class="btn-ghost">
          About Us
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
        </a>
      </div>

      <div class="hero-stats">
        <div class="hero-stat">
          <span class="hero-stat-num">4.9 <span class="hero-stat-stars">★★★★★</span></span>
          <div class="hero-stat-label">401+ Google Reviews</div>
        </div>
        <div class="hero-stat-div"></div>
        <div class="hero-stat">
          <span class="hero-stat-num">2,500+</span>
          <div class="hero-stat-label">Visas Approved</div>
        </div>
        <div class="hero-stat-div"></div>
        <div class="hero-stat">
          <span class="hero-stat-num">99.2%</span>
          <div class="hero-stat-label">Visa Success Rate</div>
        </div>
        <div class="hero-stat-div"></div>
        <div class="hero-stat">
          <span class="hero-stat-num">100%</span>
          <div class="hero-stat-label">Free Counselling</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     4. RIBBON / ANNOUNCEMENT
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
@if($events->count() > 0)
@php $nextEvent = $events->first(); @endphp
<a href="{{ route('events.index') }}" class="ribbon">
  <div class="ribbon-inner">
    <span class="ribbon-tag">
      <span class="pulse-dot"></span>
      Upcoming {{ $nextEvent->type_label }}
    </span>
    <span class="ribbon-title">{{ $nextEvent->title }}</span>
    <span class="ribbon-info">{{ $nextEvent->event_date->format('D, d M') }} · {{ $nextEvent->location }} · {{ $nextEvent->formatted_time }}</span>
    <span class="ribbon-action">Reserve Free Seat →</span>
  </div>
</a>
@endif

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     5. DESTINATIONS (DYNAMIC COUNTRY TABS)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="destinations" class="destinations">
  <div class="wrap">
    <div class="dest-header-row">
      <div>
        <p class="sec-tag"><span class="sec-tag-dot"></span> Choose Your Destination</p>
        <h2 class="sec-h2 sec-h2-lt">Four of the world's best hubs<br>to study, work and settle.</h2>
        <p class="sec-p sec-p-lt">Globally recognised degrees, zero tuition or high scholarship options, and guaranteed post-study work permits.</p>
      </div>
      <a href="{{ route('contact') }}" class="dest-cta-link">
        Not sure? Ask a counsellor
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
      </a>
    </div>

    <!-- Country Navigation Tabs -->
    <div class="dest-tabs-wrap">
      <div role="tablist" aria-label="Study Abroad Destinations" class="dest-tabs-nav" id="countryTabsNav">
        @foreach($countries as $cCode => $country)
          <button type="button" role="tab" class="dest-tab-btn {{ $cCode === $selectedCountry ? 'active' : '' }}" onclick="switchCountry('{{ $cCode }}')" data-code="{{ $cCode }}">
            <span class="dest-tab-flag">{{ $country['flag'] }}</span>
            <span class="dest-tab-name">{{ $country['name'] }}</span>
            <span class="dest-tab-chip">{{ $country['tabBadge'] }}</span>
          </button>
        @endforeach
      </div>
    </div>

    <!-- Active Country Showcase Card -->
    @foreach($countries as $cCode => $country)
    <div class="dest-showcase-card country-panel {{ $cCode === $selectedCountry ? '' : 'hidden' }}" id="panel-{{ $cCode }}">
      <!-- Left Column: Visual Campus Hero & Key Quick Stats -->
      <div class="dest-showcase-visual">
        <div class="dest-visual-wrap">
          <img src="{{ $country['image'] }}" alt="Study in {{ $country['name'] }}">
          <span class="dest-hero-flag">{{ $country['flag'] }} {{ $country['name'] }}</span>
          <span class="dest-hero-badge">{{ $country['heroBadge'] }}</span>
        </div>
        <div class="dest-quick-stats">
          @foreach($country['stats'] as $s)
            <div class="dest-qstat-box">
              <span class="dest-qstat-val">{{ $s['val'] }}</span>
              <span class="dest-qstat-lbl">{{ $s['lbl'] }}</span>
            </div>
          @endforeach
        </div>
      </div>

      <!-- Right Column: Rich Narrative, Key Pathways, Programs & CTAs -->
      <div class="dest-showcase-content">
        <div>
          <div class="dest-content-eyebrow">
            <span class="dest-eyebrow-pill">{{ $country['eyebrow'] }}</span>
          </div>
          <h3 class="dest-content-title">{{ $country['title'] }}</h3>
          <p class="dest-content-blurb">{{ $country['blurb'] }}</p>
        </div>

        <div class="dest-feature-list">
          @foreach($country['features'] as $f)
            <div class="dest-feature-item">
              <div class="dest-feature-icon">✓</div>
              <div class="dest-feature-text">
                <strong class="dest-feature-title">{{ $f['title'] }}</strong>
                <span class="dest-feature-desc">{{ $f['desc'] }}</span>
              </div>
            </div>
          @endforeach
        </div>

        <div class="dest-programs-wrap">
          <span class="dest-programs-label">In-Demand Disciplines &amp; Pathways</span>
          <div class="dest-programs-tags">
            @foreach($country['tags'] as $tag)
              <span class="dest-tag-chip">{{ $tag }}</span>
            @endforeach
          </div>
        </div>

        <div class="dest-action-row">
          <a href="{{ route('study-abroad', ['country' => $cCode]) }}" class="dest-main-cta">
            <span>Explore {{ $country['name'] }} Courses &amp; Intakes</span>
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </a>
          <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20am%20interested%20in%20studying%20in%20{{ urlencode($country['name']) }}" target="_blank" rel="noopener" class="dest-sub-cta">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <span>Talk to {{ $country['name'] }} Specialist</span>
          </a>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     5b. SPOTLIGHT ADMISSIONS & VALUE SHOWCASE
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="exclusives" class="spotlight-banner-section">
  <div class="wrap">
    <div class="spotlight-card">
      
      <!-- Top Decorative Accent Border -->
      <div class="spotlight-top-accent" aria-hidden="true"></div>

      <div class="spotlight-card-inner">
        <!-- Left Content Area -->
        <div class="spotlight-main">
          <div class="spotlight-badge">
            <span class="spotlight-pulse" aria-hidden="true"></span>
            <span>Priority 2026 – 2027 Intakes Open</span>
          </div>

          <h2 class="spotlight-h2">
            Unlock Your Global Future with
            <span class="spotlight-gradient-text">Kerala’s Premier Advisory</span>
          </h2>

          <p class="spotlight-subtext">
            Admissions open for public universities in <strong>Germany (€0 tuition)</strong>, top Canadian colleges with up to <strong>3-year PGWP</strong>, prestigious <strong>Russell Group UK universities</strong>, and <strong>New Zealand Green List PR</strong> programs.
          </p>

          <!-- Key Benefit Highlights -->
          <div class="spotlight-features">
            <div class="spotlight-feat-item">
              <span class="spotlight-feat-icon" aria-hidden="true">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </span>
              <span>€0 Tuition Universities</span>
            </div>
            <div class="spotlight-feat-item">
              <span class="spotlight-feat-icon" aria-hidden="true">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </span>
              <span>Up to 3-Yr PGWP Canada</span>
            </div>
            <div class="spotlight-feat-item">
              <span class="spotlight-feat-icon" aria-hidden="true">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </span>
              <span>100% Free 1:1 Evaluation</span>
            </div>
          </div>

          <!-- Dual Call to Action Buttons -->
          <div class="spotlight-cta-group">
            <a href="{{ route('contact') }}" class="btn-spotlight-primary">
              <span>Book Free 1:1 Evaluation</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20would%20like%20to%20book%20a%20free%201:1%20evaluation" target="_blank" rel="noopener" class="btn-spotlight-whatsapp">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              <span>Direct WhatsApp Helpline</span>
            </a>
          </div>
        </div>

        <!-- Right Side: Admissions & Trust Hub Card -->
        <div class="spotlight-stats-hub">
          <div class="hub-header">
            <div class="hub-header-badge">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg>
              <span>Admissions &amp; Visa Hub</span>
            </div>
            <span class="hub-header-sub">All Land Overseas · Aluva</span>
          </div>

          <div class="hub-metrics-grid">
            <!-- Metric 1 -->
            <div class="hub-metric-card">
              <div class="hub-metric-top">
                <span class="hub-metric-val val-blue">99.2%</span>
                <span class="hub-metric-badge badge-blue">Verified</span>
              </div>
              <span class="hub-metric-label">Visa Success Rate</span>
            </div>

            <!-- Metric 2 -->
            <div class="hub-metric-card">
              <div class="hub-metric-top">
                <span class="hub-metric-val val-orange">2,500+</span>
                <span class="hub-metric-badge badge-orange">Global</span>
              </div>
              <span class="hub-metric-label">Visas Issued</span>
            </div>

            <!-- Metric 3 -->
            <div class="hub-metric-card">
              <div class="hub-metric-top">
                <span class="hub-metric-val val-sky">€0</span>
                <span class="hub-metric-badge badge-sky">Germany</span>
              </div>
              <span class="hub-metric-label">Tuition-Free Options</span>
            </div>

            <!-- Metric 4 -->
            <div class="hub-metric-card">
              <div class="hub-metric-top">
                <span class="hub-metric-val val-green">100%</span>
                <span class="hub-metric-badge badge-green">Free</span>
              </div>
              <span class="hub-metric-label">1:1 Assessment</span>
            </div>
          </div>

          <!-- Bottom Trust Rating Footer -->
          <div class="hub-footer">
            <div class="hub-avatars">
              <img src="{{ asset('images/student-1.jpg') }}" alt="Student" class="hub-avatar">
              <img src="{{ asset('images/student-2.jpg') }}" alt="Student" class="hub-avatar">
              <img src="{{ asset('images/student-3.jpg') }}" alt="Student" class="hub-avatar">
              <span class="hub-avatar-badge">+2.5k</span>
            </div>
            <div class="hub-rating-text">
              <div class="hub-stars">★★★★★ <span class="hub-score">4.9 / 5.0</span></div>
              <span class="hub-sub">401+ Verified Google Reviews</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     7. DYNAMIC UPCOMING EVENTS & SEMINARS (FROM MYSQL)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="events" class="events-section">
  <div class="wrap">
    <div class="events-header">
      <div class="events-header-text">
        <p class="sec-tag"><span class="sec-tag-dot"></span> Upcoming Events &amp; Webinars</p>
        <h2 class="sec-h2">Meet our experts.<br>Ask every question.</h2>
        <p class="sec-p">Free seminars, spot admission days, and live webinars — leave with clear timelines, university options, and scholarship details.</p>
      </div>
      <div role="group" aria-label="Filter events" class="filter-row">
        <button type="button" class="pill-btn active" onclick="filterEvents('all', this)">All events</button>
        <button type="button" class="pill-btn" onclick="filterEvents('seminar', this)">Seminars &amp; Fairs</button>
        <button type="button" class="pill-btn" onclick="filterEvents('webinar', this)">Webinars</button>
        <button type="button" class="pill-btn" onclick="filterEvents('spot', this)">Spot admissions</button>
      </div>
    </div>

    <div class="events-grid" id="eventsGrid">
      @forelse($events as $e)
        <article class="event-card event-item" data-type="{{ $e->type }}">
          <div class="event-date-block">
            <span class="ev-month">{{ $e->month_name }}</span>
            <span class="ev-day">{{ $e->day_number }}</span>
            <span class="ev-dow">{{ $e->day_of_week }}</span>
          </div>
          <div class="event-info">
            <span class="ev-type ev-type-{{ $e->type }}">{{ $e->type_label }}</span>
            <h3 class="ev-title">{{ $e->title }}</h3>
            <div class="ev-meta">
              <span class="ev-meta-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg>
                {{ $e->formatted_time }}
              </span>
              <span class="ev-meta-item">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"></path><circle cx="12" cy="10" r="2.5"></circle></svg>
                {{ $e->location }}
              </span>
            </div>
            <a href="{{ route('events.show', $e->slug) }}" class="ev-action">
              <span>Register Free Seat</span>
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </article>
      @empty
        <div class="events-empty-card">
          <p class="events-empty-text">No events currently scheduled. Check back soon!</p>
        </div>
      @endforelse
    </div>
    
    <div class="events-footer">
      <a href="{{ route('events.index') }}" class="btn-primary events-view-all">View All Events &amp; Webinars →</a>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     9. PROCESS / ROADMAP
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="process" class="process-section">
  <div class="wrap">
    <div class="process-top-row">
      <div>
        <p class="sec-tag"><span class="sec-tag-dot"></span> Our Proven Roadmap</p>
        <h2 class="sec-h2">From first question to<br>first day on campus.</h2>
      </div>
      <p class="process-side-p">
        Every country, embassy and university works differently. Our counsellors map out every requirement upfront, then stay with you through application, scholarships, visa and arrival — so you are prepared, confident and informed at every stage.
      </p>
    </div>

    <div class="process-grid">
      <div class="process-card">
        <div class="process-card-top">
          <span class="process-num">01</span>
          <div class="process-icon">
            <img src="{{ asset('images/step-counselling.png') }}" alt="Career Counselling">
          </div>
        </div>
        <h3 class="process-title">Career Counselling</h3>
        <p class="process-text">1-on-1 profile evaluation, country suitability, budget planning and career mapping.</p>
      </div>

      <div class="process-card">
        <div class="process-card-top">
          <span class="process-num">02</span>
          <div class="process-icon">
            <img src="{{ asset('images/step-application.png') }}" alt="Course Shortlist">
          </div>
        </div>
        <h3 class="process-title">Course &amp; University</h3>
        <p class="process-text">Shortlist top ranked universities matching your career aspirations and eligibility.</p>
      </div>

      <div class="process-card">
        <div class="process-card-top">
          <span class="process-num">03</span>
          <div class="process-icon">
            <img src="{{ asset('images/step-scholarship.png') }}" alt="Application & SOP">
          </div>
        </div>
        <h3 class="process-title">Application &amp; SOP</h3>
        <p class="process-text">Meticulous documentation, compelling SOPs, LOR drafting and application filing.</p>
      </div>

      <div class="process-card">
        <div class="process-card-top">
          <span class="process-num">04</span>
          <div class="process-icon">
            <img src="{{ asset('images/step-visa.png') }}" alt="Scholarships & Funds">
          </div>
        </div>
        <h3 class="process-title">Scholarships &amp; Funds</h3>
        <p class="process-text">Guidance on merit scholarships, education loans, blocked accounts and financial proof.</p>
      </div>

      <div class="process-card">
        <div class="process-card-top">
          <span class="process-num">05</span>
          <div class="process-icon">
            <img src="{{ asset('images/step-flight.png') }}" alt="Visa Documentation">
          </div>
        </div>
        <h3 class="process-title">Visa Documentation</h3>
        <p class="process-text">Complete visa dossier compilation, VFS appointment booking and mock interviews.</p>
      </div>

      <div class="process-card">
        <div class="process-card-top">
          <span class="process-num">06</span>
          <div class="process-icon">
            <img src="{{ asset('images/step-settle.png') }}" alt="Fly & Settle Abroad">
          </div>
        </div>
        <h3 class="process-title">Fly &amp; Settle Abroad</h3>
        <p class="process-text">Discounted flight bookings, travel insurance, student forex, accommodation &amp; post-landing support.</p>
      </div>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     10. SERVICES (DYNAMIC FROM MYSQL)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="services" class="services-section">
  <div class="wrap">
    <div style="text-align:center;margin-bottom:52px;">
      <p class="sec-tag" style="justify-content:center"><span class="sec-tag-dot"></span> Beyond Admission</p>
      <h2 class="sec-h2" style="text-align:center">Everything you need,<br>under one roof.</h2>
      <p class="sec-p" style="margin:12px auto 0;text-align:center">From visa documentation and certificate attestations to airline tickets, medical dataflow, and nursing Ausbildung.</p>
    </div>

    <div class="services-grid">
      @foreach($services as $srv)
        <div class="service-card">
          <div class="service-img-box">
            <img src="{{ asset($srv->image ?: 'images/service-visa.jpg') }}" alt="{{ $srv->title }}">
            <div class="service-img-grad"></div>
          </div>
          <div class="service-body">
            <h3 class="service-title">{{ $srv->title }}</h3>
            <p class="service-desc">{{ $srv->excerpt }}</p>
            <a href="{{ route('services.show', $srv->slug) }}" class="service-link">
              Explore full service details
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
          </div>
        </div>
      @endforeach
    </div>

    <div style="text-align:center;margin-top:40px;">
      <a href="{{ route('services.index') }}" class="btn-primary" style="display:inline-flex;padding:12px 28px;">View All Comprehensive Services →</a>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     10b. EXCLUSIVE SPOTLIGHT: GERMAN NURSING AUSBILDUNG
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section class="page-section-alt" style="border-top:1px solid #E2E8F0;border-bottom:1px solid #E2E8F0;">
  <div class="wrap">
    <div class="grid-2col" style="align-items:center;">
      <div>
        <span class="subpage-badge" style="background:rgba(217,86,26,0.1);color:#D9561A;border-color:rgba(217,86,26,0.3);">Featured Exclusive Program</span>
        <h2 class="sec-h2" style="color:#1d253a;">German Nursing Ausbildung: <span>Study &amp; Earn €1,000–€1,250/Month</span></h2>
        <p class="sec-p" style="color:#475569;margin-bottom:20px;">
          A government-accredited 3-year vocational nursing apprenticeship in top German hospitals. <strong>100% tuition-free</strong> with a guaranteed monthly stipend throughout your training, leading to a permanent nursing license and European PR.
        </p>
        
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:24px;">
          <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:14px;padding:14px 16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Monthly Stipend</span>
            <span style="font-size:18px;font-weight:800;color:#1d253a;">€1,000 – €1,250</span>
          </div>
          <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:14px;padding:14px 16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Tuition Fees</span>
            <span style="font-size:18px;font-weight:800;color:#D9561A;">€0 (Tuition Free)</span>
          </div>
          <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:14px;padding:14px 16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Language Requirement</span>
            <span style="font-size:18px;font-weight:800;color:#1d253a;">B2 German Level</span>
          </div>
          <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:14px;padding:14px 16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Career Settlement</span>
            <span style="font-size:18px;font-weight:800;color:#1d253a;">Direct PR in 3 Yrs</span>
          </div>
        </div>

        <div style="display:flex;gap:14px;flex-wrap:wrap;">
          <a href="{{ route('exclusives') }}" class="btn-primary" style="padding:13px 26px;">Explore Ausbildung Program →</a>
          <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20am%20interested%20in%20German%20Nursing%20Ausbildung" target="_blank" rel="noopener" class="btn-ghost" style="padding:13px 22px;">Talk to Healthcare Advisor</a>
        </div>
      </div>

      <div class="media-frame">
        <img src="{{ asset('images/service-placement.jpg') }}" alt="German Nursing Ausbildung Students">
        <div class="media-frame-badge">
          <div>
            <div style="font-weight:800;color:#1d253a;font-size:15px;">Aluva &amp; Kannur Enrolments Open</div>
            <div style="font-size:12.5px;color:#64748b;">German B1/B2 training, hospital interview &amp; visa guidance</div>
          </div>
          <span style="background:#D9561A;color:#FFFFFF;padding:4px 12px;border-radius:var(--r-full);font-size:11px;font-weight:800;text-transform:uppercase;">Priority Intake</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     10c. VERIFIED STUDENT SUCCESS REVIEWS (4.9 STARS)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section class="page-section">
  <div class="wrap">
    <div style="text-align:center;max-width:700px;margin:0 auto 48px;">
      <p class="sec-tag" style="justify-content:center"><span class="sec-tag-dot"></span> Student Testimonials</p>
      <h2 class="sec-h2" style="text-align:center;color:#1d253a;">Trusted by 2,500+ students &amp; families across Kerala.</h2>
      <p class="sec-p" style="text-align:center;color:#64748b;">401+ verified 5-star Google reviews. Real stories from students now studying and working in Germany, Canada, the UK, and New Zealand.</p>
    </div>

    <div class="grid-3col">
      <div class="testimonial-card">
        <div>
          <div class="testi-stars">★★★★★</div>
          <p class="testi-quote">"All Land Consultancy made my dream of studying in Germany a reality with zero tuition fees. From university selection to the APS certificate and blocked account, their Aluva team guided me without a single error. Highly recommended!"</p>
        </div>
        <div class="testi-author">
          <div class="testi-avatar">A</div>
          <div>
            <div class="testi-name">Ananthu Krishnan</div>
            <div class="testi-dest">MSc Automotive Engineering • TU Munich, Germany</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div>
          <div class="testi-stars">★★★★★</div>
          <p class="testi-quote">"I had multiple backlogs in my B.Tech and thought Canada was impossible. All Land's counsellors evaluated my profile honestly and secured my admission to a top college in Ontario with a 3-year PGWP. My visa was approved in just 3 weeks!"</p>
        </div>
        <div class="testi-author">
          <div class="testi-avatar" style="background:#D9561A;">S</div>
          <div>
            <div class="testi-name">Sneha George</div>
            <div class="testi-dest">Postgraduate Diploma • Toronto, Canada</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div>
          <div class="testi-stars">★★★★★</div>
          <p class="testi-quote">"As a staff nurse in Kochi, I wanted to move to the UK. All Land guided me step-by-step through CBT, NMC registration, and OSCE. Today I am working as a Band 5 nurse with NHS Trust sponsorship. Thank you All Land!"</p>
        </div>
        <div class="testi-author">
          <div class="testi-avatar" style="background:#1d253a;">M</div>
          <div>
            <div class="testi-name">Merin Varghese</div>
            <div class="testi-dest">Staff Nurse • NHS Trust, United Kingdom</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     11. RECENT BLOG & GUIDES (DYNAMIC FROM MYSQL)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
@if($blogs->count() > 0)
<section class="page-section-alt">
  <div class="wrap">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:40px;flex-wrap:wrap;gap:20px;">
      <div>
        <p class="sec-tag"><span class="sec-tag-dot"></span> Knowledge Hub</p>
        <h2 class="sec-h2" style="margin:0;">Recent Articles &amp; Student Advisories</h2>
      </div>
      <a href="{{ route('blog.index') }}" class="btn-ghost" style="padding:10px 20px;">Browse All Articles →</a>
    </div>

    <div class="grid-3col">
      @foreach($blogs as $post)
        <article class="blog-card">
          <div class="blog-thumb-box">
            <img src="{{ asset($post->image ?: 'images/gallery-germany-tech.jpg') }}" alt="{{ $post->title }}">
            <span class="blog-category-chip">{{ $post->category }}</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Recent' }} • {{ $post->read_time }}</div>
            <h3 class="blog-card-title">{{ $post->title }}</h3>
            <p class="blog-card-excerpt">{{ Str::limit($post->excerpt, 110) }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card-link">Read Full Guide →</a>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
@endif

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     13. CTA BANNER / ENQUIRY SECTION
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="enquire" class="cta-banner">
  <div class="cta-banner-bg">
    <img src="{{ asset('images/banner-about.jpg') }}" alt="Global University Landmark" class="banner-bg-img">
  </div>
  <div class="cta-banner-overlay"></div>
  <div class="cta-inner">
    <h2 class="cta-title">Your dream destination is one conversation away.</h2>
    <p class="cta-desc">Walk into our office in Laxmanas Tower, Aluva or talk to our senior counsellors directly on WhatsApp — initial profile evaluation and counselling is 100% free.</p>
    <div class="cta-btns">
      <a href="{{ route('contact') }}" class="btn-cta-primary">Book Free Counselling</a>
      <a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="btn-cta-wa">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        Chat on WhatsApp
      </a>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script>
  // Interactive Country Switching
  function switchCountry(code) {
    document.querySelectorAll('.dest-tab-btn').forEach(function(btn) {
      btn.classList.toggle('active', btn.getAttribute('data-code') === code);
    });
    document.querySelectorAll('.country-panel').forEach(function(panel) {
      if (panel.id === 'panel-' + code) {
        panel.classList.remove('hidden');
      } else {
        panel.classList.add('hidden');
      }
    });
  }

  // Interactive Event Filtering
  function filterEvents(type, btn) {
    document.querySelectorAll('.filter-row .pill-btn').forEach(function(b) {
      b.classList.remove('active');
    });
    btn.classList.add('active');

    var items = document.querySelectorAll('#eventsGrid .event-item');
    items.forEach(function(item) {
      var itemType = item.getAttribute('data-type');
      if (type === 'all') {
        item.style.display = '';
      } else if (type === 'seminar' && (itemType === 'seminar' || itemType === 'fair' || itemType === 'pre-departure')) {
        item.style.display = '';
      } else if (itemType === type) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  }
</script>
<style>
  .country-panel.hidden {
    display: none !important;
  }
</style>
@endsection

