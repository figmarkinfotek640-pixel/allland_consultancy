@extends('layouts.app')

@section('title', 'Study Abroad Destinations & Courses - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/hero-campus-walk.jpg') }}" alt="Study Abroad Global Destinations" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>Study Abroad</span>
        </div>
        <div class="subpage-badge">World-Class Education &amp; Work Permits</div>
      </div>
      <h1 class="subpage-title">Four of the World's Best Hubs to <span>Study, Work and Settle</span></h1>
      <p class="subpage-subtitle">Globally accredited degrees, zero tuition or generous scholarship options, and guaranteed post-study work permits. Compare pathways, intakes, and permanent residency rules.</p>
    </div>
  </div>
</section>

<!-- COUNTRY FILTER & COURSES -->
<section class="page-section">
  <div class="wrap">
    
    <!-- Filter Bar -->
    <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:18px;padding:20px 24px;margin-bottom:44px;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;">
      <div style="display:flex;gap:10px;flex-wrap:wrap;align-items:center;">
        <span style="font-size:12px;font-weight:800;color:#64748b;text-transform:uppercase;margin-right:6px;">Filter By Country:</span>
        <a href="{{ route('courses.index') }}" class="pill-btn {{ empty(request('country')) || request('country') == 'all' ? 'active' : '' }}">All Countries</a>
        <a href="{{ route('courses.index', ['country' => 'DE']) }}" class="pill-btn {{ request('country') == 'DE' ? 'active' : '' }}">🇩🇪 Germany</a>
        <a href="{{ route('courses.index', ['country' => 'CA']) }}" class="pill-btn {{ request('country') == 'CA' ? 'active' : '' }}">🇨🇦 Canada</a>
        <a href="{{ route('courses.index', ['country' => 'UK']) }}" class="pill-btn {{ request('country') == 'UK' ? 'active' : '' }}">🇬🇧 United Kingdom</a>
        <a href="{{ route('courses.index', ['country' => 'NZ']) }}" class="pill-btn {{ request('country') == 'NZ' ? 'active' : '' }}">🇳🇿 New Zealand</a>
      </div>

      <form action="{{ route('courses.index') }}" method="GET" style="display:flex;gap:8px;">
        @if(request('country'))
          <input type="hidden" name="country" value="{{ request('country') }}">
        @endif
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search program, degree..." style="padding:8px 14px;border:1px solid #CBD5E1;border-radius:20px;font-size:13px;width:180px;">
        <button type="submit" class="btn-primary" style="padding:8px 16px;font-size:12.5px;">Search</button>
      </form>
    </div>

    <!-- Courses Grid -->
    <div class="grid-3col">
      @forelse($courses as $course)
        <div class="card-white" style="display:flex;flex-direction:column;border-top:4px solid {{ $course->country_code == 'DE' ? '#0580C1' : ($course->country_code == 'CA' ? '#D9561A' : ($course->country_code == 'UK' ? '#14B8A6' : '#6366F1')) }};">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;">
            <span style="font-size:11px;font-weight:800;color:#0580C1;text-transform:uppercase;background:rgba(5,128,193,0.08);padding:3px 10px;border-radius:12px;">
              {{ $course->degree_level }}
            </span>
            <span style="font-size:13px;font-weight:700;color:#1d253a;">{{ $course->country }}</span>
          </div>

          <h3 class="card-title" style="font-size:18px;line-height:1.3;margin-bottom:10px;">
            <a href="{{ route('courses.show', $course->slug) }}" style="color:inherit;text-decoration:none;">{{ $course->title }}</a>
          </h3>

          <p class="card-desc" style="font-size:13px;margin-bottom:16px;">{{ $course->excerpt ?: Str::limit(strip_tags($course->description), 110) }}</p>

          <div style="background:#F8FAFC;border-radius:12px;padding:12px 14px;margin-bottom:18px;display:grid;grid-template-columns:1fr 1fr;gap:8px;font-size:12px;">
            <div>
              <span style="color:#64748b;display:block;">Duration:</span>
              <strong style="color:#1d253a;">{{ $course->duration }}</strong>
            </div>
            <div>
              <span style="color:#64748b;display:block;">Tuition:</span>
              <strong style="color:#D9561A;">{{ $course->tuition_fee ?: 'Contact for Fee' }}</strong>
            </div>
            <div style="grid-column:1/-1;">
              <span style="color:#64748b;display:block;">Pathway:</span>
              <strong style="color:#0580C1;">{{ $course->career_pathway ?: 'Work permit eligible' }}</strong>
            </div>
          </div>

          <div style="margin-top:auto;display:flex;justify-content:space-between;align-items:center;">
            <a href="{{ route('courses.show', $course->slug) }}" class="blog-card-link">View Program →</a>
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20am%20interested%20in%20{{ urlencode($course->title) }}" target="_blank" rel="noopener" style="font-size:12px;font-weight:700;color:#16a34a;text-decoration:none;display:flex;align-items:center;gap:4px;">
              WhatsApp
            </a>
          </div>
        </div>
      @empty
        <div style="grid-column:1/-1;text-align:center;padding:50px 0;">
          <p style="color:#64748b;font-size:16px;">No courses found matching your criteria.</p>
          <a href="{{ route('courses.index') }}" class="btn-primary" style="display:inline-flex;padding:10px 22px;margin-top:12px;">Reset Filter</a>
        </div>
      @endforelse
    </div>

    <div style="margin-top:40px;">
      {{ $courses->links() }}
    </div>

  </div>
</section>

<!-- HIGHLIGHT COUNTRY HUBS -->
<section class="page-section-alt">
  <div class="wrap">
    <div style="text-align:center;max-width:700px;margin:0 auto 48px;">
      <p class="sec-tag" style="justify-content:center"><span class="sec-tag-dot"></span> Study Destinations</p>
      <h2 class="sec-h2" style="text-align:center">Where will your ambition take you?</h2>
      <p class="sec-p" style="text-align:center">Explore comprehensive country profiles, admission requirements, and post-study work visa rights.</p>
    </div>

    <!-- Germany Hub -->
    <div class="country-hub-card" style="margin-bottom:32px;">
      <div class="country-hub-img-side">
        <img src="{{ asset('images/dest-germany.jpg') }}" alt="Study in Germany">
        <div class="country-hub-flag-chip">🇩🇪 Germany • Zero Tuition Fees</div>
      </div>
      <div class="country-hub-content">
        <div>
          <div style="font-size:12px;font-weight:800;color:#0580C1;text-transform:uppercase;margin-bottom:6px;">Europe's #1 Economic &amp; Tech Leader</div>
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:26px;color:#1d253a;margin:0 0 10px;">Study in Germany — €0 Tuition Degrees</h3>
          <p style="font-size:14px;color:#64748b;line-height:1.6;margin-bottom:16px;">Over 400 state-funded universities offer English-taught Bachelor's &amp; Master's programs with zero tuition. Generous 18-month job seeker visa and fast PR within 21–24 months.</p>
        </div>
        <div>
          <a href="{{ route('courses.index', ['country' => 'DE']) }}" class="btn-primary" style="display:inline-flex;padding:11px 22px;font-size:13px;">View Germany Programs →</a>
        </div>
      </div>
    </div>

    <!-- Canada Hub -->
    <div class="country-hub-card" style="margin-bottom:32px;">
      <div class="country-hub-img-side">
        <img src="{{ asset('images/dest-canada.jpg') }}" alt="Study in Canada">
        <div class="country-hub-flag-chip">🇨🇦 Canada • 3-Year PGWP</div>
      </div>
      <div class="country-hub-content">
        <div>
          <div style="font-size:12px;font-weight:800;color:#0580C1;text-transform:uppercase;margin-bottom:6px;">World-Class Co-op &amp; Settlement</div>
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:26px;color:#1d253a;margin:0 0 10px;">Study in Canada — Top Colleges &amp; PGWP</h3>
          <p style="font-size:14px;color:#64748b;line-height:1.6;margin-bottom:16px;">Graduate with up to 3 years of open work permit (PGWP), paid co-op placements, spousal work rights, and direct points towards Express Entry Canadian Experience Class.</p>
        </div>
        <div>
          <a href="{{ route('courses.index', ['country' => 'CA']) }}" class="btn-primary" style="display:inline-flex;padding:11px 22px;font-size:13px;">View Canada Programs →</a>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection

