<!-- FOOTER -->
<footer id="contact" class="site-footer">
  <div class="wrap footer-top">
    <div class="footer-grid">

      <div>
        <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy Logo" class="footer-logo">
        <p class="footer-tagline">"The future belongs to those who can imagine it, design it and execute it."</p>
        <div class="footer-soc">
          <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener" class="footer-soc-link">Instagram</a>
          <a href="https://www.facebook.com/profile.php?id=100094266267256" target="_blank" rel="noopener" class="footer-soc-link">Facebook</a>
          <a href="https://www.linkedin.com/in/all-land-consultancy-32287425b/" target="_blank" rel="noopener" class="footer-soc-link">LinkedIn</a>
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Study Abroad</h3>
        <div class="footer-links">
          @if(isset($navDestinations) && $navDestinations->isNotEmpty())
            @foreach($navDestinations as $dest)
              <a href="{{ route('destinations.show', $dest->slug) }}" class="footer-link">Study in {{ $dest->name }}</a>
            @endforeach
            <a href="{{ route('exclusives') }}" class="footer-link">German Nursing Ausbildung</a>
          @else
            <a href="{{ route('destinations.show', 'germany') }}" class="footer-link">Study in Germany</a>
            <a href="{{ route('destinations.show', 'georgia') }}" class="footer-link">Study in Georgia</a>
            <a href="{{ route('destinations.show', 'austria') }}" class="footer-link">Study in Austria</a>
            <a href="{{ route('destinations.show', 'united-kingdom') }}" class="footer-link">Study in UK</a>
            <a href="{{ route('destinations.show', 'tajikistan') }}" class="footer-link">Study in Tajikistan</a>
            <a href="{{ route('destinations.show', 'canada') }}" class="footer-link">Study in Canada</a>
            <a href="{{ route('destinations.show', 'new-zealand') }}" class="footer-link">Study in New Zealand</a>
          @endif
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Quick Links</h3>
        <div class="footer-links">
          <a href="{{ route('home') }}" class="footer-link">Home</a>
          <a href="{{ route('about') }}" class="footer-link">About Us</a>
          <a href="{{ route('services.index') }}" class="footer-link">Our Services</a>
          <a href="{{ route('courses.index') }}" class="footer-link">Courses &amp; Degrees</a>
          <a href="{{ route('exclusives') }}" class="footer-link">Exclusives</a>
          <a href="{{ route('events.index') }}" class="footer-link">Seminars &amp; Events</a>
          <a href="{{ route('blog.index') }}" class="footer-link">Blog &amp; Updates</a>
          <a href="{{ route('contact') }}" class="footer-link">Contact Us</a>
          <a href="{{ route('admin.login') }}" class="footer-link" style="color:#FBBF24;">Admin Login</a>
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Visit Our Aluva Office</h3>
        <address class="footer-address">
          Laxmanas Tower, 11/56, Pump Junction,<br>
          Opp. Municipal Office, Periyar Nagar,<br>
          Aluva, Ernakulam, Kerala 683101
        </address>
        <div class="footer-contact">
          <a href="tel:+919074024242" class="footer-contact-link">+91 9074 024 242</a>
          <a href="mailto:info@alllandconsultancy.com" class="footer-contact-link">info@alllandconsultancy.com</a>
        </div>
      </div>

    </div>
  </div>

  <div class="wrap footer-bottom">
    <span>© {{ date('Y') }} All Land Consultancy. All rights reserved. Registered in Kerala, India.</span>
    <a href="#top" class="footer-back-top">Back to Top ↑</a>
  </div>
</footer>

<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="float-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
  <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2ZM12.04 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19.01L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.04 3.67ZM8.73 7.39C8.54 7.39 8.24 7.46 7.99 7.73C7.74 8 7.03 8.67 7.03 10.03C7.03 11.39 8.02 12.7 8.16 12.89C8.3 13.08 10.1 15.85 12.84 17.04C13.49 17.32 14 17.51 14.39 17.64C15.05 17.85 15.65 17.82 16.13 17.75C16.66 17.67 17.76 17.08 17.99 16.43C18.22 15.78 18.22 15.22 18.15 15.11C18.08 15 17.89 14.93 17.61 14.79C17.33 14.65 15.95 13.97 15.69 13.88C15.43 13.79 15.25 13.74 15.06 14.02C14.87 14.3 14.34 14.93 14.18 15.11C14.02 15.29 13.86 15.32 13.58 15.18C13.3 15.04 12.4 14.74 11.33 13.79C10.5 13.05 9.94 12.14 9.8 11.9C9.66 11.66 9.79 11.53 9.93 11.39C10.05 11.27 10.2 11.07 10.34 10.91C10.48 10.75 10.53 10.63 10.62 10.45C10.71 10.27 10.66 10.11 10.59 9.97C10.52 9.83 9.96 8.46 9.73 7.9C9.51 7.36 9.28 7.44 9.11 7.43C8.95 7.42 8.76 7.39 8.73 7.39Z"/>
  </svg>
</a>

