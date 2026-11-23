<!-- 2. STICKY NAVIGATION -->
<header class="site-header">
  <div class="nav-inner">
    <a href="{{ route('home') }}" class="nav-logo">
      <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy">
    </a>
    <nav aria-label="Main" class="main-nav">
      <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('services.index') }}" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">Services</a>
      <!-- Study Abroad Dropdown (Loaded dynamically from backend) -->
      <div class="nav-item-dropdown">
        <button type="button" class="nav-link nav-dropdown-trigger {{ request()->is('study-abroad*') || request()->routeIs('destinations.*') ? 'active' : '' }}" aria-expanded="false" aria-haspopup="true">
          <span>Study Abroad</span>
          <svg class="nav-dropdown-caret" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m6 9 6 6 6-6"/>
          </svg>
        </button>
        @php
          $destCount = isset($navDestinations) ? $navDestinations->count() : 7;
          $colClass = $destCount > 14 ? 'nav-dropdown-mega-col' : ($destCount > 7 ? 'nav-dropdown-multi-col' : '');
        @endphp
        <div class="nav-dropdown-menu nav-dropdown-countries {{ $colClass }}" role="menu">
          @if(isset($navDestinations) && $navDestinations->isNotEmpty())
            @foreach($navDestinations as $dest)
              <a href="{{ route('destinations.show', $dest->slug) }}" class="nav-dropdown-item {{ request()->is('study-abroad/' . $dest->slug) ? 'active' : '' }}" role="menuitem">
                <span class="nav-dest-flag">
                  @if($dest->flag_url)
                    <img src="{{ $dest->flag_url }}" alt="{{ $dest->name }}" class="nav-flag-img" width="18" height="12" loading="lazy">
                  @else
                    {{ $dest->flag }}
                  @endif
                </span>
                <span>{{ $dest->name }}</span>
              </a>
            @endforeach
          @else
            <a href="{{ route('destinations.show', 'germany') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/de.png" alt="Germany" class="nav-flag-img" width="18" height="12">Germany</a>
            <a href="{{ route('destinations.show', 'georgia') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/ge.png" alt="Georgia" class="nav-flag-img" width="18" height="12">Georgia</a>
            <a href="{{ route('destinations.show', 'austria') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/at.png" alt="Austria" class="nav-flag-img" width="18" height="12">Austria</a>
            <a href="{{ route('destinations.show', 'united-kingdom') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/gb.png" alt="UK" class="nav-flag-img" width="18" height="12">UK</a>
            <a href="{{ route('destinations.show', 'tajikistan') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/tj.png" alt="Tajikistan" class="nav-flag-img" width="18" height="12">Tajikistan</a>
            <a href="{{ route('destinations.show', 'canada') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/ca.png" alt="Canada" class="nav-flag-img" width="18" height="12">Canada</a>
            <a href="{{ route('destinations.show', 'new-zealand') }}" class="nav-dropdown-item" role="menuitem"><img src="https://flagcdn.com/w40/nz.png" alt="New Zealand" class="nav-flag-img" width="18" height="12">New Zealand</a>
          @endif
        </div>
      </div>
      <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.*') ? 'active' : '' }}">Events</a>

      <!-- Pages Dropdown (Blog, About Us, Exclusives) -->
      <div class="nav-item-dropdown">
        <button type="button" class="nav-link nav-dropdown-trigger {{ request()->routeIs('blog.*') || request()->routeIs('about') || request()->routeIs('exclusives') ? 'active' : '' }}" aria-expanded="false" aria-haspopup="true">
          <span>Pages</span>
          <svg class="nav-dropdown-caret" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="m6 9 6 6 6-6"/>
          </svg>
        </button>
        <div class="nav-dropdown-menu" role="menu">
          <a href="{{ route('blog.index') }}" class="nav-dropdown-item {{ request()->routeIs('blog.*') ? 'active' : '' }}" role="menuitem">Blog</a>
          <a href="{{ route('about') }}" class="nav-dropdown-item {{ request()->routeIs('about') ? 'active' : '' }}" role="menuitem">About Us</a>
          <a href="{{ route('exclusives') }}" class="nav-dropdown-item {{ request()->routeIs('exclusives') ? 'active' : '' }}" role="menuitem">Exclusives</a>
        </div>
      </div>

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

