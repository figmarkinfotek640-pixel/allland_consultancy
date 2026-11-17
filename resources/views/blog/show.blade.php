@extends('layouts.app')

@section('title', $blog->title . ' - All Land Consultancy')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-blog.jpg') }}" alt="{{ $blog->title }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('blog.index') }}">Blog</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $blog->category }}</span>
        </div>
        <div class="subpage-badge">{{ $blog->category }}</div>
      </div>
      <h1 class="subpage-title">{{ $blog->title }}</h1>
      <p class="subpage-subtitle">Published on {{ $blog->published_at ? $blog->published_at->format('F d, Y') : 'Recent' }} · By {{ $blog->author }} · {{ $blog->read_time }}</p>
    </div>
  </div>
</section>

<!-- ARTICLE BODY & SIDEBAR -->
<section class="page-section blog-detail-section">
  <div class="wrap">
    <div class="blog-detail-layout">
      <article class="blog-article">
        @if($blog->image)
          <div class="blog-featured-media">
            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="blog-featured-img">
            <span class="blog-featured-badge">{{ $blog->category }}</span>
          </div>
        @endif

        @if($blog->excerpt)
          <div class="blog-key-takeaways">
            <div class="blog-key-takeaways-head">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
              <span>Executive Summary &amp; Key Takeaways</span>
            </div>
            <p class="blog-key-takeaways-text">{{ $blog->excerpt }}</p>
          </div>
        @endif

        <div class="blog-prose">
          {!! $blog->content !!}
        </div>

        <!-- Author Card -->
        <div class="blog-author-card">
          <div class="blog-author-avatar" aria-hidden="true">
            {{ strtoupper(substr($blog->author, 0, 1)) }}
          </div>
          <div class="blog-author-info">
            <div class="blog-author-label">Author &amp; Advisory Specialist</div>
            <h3 class="blog-author-name">{{ $blog->author }}</h3>
            <p class="blog-author-bio">Senior international education and overseas career advisor at All Land Consultancy, Aluva. Helping students and working professionals navigate university admissions, licensing procedures, blocked accounts, and post-study work permits.</p>
          </div>
        </div>

        <!-- In-Article Consultation CTA Banner -->
        <div class="blog-cta-strip">
          <div class="blog-cta-content">
            <h4>Planning your overseas journey?</h4>
            <p>Get your profile and academic documents verified by our senior counselors in Aluva.</p>
          </div>
          <div class="blog-cta-actions">
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20read%20your%20guide%20'{{ urlencode($blog->title) }}'%20and%20need%20expert%20guidance." target="_blank" rel="noopener" class="blog-cta-whatsapp-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              <span>Chat on WhatsApp</span>
            </a>
            <a href="{{ route('contact') }}" class="blog-cta-appointment-btn">
              <span>Book 1:1 Counselling</span>
            </a>
          </div>
        </div>

        <!-- Back to Blog Link -->
        <div class="blog-post-nav">
          <a href="{{ route('blog.index') }}" class="blog-back-btn">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"></path><path d="m12 19-7-7 7-7"></path></svg>
            <span>Back to All Articles</span>
          </a>
        </div>
      </article>

      <!-- Sidebar -->
      <aside class="blog-sidebar">
        <!-- 1:1 Counselling Box -->
        <div class="blog-sidebar-card">
          <h3 class="blog-sidebar-title">Need Free 1:1 Counselling?</h3>
          <p class="blog-sidebar-desc">Ask our senior overseas mentors in Aluva about eligibility, universities, blocked accounts, and visa cut-offs.</p>
          <ul class="blog-sidebar-perks">
            <li class="blog-sidebar-perk">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>100% Free Profile Assessment</span>
            </li>
            <li class="blog-sidebar-perk">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Scholarship &amp; Loan Guidance</span>
            </li>
            <li class="blog-sidebar-perk">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Visa Filing &amp; Interview Prep</span>
            </li>
          </ul>
          <a href="{{ route('contact') }}" class="btn-primary blog-sidebar-btn">Book Free Appointment →</a>
        </div>

        <!-- Related Articles -->
        @if($recentBlogs->count() > 0)
          <div class="blog-sidebar-card blog-sidebar-card-alt">
            <h3 class="blog-sidebar-title">Related Articles</h3>
            <div class="blog-related-list">
              @foreach($recentBlogs as $rb)
                <div class="blog-related-item">
                  <span class="blog-related-category">{{ $rb->category }}</span>
                  <a href="{{ route('blog.show', $rb->slug) }}" class="blog-related-title">{{ $rb->title }}</a>
                  <div class="blog-related-meta">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg>
                    <span>{{ $rb->read_time }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endif

        <!-- Office Helpline Box -->
        <div class="blog-sidebar-helpline">
          <div class="blog-helpline-label">Direct Admission Helpline</div>
          <a href="tel:+919074024242" class="blog-helpline-num">+91 9074 024 242</a>
          <p class="blog-helpline-sub">Mon – Sat, 9:30 AM – 6:00 PM IST</p>
        </div>
      </aside>
    </div>
  </div>
</section>

@endsection
