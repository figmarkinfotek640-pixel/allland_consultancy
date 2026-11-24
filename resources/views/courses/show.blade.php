@extends('layouts.app')

@section('title', $course->title . ' - Study in ' . $course->country . ' | All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset($course->image ?: 'images/hero-campus-walk.jpg') }}" alt="{{ $course->title }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('courses.index') }}">Courses</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $course->country }}</span>
        </div>
        <div class="subpage-badge">{{ $course->degree_level }}</div>
      </div>
      <h1 class="subpage-title">{{ $course->title }}</h1>
      <p class="subpage-subtitle">Offered in top universities across {{ $course->country }}. Direct counselling, eligibility evaluation, and visa guidance by All Land Aluva.</p>
    </div>
  </div>
</section>

<!-- COURSE CONTENT & APPLICATION -->
<section class="page-section">
  <div class="wrap">
    <div class="course-detail-layout">
      <div>
        <!-- Quick Stats Cards -->
        <div class="course-stats-grid">
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Country</span>
            <span style="font-size:16px;font-weight:800;color:#1d253a;">{{ $course->country }}</span>
          </div>
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Duration</span>
            <span style="font-size:16px;font-weight:800;color:#1d253a;">{{ $course->duration }}</span>
          </div>
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Tuition Fees</span>
            <span style="font-size:16px;font-weight:800;color:#D9561A;">{{ $course->tuition_fee ?: 'Contact Us' }}</span>
          </div>
          <div style="background:#F8FAFC;border:1px solid #E2E8F0;border-radius:14px;padding:16px;">
            <span style="font-size:11px;font-weight:700;color:#0580C1;text-transform:uppercase;display:block;">Language Req</span>
            <span style="font-size:14px;font-weight:700;color:#1d253a;">{{ $course->language_requirement ?: 'IELTS / MOI' }}</span>
          </div>
        </div>

        @if($course->stipend)
          <div style="background:rgba(217,86,26,0.08);border:1px solid rgba(217,86,26,0.3);border-radius:14px;padding:16px 20px;margin-bottom:30px;">
            <span style="font-size:12px;font-weight:800;color:#D9561A;text-transform:uppercase;display:block;">Stipend / Earning Potential:</span>
            <strong style="font-size:18px;color:#1d253a;">{{ $course->stipend }}</strong>
          </div>
        @endif

        <div style="font-size:15.5px;line-height:1.75;color:#334155;margin-bottom:32px;">
          {!! $course->description ?: '<p>' . e($course->excerpt) . '</p>' !!}
        </div>

        @if($course->career_pathway)
          <div style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:16px;padding:24px;margin-bottom:32px;box-shadow:0 4px 16px rgba(0,0,0,0.03);">
            <h3 style="font-size:18px;font-weight:800;color:#1d253a;margin-top:0;margin-bottom:8px;">Post-Graduation Career &amp; PR Pathway</h3>
            <p style="color:#0580C1;font-weight:700;margin:0;font-size:14.5px;">{{ $course->career_pathway }}</p>
          </div>
        @endif

        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:24px;">
          <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20want%20to%20apply%20for%20{{ urlencode($course->title) }}" target="_blank" rel="noopener" class="btn-primary" style="display:inline-flex;padding:12px 26px;">
            Apply on WhatsApp
          </a>
          <a href="{{ route('contact') }}" class="btn-ghost" style="padding:12px 24px;">Book Free Evaluation</a>
        </div>
      </div>

      <!-- Application Sidebar -->
      <aside>
        <div class="course-sidebar-card" style="background:#FFFFFF;border:1px solid #E2E8F0;border-radius:18px;padding:30px;box-shadow:0 10px 25px rgba(0,0,0,0.05);">
          <h3 style="font-family:'DM Serif Display',Georgia,serif;font-size:22px;color:#1d253a;margin-top:0;margin-bottom:8px;">Free Profile Evaluation</h3>
          <p style="font-size:13px;color:#64748b;margin-bottom:20px;">Find out if you qualify for {{ $course->title }}.</p>

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="destination" value="{{ $course->country }}">
            <input type="hidden" name="service_interest" value="{{ $course->title }}">

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Your Name *</label>
              <input type="text" name="name" required placeholder="e.g. Sandra Paul" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Phone / WhatsApp *</label>
              <input type="text" name="phone" required placeholder="+91 98765 43210" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Email Address *</label>
              <input type="email" name="email" required placeholder="name@email.com" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:14px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Highest Qualification</label>
              <input type="text" name="qualification" placeholder="e.g. B.Tech ECE (72%), BSc Nursing" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <div style="margin-bottom:18px;">
              <label style="display:block;font-size:12px;font-weight:700;color:#1d253a;text-transform:uppercase;margin-bottom:6px;">Preferred Intake</label>
              <input type="text" name="preferred_intake" value="{{ $course->intake }}" placeholder="e.g. Oct 2027" style="width:100%;padding:11px 14px;border:1px solid #CBD5E1;border-radius:10px;font-size:13.5px;box-sizing:border-box;">
            </div>

            <button type="submit" class="btn-primary" style="width:100%;justify-content:center;padding:12px;">Check My Eligibility</button>
          </form>
        </div>
      </aside>
    </div>
  </div>
</section>

@endsection

