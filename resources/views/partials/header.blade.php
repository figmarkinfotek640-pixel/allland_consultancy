<!-- 2. STICKY NAVIGATION -->
<header class="site-header">
  <div class="nav-inner">
    <a href="{{ route('home') }}" class="nav-logo">
      <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy">
    </a>
    <nav aria-label="Main" class="main-nav">
      <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
      <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">Services</a>
      <a href="{{ route('study-abroad') }}" class="nav-link {{ request()->routeIs('study-abroad') || request()->routeIs('courses.*') ? 'active' : '' }}">Study Abroad</a>
      <a href="{{ route('exclusives') }}" class="nav-link {{ request()->routeIs('exclusives') ? 'active' : '' }}">Exclusives</a>
      <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">Events</a>
      <a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
      <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
    </nav>
    <a href="{{ route('contact') }}" class="nav-cta">Book Free Counselling</a>
    <button type="button" class="nav-mobile-toggle" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>

