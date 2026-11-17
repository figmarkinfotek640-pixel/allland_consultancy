@extends('layouts.app')

@section('title', 'Exclusives - All Land Consultancy | Healthcare Placement & Fast-Track Programs')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-exclusive.jpg') }}" alt="All Land Consultancy Exclusives" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>Exclusives</span>
        </div>
        <div class="subpage-badge">Direct Career &amp; Healthcare Gateways</div>
      </div>
      <h1 class="subpage-title">Specialized International Pathways with <span>Direct Sponsorship</span></h1>
      <p class="subpage-subtitle">Exclusive recruitment and admissions programs curated by All Land Consultancy — from direct nursing placements in Germany and the UK NHS to zero-tuition German STEM admissions.</p>
    </div>
  </div>
</section>

<!-- EXCLUSIVE PROGRAMS SHOWCASE -->
<section class="page-section exclusive-section">
  <div class="wrap">
    <div class="exclusive-header">
      <p class="sec-tag"><span class="sec-tag-dot"></span> High-Impact Opportunities</p>
      <h2 class="sec-h2">Handpicked programs with verified settlement outcomes.</h2>
      <p class="sec-p">Take advantage of direct employer partnerships and government-backed immigration schemes with full handholding from our Aluva team.</p>
    </div>

    <div class="exclusive-cards-grid">

      <!-- Program 1: Germany Nursing -->
      <article class="exclusive-card exclusive-card-de">
        <div class="exclusive-card-top">
          <span class="exclusive-badge exclusive-badge-de">Healthcare Exclusive</span>
          <div class="exclusive-country-tag">Germany</div>
        </div>

        <h3 class="exclusive-card-title">Germany Nursing Fast-Track Recruitment</h3>
        <p class="exclusive-card-summary">Direct hiring by leading public and private university hospitals in Germany for qualified Indian nurses. Earn full professional wages while completing your adaptation course with full legal registration.</p>

        <div class="exclusive-specs-box">
          <div class="exclusive-specs-grid">
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">Salary Range</span>
              <span class="exclusive-spec-val highlight-blue">€2,800 – €3,800/mo</span>
            </div>
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">Language Level</span>
              <span class="exclusive-spec-val">B1/B2 German Support</span>
            </div>
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">Work Schedule</span>
              <span class="exclusive-spec-val">38.5 hrs / week</span>
            </div>
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">PR Settlement</span>
              <span class="exclusive-spec-val highlight-green">Fast PR in 3 Years</span>
            </div>
          </div>
        </div>

        <ul class="exclusive-perks-list exclusive-perks-de">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><strong>Zero placement fees</strong> for eligible healthcare candidates</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Free accommodation assistance during adaptation period</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Spouse open work permit and full family reunification</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Defizitbescheid (recognition letter) filing &amp; translation support</span>
          </li>
        </ul>

        <div class="exclusive-card-action">
          <a href="{{ route('contact') }}" class="btn-primary exclusive-btn exclusive-btn-de">Apply for German Nursing →</a>
        </div>
      </article>

      <!-- Program 2: UK NHS Direct Placement -->
      <article class="exclusive-card exclusive-card-uk">
        <div class="exclusive-card-top">
          <span class="exclusive-badge exclusive-badge-uk">NHS Sponsorship</span>
          <div class="exclusive-country-tag">United Kingdom</div>
        </div>

        <h3 class="exclusive-card-title">UK NHS Staff Nurse Sponsorship (Band 5)</h3>
        <p class="exclusive-card-summary">Direct Tier-2 / Health and Care Worker Visa sponsorship with leading NHS Foundation Trusts and established UK private hospital networks. Includes complete CBT guidance and OSCE mentorship.</p>

        <div class="exclusive-specs-box">
          <div class="exclusive-specs-grid">
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">NHS Pay Scale</span>
              <span class="exclusive-spec-val highlight-orange">Band 5 (£28k – £34k/yr)</span>
            </div>
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">Visa Category</span>
              <span class="exclusive-spec-val">Health &amp; Care (Tier-2)</span>
            </div>
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">Relocation Cost</span>
              <span class="exclusive-spec-val highlight-green">Trust-Reimbursed</span>
            </div>
            <div class="exclusive-spec-item">
              <span class="exclusive-spec-label">OSCE Training</span>
              <span class="exclusive-spec-val">Hospital Provided</span>
            </div>
          </div>
        </div>

        <ul class="exclusive-perks-list exclusive-perks-uk">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span><strong>Direct NHS contract</strong> issued prior to departing India</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Comprehensive IELTS / OET interview preparation coaching</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>CBT examination guidance and NMC registration documentation</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Dependent visa sponsorship for spouse and children from day one</span>
          </li>
        </ul>

        <div class="exclusive-card-action">
          <a href="{{ route('contact') }}" class="btn-primary exclusive-btn exclusive-btn-uk">Apply for UK NHS Placement →</a>
        </div>
      </article>

    </div>

    <!-- Germany Nursing Ausbildung Spotlight -->
    <div class="exclusive-ausbildung-card">
      <div class="exclusive-ausbildung-grid">
        <div class="exclusive-ausbildung-content">
          <div class="exclusive-ausbildung-badge">
            <span class="exclusive-badge-dot"></span>
            <span>Plus-Two / 12th Pass Gateway</span>
          </div>
          <h3 class="exclusive-ausbildung-title">German Nursing Ausbildung: Zero Tuition &amp; Monthly Stipend</h3>
          <p class="exclusive-ausbildung-text">
            A government-accredited 3-year vocational apprenticeship in top German hospital networks. You pay <strong>€0 tuition</strong> and receive a guaranteed monthly stipend of <strong>€1,000 to €1,250</strong> from day one. Upon completion, qualify directly for a German permanent nursing license (Urkunde) and European PR.
          </p>

          <div class="exclusive-ausbildung-metrics">
            <div class="exclusive-metric-item">
              <div class="exclusive-metric-val">€0</div>
              <div class="exclusive-metric-lbl">Tuition Fees</div>
            </div>
            <div class="exclusive-metric-item">
              <div class="exclusive-metric-val">€1,000+</div>
              <div class="exclusive-metric-lbl">Monthly Stipend</div>
            </div>
            <div class="exclusive-metric-item">
              <div class="exclusive-metric-val">100%</div>
              <div class="exclusive-metric-lbl">Hospital Placement</div>
            </div>
          </div>

          <div class="exclusive-ausbildung-actions">
            <a href="{{ route('contact') }}" class="btn-primary exclusive-ausbildung-btn">Register for Ausbildung Batch →</a>
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20want%20details%20about%20Ausbildung" target="_blank" rel="noopener" class="btn-ghost exclusive-ausbildung-wa">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              <span>Chat on WhatsApp</span>
            </a>
          </div>
        </div>

        <div class="exclusive-ausbildung-media">
          <img src="{{ asset('images/service-placement.jpg') }}" alt="Ausbildung Students" class="exclusive-ausbildung-img">
          <div class="exclusive-media-caption">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            <span>German State Certified Apprenticeship</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
