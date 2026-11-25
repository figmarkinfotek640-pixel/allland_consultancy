@extends('layouts.app')

@section('title', $event->title . ' - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="subpage-hero-bg">
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
      <h1 class="subpage-title">{!! \App\Helpers\TitleHelper::twoTone($event->title) !!}</h1>
      <p class="subpage-subtitle">{{ $event->event_date->format('l, F d, Y') }} · {{ $event->formatted_time }} · {{ $event->location }}</p>
    </div>
  </div>
</section>

<!-- EVENT DETAIL & BOOKING SECTION -->
<section class="page-section">
  <div class="wrap">
    <div class="event-detail-grid">
      
      <!-- Main Content Column -->
      <div class="event-detail-main">
        
        <!-- Featured Image Showcase -->
        <div class="event-detail-media">
          <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="event-detail-img">
        </div>

        <!-- Date & Venue Highlight Card -->
        <div class="event-detail-keycard">
          <div class="event-detail-date-box">
            <div class="event-detail-date-month">{{ $event->month_name }}</div>
            <div class="event-detail-date-day">{{ $event->day_number }}</div>
            <div class="event-detail-date-dow">{{ $event->day_of_week }}</div>
          </div>
          <div class="event-detail-keyinfo">
            <div class="event-detail-time">Timing: {{ $event->formatted_time }}</div>
            <div class="event-detail-venue">Venue: <strong>{{ $event->location }}</strong> ({{ ucfirst($event->mode) }})</div>
            <div class="event-detail-seats">
              <span class="event-pulse-dot"></span>
              <span>{{ $event->seats_available }} seats remaining · Free Complimentary Pass</span>
            </div>
          </div>
        </div>

        <!-- Narrative & Agenda -->
        <div class="event-detail-prose">
          <h3>About This Session</h3>
          <p>{{ $event->description ?: 'Join our senior international education specialists for an interactive counselling and spot admissions evaluation session. Bring your academic transcripts and marklists for instant course matching.' }}</p>
          
          <h4>What You Will Learn &amp; Experience:</h4>
          <ul>
            <li>
              <svg class="event-detail-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Intakes and direct admission cut-offs for top universities across Germany, UK, Canada, Austria &amp; New Zealand.</span>
            </li>
            <li>
              <svg class="event-detail-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Tuition breakdown, scholarship eligibility, and collateral-free education loan assistance.</span>
            </li>
            <li>
              <svg class="event-detail-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Embassy visa interview preparation, blocked account setup, and checklist validation.</span>
            </li>
            <li>
              <svg class="event-detail-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Direct 1-on-1 evaluation with certified European and overseas educational counsellors.</span>
            </li>
          </ul>
        </div>

        <!-- Action Links -->
        <div class="event-detail-actions">
          <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20want%20to%20attend%20{{ urlencode($event->title) }}" target="_blank" rel="noopener" class="btn-primary">
            Reserve on WhatsApp
          </a>
          <a href="{{ route('events.index') }}" class="btn-ghost">
            ← Browse Other Dates
          </a>
        </div>
      </div>

      <!-- Reservation Sidebar -->
      <aside>
        <div class="event-reserve-card">
          <span class="event-reserve-badge">Instant Pass</span>
          <h3 class="event-reserve-title">Reserve Free Seat</h3>
          <p class="event-reserve-subtitle">Seats are limited to ensure personalized 1-on-1 evaluation for each student.</p>

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="service_interest" value="Event: {{ $event->title }}">

            <div class="event-form-group">
              <label class="event-form-label">Full Name *</label>
              <input type="text" name="name" required placeholder="e.g. Arun Kumar" class="event-form-input">
            </div>

            <div class="event-form-group">
              <label class="event-form-label">WhatsApp / Phone *</label>
              <input type="text" name="phone" required placeholder="+91 98765 43210" class="event-form-input">
            </div>

            <div class="event-form-group">
              <label class="event-form-label">Email Address *</label>
              <input type="email" name="email" required placeholder="name@email.com" class="event-form-input">
            </div>

            <div class="event-form-group">
              <label class="event-form-label">Country of Interest</label>
              <select name="destination" class="event-form-select">
                <option value="Germany">Germany (€0 Tuition)</option>
                <option value="Canada">Canada (PGWP)</option>
                <option value="UK">United Kingdom</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Austria">Austria</option>
                <option value="Georgia">Georgia (MBBS)</option>
              </select>
            </div>

            <button type="submit" class="btn-primary event-form-submit">Confirm Registration</button>
          </form>

          <div class="event-trust-points">
            <div class="event-trust-item">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>100% Free Attendee Entry · Zero Hidden Costs</span>
            </div>
            <div class="event-trust-item">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Instant Confirmation via WhatsApp / SMS</span>
            </div>
          </div>
        </div>
      </aside>

    </div>

    <!-- Related Upcoming Events -->
    @if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
      <div class="event-related-section">
        <h3 class="event-related-title">Other Upcoming Events &amp; Seminars</h3>
        <div class="events-grid">
          @foreach($upcomingEvents as $e)
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
                  <span>{{ $e->seats_available }} Seats Left</span>
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
          @endforeach
        </div>
      </div>
    @endif

  </div>
</section>

@endsection

