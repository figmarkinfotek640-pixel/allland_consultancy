@extends('layouts.app')

@section('title', $placement['meta_title'])
@section('meta_description', $placement['meta_description'])

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset($placement['hero_image']) }}" alt="{{ $placement['title'] }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('services.index') }}">Services</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('services.show', 'placement-assistance') }}">Placement Assistance</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $placement['country_name'] }}</span>
        </div>
        <div class="subpage-badge">
          {{ $placement['badge'] }}
        </div>
      </div>
      <h1 class="subpage-title">{!! \App\Helpers\TitleHelper::twoTone($placement['title']) !!}</h1>
      <p class="subpage-subtitle">{{ $placement['lead'] }}</p>

      <div class="dest-hero-actions">
        <a href="#placement-apply" class="btn-primary">Apply for {{ $placement['country_name'] }} Placement</a>
        <a href="https://wa.me/918590724242?text={{ urlencode($placement['whatsapp_text']) }}" target="_blank" rel="noopener" class="btn-ghost dest-hero-btn-ghost">
          <span>💬 Instant WhatsApp Chat</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="page-section service-page-section">
  <div class="wrap">
    <div class="service-layout-grid">

      <!-- Left Column: Detailed Placement Narrative -->
      <div class="service-main-col">

        <!-- 1. Overview & Healthcare System -->
        <div class="service-card">
          <div class="service-header-row">
            <span class="sec-tag"><span class="sec-tag-dot"></span> Professional Healthcare Gateway</span>
            <h2 class="service-detail-title">{{ $placement['title'] }}</h2>
          </div>

          <div class="service-detail-body">
            @foreach($placement['intro_paragraphs'] as $para)
              <p class="placement-narrative-p">{{ $para }}</p>
            @endforeach
          </div>
        </div>

        <!-- 2. Advantages & Benefits for Nurses / Healthcare Workers -->
        <div class="service-card">
          <span class="sec-tag"><span class="sec-tag-dot"></span> Rewarding Career Benefits</span>
          <h3 class="service-detail-title">Advantages of Working in {{ $placement['country_name'] }}</h3>
          <p class="service-detail-lead">Qualified international healthcare professionals enjoy world-class working conditions, high standards of living, and structured advancement opportunities:</p>

          <div class="placement-advantages-list">
            @foreach($placement['advantages'] as $adv)
              <div class="placement-adv-card">
                <div class="placement-adv-icon-wrap">
                  <span class="placement-adv-icon">{{ $adv['icon'] }}</span>
                </div>
                <div class="placement-adv-content">
                  <h4 class="placement-adv-title">{{ $adv['title'] }}</h4>
                  <p class="placement-adv-desc">{{ $adv['desc'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <!-- 3. Eligibility Criteria -->
        <div class="service-card placement-criteria-section">
          <div class="criteria-header-wrap">
            <div class="criteria-header-top">
              <span class="sec-tag"><span class="sec-tag-dot"></span> Mandatory Qualifications</span>
              <span class="criteria-country-pill">{{ $placement['country_name'] }} Checklist</span>
            </div>
            <h3 class="service-detail-title">Candidate Eligibility Criteria</h3>
            <p class="service-detail-lead">Applicants must satisfy the following clinical, linguistic, and documentary requirements to qualify for official healthcare placement in {{ $placement['country_name'] }}:</p>
          </div>

          <div class="placement-criteria-grid">
            @foreach($placement['criteria'] as $item)
              <div class="placement-criteria-card">
                <div class="criteria-card-top">
                  <div class="criteria-icon-box">
                    <span>{{ is_array($item) ? ($item['icon'] ?? '✓') : '✓' }}</span>
                  </div>
                  <span class="criteria-badge-tag">{{ is_array($item) ? ($item['category'] ?? 'Credential') : 'Requirement' }}</span>
                </div>
                <div class="criteria-card-body">
                  <h4 class="criteria-item-title">{{ is_array($item) ? ($item['title'] ?? '') : $item }}</h4>
                  @if(is_array($item) && !empty($item['detail']))
                    <p class="criteria-item-desc">{{ $item['detail'] }}</p>
                  @endif
                </div>
                <div class="criteria-card-status">
                  <span class="criteria-status-check">
                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.6666 5L7.49992 14.1667L3.33325 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                  <span class="criteria-status-label">{{ is_array($item) ? ($item['badge'] ?? 'Mandatory Requirement') : 'Mandatory Requirement' }}</span>
                </div>
              </div>
            @endforeach
          </div>

          <!-- Bottom Advisory Banner -->
          <div class="criteria-advisory-box">
            <div class="criteria-advisory-content">
              <span class="criteria-advisory-icon">💡</span>
              <div class="criteria-advisory-texts">
                <h5 class="criteria-advisory-title">Need guidance on qualifications or document verification?</h5>
                <p class="criteria-advisory-text">All Land Consultancy in Aluva provides complete one-on-one assessment, language coaching, certificate attestation, and embassy verification for {{ $placement['country_name'] }}.</p>
              </div>
            </div>
            <a href="#placement-apply" class="criteria-advisory-btn">Check Your Eligibility →</a>
          </div>
        </div>

        <!-- 4. Step-by-Step Placement Roadmap -->
        <div class="service-card">
          <span class="sec-tag"><span class="sec-tag-dot"></span> End-to-End Assistance</span>
          <h3 class="service-detail-title">Step-by-Step Placement Roadmap</h3>
          <p class="service-detail-lead">All Land Consultancy navigates every milestone of your transition from initial documentation to your first day in the hospital ward:</p>

          <div class="placement-roadmap-flow">
            @foreach($placement['roadmap'] as $step)
              <div class="placement-roadmap-item">
                <div class="roadmap-badge-col">
                  <span class="roadmap-step-badge">{{ $step['step'] }}</span>
                  <div class="roadmap-line"></div>
                </div>
                <div class="roadmap-content-col">
                  <h4 class="roadmap-step-title">{{ $step['title'] }}</h4>
                  <p class="roadmap-step-desc">{{ $step['desc'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <!-- 5. Explore Other Placement Sectors -->
        <div class="service-card">
          <span class="sec-tag"><span class="sec-tag-dot"></span> Global Healthcare Network</span>
          <h3 class="service-detail-title">Other International Placement Sectors</h3>
          <p class="service-detail-lead">Discover healthcare and professional placement opportunities across other premier global destinations:</p>

          <div class="placement-dest-grid placement-dest-grid-4">
            @foreach($allPlacements as $k => $p)
              <a href="{{ route($p['route_name']) }}" class="placement-dest-card placement-dest-link {{ $k === $placement['key'] ? 'active-dest' : '' }}">
                <div class="placement-dest-top">
                  <img src="{{ $p['flag_url'] ?? ('https://flagcdn.com/w40/' . strtolower($p['country_code']) . '.png') }}" alt="{{ $p['country_name'] }} Flag" class="placement-flag-img" width="24" height="16">
                </div>
                <div class="placement-dest-name">{{ $p['country_name'] }}</div>
                <div class="placement-dest-roles">{{ $p['sector_tag'] ?? $p['badge'] }}</div>
                <span class="placement-dest-action">
                  @if($k === $placement['key'])
                    Current ✓
                  @else
                    Explore →
                  @endif
                </span>
              </a>
            @endforeach

            <!-- Israel Caregiver Pathway Card -->
            <a href="{{ route('services.show', 'placement-assistance') }}#israel-caregiver" class="placement-dest-card placement-dest-link">
              <div class="placement-dest-top">
                <img src="https://flagcdn.com/w40/il.png" alt="Israel Flag" class="placement-flag-img" width="24" height="16">
              </div>
              <div class="placement-dest-name">Israel</div>
              <div class="placement-dest-roles">Caregiver Program (PIBA)</div>
              <span class="placement-dest-action">Explore →</span>
            </a>
          </div>
        </div>

      </div>

      <!-- Right Column: Lead Capture Sidebar & Quick Actions -->
      <aside class="service-sidebar-col">

        <!-- Assessment Form Card -->
        <div class="service-sidebar-widget" id="placement-apply">
          <div class="service-sidebar-badge">Free Assessment</div>
          <h3 class="service-sidebar-title">Apply for {{ $placement['country_name'] }}</h3>
          <p class="service-sidebar-lead">Submit your details for a free profile assessment and qualification audit by our international placement advisors.</p>

          @if(session('success'))
            <div class="service-alert-success">
              ✓ {{ session('success') }}
            </div>
          @endif

          <form action="{{ route('inquire.submit') }}" method="POST" class="service-inquiry-form">
            @csrf
            <input type="hidden" name="source" value="{{ $placement['slug'] }}">

            <div class="service-field-group">
              <label for="name" class="service-field-label">Full Name *</label>
              <input type="text" id="name" name="name" class="service-field-input" placeholder="e.g. Anju Thomas" required value="{{ old('name') }}">
            </div>

            <div class="service-field-group">
              <label for="email" class="service-field-label">Email Address *</label>
              <input type="email" id="email" name="email" class="service-field-input" placeholder="e.g. anju@example.com" required value="{{ old('email') }}">
            </div>

            <div class="service-field-group">
              <label for="phone" class="service-field-label">Phone / WhatsApp Number *</label>
              <input type="tel" id="phone" name="phone" class="service-field-input" placeholder="e.g. +91 98765 43210" required value="{{ old('phone') }}">
            </div>

            <div class="service-field-group">
              <label for="destination" class="service-field-label">Selected Destination</label>
              <input type="text" id="destination" name="destination" class="service-field-input" readonly value="{{ $placement['country_name'] }} Placement">
            </div>

            <div class="service-field-group">
              <label for="qualification" class="service-field-label">Highest Qualification</label>
              <input type="text" id="qualification" name="qualification" class="service-field-input" placeholder="e.g. BSc Nursing, GNM, Post-BSc Nursing" value="{{ old('qualification') }}">
            </div>

            <div class="service-field-group">
              <label for="message" class="service-field-label">Experience / Query</label>
              <textarea id="message" name="message" rows="3" class="service-field-input" placeholder="Total years of clinical experience, language level, questions...">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn-primary service-submit-btn">
              Submit Free Assessment →
            </button>
          </form>

          <div class="service-contact-stack">
            <a href="https://wa.me/918590724242?text={{ urlencode($placement['whatsapp_text']) }}" target="_blank" rel="noopener" class="service-contact-btn service-contact-wa">
              <span>💬</span>
              <span>WhatsApp: +91 8590 724 242</span>
            </a>
            <a href="tel:+919074024242" class="service-contact-btn">
              <span>📞</span>
              <span>Call Us: +91 9074 024 242</span>
            </a>
          </div>
        </div>

        <!-- Placement Destination Switcher Widget -->
        <div class="service-sidebar-widget">
          <h3 class="service-sidebar-title">Placement Sectors</h3>
          <p class="service-sidebar-lead">Switch between global placement programs.</p>

          <div class="service-other-list">
            @foreach($allPlacements as $k => $p)
              <a href="{{ route($p['route_name']) }}" class="service-other-item {{ $k === $placement['key'] ? 'active' : '' }}">
                <span class="service-other-item-label">
                  <img src="{{ $p['flag_url'] ?? ('https://flagcdn.com/w40/' . strtolower($p['country_code']) . '.png') }}" alt="{{ $p['country_name'] }}" class="sidebar-flag-img" width="18" height="12">
                  <span>{{ $p['country_name'] }}</span>
                </span>
                <span>→</span>
              </a>
            @endforeach
            <a href="{{ route('services.show', 'placement-assistance') }}#israel-caregiver" class="service-other-item">
              <span class="service-other-item-label">
                <img src="https://flagcdn.com/w40/il.png" alt="Israel" class="sidebar-flag-img" width="18" height="12">
                <span>Israel Caregiver</span>
              </span>
              <span>→</span>
            </a>
          </div>
        </div>

        <!-- All Services List Card -->
        <div class="service-sidebar-widget">
          <h3 class="service-sidebar-title">Allland Services</h3>
          <p class="service-sidebar-lead">Explore complete overseas support portfolio.</p>

          <div class="service-other-list">
            @if(isset($allServices) && $allServices->isNotEmpty())
              @foreach($allServices as $s)
                <a href="{{ route('services.show', $s->slug) }}" class="service-other-item {{ $s->slug === 'placement-assistance' ? 'active' : '' }}">
                  <span>{{ $s->icon }} {{ $s->title }}</span>
                  <span>→</span>
                </a>
              @endforeach
            @endif
          </div>
        </div>

      </aside>

    </div>
  </div>
</section>

@endsection
