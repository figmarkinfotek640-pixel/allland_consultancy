/**
 * All Land Consultancy - Core Site Scripts
 * Handles Scroll Reveal Animations, Mobile Drawer, Sticky Navbar Transitions, and Form Interactions.
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // 1. DYNAMIC MOBILE NAVIGATION DRAWER
  function initMobileNav() {
    var header = document.querySelector('.site-header');
    var navInner = document.querySelector('.site-header .nav-inner');
    if (!navInner) return;

    // Create Toggle Button if not present
    var toggleBtn = document.querySelector('.nav-mobile-toggle');
    if (!toggleBtn) {
      toggleBtn = document.createElement('button');
      toggleBtn.className = 'nav-mobile-toggle';
      toggleBtn.setAttribute('type', 'button');
      toggleBtn.setAttribute('aria-label', 'Toggle Navigation Menu');
      toggleBtn.innerHTML = '<span></span><span></span><span></span>';
      navInner.appendChild(toggleBtn);
    }

    // Determine current path
    var currentPath = window.location.pathname.split('/').pop().toLowerCase();
    if (!currentPath || currentPath === '' || currentPath === 'index.html') {
      currentPath = 'index.html';
    }

    // Create Backdrop & Drawer Panel if not present
    var backdrop = document.querySelector('.mobile-drawer-backdrop');
    var panel = document.querySelector('.mobile-drawer-panel');

    if (!panel) {
      backdrop = document.createElement('div');
      backdrop.className = 'mobile-drawer-backdrop';
      document.body.appendChild(backdrop);

      panel = document.createElement('aside');
      panel.className = 'mobile-drawer-panel';
      panel.setAttribute('aria-label', 'Mobile Navigation');

      var navItems = [
        { name: 'Home', href: 'index.html' },
        { name: 'About Us', href: 'about.html' },
        { name: 'Services', href: 'services.html' },
        { name: 'Study Abroad', href: 'study-abroad.html' },
        { name: 'Exclusives', href: 'exclusives.html' },
        { name: 'Blog', href: 'blog.html' },
        { name: 'Contact Us', href: 'contact.html' }
      ];

      var linksHtml = navItems.map(function (item) {
        var isActive = currentPath === item.href.toLowerCase();
        return '<a href="' + item.href + '" class="mob-nav-link' + (isActive ? ' active' : '') + '">' + item.name + '</a>';
      }).join('');

      panel.innerHTML = [
        '<div class="mobile-drawer-top">',
        '  <a href="index.html">',
        '    <img src="./images/all-land-logo.png" alt="All Land Consultancy" style="height:36px;width:auto;display:block;">',
        '  </a>',
        '  <button type="button" class="nav-mobile-toggle active" aria-label="Close Menu" style="display:inline-flex;">',
        '    <span></span><span></span><span></span>',
        '  </button>',
        '</div>',
        '<nav class="mobile-drawer-links">',
        linksHtml,
        '</nav>',
        '<div class="mobile-drawer-bottom">',
        '  <a href="contact.html" class="btn-primary" style="width:100%;text-align:center;justify-content:center;margin-bottom:14px;box-sizing:border-box;">Book Free Counselling</a>',
        '  <a href="tel:+919074024242" style="display:flex;align-items:center;gap:8px;font-size:13px;color:#1d253a;font-weight:700;text-decoration:none;margin-bottom:10px;">',
        '    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0580C1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
        '    +91 9074 024 242',
        '  </a>',
        '  <a href="https://wa.me/918590724242" target="_blank" rel="noopener" style="display:flex;align-items:center;gap:8px;font-size:13px;color:#16a34a;font-weight:700;text-decoration:none;">',
        '    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>',
        '    WhatsApp: +91 8590 724 242',
        '  </a>',
        '</div>'
      ].join('');

      document.body.appendChild(panel);
    }

    function openDrawer() {
      panel.classList.add('active');
      backdrop.classList.add('active');
      document.body.style.overflow = 'hidden';
      toggleBtn.classList.add('active');
    }

    function closeDrawer() {
      panel.classList.remove('active');
      backdrop.classList.remove('active');
      document.body.style.overflow = '';
      toggleBtn.classList.remove('active');
    }

    toggleBtn.addEventListener('click', function () {
      if (panel.classList.contains('active')) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });

    backdrop.addEventListener('click', closeDrawer);

    var drawerCloseBtn = panel.querySelector('.mobile-drawer-top .nav-mobile-toggle');
    if (drawerCloseBtn) {
      drawerCloseBtn.addEventListener('click', closeDrawer);
    }
  }

  // 2. STICKY NAVBAR SCROLL STATE
  function initStickyHeader() {
    var header = document.querySelector('.site-header');
    if (!header) return;

    function onScroll() {
      if (window.scrollY > 25) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // 3. SCROLL REVEAL ANIMATIONS VIA INTERSECTION OBSERVER
  function initScrollReveal() {
    var revealCandidates = document.querySelectorAll(
      '.card-white, .country-hub-card, .blog-card, .exclusive-card, .media-frame, .timeline-item, .page-section .sec-h2, .page-section .sec-p, .spotlight-banner, .review-card, .contact-card, .faq-item'
    );

    if (!revealCandidates.length) return;

    revealCandidates.forEach(function (el, idx) {
      if (!el.classList.contains('reveal-init')) {
        el.classList.add('reveal-init');
        // Add staggering for consecutive siblings
        var delayIdx = (idx % 4) + 1;
        el.classList.add('reveal-delay-' + delayIdx);
      }
    });

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('revealed');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.05,
          rootMargin: '60px 0px 60px 0px'
        }
      );

      revealCandidates.forEach(function (el) {
        var rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
          // Instantly reveal elements already visible in initial viewport
          el.classList.add('revealed');
        } else {
          observer.observe(el);
        }
      });
    } else {
      // Fallback: immediately show
      revealCandidates.forEach(function (el) {
        el.classList.add('revealed');
      });
    }
  }

  // 4. INTERACTIVE ACCORDIONS / DETAILS
  function initAccordions() {
    var faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(function (item) {
      var question = item.querySelector('.faq-q, h3, .faq-question');
      if (question) {
        question.style.cursor = 'pointer';
        question.addEventListener('click', function () {
          item.classList.toggle('active');
        });
      }
    });
  }

  // 5. BOOTSTRAP ALL
  initMobileNav();
  initStickyHeader();
  initScrollReveal();
  initAccordions();
});
