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
          <a href="{{ route('study-abroad', ['country' => 'DE']) }}" class="footer-link">Study in Germany (Free Tuition)</a>
          <a href="{{ route('study-abroad', ['country' => 'CA']) }}" class="footer-link">Study in Canada (PGWP Pathways)</a>
          <a href="{{ route('study-abroad', ['country' => 'UK']) }}" class="footer-link">Study in United Kingdom (1-Yr Masters)</a>
          <a href="{{ route('study-abroad', ['country' => 'NZ']) }}" class="footer-link">Study in New Zealand (Green List)</a>
          <a href="{{ route('exclusives') }}" class="footer-link">German Nursing Ausbildung</a>
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Quick Links</h3>
        <div class="footer-links">
          <a href="{{ route('home') }}" class="footer-link">Home</a>
          <a href="{{ route('about') }}" class="footer-link">About Us</a>
          <a href="{{ route('services.index') }}" class="footer-link">Our Services</a>
          <a href="{{ route('study-abroad') }}" class="footer-link">Study Abroad &amp; Courses</a>
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
<a href="https://wa.me/918590724242" target="_blank" rel="noopener" class="float-wa" title="Chat on WhatsApp">
  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
  WhatsApp Us
</a>

