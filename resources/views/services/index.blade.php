@extends('layouts.app')

@section('title', 'Our Services - All Land Consultancy | Visa, Admissions, Attestation & Placement')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-02.jpg') }}" alt="All Land Consultancy Services" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>Services</span>
        </div>
        <div class="subpage-badge">End-to-End Overseas Solutions</div>
      </div>
      <h1 class="subpage-title">Everything You Need for Your Global Journey, <span>Under One Roof</span></h1>
      <p class="subpage-subtitle">From initial university selection and visa documentation to certificate attestations, healthcare DataFlow, flight tickets, and post-landing settlement support.</p>
    </div>
  </div>
</section>

<!-- SERVICES GRID -->
<section class="page-section">
  <div class="wrap">
    <div class="sec-heading-center">
      <p class="sec-tag sec-tag-center"><span class="sec-tag-dot"></span> Complete Service Portfolio</p>
      <h2 class="sec-h2 sec-h2-center">Dedicated guidance for students &amp; professionals.</h2>
      <p class="sec-p sec-p-center">Every milestone of your international study or career move is executed by our in-house specialists in Aluva with zero paperwork confusion.</p>
    </div>

    <div class="grid-3col">
      @forelse($services as $srv)
        <div class="card-white service-index-card">
          <div class="card-icon-wrap">{{ $srv->icon ?: '🛂' }}</div>
          <h3 class="card-title">{{ $srv->title }}</h3>
          <p class="card-desc service-index-desc">{{ $srv->excerpt }}</p>
          
          @if(!empty($srv->features) && is_array($srv->features))
            <ul class="service-index-features">
              @foreach($srv->features as $f)
                <li>{{ $f }}</li>
              @endforeach
            </ul>
          @endif

          <a href="{{ route('services.show', $srv->slug) }}" class="blog-card-link service-index-link">Explore Details &amp; Guidance →</a>
        </div>
      @empty
        <p class="service-index-empty">No services added yet.</p>
      @endforelse
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="cta-banner">
  <div class="cta-banner-bg">
    <img src="{{ asset('images/banner-about.jpg') }}" alt="Enquire" class="banner-bg-img">
  </div>
  <div class="cta-banner-overlay"></div>
  <div class="cta-inner">
    <h2 class="cta-title">Need specialized assistance with your application?</h2>
    <p class="cta-desc">Talk directly with our senior documentation specialists. Walk into our Aluva office or schedule a call on WhatsApp.</p>
    <div class="cta-btns">
      <a href="{{ route('contact') }}" class="btn-cta-primary">Book Free Consultation</a>
      <a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="btn-cta-wa">Chat on WhatsApp</a>
    </div>
  </div>
</section>

@endsection

