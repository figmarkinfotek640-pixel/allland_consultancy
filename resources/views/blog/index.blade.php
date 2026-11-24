@extends('layouts.app')

@section('title', 'Blog & Updates - All Land Consultancy | Study Abroad & Visa Insights')

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset('images/banner-blog.jpg') }}" alt="All Land Consultancy Blog" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>Blog &amp; Updates</span>
        </div>
        <div class="subpage-badge">Expert Guides &amp; Policy Updates</div>
      </div>
      <h1 class="subpage-title">Immigration Insights, Admissions &amp; <span>Career Guides</span></h1>
      <p class="subpage-subtitle">Stay informed with verified international updates written by our senior counsellors. Accurate guidelines on German blocked accounts, Canadian study permits, UK nursing, and scholarships.</p>
    </div>
  </div>
</section>

<!-- BLOG LISTING -->
<section class="page-section">
  <div class="wrap">
    
    <!-- Filter and Search Bar -->
    <div class="listing-filter-bar">
      <div class="listing-filter-pills">
        <span class="listing-filter-label">Category:</span>
        <a href="{{ route('blog.index') }}" class="pill-btn {{ empty(request('category')) ? 'active' : '' }}">All Articles</a>
        @foreach($categories as $cat)
          <a href="{{ route('blog.index', ['category' => $cat]) }}" class="pill-btn {{ request('category') === $cat ? 'active' : '' }}">{{ $cat }}</a>
        @endforeach
      </div>

      <form action="{{ route('blog.index') }}" method="GET" class="listing-filter-form">
        @if(request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search articles..." class="listing-filter-input">
        <button type="submit" class="btn-primary listing-filter-submit">Search</button>
      </form>
    </div>

    <!-- Posts Grid -->
    <div class="grid-3col">
      @forelse($blogs as $post)
        <article class="blog-card">
          <div class="blog-thumb-box">
            <img src="{{ asset($post->image ?: 'images/gallery-germany-tech.jpg') }}" alt="{{ $post->title }}">
            <span class="blog-category-chip">{{ $post->category }}</span>
          </div>
          <div class="blog-card-body">
            <div class="blog-date">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Recent' }} • {{ $post->read_time }}</div>
            <h3 class="blog-card-title">
              <a href="{{ route('blog.show', $post->slug) }}" style="color:inherit;text-decoration:none;">{{ $post->title }}</a>
            </h3>
            <p class="blog-card-excerpt">{{ Str::limit($post->excerpt, 120) }}</p>
            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card-link">Read Full Guide →</a>
          </div>
        </article>
      @empty
        <div style="grid-column:1/-1;text-align:center;padding:50px 0;">
          <p style="color:#64748b;font-size:16px;">No articles found matching your query.</p>
          <a href="{{ route('blog.index') }}" class="btn-primary" style="display:inline-flex;padding:10px 22px;margin-top:12px;">Reset Filter</a>
        </div>
      @endforelse
    </div>

    <div style="margin-top:40px;">
      {{ $blogs->links() }}
    </div>

  </div>
</section>

@endsection

