@extends('layouts.app')

@section('title', 'Study in ' . $destination->name . ' - All Land Consultancy')
@section('meta_description', Str::limit(strip_tags($destination->blurb ?: $destination->title), 160))

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero dest-hero-section">
  <img src="{{ $destination->banner_image_url }}" alt="Study in {{ $destination->name }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('study-abroad') }}">Study Abroad</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $destination->name }}</span>
        </div>
        @if($destination->hero_badge)
          <div class="subpage-badge dest-badge-pulse">{{ $destination->hero_badge }}</div>
        @endif
      </div>
      
      <h1 class="subpage-title dest-hero-title">
        <span class="dest-hero-flag-badge">
          @if($destination->flag_url)
            <img src="{{ $destination->flag_url }}" alt="{{ $destination->name }}" class="dest-flag-img">
          @else
            <span class="dest-flag-fallback">{{ $destination->flag }}</span>
          @endif
        </span>
        <span>{{ $destination->title ?: 'Study in ' . $destination->name }}</span>
      </h1>
      
      <p class="subpage-subtitle">{{ $destination->blurb }}</p>
      
      <div class="dest-hero-actions">
        <a href="#dest-enquire" class="btn-primary">Book Free 1:1 Counselling</a>
        <a href="#dest-courses" class="btn-ghost dest-hero-btn-ghost">View Available Programs</a>
      </div>

      <!-- Quick Fast Facts Header Strip -->
      <div class="dest-hero-stats-strip">
        <div class="dest-hero-stat-card">
          <span class="dest-hero-stat-icon">🎓</span>
          <div class="dest-hero-stat-info">
            <span class="dest-hero-stat-val">{{ Str::limit($destination->post_study_work ?: 'Up to 3 Yrs', 28) }}</span>
            <span class="dest-hero-stat-lbl">Post-Study Work</span>
          </div>
        </div>
        <div class="dest-hero-stat-card">
          <span class="dest-hero-stat-icon">💶</span>
          <div class="dest-hero-stat-info">
            <span class="dest-hero-stat-val">{{ Str::limit($destination->living_cost ?: 'Moderate', 28) }}</span>
            <span class="dest-hero-stat-lbl">Est. Living Expenses</span>
          </div>
        </div>
        <div class="dest-hero-stat-card">
          <span class="dest-hero-stat-icon">⏰</span>
          <div class="dest-hero-stat-info">
            <span class="dest-hero-stat-val">20 Hrs / Wk</span>
            <span class="dest-hero-stat-lbl">Part-Time Work Rights</span>
          </div>
        </div>
        <div class="dest-hero-stat-card">
          <span class="dest-hero-stat-icon">🌟</span>
          <div class="dest-hero-stat-info">
            <span class="dest-hero-stat-val">{{ Str::limit($destination->tab_badge ?: 'Permanent Residency', 24) }}</span>
            <span class="dest-hero-stat-lbl">Immigration Advantage</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT SECTION (Balanced 2-Column Grid) -->
<section class="page-section dest-page-section">
  <div class="wrap">
    <div class="dest-layout-grid">
      <!-- Main Content Column -->
      <div class="dest-main-col">
        <!-- Hero Media Showcase Card -->
        <div class="dest-media-card">
          <div class="dest-media-wrap">
            <img src="{{ $destination->image_url }}" alt="Education in {{ $destination->name }}" class="dest-media-img">
            <div class="dest-media-overlay-badge">
              <span class="dest-media-badge-dot"></span>
              <span>Study in {{ $destination->name }} Overview</span>
            </div>
          </div>
          @if(!empty($destination->stats) && is_array($destination->stats))
            <div class="dest-floating-stats-grid">
              @foreach($destination->stats as $st)
                <div class="dest-floating-stat-box">
                  <span class="dest-floating-stat-val">{{ $st['val'] ?? '' }}</span>
                  <span class="dest-floating-stat-lbl">{{ $st['lbl'] ?? '' }}</span>
                </div>
              @endforeach
            </div>
          @endif
        </div>

        <!-- Key Advantages Section -->
        @if(!empty($destination->features) && is_array($destination->features))
          <div class="dest-features-card">
            <div class="dest-card-header">
              <span class="sec-tag"><span class="sec-tag-dot"></span> Highlights</span>
              <h2 class="dest-section-title">Key Advantages of Studying in {{ $destination->name }}</h2>
              <p class="dest-section-lead">Explore why international scholars and Indian students choose {{ $destination->name }} for higher education and global careers.</p>
            </div>
            
            <div class="dest-features-grid">
              @foreach($destination->features as $idx => $feat)
                <div class="dest-feature-card">
                  <div class="dest-feature-icon-badge">0{{ $idx + 1 }}</div>
                  <h3 class="dest-feature-title">{{ $feat['title'] ?? '' }}</h3>
                  <p class="dest-feature-desc">{{ $feat['desc'] ?? '' }}</p>
                </div>
              @endforeach
            </div>

            <!-- Value Callout -->
            <div class="dest-tab-callout">
              <div class="dest-callout-icon">🎯</div>
              <div class="dest-callout-body">
                <h4 class="dest-callout-title">The All Land Admission Advantage</h4>
                <p class="dest-callout-text">From strategic university selection and SOP polishing to VFS visa mock sessions and post-landing accommodation support, our dedicated country desk in Aluva, Kerala guides you end-to-end with a 99% visa success rate.</p>
              </div>
            </div>
          </div>
        @endif

        <!-- Comprehensive Study & Settlement Guide -->
        @if(!empty($destination->description))
          <div class="dest-guide-card">
            <div class="dest-card-header">
              <span class="sec-tag"><span class="sec-tag-dot"></span> In-Depth Roadmap</span>
              <h2 class="dest-section-title">Comprehensive Study &amp; Settlement Guide</h2>
              <p class="dest-section-lead">Universities, post-study employment frameworks, and permanent settlement pathways in {{ $destination->name }}.</p>
            </div>
            <div class="dest-prose-content">
              {!! $destination->description !!}
            </div>
          </div>
        @endif

        <!-- Admission & Visa Framework Card -->
        <div class="dest-framework-card">
          <div class="dest-card-header">
            <span class="sec-tag"><span class="sec-tag-dot"></span> Prerequisites</span>
            <h2 class="dest-section-title">Admission &amp; Visa Framework</h2>
            <p class="dest-section-lead">Core eligibility criteria, estimated budgets, post-study work regulations, and mandatory documentation.</p>
          </div>

          <div class="dest-requirements-grid">
            @if($destination->post_study_work)
              <div class="dest-req-item">
                <span class="dest-req-icon">⏱</span>
                <div class="dest-req-content">
                  <h4 class="dest-req-heading">Post-Study Work Permit</h4>
                  <p class="dest-req-text">{{ $destination->post_study_work }}</p>
                </div>
              </div>
            @endif

            @if($destination->living_cost)
              <div class="dest-req-item">
                <span class="dest-req-icon">💶</span>
                <div class="dest-req-content">
                  <h4 class="dest-req-heading">Estimated Living Costs</h4>
                  <p class="dest-req-text">{{ $destination->living_cost }}</p>
                </div>
              </div>
            @endif

            @if($destination->requirements)
              <div class="dest-req-item dest-req-item-full">
                <span class="dest-req-icon">📋</span>
                <div class="dest-req-content">
                  <h4 class="dest-req-heading">Key Eligibility Criteria</h4>
                  <p class="dest-req-text">{{ $destination->requirements }}</p>
                </div>
              </div>
            @endif
          </div>

          <!-- Standard Application Checklist with High-Contrast Crisp Cards -->
          <div class="dest-checklist-card">
            <div class="dest-checklist-header">
              <span class="dest-chk-header-icon">📑</span>
              <h4 class="dest-checklist-title">Standard Application &amp; Visa Checklist:</h4>
            </div>
            <div class="dest-checklist-grid">
              <div class="dest-chk-badge">
                <span class="dest-chk-check">✓</span>
                <span class="dest-chk-text">Passport with 12+ Months Validity</span>
              </div>
              <div class="dest-chk-badge">
                <span class="dest-chk-check">✓</span>
                <span class="dest-chk-text">Official Degree Transcripts &amp; Marksheets</span>
              </div>
              <div class="dest-chk-badge">
                <span class="dest-chk-check">✓</span>
                <span class="dest-chk-text">IELTS / TOEFL / Duolingo Scorecard</span>
              </div>
              <div class="dest-chk-badge">
                <span class="dest-chk-check">✓</span>
                <span class="dest-chk-text">Statement of Purpose (SOP) &amp; Resume</span>
              </div>
              <div class="dest-chk-badge">
                <span class="dest-chk-check">✓</span>
                <span class="dest-chk-text">2 Academic Letters of Recommendation</span>
              </div>
              <div class="dest-chk-badge">
                <span class="dest-chk-check">✓</span>
                <span class="dest-chk-text">Proof of Funds / Blocked Account</span>
              </div>
            </div>
          </div>
        </div>

        <!-- In-Demand Disciplines Tags Block -->
        @if(!empty($destination->popular_courses) && is_array($destination->popular_courses))
          <div class="dest-tags-block">
            <div class="dest-tags-header">
              <span class="dest-tags-icon">🔥</span>
              <h3 class="dest-tags-title">Popular Fields of Study in {{ $destination->name }}</h3>
            </div>
            <div class="dest-tags-row">
              @foreach($destination->popular_courses as $tag)
                <span class="dest-tag-pill">{{ $tag }}</span>
              @endforeach
            </div>
          </div>
        @endif
      </div>

      <!-- Right Column (Sticky balanced widgets) -->
      <aside class="dest-sidebar-col">
        <!-- Lead Inquiry Form Card -->
        <div id="dest-enquire" class="dest-sidebar-card dest-enquire-card">
          <div class="dest-enquire-header">
            <div class="dest-enquire-flag-box">
              @if($destination->flag_url)
                <img src="{{ $destination->flag_url }}" alt="{{ $destination->name }}" class="dest-enquire-flag-img">
              @else
                <span>{{ $destination->flag }}</span>
              @endif
            </div>
            <div>
              <h3 class="dest-enquire-title">Apply for {{ $destination->name }}</h3>
              <p class="dest-enquire-subtitle">Free 1:1 Counselling &amp; Profile Evaluation</p>
            </div>
          </div>

          <form action="{{ route('contact.submit') }}" method="POST" class="dest-form">
            @csrf
            <input type="hidden" name="destination" value="{{ $destination->name }}">
            <input type="hidden" name="service_interest" value="Study in {{ $destination->name }}">

            <div class="form-group">
              <label for="name" class="dest-label">Full Name *</label>
              <input type="text" id="name" name="name" class="dest-input" placeholder="e.g. Rahul Menon" required>
            </div>

            <div class="form-group">
              <label for="phone" class="dest-label">WhatsApp Number *</label>
              <input type="tel" id="phone" name="phone" class="dest-input" placeholder="+91 98470 XXXXX" required>
            </div>

            <div class="form-group">
              <label for="email" class="dest-label">Email Address *</label>
              <input type="email" id="email" name="email" class="dest-input" placeholder="name@example.com" required>
            </div>

            <div class="form-group">
              <label for="qualification" class="dest-label">Current Academic Level</label>
              <input type="text" id="qualification" name="qualification" class="dest-input" placeholder="e.g. B.Tech (72%), Plus Two, B.Com">
            </div>

            <div class="form-group">
              <label for="preferred_intake" class="dest-label">Target Intake</label>
              <select id="preferred_intake" name="preferred_intake" class="dest-input">
                <option value="Winter 2027">Winter 2027 (Oct / Nov)</option>
                <option value="Summer 2027">Summer 2027 (Mar / Apr)</option>
                <option value="Autumn 2027" selected>Autumn / September 2027</option>
                <option value="2028 Intake">2028 Intake</option>
              </select>
            </div>

            <button type="submit" class="btn-primary dest-submit-btn">
              Claim Free Profile Assessment →
            </button>
          </form>

          <div class="dest-sidebar-contact-links">
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20am%20interested%20in%20studying%20in%20{{ urlencode($destination->name) }}" target="_blank" rel="noopener" class="dest-whatsapp-link">
              <span class="dest-link-icon">💬</span>
              <span>Chat on WhatsApp (+91 8590 724 242)</span>
            </a>
            <a href="tel:+919074024242" class="dest-call-link">
              <span class="dest-link-icon">📞</span>
              <span>Call Senior Advisor (+91 9074 024 242)</span>
            </a>
          </div>
        </div>

        <!-- Quick Facts At-A-Glance Card -->
        <div class="dest-sidebar-card dest-facts-card">
          <div class="dest-facts-header">
            <span class="dest-facts-badge">QUICK FACT SHEET</span>
            <h3 class="dest-facts-title">{{ $destination->name }} at a Glance</h3>
          </div>
          <ul class="dest-facts-list">
            <li class="dest-fact-item">
              <span class="dest-fact-label">🎓 Degree Levels</span>
              <span class="dest-fact-val">Bachelors, Masters, PhD</span>
            </li>
            <li class="dest-fact-item">
              <span class="dest-fact-label">⏱ Post-Study Work</span>
              <span class="dest-fact-val">{{ Str::limit($destination->post_study_work ?: 'Up to 3 Years', 28) }}</span>
            </li>
            <li class="dest-fact-item">
              <span class="dest-fact-label">💶 Living Expenses</span>
              <span class="dest-fact-val">{{ Str::limit($destination->living_cost ?: 'Moderate', 28) }}</span>
            </li>
            <li class="dest-fact-item">
              <span class="dest-fact-label">💼 Part-Time Work</span>
              <span class="dest-fact-val">20 Hours / Week</span>
            </li>
            <li class="dest-fact-item">
              <span class="dest-fact-label">🗣 Language Tests</span>
              <span class="dest-fact-val">IELTS, TOEFL, PTE</span>
            </li>
            <li class="dest-fact-item">
              <span class="dest-fact-label">🌟 Settlement Prospect</span>
              <span class="dest-fact-val">{{ Str::limit($destination->tab_badge ?: 'High PR Opportunity', 24) }}</span>
            </li>
          </ul>
        </div>

        <!-- Other Study Abroad Destinations Nav Card -->
        <div class="dest-sidebar-card dest-other-card">
          <div class="dest-other-card-header">
            <h3 class="dest-other-title">Explore Other Countries</h3>
            <span class="dest-other-count">{{ $allDestinations->count() }} Destinations</span>
          </div>
          <div class="dest-other-list">
            @foreach($allDestinations as $other)
              <a href="{{ route('destinations.show', $other->slug) }}" class="dest-other-item {{ $other->id === $destination->id ? 'active' : '' }}">
                <div class="dest-other-item-left">
                  @if($other->flag_url)
                    <img src="{{ $other->flag_url }}" alt="{{ $other->name }}" class="dest-other-flag-img">
                  @else
                    <span class="dest-other-flag">{{ $other->flag }}</span>
                  @endif
                  <span class="dest-other-name">{{ $other->name }}</span>
                </div>
                <div class="dest-other-item-right">
                  @if($other->tab_badge)
                    <span class="dest-other-badge">{{ $other->tab_badge }}</span>
                  @endif
                  <span class="dest-other-arrow">→</span>
                </div>
              </a>
            @endforeach
          </div>
        </div>

        <!-- Counsellor Helpline Banner -->
        <div class="dest-sidebar-card dest-advisor-card">
          <div class="dest-advisor-badge">CERTIFIED COUNSELLOR</div>
          <h4 class="dest-advisor-heading">Need Personalized Guidance?</h4>
          <p class="dest-advisor-desc">Speak directly with our senior study abroad consultants in Aluva, Kochi. We evaluate your profile, GPA, and financial budget for free.</p>
          <div class="dest-advisor-actions">
            <a href="tel:+918590724242" class="dest-advisor-btn">Call +91 8590 724 242</a>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- FULL-WIDTH FEATURED PROGRAMS SECTION (No right-side white void!) -->
<section id="dest-courses" class="dest-programs-fullwidth-section">
  <div class="wrap">
    <div class="dest-programs-fullwidth-header">
      <div>
        <span class="sec-tag"><span class="sec-tag-dot"></span> In-Demand Qualifications</span>
        <h2 class="sec-h2">Top Courses &amp; Intakes for {{ $destination->name }}</h2>
        <p class="sec-p">Explore popular bachelor’s, master’s, and PG programs with direct university eligibility matching.</p>
      </div>
      <a href="{{ route('courses.index') }}?country={{ urlencode($destination->name) }}" class="dest-view-all-programs-btn">
        View All {{ $destination->name }} Programs →
      </a>
    </div>

    @if($courses->isNotEmpty())
      <div class="dest-programs-cards-grid">
        @foreach($courses as $c)
          <article class="dest-program-card">
            <div class="dest-program-card-body">
              <div class="dest-program-badge-row">
                <span class="dest-program-degree-badge">{{ $c->degree_level }}</span>
                @if($c->tuition_fee)
                  <span class="dest-program-fee-badge">{{ $c->tuition_fee }}</span>
                @endif
              </div>
              <h3 class="dest-program-title">
                <a href="{{ route('courses.show', $c->slug) }}">{{ $c->title }}</a>
              </h3>
              <p class="dest-program-excerpt">{{ Str::limit($c->excerpt, 110) }}</p>
              <div class="dest-program-meta">
                <span>⏱ {{ $c->duration }}</span>
                @if($c->intake)
                  <span>📅 {{ $c->intake }}</span>
                @endif
              </div>
            </div>
            <div class="dest-program-footer">
              <a href="{{ route('courses.show', $c->slug) }}" class="dest-program-detail-btn">
                <span>View Program Details</span>
                <span class="dest-program-detail-arrow">→</span>
              </a>
            </div>
          </article>
        @endforeach
      </div>
    @else
      <div class="dest-courses-empty">
        <p>Multiple university programs available across {{ $destination->name }}. Contact our counselling team for tailored program shortlisting.</p>
        <a href="{{ route('contact') }}" class="btn-primary">Request Free University Shortlist</a>
      </div>
    @endif
  </div>
</section>

<!-- FULL-WIDTH UPCOMING EVENTS & WEBINARS -->
@if($events->isNotEmpty())
  <section class="dest-events-fullwidth-section">
    <div class="wrap">
      <div class="dest-events-fullwidth-header">
        <div>
          <span class="sec-tag"><span class="sec-tag-dot"></span> Direct Interaction</span>
          <h2 class="sec-h2">Upcoming {{ $destination->name }} Events &amp; Webinars</h2>
          <p class="sec-p">Attend free spot admission days, embassy visa webinars, and 1:1 counselling sessions.</p>
        </div>
        <a href="{{ route('events.index') }}" class="dest-view-all-programs-btn">
          View All Events Calendar →
        </a>
      </div>

      <div class="dest-events-cards-grid">
        @foreach($events as $ev)
          <div class="dest-event-card">
            <div class="dest-event-date">
              <span class="ev-month">{{ $ev->month_name }}</span>
              <span class="ev-day">{{ $ev->day_number }}</span>
            </div>
            <div class="dest-event-info">
              <span class="dest-event-type-tag">{{ $ev->type_label }}</span>
              <h4 class="dest-event-title"><a href="{{ route('events.show', $ev->slug) }}">{{ $ev->title }}</a></h4>
              <span class="dest-event-location">📍 {{ $ev->location }}</span>
            </div>
            <a href="{{ route('events.show', $ev->slug) }}" class="dest-event-action-btn">Claim Pass →</a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif

@endsection
