@extends('layouts.app')

@section('title', 'Upcoming Events & Free Seminars - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/gallery-global-seminar.jpg') }}" alt="All Land Consultancy Events" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>Events</span>
        </div>
        <div class="subpage-badge">Seminars, Spot Admissions &amp; Webinars</div>
      </div>
      <h1 class="subpage-title">Meet Our Overseas Experts, <span>Ask Every Question</span></h1>
      <p class="subpage-subtitle">Attend free informational seminars at our Aluva office or join our live interactive webinars to get your profile evaluated directly by licensed counsellors.</p>
    </div>
  </div>
</section>

<!-- TRUST & VALUE HIGHLIGHTS STRIP -->
<section class="events-strip-section">
  <div class="wrap">
    <div class="events-value-strip">
      <div class="events-value-item">
        <div class="events-value-icon">🎟️</div>
        <div>
          <h4 class="events-value-title">100% Free Entry</h4>
          <p class="events-value-desc">No registration or counselling charges for students &amp; parents.</p>
        </div>
      </div>
      <div class="events-value-item">
        <div class="events-value-icon">🏛️</div>
        <div>
          <h4 class="events-value-title">Direct Spot Assessment</h4>
          <p class="events-value-desc">Bring your transcripts for instant university eligibility matching.</p>
        </div>
      </div>
      <div class="events-value-item">
        <div class="events-value-icon">👨‍🏫</div>
        <div>
          <h4 class="events-value-title">1-on-1 Profile Mentoring</h4>
          <p class="events-value-desc">Live evaluations with experienced foreign education directors.</p>
        </div>
      </div>
      <div class="events-value-item">
        <div class="events-value-icon">📍</div>
        <div>
          <h4 class="events-value-title">Aluva Office &amp; Zoom</h4>
          <p class="events-value-desc">Join in-person at Laxmanas Tower or stream live anywhere.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EVENTS FILTER & LIST -->
<section class="page-section">
  <div class="wrap">
    <div class="events-index-header">
      <div>
        <p class="sec-tag"><span class="sec-tag-dot"></span> Schedules &amp; Admissions</p>
        <h2 class="sec-h2 events-index-h2">Upcoming Overseas Events</h2>
      </div>

      <div class="filter-row events-filter-row">
        @foreach($eventTypes as $key => $label)
          <a href="{{ route('events.index', ['type' => $key]) }}" class="pill-btn {{ $type === $key ? 'active' : '' }}">
            {{ $label }}
          </a>
        @endforeach
      </div>
    </div>

    <div class="events-grid">
      @forelse($events as $e)
        <article class="event-card">
          <div class="event-card-media">
            <img src="{{ $e->image_url }}" alt="{{ $e->title }}" class="event-card-img" loading="lazy">
            <div class="event-card-overlay"></div>
            
            <div class="event-date-stamp">
              <span class="ev-month">{{ $e->month_name }}</span>
              <span class="ev-day">{{ $e->day_number }}</span>
              <span class="ev-dow">{{ $e->day_of_week }}</span>
            </div>

            <div class="event-card-badges">
              <span class="event-type-badge ev-type-{{ $e->type }}">{{ $e->type_label }}</span>
              <span class="event-mode-badge">{{ $e->mode === 'online' ? 'Live Online' : 'In-Person (Aluva)' }}</span>
            </div>
          </div>

          <div class="event-card-body">
            <div class="event-card-urgency">
              <span class="event-pulse-dot"></span>
              <span>Registration Open · {{ $e->seats_available }} Seats Left</span>
            </div>

            <h3 class="event-card-title">
              <a href="{{ route('events.show', $e->slug) }}">{{ $e->title }}</a>
            </h3>

            <div class="event-card-meta">
              <div class="event-card-meta-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg>
                <span>{{ $e->formatted_time }}</span>
              </div>
              <div class="event-card-meta-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"></path><circle cx="12" cy="10" r="2.5"></circle></svg>
                <span>{{ $e->location }}</span>
              </div>
            </div>

            @if($e->description)
              <p class="event-card-desc">{{ Str::limit($e->description, 110) }}</p>
            @endif

            <div class="event-card-divider" aria-hidden="true">
              <div class="ticket-notch ticket-notch-left"></div>
              <div class="ticket-line"></div>
              <div class="ticket-notch ticket-notch-right"></div>
            </div>

            <div class="event-card-footer">
              <div class="event-card-fee">
                <span class="event-card-fee-label">Entry</span>
                <span class="event-card-fee-val">FREE PASS</span>
              </div>
              <a href="{{ route('events.show', $e->slug) }}" class="event-card-btn">
                <span>Reserve Free Seat</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </div>
        </article>
      @empty
        <div class="events-empty-card">
          <p class="events-empty-text">No events found in this category.</p>
          <div class="events-empty-action">
            <a href="{{ route('events.index') }}" class="btn-primary events-empty-btn">View All Events</a>
          </div>
        </div>
      @endforelse
    </div>

    <div class="events-pagination">
      {{ $events->links() }}
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="cta-banner">
  <div class="cta-banner-bg">
    <img src="{{ asset('images/banner-about.jpg') }}" alt="Consultation" class="banner-bg-img">
  </div>
  <div class="cta-banner-overlay"></div>
  <div class="cta-inner">
    <h2 class="cta-title">Can't make it to our scheduled events?</h2>
    <p class="cta-desc">Book a private 1-on-1 consultation at our Aluva office or schedule a call with our senior abroad counsellors on WhatsApp anytime.</p>
    <div class="cta-btns">
      <a href="{{ route('contact') }}" class="btn-cta-primary">Book 1:1 Consultation</a>
      <a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="btn-cta-wa">Chat on WhatsApp</a>
    </div>
  </div>
</section>

@endsection

