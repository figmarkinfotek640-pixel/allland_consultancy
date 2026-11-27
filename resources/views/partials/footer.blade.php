<!-- FOOTER -->
<footer id="contact" class="site-footer">
  <div class="wrap footer-top">
    <div class="footer-grid">

      <div>
        <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy Logo" class="footer-logo">
        <p class="footer-tagline">"The future belongs to those who can imagine it, design it and execute it."</p>
        <div class="footer-soc">
          <a href="https://www.instagram.com/all_land_consultancy/" target="_blank" rel="noopener" class="footer-soc-link soc-instagram" aria-label="Instagram" title="Follow on Instagram">
            <svg class="footer-soc-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
          <a href="https://www.facebook.com/profile.php?id=100094266267256" target="_blank" rel="noopener" class="footer-soc-link soc-facebook" aria-label="Facebook" title="Follow on Facebook">
            <svg class="footer-soc-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/all-land-consultancy-32287425b/" target="_blank" rel="noopener" class="footer-soc-link soc-linkedin" aria-label="LinkedIn" title="Connect on LinkedIn">
            <svg class="footer-soc-icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
          </a>
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Useful Links</h3>
        <div class="footer-links">
          <a href="{{ route('blog.index') }}" class="footer-link">Blog</a>
          <a href="{{ route('events.index') }}" class="footer-link">Events</a>
          <a href="{{ route('services.show', 'visa-assistance') }}" class="footer-link">Visa Assistance</a>
          <a href="{{ route('courses.index') }}" class="footer-link">Courses &amp; Degrees</a>
          <a href="{{ route('placement.germany') }}" class="footer-link">Germany Career Placement</a>
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Quick Links</h3>
        <div class="footer-links">
          <a href="{{ route('home') }}" class="footer-link">Home</a>
          <a href="{{ route('about') }}" class="footer-link">About Us</a>
          <a href="{{ route('services.index') }}" class="footer-link">Our Services</a>
          <a href="{{ route('services.show', 'placement-assistance') }}" class="footer-link">Placement Assistance</a>
          <a href="{{ route('contact') }}" class="footer-link">Contact Us</a>
        </div>
      </div>

      <div>
        <h3 class="footer-col-title">Visit Our Aluva Office</h3>
        <address class="footer-address">
          Laxmanas Tower, 11/56, Pump Junction,<br>
          Opp. Municipal Office, Periyar Nagar,<br>
          Aluva, Kerala 683101
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

