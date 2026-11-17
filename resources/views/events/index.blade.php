@extends('layouts.app')

@section('title', 'Upcoming Events & Free Seminars - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-blog.jpg') }}" alt="All Land Consultancy Events" class="subpage-hero-bg">
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

<!-- EVENTS FILTER & LIST -->
<section class="page-section">
  <div class="wrap">
    <div class="events-index-header">
      <div>
        <p class="sec-tag"><span class="sec-tag-dot"></span> Schedules &amp; Admissions</p>
        <h2 class="sec-h2 events-index-h2">Upcoming Events</h2>
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
            @if($e->description)
              <p class="ev-desc">{{ Str::limit($e->description, 110) }}</p>
            @endif
            <a href="{{ route('events.show', $e->slug) }}" class="ev-action">
              <span>Reserve Free Seat</span>
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </a>
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

@endsection

