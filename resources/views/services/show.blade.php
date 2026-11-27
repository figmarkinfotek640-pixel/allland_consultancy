@extends('layouts.app')

@section('title', $service->title . ' - All Land Consultancy')
@section('meta_description', Str::limit(strip_tags($service->excerpt ?: $service->description), 160))

@section('content')

<!-- SUBPAGE HERO BANNER -->
<section class="subpage-hero">
  <img src="{{ asset($service->image ?: 'images/banner-02.jpg') }}" alt="{{ $service->title }}" class="subpage-hero-bg">
  <div class="subpage-hero-overlay"></div>
  <div class="wrap">
    <div class="subpage-hero-content">
      <div class="subpage-hero-meta">
        <div class="subpage-breadcrumb">
          <a href="{{ route('home') }}">Home</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <a href="{{ route('services.index') }}">Services</a>
          <span class="subpage-breadcrumb-sep">/</span>
          <span>{{ $service->title }}</span>
        </div>
        <div class="subpage-badge">
          @if($service->slug === 'placement-assistance')
            Global Career Pathways
          @else
            Professional Service
          @endif
        </div>
      </div>
      <h1 class="subpage-title">{!! \App\Helpers\TitleHelper::twoTone($service->title) !!}</h1>
      <p class="subpage-subtitle">{{ $service->excerpt }}</p>

      @if($service->slug === 'placement-assistance')
        <div class="dest-hero-actions">
          <a href="#placement-apply" class="btn-primary">Apply for Placement</a>
          <a href="#israel-caregiver" class="btn-ghost dest-hero-btn-ghost">Israel Caregiver Details ↓</a>
        </div>
      @endif
    </div>
  </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="page-section service-page-section">
  <div class="wrap">
    <div class="service-layout-grid">

      <!-- Left Column: Rich Service Narrative & Highlights -->
      <div class="service-main-col">

        @if($service->slug === 'placement-assistance')
          <!-- ── PLACEMENT ASSISTANCE DEDICATED SHOWCASE ──────────────── -->
          <div class="service-card">
            @if($service->image)
              <div class="service-banner-media">
                <img src="{{ asset($service->image) }}" alt="Placement Assistance" class="service-banner-img">
              </div>
            @endif

            <div class="service-header-row">
              <span class="sec-tag"><span class="sec-tag-dot"></span> Career Guidance &amp; Job Search Support</span>
              <h2 class="service-detail-title">Bridging Talent with Global Employers</h2>
              <p class="service-detail-lead">Connecting qualified candidates, freshers, and experienced professionals with legitimate international employers across healthcare, caregiving, engineering, and diverse industries.</p>
            </div>

            <!-- Core Pillars of Support -->
            <div class="placement-pillars-grid">
              <div class="placement-pillar-card">
                <span class="placement-pillar-icon">📄</span>
                <h3 class="placement-pillar-title">Resume &amp; CV Enhancement</h3>
                <p class="placement-pillar-desc">Professional structuring and formatting of resumes to match international ATS standards and employer expectations.</p>
              </div>
              <div class="placement-pillar-card">
                <span class="placement-pillar-icon">🎯</span>
                <h3 class="placement-pillar-title">Interview Technique Coaching</h3>
                <p class="placement-pillar-desc">Rigorous mock interviews simulating employer questions, workplace ethics, and professional communication standards.</p>
              </div>
              <div class="placement-pillar-card">
                <span class="placement-pillar-icon">🧭</span>
                <h3 class="placement-pillar-title">Career Counselling &amp; Profiling</h3>
                <p class="placement-pillar-desc">Detailed evaluation of qualifications, experience, and aspirations to target the right overseas employment opportunities.</p>
              </div>
              <div class="placement-pillar-card">
                <span class="placement-pillar-icon">🤝</span>
                <h3 class="placement-pillar-title">Established Employer Networks</h3>
                <p class="placement-pillar-desc">Direct connectivity with verified foreign institutions, recruitment agencies, hospital trusts, and care organizations.</p>
              </div>
            </div>

            <div class="service-prose-body">
              <p>Placement Assistance is a professional support service designed to help job seekers identify and secure suitable employment opportunities based on their educational qualifications, skills, experience, and career aspirations. Our goal is to bridge the gap between talented candidates and potential employers by providing reliable career guidance and structured job search support.</p>

              <p>We assist candidates throughout their job search journey, including resume preparation, CV enhancement, interview preparation, career counselling, job application guidance, and access to relevant employment opportunities. Through our established connections with various companies, recruitment agencies, institutions, and professional networks, we help candidates connect with potential employers and explore suitable career opportunities across different industries.</p>

              <p>Our placement assistance service focuses on understanding each candidate's profile and preferences to identify opportunities that match their qualifications and professional goals. We also guide candidates on interview techniques, workplace expectations, and essential skills required to improve their employability.</p>

              <p>Whether you are a fresher seeking your first job or an experienced professional looking for better career opportunities, our placement assistance services aim to make your job search more organised and effective.</p>
            </div>

            <!-- Mandatory Disclaimer Notice -->
            <div class="placement-notice-box">
              <h4>Please Note:</h4>
              <p>Placement assistance is not a guarantee of employment. Final selection and recruitment decisions are entirely at the discretion of the respective employers. However, our guidance, professional support, and employer network can help improve your chances of finding suitable employment.</p>
            </div>
          </div>

          <!-- ── ISRAEL CAREGIVER SHOWCASE SECTION ──────────────── -->
          <div id="israel-caregiver" class="israel-card">
            <div class="israel-header-tag">
              <img src="https://flagcdn.com/w40/il.png" alt="Israel Flag" class="israel-flag-icon" width="20" height="14">
              <span>Healthcare &amp; Caregiving Opportunity in Israel</span>
            </div>

            <h2 class="israel-section-title">Caregiver Jobs in Israel — Open for Men &amp; Women</h2>
            <p class="israel-section-desc">Israel is known for its advanced healthcare facilities, well-developed medical services, and growing demand for elderly care professionals. This is an excellent opportunity for both male and female candidates from India to gain international work experience while earning competitive wages with live-in accommodation.</p>

            <!-- Caregiver Daily Responsibilities -->
            <div class="service-highlights-title">Core Responsibilities of Caregivers:</div>
            <div class="israel-duties-grid">
              <div class="israel-duty-box">
                <span class="israel-duty-icon">🛁</span>
                <span class="israel-duty-label">Bathing, Dressing &amp; Personal Hygiene</span>
              </div>
              <div class="israel-duty-box">
                <span class="israel-duty-icon">🚶</span>
                <span class="israel-duty-label">Mobility &amp; Physical Support</span>
              </div>
              <div class="israel-duty-box">
                <span class="israel-duty-icon">🍲</span>
                <span class="israel-duty-label">Meal Preparation &amp; Feeding</span>
              </div>
              <div class="israel-duty-box">
                <span class="israel-duty-icon">💊</span>
                <span class="israel-duty-label">Medication Reminders &amp; Care</span>
              </div>
              <div class="israel-duty-box">
                <span class="israel-duty-icon">💬</span>
                <span class="israel-duty-label">Emotional Support &amp; Companionship</span>
              </div>
              <div class="israel-duty-box">
                <span class="israel-duty-icon">🏡</span>
                <span class="israel-duty-label">Private Home &amp; Live-In Care</span>
              </div>
            </div>

            <!-- Key Advantages & Benefits -->
            <div class="service-highlights-title">Key Advantages &amp; Benefits for Caregivers:</div>
            <div class="israel-benefits-grid">
              <div class="israel-benefit-box">
                <div class="israel-benefit-badge">01</div>
                <div class="israel-benefit-content">
                  <h4>Competitive Salary</h4>
                  <p>Caregivers receive wages according to Israeli employment regulations and their employment contracts. Earnings depend on working arrangements.</p>
                </div>
              </div>
              <div class="israel-benefit-box">
                <div class="israel-benefit-badge">02</div>
                <div class="israel-benefit-content">
                  <h4>Accommodation Facilities</h4>
                  <p>Many live-in caregiver positions provide accommodation at the care recipient's residence, subject to employment arrangements.</p>
                </div>
              </div>
              <div class="israel-benefit-box">
                <div class="israel-benefit-badge">03</div>
                <div class="israel-benefit-content">
                  <h4>Employment Benefits</h4>
                  <p>Foreign caregivers are entitled to applicable employment rights, including weekly rest periods, annual leave, sick leave and statutory benefits.</p>
                </div>
              </div>
              <div class="israel-benefit-box">
                <div class="israel-benefit-badge">04</div>
                <div class="israel-benefit-content">
                  <h4>International Work Experience</h4>
                  <p>Working in Israel provides valuable international exposure in elderly care, geriatric support, and personal assistance.</p>
                </div>
              </div>
              <div class="israel-benefit-box">
                <div class="israel-benefit-badge">05</div>
                <div class="israel-benefit-content">
                  <h4>Opportunities for Men &amp; Women</h4>
                  <p>Both male and female candidates can apply, depending on the care recipient's requirements and employer preferences.</p>
                </div>
              </div>
              <div class="israel-benefit-box">
                <div class="israel-benefit-badge">06</div>
                <div class="israel-benefit-content">
                  <h4>Professional Development</h4>
                  <p>Caregivers gain hands-on practical experience in elderly care, patient assistance, and disability support.</p>
                </div>
              </div>
            </div>

            <!-- Eligibility Criteria -->
            <div class="israel-eligibility-card">
              <div class="israel-eligibility-header">
                <span class="sec-tag-dot"></span>
                <h3 class="israel-eligibility-title">Eligibility Criteria for Israel Caregiver Jobs:</h3>
              </div>
              <div class="israel-eligibility-grid">
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Male and female candidates can apply</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Minimum age: 18 years</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Basic educational qualification</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Caregiving or elderly care training certificate</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Previous caregiving experience is an advantage</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Medical fitness certificate</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Valid Indian passport with required validity</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Police Clearance Certificate (PCC)</span>
                </div>
                <div class="israel-eligibility-item">
                  <span class="israel-eligibility-check">✓</span>
                  <span>Patience, compassion and good communication skills</span>
                </div>
              </div>
            </div>
          </div>

          <!-- ── OTHER GLOBAL PLACEMENT DESTINATIONS ──────────────── -->
          <div class="service-card">
            <span class="sec-tag"><span class="sec-tag-dot"></span> Global Networks</span>
            <h3 class="service-detail-title">Other International Placement Sectors</h3>
            <p class="service-detail-lead">In addition to caregiver opportunities in Israel, we support healthcare and skilled professionals with placements across leading international hubs:</p>

            <div class="placement-dest-grid">
              <a href="{{ route('placement.germany') }}" class="placement-dest-card placement-dest-link">
                <div class="placement-dest-top">
                  <span class="placement-dest-flag">🇩🇪</span>
                  <span class="placement-dest-code">DE</span>
                </div>
                <div class="placement-dest-name">Germany</div>
                <div class="placement-dest-roles">Nursing Adaptation</div>
                <span class="placement-dest-action">Explore →</span>
              </a>
              <a href="{{ route('placement.uk') }}" class="placement-dest-card placement-dest-link">
                <div class="placement-dest-top">
                  <span class="placement-dest-flag">🇬🇧</span>
                  <span class="placement-dest-code">GB</span>
                </div>
                <div class="placement-dest-name">United Kingdom</div>
                <div class="placement-dest-roles">NHS Hospital Trusts</div>
                <span class="placement-dest-action">Explore →</span>
              </a>
              <a href="{{ route('placement.saudi-arabia') }}" class="placement-dest-card placement-dest-link">
                <div class="placement-dest-top">
                  <span class="placement-dest-flag">🇸🇦</span>
                  <span class="placement-dest-code">SA</span>
                </div>
                <div class="placement-dest-name">Saudi Arabia &amp; Gulf</div>
                <div class="placement-dest-roles">MOH Hospitals &amp; PSV</div>
                <span class="placement-dest-action">Explore →</span>
              </a>
            </div>
          </div>

        @else
          <!-- ── STANDARD SERVICE DETAIL VIEW ──────────────── -->
          <div class="service-card">
            @if($service->image)
              <div class="service-banner-media">
                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}" class="service-banner-img">
              </div>
            @endif

            <div class="service-header-row">
              <span class="sec-tag"><span class="sec-tag-dot"></span> Official Service Portfolio</span>
              <h2 class="service-detail-title">{{ $service->title }}</h2>
              <p class="service-detail-lead">{{ $service->excerpt }}</p>
            </div>

            <div class="service-prose-body">
              {!! $service->description ?: '<p>' . e($service->excerpt) . '</p>' !!}
            </div>

            @if(!empty($service->features) && is_array($service->features))
              <div class="service-highlights-box">
                <h3 class="service-highlights-title">Key Service Highlights</h3>
                <div class="service-highlights-grid">
                  @foreach($service->features as $item)
                    <div class="service-highlight-item">
                      <span class="service-highlight-check">✓</span>
                      <span>{{ $item }}</span>
                    </div>
                  @endforeach
                </div>
              </div>
            @endif
          </div>
        @endif

        <!-- Action Callout Strip -->
        <div class="service-card">
          <div class="dest-hero-actions">
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20am%20interested%20in%20{{ urlencode($service->title) }}" target="_blank" rel="noopener" class="btn-primary">
              Enquire on WhatsApp (+91 8590 724 242)
            </a>
            <a href="{{ route('contact') }}" class="btn-ghost dest-hero-btn-ghost">
              Book Office Appointment in Aluva
            </a>
          </div>
        </div>

      </div>

      <!-- Right Column: Sticky Lead Capture & Related Navigation -->
      <aside class="service-sidebar-col">

        <!-- Inquiry Form Widget -->
        <div id="placement-apply" class="service-sidebar-widget">
          <h3 class="service-sidebar-title">
            @if($service->slug === 'placement-assistance')
              Apply for Placement
            @else
              Request Assistance
            @endif
          </h3>
          <p class="service-sidebar-lead">Connect with our senior counsellor in Aluva for free eligibility evaluation.</p>

          <form action="{{ route('contact.submit') }}" method="POST" class="service-form">
            @csrf
            <input type="hidden" name="service_interest" value="{{ $service->title }}">

            <div class="service-field-group">
              <label for="name" class="service-field-label">Full Name *</label>
              <input type="text" id="name" name="name" class="service-field-input" placeholder="e.g. Anjali Nair" required>
            </div>

            <div class="service-field-group">
              <label for="phone" class="service-field-label">WhatsApp Number *</label>
              <input type="tel" id="phone" name="phone" class="service-field-input" placeholder="+91 98470 XXXXX" required>
            </div>

            <div class="service-field-group">
              <label for="email" class="service-field-label">Email Address *</label>
              <input type="email" id="email" name="email" class="service-field-input" placeholder="name@example.com" required>
            </div>

            <div class="service-field-group">
              <label for="destination" class="service-field-label">Target Role / Country</label>
              <select id="destination" name="destination" class="service-field-input">
                @if($service->slug === 'placement-assistance')
                  <option value="Israel Caregiver" selected>🇮🇱 Caregiver in Israel (Male / Female)</option>
                  <option value="Germany Nursing">🇩🇪 Germany Healthcare / Nursing</option>
                  <option value="UK NHS">🇬🇧 United Kingdom (NHS / Skilled)</option>
                  <option value="Saudi Arabia">🇸🇦 Saudi Arabia / Gulf MOH</option>
                  <option value="General Placement">Other Overseas Placement</option>
                @else
                  <option value="Germany">Germany</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Austria">Austria</option>
                  <option value="UK">United Kingdom</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Canada">Canada</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Other">Other Country</option>
                @endif
              </select>
            </div>

            <div class="service-field-group">
              <label for="qualification" class="service-field-label">Current Qualification</label>
              <input type="text" id="qualification" name="qualification" class="service-field-input" placeholder="e.g. Caregiver Training, BSc Nursing, Plus Two, Degree">
            </div>

            <div class="service-field-group">
              <label for="message" class="service-field-label">Your Experience / Query</label>
              <textarea id="message" name="message" rows="3" class="service-field-input" placeholder="Mention previous experience, certificates, or questions..."></textarea>
            </div>

            <button type="submit" class="btn-primary service-submit-btn">
              Submit Free Assessment →
            </button>
          </form>

          <div class="service-contact-stack">
            <a href="https://wa.me/918590724242?text=Hello%20All%20Land,%20I%20am%20enquiring%20about%20{{ urlencode($service->title) }}" target="_blank" rel="noopener" class="service-contact-btn service-contact-wa">
              <span>💬</span>
              <span>WhatsApp: +91 8590 724 242</span>
            </a>
            <a href="tel:+919074024242" class="service-contact-btn">
              <span>📞</span>
              <span>Call Us: +91 9074 024 242</span>
            </a>
          </div>
        </div>

        <!-- All Services List Card -->
        <div class="service-sidebar-widget">
          <h3 class="service-sidebar-title">Our Services</h3>
          <p class="service-sidebar-lead">Explore complete overseas support portfolio.</p>

          <div class="service-other-list">
            @if(isset($allServices) && $allServices->isNotEmpty())
              @foreach($allServices as $s)
                <a href="{{ route('services.show', $s->slug) }}" class="service-other-item {{ $s->id === $service->id ? 'active' : '' }}">
                  <span>{{ $s->icon }} {{ $s->title }}</span>
                  <span>→</span>
                </a>
              @endforeach
            @else
              <a href="{{ route('services.show', 'visa-assistance') }}" class="service-other-item"><span>🛂 Visa Assistance</span><span>→</span></a>
              <a href="{{ route('services.show', 'certificate-attestation') }}" class="service-other-item"><span>📜 Certificate Attestation</span><span>→</span></a>
              <a href="{{ route('services.show', 'flight-ticketing') }}" class="service-other-item"><span>✈️ Air Ticketing</span><span>→</span></a>
              <a href="{{ route('services.show', 'placement-assistance') }}" class="service-other-item"><span>💼 Placement Assistance</span><span>→</span></a>
              <a href="{{ route('services.show', 'travel-health-insurance') }}" class="service-other-item"><span>🛡️ Insurance Service</span><span>→</span></a>
              <a href="{{ route('services.show', 'application-process') }}" class="service-other-item"><span>🎓 Application Process</span><span>→</span></a>
              <a href="{{ route('services.show', 'healthcare-dataflow') }}" class="service-other-item"><span>🏥 Dataflow Service</span><span>→</span></a>
              <a href="{{ route('services.show', 'pre-departure-and-post-landing-service') }}" class="service-other-item"><span>🏡 Pre-Departure &amp; Post-Landing</span><span>→</span></a>
            @endif
          </div>
        </div>

      </aside>

    </div>
  </div>
</section>

@endsection
