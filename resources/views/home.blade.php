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
        Study, work and settle in <strong>top global destinations</strong>.
        From university admissions and scholarship guidance to visa documentation
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
      Upcoming Events
    </span>
    <span class="ribbon-title">{{ $nextEvent->title }}</span>
    <span class="ribbon-info">{{ $nextEvent->event_date->format('D, d M') }} · {{ $nextEvent->location }} · {{ $nextEvent->formatted_time }}</span>
    <span class="ribbon-action">Reserve Free Seat →</span>
  </div>
</a>
@endif

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     4b. SERVICES CAROUSEL SLIDER (REFERENCE ALLLANDCONSULTANCY.COM)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="services" class="services-slider-section">
  <div class="wrap">
    <div class="services-slider-header">
      <div class="services-slider-title-col">
        <p class="sec-tag"><span class="sec-tag-dot"></span> Core Advisory &amp; Value-Added Services</p>
        <h2 class="sec-h2">Comprehensive Solutions for Every Milestone.</h2>
        <p class="sec-p">From university admissions and visa guidance to certificate attestation, flight ticketing, and post-landing settlement — one dedicated team handles every step of your journey.</p>
      </div>

      <div class="services-slider-controls">
        <button type="button" class="slider-nav-btn slider-prev-btn" id="srvPrevBtn" aria-label="Previous Services" onclick="slideServices('prev')">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>
        </button>
        <button type="button" class="slider-nav-btn slider-next-btn" id="srvNextBtn" aria-label="Next Services" onclick="slideServices('next')">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
        </button>
        <a href="{{ route('services.index') }}" class="services-view-all-pill">View All Services →</a>
      </div>
    </div>

    <div class="services-slider-wrapper">
      <div class="services-slider-track" id="servicesSliderTrack">
        @foreach($services as $index => $srv)
          <article class="service-slide-card" data-index="{{ $index }}">
            <div class="service-slide-media">
              <img src="{{ asset($srv->image ?: 'images/service-visa.jpg') }}" alt="{{ $srv->title }}" class="service-slide-img" loading="lazy">
              <span class="service-slide-badge">
                <span>{{ $srv->icon ?? '✦' }}</span>
                <span>{{ explode('&', explode('–', explode('—', $srv->title)[0])[0])[0] }}</span>
              </span>
            </div>
            <div class="service-slide-body">
              <h3 class="service-slide-title">{{ $srv->title }}</h3>
              <div class="service-slide-divider" aria-hidden="true"></div>
              <p class="service-slide-desc">{{ Str::limit($srv->excerpt, 130) }}</p>
              <a href="{{ route('services.show', $srv->slug) }}" class="service-slide-link">
                <span>Explore Full Details</span>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
              </a>
            </div>
          </article>
        @endforeach
      </div>

      <!-- Pagination Dots -->
      <div role="tablist" aria-label="Services slider pagination" class="services-slider-dots" id="servicesSliderDots"></div>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     4c. INSTAGRAM TESTIMONIALS & COMMUNITY SPOTLIGHT
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="instagram-testimonials" class="insta-section">
  <div class="wrap">
    <div class="insta-header">
      <div class="insta-header-text">
        <p class="sec-tag"><span class="sec-tag-dot insta-tag-dot"></span> Real Student Stories on Instagram Reels</p>
        <h2 class="sec-h2 sec-h2-lt">Life Abroad, Unfiltered.<br>Watch Genuine Student Journeys.</h2>
        <p class="sec-p sec-p-lt">Watch real visa celebrations, university campus tours, and overseas lifestyle reels shared directly by students guided by All Land Consultancy.</p>
      </div>

      <div class="insta-header-controls">
        <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-follow-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
          </svg>
          <span>Follow @all_land_consultancy</span>
        </a>

        <div class="insta-slider-arrows">
          <button type="button" class="slider-nav-btn slider-prev-btn" id="instaPrevBtn" aria-label="Previous Instagram Reel" onclick="slideInsta('prev')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>
          </button>
          <button type="button" class="slider-nav-btn slider-next-btn" id="instaNextBtn" aria-label="Next Instagram Reel" onclick="slideInsta('next')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Instagram Slider Track -->
    <div class="insta-slider-wrapper">
      <div class="insta-slider-track" id="instaSliderTrack">
        
        <!-- Reel 1: Germany -->
        <article class="insta-reel-card" data-index="0">
          <div class="insta-reel-media" onclick="toggleReelPlay(this)">
            <video class="insta-reel-video" src="{{ asset('videos/banner-video.mp4') }}" poster="{{ asset('images/student-1.jpg') }}" playsinline loop muted preload="metadata"></video>
            
            <button type="button" class="insta-reel-play-btn" aria-label="Play Reel" onclick="event.stopPropagation(); toggleReelPlay(this);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
            </button>
          </div>

          <!-- Top Bar -->
          <div class="insta-reel-top-bar">
            <div class="insta-reel-badge-group">
              <span class="insta-reel-pill">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="m9 8 7 4-7 4Z"></path></svg>
                <span>Reels</span>
              </span>
              <span class="insta-reel-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                <span>48.2K</span>
              </span>
            </div>
            <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-top-link" aria-label="View on Instagram">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
            </a>
          </div>

          <!-- Right Action Stack -->
          <div class="insta-reel-actions-stack">
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn" aria-label="Like Video" onclick="toggleReelLike(this, event)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
              </button>
              <span class="insta-reel-action-label" data-base-likes="1428">1.4K</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Comments">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </a>
              <span class="insta-reel-action-label">84</span>
            </div>
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn is-muted" aria-label="Toggle Sound" onclick="toggleReelMute(this, event)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
              </button>
              <span class="insta-reel-action-label">Sound</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Share Reel">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </a>
              <span class="insta-reel-action-label">Share</span>
            </div>
          </div>

          <!-- Bottom Content Overlay -->
          <div class="insta-reel-bottom">
            <div class="insta-reel-author-row">
              <div class="insta-reel-avatar-ring">
                <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy" class="insta-reel-avatar" loading="lazy">
              </div>
              <div class="insta-reel-author-meta">
                <div class="insta-reel-handle-row">
                  <span class="insta-reel-handle">all_land_consultancy</span>
                  <svg class="insta-reel-verified" width="13" height="13" viewBox="0 0 24 24" fill="#0095F6" aria-label="Verified"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.5l-3.5-3.5 1.4-1.4 2.1 2.1 5.3-5.3 1.4 1.4-6.7 6.7z"></path></svg>
                </div>
                <span class="insta-reel-loc">📍 All Land Consultancy • Germany Desk</span>
              </div>
            </div>

            <span class="insta-reel-outcome-tag">🇩🇪 €0 Tuition Visa Granted</span>

            <p class="insta-reel-caption">
              Landing at Munich airport was unreal! Handled everything from APS to zero-tuition admission.
            </p>

            <div class="insta-reel-audio-ticker">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
              <span class="insta-reel-audio-text">Original Audio • all_land_consultancy</span>
            </div>
          </div>
        </article>

        <!-- Reel 2: Canada -->
        <article class="insta-reel-card" data-index="1">
          <div class="insta-reel-media" onclick="toggleReelPlay(this)">
            <video class="insta-reel-video" src="{{ asset('videos/LATEST MIX.mp4') }}" poster="{{ asset('images/student-2.jpg') }}" playsinline loop muted preload="metadata"></video>
            
            <button type="button" class="insta-reel-play-btn" aria-label="Play Reel" onclick="event.stopPropagation(); toggleReelPlay(this);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
            </button>
          </div>

          <!-- Top Bar -->
          <div class="insta-reel-top-bar">
            <div class="insta-reel-badge-group">
              <span class="insta-reel-pill">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="m9 8 7 4-7 4Z"></path></svg>
                <span>Reels</span>
              </span>
              <span class="insta-reel-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                <span>62.1K</span>
              </span>
            </div>
            <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-top-link" aria-label="View on Instagram">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
            </a>
          </div>

          <!-- Right Action Stack -->
          <div class="insta-reel-actions-stack">
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn" aria-label="Like Video" onclick="toggleReelLike(this, event)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
              </button>
              <span class="insta-reel-action-label" data-base-likes="2185">2.2K</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Comments">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </a>
              <span class="insta-reel-action-label">142</span>
            </div>
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn is-muted" aria-label="Toggle Sound" onclick="toggleReelMute(this, event)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
              </button>
              <span class="insta-reel-action-label">Sound</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Share Reel">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </a>
              <span class="insta-reel-action-label">Share</span>
            </div>
          </div>

          <!-- Bottom Content Overlay -->
          <div class="insta-reel-bottom">
            <div class="insta-reel-author-row">
              <div class="insta-reel-avatar-ring">
                <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy" class="insta-reel-avatar" loading="lazy">
              </div>
              <div class="insta-reel-author-meta">
                <div class="insta-reel-handle-row">
                  <span class="insta-reel-handle">all_land_consultancy</span>
                  <svg class="insta-reel-verified" width="13" height="13" viewBox="0 0 24 24" fill="#0095F6" aria-label="Verified"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.5l-3.5-3.5 1.4-1.4 2.1 2.1 5.3-5.3 1.4 1.4-6.7 6.7z"></path></svg>
                </div>
                <span class="insta-reel-loc">📍 All Land Consultancy • Canada Desk</span>
              </div>
            </div>

            <span class="insta-reel-outcome-tag">🇨🇦 3-Year PGWP Approved</span>

            <p class="insta-reel-caption">
              From backlogs in Kerala to Canada visa approved in just 3 weeks! Living my dream in Ontario.
            </p>

            <div class="insta-reel-audio-ticker">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
              <span class="insta-reel-audio-text">Original Audio • all_land_consultancy</span>
            </div>
          </div>
        </article>

        <!-- Reel 3: UK Nursing -->
        <article class="insta-reel-card" data-index="2">
          <div class="insta-reel-media" onclick="toggleReelPlay(this)">
            <video class="insta-reel-video" src="{{ asset('videos/banner-video.mp4') }}" poster="{{ asset('images/student-3.jpg') }}" playsinline loop muted preload="metadata"></video>
            
            <button type="button" class="insta-reel-play-btn" aria-label="Play Reel" onclick="event.stopPropagation(); toggleReelPlay(this);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
            </button>
          </div>

          <!-- Top Bar -->
          <div class="insta-reel-top-bar">
            <div class="insta-reel-badge-group">
              <span class="insta-reel-pill">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="m9 8 7 4-7 4Z"></path></svg>
                <span>Reels</span>
              </span>
              <span class="insta-reel-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                <span>39.7K</span>
              </span>
            </div>
            <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-top-link" aria-label="View on Instagram">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
            </a>
          </div>

          <!-- Right Action Stack -->
          <div class="insta-reel-actions-stack">
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn" aria-label="Like Video" onclick="toggleReelLike(this, event)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
              </button>
              <span class="insta-reel-action-label" data-base-likes="1894">1.9K</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Comments">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </a>
              <span class="insta-reel-action-label">96</span>
            </div>
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn is-muted" aria-label="Toggle Sound" onclick="toggleReelMute(this, event)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
              </button>
              <span class="insta-reel-action-label">Sound</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Share Reel">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </a>
              <span class="insta-reel-action-label">Share</span>
            </div>
          </div>

          <!-- Bottom Content Overlay -->
          <div class="insta-reel-bottom">
            <div class="insta-reel-author-row">
              <div class="insta-reel-avatar-ring">
                <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy" class="insta-reel-avatar" loading="lazy">
              </div>
              <div class="insta-reel-author-meta">
                <div class="insta-reel-handle-row">
                  <span class="insta-reel-handle">all_land_consultancy</span>
                  <svg class="insta-reel-verified" width="13" height="13" viewBox="0 0 24 24" fill="#0095F6" aria-label="Verified"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.5l-3.5-3.5 1.4-1.4 2.1 2.1 5.3-5.3 1.4 1.4-6.7 6.7z"></path></svg>
                </div>
                <span class="insta-reel-loc">📍 All Land Consultancy • UK NHS Desk</span>
              </div>
            </div>

            <span class="insta-reel-outcome-tag">🇬🇧 Band 5 NHS Sponsorship</span>

            <p class="insta-reel-caption">
              From staff nurse in Kochi to NHS Leeds. CBT, NMC registration & visa mock interviews coached step-by-step!
            </p>

            <div class="insta-reel-audio-ticker">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
              <span class="insta-reel-audio-text">Original Audio • all_land_consultancy</span>
            </div>
          </div>
        </article>

        <!-- Reel 4: New Zealand -->
        <article class="insta-reel-card" data-index="3">
          <div class="insta-reel-media" onclick="toggleReelPlay(this)">
            <video class="insta-reel-video" src="{{ asset('videos/LATEST MIX.mp4') }}" poster="{{ asset('images/student-4.jpg') }}" playsinline loop muted preload="metadata"></video>
            
            <button type="button" class="insta-reel-play-btn" aria-label="Play Reel" onclick="event.stopPropagation(); toggleReelPlay(this);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
            </button>
          </div>

          <!-- Top Bar -->
          <div class="insta-reel-top-bar">
            <div class="insta-reel-badge-group">
              <span class="insta-reel-pill">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="m9 8 7 4-7 4Z"></path></svg>
                <span>Reels</span>
              </span>
              <span class="insta-reel-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                <span>35.4K</span>
              </span>
            </div>
            <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-top-link" aria-label="View on Instagram">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
            </a>
          </div>

          <!-- Right Action Stack -->
          <div class="insta-reel-actions-stack">
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn" aria-label="Like Video" onclick="toggleReelLike(this, event)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
              </button>
              <span class="insta-reel-action-label" data-base-likes="1632">1.6K</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Comments">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </a>
              <span class="insta-reel-action-label">77</span>
            </div>
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn is-muted" aria-label="Toggle Sound" onclick="toggleReelMute(this, event)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
              </button>
              <span class="insta-reel-action-label">Sound</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Share Reel">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </a>
              <span class="insta-reel-action-label">Share</span>
            </div>
          </div>

          <!-- Bottom Content Overlay -->
          <div class="insta-reel-bottom">
            <div class="insta-reel-author-row">
              <div class="insta-reel-avatar-ring">
                <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy" class="insta-reel-avatar" loading="lazy">
              </div>
              <div class="insta-reel-author-meta">
                <div class="insta-reel-handle-row">
                  <span class="insta-reel-handle">all_land_consultancy</span>
                  <svg class="insta-reel-verified" width="13" height="13" viewBox="0 0 24 24" fill="#0095F6" aria-label="Verified"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.5l-3.5-3.5 1.4-1.4 2.1 2.1 5.3-5.3 1.4 1.4-6.7 6.7z"></path></svg>
                </div>
                <span class="insta-reel-loc">📍 All Land Consultancy • New Zealand Desk</span>
              </div>
            </div>

            <span class="insta-reel-outcome-tag">🇳🇿 Green List Fast-Track PR</span>

            <p class="insta-reel-caption">
              Master of IT in Auckland with Green List PR pathway mapped upfront. Clean documentation, zero hidden fees!
            </p>

            <div class="insta-reel-audio-ticker">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
              <span class="insta-reel-audio-text">Original Audio • all_land_consultancy</span>
            </div>
          </div>
        </article>

        <!-- Reel 5: Visa Success Cohort -->
        <article class="insta-reel-card" data-index="4">
          <div class="insta-reel-media" onclick="toggleReelPlay(this)">
            <video class="insta-reel-video" src="{{ asset('videos/banner-video.mp4') }}" poster="{{ asset('images/gallery-visa-success.jpg') }}" playsinline loop muted preload="metadata"></video>
            
            <button type="button" class="insta-reel-play-btn" aria-label="Play Reel" onclick="event.stopPropagation(); toggleReelPlay(this);">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
            </button>
          </div>

          <!-- Top Bar -->
          <div class="insta-reel-top-bar">
            <div class="insta-reel-badge-group">
              <span class="insta-reel-pill">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="3" rx="2"></rect><path d="m9 8 7 4-7 4Z"></path></svg>
                <span>Reels</span>
              </span>
              <span class="insta-reel-pill">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                <span>74.9K</span>
              </span>
            </div>
            <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-top-link" aria-label="View on Instagram">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
            </a>
          </div>

          <!-- Right Action Stack -->
          <div class="insta-reel-actions-stack">
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn" aria-label="Like Video" onclick="toggleReelLike(this, event)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg>
              </button>
              <span class="insta-reel-action-label" data-base-likes="2540">2.5K</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Comments">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </a>
              <span class="insta-reel-action-label">210</span>
            </div>
            <div class="insta-reel-action-item">
              <button type="button" class="insta-reel-action-btn is-muted" aria-label="Toggle Sound" onclick="toggleReelMute(this, event)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
              </button>
              <span class="insta-reel-action-label">Sound</span>
            </div>
            <div class="insta-reel-action-item">
              <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="insta-reel-action-btn" aria-label="Share Reel">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </a>
              <span class="insta-reel-action-label">Share</span>
            </div>
          </div>

          <!-- Bottom Content Overlay -->
          <div class="insta-reel-bottom">
            <div class="insta-reel-author-row">
              <div class="insta-reel-avatar-ring">
                <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy" class="insta-reel-avatar" loading="lazy">
              </div>
              <div class="insta-reel-author-meta">
                <div class="insta-reel-handle-row">
                  <span class="insta-reel-handle">all_land_consultancy</span>
                  <svg class="insta-reel-verified" width="13" height="13" viewBox="0 0 24 24" fill="#0095F6" aria-label="Verified"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-1.8 14.5l-3.5-3.5 1.4-1.4 2.1 2.1 5.3-5.3 1.4 1.4-6.7 6.7z"></path></svg>
                </div>
                <span class="insta-reel-loc">📍 All Land Consultancy • Aluva Headquarters</span>
              </div>
            </div>

            <span class="insta-reel-outcome-tag">✈️ Winter Intake Flying Batch</span>

            <p class="insta-reel-caption">
              Pre-departure briefing done, visa stamped, and all 6 of us safely landed! Thank you All Land Aluva team!
            </p>

            <div class="insta-reel-audio-ticker">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
              <span class="insta-reel-audio-text">Original Audio • all_land_consultancy</span>
            </div>
          </div>
        </article>

      </div>

      <!-- Pagination Dots -->
      <div role="tablist" aria-label="Instagram reels slider pagination" class="insta-slider-dots" id="instaSliderDots"></div>
    </div>

    <!-- Instagram Social Proof Banner -->
    <div class="insta-bottom-banner">
      <div class="insta-banner-left">
        <div class="insta-banner-gradient-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
          </svg>
        </div>
        <div>
          <h4 class="insta-banner-title">Join our 12,000+ student community on Instagram</h4>
          <p class="insta-banner-sub">Daily visa approvals, student lifestyle vlogs, free seminar updates &amp; live Q&amp;As.</p>
        </div>
      </div>
      <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener noreferrer" class="btn-primary insta-banner-cta">
        <span>Visit Instagram Profile</span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7"></path><path d="M7 7h10v10"></path></svg>
      </a>
    </div>
  </div>
</section>

<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     5. DESTINATIONS (DYNAMIC COUNTRY TABS)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
<section id="destinations" class="destinations">
  <div class="wrap">
    <div class="dest-header-row">
      <div class="dest-header-text">
        <p class="sec-tag"><span class="sec-tag-dot"></span> Choose Your Destination</p>
        <h2 class="sec-h2 sec-h2-lt">The world's premier destinations<br>to study, work and settle.</h2>
        <p class="sec-p sec-p-lt">Globally recognised degrees, zero tuition or high scholarship options, and guaranteed post-study work permits.</p>
      </div>
      <a href="{{ route('contact') }}" class="dest-cta-link">
        Not sure? Ask a counsellor
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
      </a>
    </div>

    <!-- Country Navigation Tabs Slider -->
    <div class="dest-tabs-slider-wrap">
      <button type="button" class="dest-tab-arrow dest-tab-arrow-prev" id="destTabPrev" aria-label="Previous Destinations" onclick="slideDestTabs('prev')">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg>
      </button>

      <div class="dest-tabs-track-wrapper">
        <div role="tablist" aria-label="Study Abroad Destinations" class="dest-tabs-nav" id="countryTabsNav">
          @foreach($countries as $cCode => $country)
            <button type="button" role="tab" class="dest-tab-btn {{ $cCode === $selectedCountry ? 'active' : '' }}" onclick="switchCountry('{{ $cCode }}')" data-code="{{ $cCode }}">
              <span class="dest-tab-flag">
                @if(!empty($country['flag_url']))
                  <img src="{{ $country['flag_url'] }}" alt="{{ $country['name'] }}" class="dest-tab-flag-img" width="18" height="12">
                @else
                  {{ $country['flag'] }}
                @endif
              </span>
              <span class="dest-tab-name">{{ $country['name'] }}</span>
              <span class="dest-tab-chip">{{ $country['tabBadge'] }}</span>
            </button>
          @endforeach
        </div>
      </div>

      <button type="button" class="dest-tab-arrow dest-tab-arrow-next" id="destTabNext" aria-label="Next Destinations" onclick="slideDestTabs('next')">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg>
      </button>
    </div>

    <!-- Active Country Showcase Card -->
    @foreach($countries as $cCode => $country)
    <div class="dest-showcase-card country-panel {{ $cCode === $selectedCountry ? '' : 'hidden' }}" id="panel-{{ $cCode }}">
      <!-- Left Column: Visual Campus Hero & Key Quick Stats -->
      <div class="dest-showcase-visual">
        <div class="dest-visual-wrap">
          <img src="{{ $country['image'] }}" alt="Study in {{ $country['name'] }}">
          <span class="dest-hero-flag">
            @if(!empty($country['flag_url']))
              <img src="{{ $country['flag_url'] }}" alt="{{ $country['name'] }}" class="dest-tab-flag-img" width="18" height="12">
            @else
              {{ $country['flag'] }}
            @endif
            {{ $country['name'] }}
          </span>
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
          <a href="{{ route('destinations.show', $country['slug']) }}" class="dest-main-cta">
            <span>Explore {{ $country['name'] }} Guide &amp; Intakes</span>
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

      <div class="events-header-actions">
        <div role="group" aria-label="Filter events" class="filter-row">
          <button type="button" class="pill-btn active" onclick="filterEvents('all', this)">All events</button>
          <button type="button" class="pill-btn" onclick="filterEvents('seminar', this)">Seminars &amp; Fairs</button>
          <button type="button" class="pill-btn" onclick="filterEvents('webinar', this)">Webinars</button>
          <button type="button" class="pill-btn" onclick="filterEvents('spot', this)">Spot admissions</button>
        </div>

        <div class="events-slider-controls">
          <button type="button" class="slider-nav-btn slider-prev-btn" id="evPrevBtn" aria-label="Previous Events" onclick="slideEvents('prev')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>
          </button>
          <button type="button" class="slider-nav-btn slider-next-btn" id="evNextBtn" aria-label="Next Events" onclick="slideEvents('next')">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </button>
        </div>
      </div>
    </div>

    <div class="events-slider-wrapper">
      <div class="events-slider-track" id="eventsSliderTrack">
        @forelse($events as $e)
          <article class="event-slide-card event-item" data-type="{{ $e->type }}">
            <div class="event-slide-media">
              <img src="{{ $e->image_url }}" alt="{{ $e->title }}" class="event-slide-img" loading="lazy">
              <div class="event-slide-grad" aria-hidden="true"></div>
              <div class="event-slide-date-badge">
                <span class="ev-month">{{ $e->month_name }}</span>
                <span class="ev-day">{{ $e->day_number }}</span>
                <span class="ev-dow">{{ $e->day_of_week }}</span>
              </div>
              <span class="event-slide-type-badge ev-type-{{ $e->type }}">{{ $e->type_label }}</span>
            </div>
            <div class="event-slide-body">
              <div class="event-ticket-urgency">
                <span class="event-pulse-dot"></span>
                <span>Registration Open • Free Entry</span>
              </div>

              <h3 class="event-slide-title">{{ $e->title }}</h3>

              <div class="event-slide-meta">
                <span class="event-slide-meta-item">
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg>
                  <span>{{ $e->formatted_time }}</span>
                </span>
                <span class="event-slide-meta-item">
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"></path><circle cx="12" cy="10" r="2.5"></circle></svg>
                  <span>{{ $e->location }}</span>
                </span>
              </div>

              <!-- Ticket Perforation Divider -->
              <div class="event-ticket-divider" aria-hidden="true">
                <span class="ticket-notch ticket-notch-left"></span>
                <span class="ticket-line"></span>
                <span class="ticket-notch ticket-notch-right"></span>
              </div>

              <div class="event-ticket-footer">
                <div class="event-ticket-stub-info">
                  <span class="event-stub-label">ADMISSION</span>
                  <span class="event-stub-code">100% FREE PASS</span>
                </div>
                <a href="{{ route('events.show', $e->slug) }}" class="event-ticket-btn">
                  <span>Claim Free Pass</span>
                  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                </a>
              </div>
            </div>
          </article>
        @empty
          <div class="events-empty-card">
            <p class="events-empty-text">No events currently scheduled. Check back soon!</p>
          </div>
        @endforelse
      </div>

      <!-- Pagination Dots -->
      <div role="tablist" aria-label="Events slider pagination" class="events-slider-dots" id="eventsSliderDots"></div>
    </div>
    
    <div class="events-footer">
      <a href="{{ route('events.index') }}" class="btn-primary events-view-all">View All Events &amp; Webinars →</a>
    </div>
  </div>
</section>




<!-- ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
     11. RECENT BLOG & GUIDES (DYNAMIC FROM MYSQL)
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ -->
@if($blogs->count() > 0)
<section class="page-section-alt">
  <div class="wrap">
    <div class="blog-section-header">
      <div class="blog-section-title-col">
        <p class="sec-tag"><span class="sec-tag-dot"></span> Knowledge Hub</p>
        <h2 class="sec-h2">Recent Articles &amp; Student Advisories</h2>
        <p class="sec-p">In-depth guides on visa procedures, post-study work rights, living costs, and university admissions.</p>
      </div>
      <a href="{{ route('blog.index') }}" class="btn-ghost blog-browse-btn">Browse All Articles →</a>
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
  // Interactive Country Tabs Slider
  function slideDestTabs(dir) {
    var nav = document.getElementById('countryTabsNav');
    if (!nav) return;
    var scrollAmount = Math.max(nav.clientWidth * 0.65, 260);
    nav.scrollBy({
      left: dir === 'next' ? scrollAmount : -scrollAmount,
      behavior: 'smooth'
    });
    setTimeout(updateDestTabArrows, 350);
  }

  function updateDestTabArrows() {
    var nav = document.getElementById('countryTabsNav');
    var prevBtn = document.getElementById('destTabPrev');
    var nextBtn = document.getElementById('destTabNext');
    if (!nav) return;
    var scrollLeft = nav.scrollLeft;
    var maxScroll = nav.scrollWidth - nav.clientWidth;
    if (prevBtn) prevBtn.disabled = scrollLeft <= 6;
    if (nextBtn) nextBtn.disabled = (scrollLeft >= maxScroll - 6) || maxScroll <= 0;
  }

  // Interactive Country Switching
  function switchCountry(code) {
    document.querySelectorAll('.dest-tab-btn').forEach(function(btn) {
      var isActive = btn.getAttribute('data-code') === code;
      btn.classList.toggle('active', isActive);
      if (isActive && typeof btn.scrollIntoView === 'function') {
        btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
      }
    });
    document.querySelectorAll('.country-panel').forEach(function(panel) {
      if (panel.id === 'panel-' + code) {
        panel.classList.remove('hidden');
      } else {
        panel.classList.add('hidden');
      }
    });
    setTimeout(updateDestTabArrows, 350);
  }

  (function initDestTabsSlider() {
    var nav = document.getElementById('countryTabsNav');
    if (!nav) return;

    nav.addEventListener('scroll', updateDestTabArrows, { passive: true });
    window.addEventListener('resize', updateDestTabArrows);
    setTimeout(updateDestTabArrows, 150);

    // Mouse drag support for smooth sliding
    var isDown = false;
    var startX, scrollLeft;
    var hasDragged = false;

    nav.addEventListener('mousedown', function(e) {
      isDown = true;
      hasDragged = false;
      startX = e.pageX - nav.offsetLeft;
      scrollLeft = nav.scrollLeft;
      nav.style.cursor = 'grabbing';
    });

    window.addEventListener('mouseup', function() {
      if (!isDown) return;
      isDown = false;
      if (nav) nav.style.cursor = 'grab';
    });

    nav.addEventListener('mousemove', function(e) {
      if (!isDown) return;
      var x = e.pageX - nav.offsetLeft;
      var walk = (x - startX) * 1.5;
      if (Math.abs(walk) > 4) {
        hasDragged = true;
        e.preventDefault();
        nav.scrollLeft = scrollLeft - walk;
      }
    });

    // Prevent accidental tab switch if user dragged
    nav.querySelectorAll('.dest-tab-btn').forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        if (hasDragged) {
          e.stopImmediatePropagation();
          e.preventDefault();
        }
      }, true);
    });
  })();

  // Interactive Event Slider with Auto-Slide & Filtering
  (function initEventsSlider() {
    var track = document.getElementById('eventsSliderTrack');
    var prevBtn = document.getElementById('evPrevBtn');
    var nextBtn = document.getElementById('evNextBtn');
    var dotsContainer = document.getElementById('eventsSliderDots');
    if (!track) return;

    var autoSlideTimer = null;
    var autoSlideDelay = 4500;
    var isPaused = false;

    function getVisibleCards() {
      return Array.from(track.querySelectorAll('.event-item')).filter(function(card) {
        return card.style.display !== 'none';
      });
    }

    function renderDots() {
      if (!dotsContainer) return;
      dotsContainer.innerHTML = '';
      var visibleCards = getVisibleCards();
      if (visibleCards.length <= 1) return;

      visibleCards.forEach(function(card, idx) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'slider-dot' + (idx === 0 ? ' active' : '');
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-selected', idx === 0 ? 'true' : 'false');
        dot.setAttribute('aria-label', 'Go to event ' + (idx + 1));
        dot.onclick = function() {
          resetAutoSlide();
          track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
        };
        dotsContainer.appendChild(dot);
      });
    }

    function updateSliderState() {
      var visibleCards = getVisibleCards();
      var scrollLeft = track.scrollLeft;
      var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);

      if (prevBtn) prevBtn.disabled = scrollLeft <= 8 || visibleCards.length === 0;
      if (nextBtn) nextBtn.disabled = (scrollLeft >= maxScroll && maxScroll > 0) || visibleCards.length === 0;

      if (dotsContainer) {
        var dots = dotsContainer.querySelectorAll('.slider-dot');
        var activeIndex = 0;
        var minDiff = Infinity;
        visibleCards.forEach(function(card, idx) {
          var diff = Math.abs(card.offsetLeft - track.offsetLeft - scrollLeft);
          if (diff < minDiff) {
            minDiff = diff;
            activeIndex = idx;
          }
        });
        if (scrollLeft >= maxScroll - 15 && maxScroll > 0) {
          activeIndex = visibleCards.length - 1;
        }
        dots.forEach(function(d, i) {
          var isActive = (i === activeIndex);
          d.classList.toggle('active', isActive);
          d.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });
      }
    }

    window.slideEvents = function(dir) {
      resetAutoSlide();
      var visibleCards = getVisibleCards();
      var step = visibleCards.length > 0 ? visibleCards[0].offsetWidth + 20 : 290;
      var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);

      if (dir === 'next') {
        if (track.scrollLeft >= maxScroll - 15) {
          track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: step, behavior: 'smooth' });
        }
      } else {
        if (track.scrollLeft <= 15) {
          track.scrollTo({ left: maxScroll, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: -step, behavior: 'smooth' });
        }
      }
    };

    function startAutoSlide() {
      stopAutoSlide();
      autoSlideTimer = setInterval(function() {
        if (isPaused) return;
        var visibleCards = getVisibleCards();
        if (visibleCards.length <= 1) return;
        var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);
        if (track.scrollLeft >= maxScroll - 15) {
          track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          var step = visibleCards[0].offsetWidth + 20;
          track.scrollBy({ left: step, behavior: 'smooth' });
        }
      }, autoSlideDelay);
    }

    function stopAutoSlide() {
      if (autoSlideTimer) {
        clearInterval(autoSlideTimer);
        autoSlideTimer = null;
      }
    }

    function resetAutoSlide() {
      stopAutoSlide();
      startAutoSlide();
    }

    track.addEventListener('mouseenter', function() { isPaused = true; });
    track.addEventListener('mouseleave', function() { isPaused = false; });
    track.addEventListener('touchstart', function() { isPaused = true; }, { passive: true });
    track.addEventListener('touchend', function() {
      isPaused = false;
      resetAutoSlide();
    }, { passive: true });

    document.addEventListener('visibilitychange', function() {
      if (document.hidden) {
        stopAutoSlide();
      } else {
        startAutoSlide();
      }
    });

    window.filterEvents = function(type, btn) {
      document.querySelectorAll('.events-section .filter-row .pill-btn').forEach(function(b) {
        b.classList.remove('active');
      });
      if (btn) btn.classList.add('active');

      var items = track.querySelectorAll('.event-item');
      var matchedCount = 0;
      items.forEach(function(item) {
        var itemType = item.getAttribute('data-type');
        var match = (type === 'all') ||
                    (type === 'seminar' && (itemType === 'seminar' || itemType === 'fair' || itemType === 'pre-departure')) ||
                    (itemType === type);
        if (match) {
          item.style.display = '';
          matchedCount++;
        } else {
          item.style.display = 'none';
        }
      });

      var emptyMsg = document.getElementById('eventsEmptyFilter');
      if (!emptyMsg) {
        emptyMsg = document.createElement('div');
        emptyMsg.id = 'eventsEmptyFilter';
        emptyMsg.className = 'events-empty-card';
        emptyMsg.innerHTML = '<p class="events-empty-text">No events match the selected category. Try selecting "All events".</p>';
        emptyMsg.style.display = 'none';
        track.parentNode.appendChild(emptyMsg);
      }
      emptyMsg.style.display = matchedCount === 0 ? 'block' : 'none';

      track.scrollTo({ left: 0, behavior: 'smooth' });
      renderDots();
      resetAutoSlide();
      setTimeout(updateSliderState, 150);
    };

    track.addEventListener('scroll', updateSliderState, { passive: true });
    window.addEventListener('resize', function() {
      updateSliderState();
    });

    renderDots();
    updateSliderState();
    startAutoSlide();
  })();

  // Interactive Services Carousel Slider
  (function initServicesSlider() {
    var track = document.getElementById('servicesSliderTrack');
    var prevBtn = document.getElementById('srvPrevBtn');
    var nextBtn = document.getElementById('srvNextBtn');
    var dotsContainer = document.getElementById('servicesSliderDots');
    if (!track) return;

    var cards = track.querySelectorAll('.service-slide-card');
    if (cards.length === 0) return;

    // Create pagination dots
    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      cards.forEach(function(card, idx) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'slider-dot' + (idx === 0 ? ' active' : '');
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-selected', idx === 0 ? 'true' : 'false');
        dot.setAttribute('aria-label', 'Go to service ' + (idx + 1));
        dot.onclick = function() {
          track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
        };
        dotsContainer.appendChild(dot);
      });
    }

    function updateSliderState() {
      var scrollLeft = track.scrollLeft;
      var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);
      if (prevBtn) prevBtn.disabled = scrollLeft <= 8;
      if (nextBtn) nextBtn.disabled = scrollLeft >= maxScroll && maxScroll > 0;

      if (dotsContainer) {
        var dots = dotsContainer.querySelectorAll('.slider-dot');
        var activeIndex = 0;
        var minDiff = Infinity;
        cards.forEach(function(card, idx) {
          var diff = Math.abs(card.offsetLeft - track.offsetLeft - scrollLeft);
          if (diff < minDiff) {
            minDiff = diff;
            activeIndex = idx;
          }
        });
        if (scrollLeft >= maxScroll - 15 && maxScroll > 0) {
          activeIndex = cards.length - 1;
        }
        dots.forEach(function(d, i) {
          var isActive = (i === activeIndex);
          d.classList.toggle('active', isActive);
          d.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });
      }
    }

    window.slideServices = function(dir) {
      var card = track.querySelector('.service-slide-card');
      var style = window.getComputedStyle(track);
      var gap = parseFloat(style.gap) || 16;
      var step = card ? card.offsetWidth + gap : track.clientWidth;
      track.scrollBy({ left: dir === 'next' ? step : -step, behavior: 'smooth' });
    };

    track.addEventListener('scroll', updateSliderState, { passive: true });
    window.addEventListener('resize', updateSliderState);
    updateSliderState();
  })();

  // Interactive Instagram Reels Video Slider & Playback
  (function initInstaReels() {
    var track = document.getElementById('instaSliderTrack');
    var prevBtn = document.getElementById('instaPrevBtn');
    var nextBtn = document.getElementById('instaNextBtn');
    var dotsContainer = document.getElementById('instaSliderDots');
    if (!track) return;

    var cards = track.querySelectorAll('.insta-reel-card');
    if (cards.length === 0) return;

    var autoSlideTimer = null;
    var autoSlideDelay = 5500;
    var isHovered = false;

    // Create pagination dots
    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      cards.forEach(function(card, idx) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'slider-dot' + (idx === 0 ? ' active' : '');
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-selected', idx === 0 ? 'true' : 'false');
        dot.setAttribute('aria-label', 'Go to Instagram Reel ' + (idx + 1));
        dot.onclick = function() {
          resetAutoSlide();
          track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
        };
        dotsContainer.appendChild(dot);
      });
    }

    function isAnyVideoPlaying() {
      var playing = false;
      cards.forEach(function(c) {
        var vid = c.querySelector('video');
        if (vid && !vid.paused && !vid.ended) {
          playing = true;
        }
      });
      return playing;
    }

    function updateSliderState() {
      var scrollLeft = track.scrollLeft;
      var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);
      if (prevBtn) prevBtn.disabled = scrollLeft <= 8;
      if (nextBtn) nextBtn.disabled = scrollLeft >= maxScroll && maxScroll > 0;

      if (dotsContainer) {
        var dots = dotsContainer.querySelectorAll('.slider-dot');
        var activeIndex = 0;
        var minDiff = Infinity;
        cards.forEach(function(card, idx) {
          var diff = Math.abs(card.offsetLeft - track.offsetLeft - scrollLeft);
          if (diff < minDiff) {
            minDiff = diff;
            activeIndex = idx;
          }
        });
        if (scrollLeft >= maxScroll - 15 && maxScroll > 0) {
          activeIndex = cards.length - 1;
        }
        dots.forEach(function(d, i) {
          var isActive = (i === activeIndex);
          d.classList.toggle('active', isActive);
          d.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });
      }
    }

    window.slideInsta = function(dir) {
      resetAutoSlide();
      var card = track.querySelector('.insta-reel-card');
      var step = card ? card.offsetWidth + 24 : 350;
      var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);

      if (dir === 'next') {
        if (track.scrollLeft >= maxScroll - 15) {
          track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: step, behavior: 'smooth' });
        }
      } else {
        if (track.scrollLeft <= 15) {
          track.scrollTo({ left: maxScroll, behavior: 'smooth' });
        } else {
          track.scrollBy({ left: -step, behavior: 'smooth' });
        }
      }
    };

    function startAutoSlide() {
      stopAutoSlide();
      autoSlideTimer = setInterval(function() {
        if (isHovered || isAnyVideoPlaying()) return;
        var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth - 10);
        if (track.scrollLeft >= maxScroll - 15) {
          track.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          var card = track.querySelector('.insta-reel-card');
          var step = card ? card.offsetWidth + 24 : 350;
          track.scrollBy({ left: step, behavior: 'smooth' });
        }
      }, autoSlideDelay);
    }

    function stopAutoSlide() {
      if (autoSlideTimer) {
        clearInterval(autoSlideTimer);
        autoSlideTimer = null;
      }
    }

    function resetAutoSlide() {
      stopAutoSlide();
      startAutoSlide();
    }

    // Play/Pause Video Orchestration
    window.toggleReelPlay = function(targetEl) {
      var card = targetEl.closest('.insta-reel-card');
      if (!card) return;
      var video = card.querySelector('video');
      if (!video) return;

      if (video.paused) {
        // Pause all other videos
        cards.forEach(function(otherCard) {
          if (otherCard !== card) {
            var otherVid = otherCard.querySelector('video');
            if (otherVid && !otherVid.paused) {
              otherVid.pause();
            }
            otherCard.classList.remove('is-playing');
          }
        });
        video.play().then(function() {
          card.classList.add('is-playing');
          stopAutoSlide();
        }).catch(function(err) {
          console.warn('Playback prevented:', err);
        });
      } else {
        video.pause();
        card.classList.remove('is-playing');
        resetAutoSlide();
      }
    };

    // Toggle Mute / Sound
    window.toggleReelMute = function(btn, ev) {
      if (ev) ev.stopPropagation();
      var card = btn.closest('.insta-reel-card');
      if (!card) return;
      var video = card.querySelector('video');
      if (!video) return;

      video.muted = !video.muted;
      if (video.muted) {
        btn.classList.add('is-muted');
        btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>';
      } else {
        btn.classList.remove('is-muted');
        btn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path><path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path></svg>';
      }
    };

    // Like Button Toggle with Animation & Count update
    window.toggleReelLike = function(btn, ev) {
      if (ev) ev.stopPropagation();
      var isLiked = btn.classList.toggle('liked');
      var label = btn.parentNode.querySelector('.insta-reel-action-label');
      if (!label) return;
      var base = parseInt(label.getAttribute('data-base-likes') || '1000', 10);
      var currentLikes = isLiked ? (base + 1) : base;
      if (currentLikes >= 1000) {
        label.textContent = (currentLikes / 1000).toFixed(1) + 'K';
      } else {
        label.textContent = currentLikes;
      }
    };

    track.addEventListener('mouseenter', function() { isHovered = true; });
    track.addEventListener('mouseleave', function() { isHovered = false; });
    track.addEventListener('touchstart', function() { isHovered = true; }, { passive: true });
    track.addEventListener('touchend', function() {
      isHovered = false;
      resetAutoSlide();
    }, { passive: true });

    document.addEventListener('visibilitychange', function() {
      if (document.hidden) {
        stopAutoSlide();
        cards.forEach(function(c) {
          var v = c.querySelector('video');
          if (v && !v.paused) v.pause();
          c.classList.remove('is-playing');
        });
      } else {
        startAutoSlide();
      }
    });

    track.addEventListener('scroll', updateSliderState, { passive: true });
    window.addEventListener('resize', updateSliderState);
    updateSliderState();
    startAutoSlide();
  })();
</script>
<style>
  .country-panel.hidden {
    display: none !important;
  }
</style>
@endsection

