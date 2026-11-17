<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Course;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Inquiry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@alllandconsultancy.com'],
            [
                'name' => 'All Land Admin',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Seed Services
        $services = [
            [
                'title' => 'Visa Assistance & Mock Interviews',
                'slug' => 'visa-assistance',
                'icon' => '🛂',
                'image' => 'images/service-visa.jpg',
                'excerpt' => 'Comprehensive visa dossier compilation, VFS/embassy appointment booking, financial sponsor documentation, and rigorous mock interview coaching with our 99.2% approval record.',
                'description' => '<p>Navigating visa requirements is often the most stressful part of the study abroad journey. Our dedicated visa filing team in Aluva takes complete ownership of your documentation pipeline.</p>
                <h4>What We Cover:</h4>
                <ul>
                    <li>German National Visa (Section 16b/16a) documentation & APS verification audit.</li>
                    <li>Canada Study Permit under SDS and non-SDS streams with robust financial tie-back proof.</li>
                    <li>UK Student Visa CAS checks, TB screening coordination, and financial viability proof.</li>
                    <li>New Zealand Student Visa and dependent work visa filing.</li>
                    <li>Exhaustive 1-on-1 mock interviews simulating actual VFS and embassy officer queries.</li>
                </ul>',
                'features' => [
                    'German National Visa & APS guidance',
                    'Canada Study Permit & SDS filing',
                    'UK Student Visa & CAS verification',
                    'New Zealand Student Visa & pathway support'
                ],
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'University Selection & SOP Drafting',
                'slug' => 'university-selection-sop',
                'icon' => '🎓',
                'image' => 'images/dest-germany.jpg',
                'excerpt' => 'Strategic university matching across Germany, Canada, the UK, and New Zealand based on your GPA, budget, and career goals. Professional drafting and editing of compelling SOPs and LORs.',
                'description' => '<p>Choosing the right course and university determines your post-graduation career settlement. We filter thousands of courses down to the shortlist that maximizes your acceptance chances and job search success.</p>
                <h4>Highlights:</h4>
                <ul>
                    <li>Deep profiling matching your academic transcripts, backlogs, and budget.</li>
                    <li>Direct access to public German universities with zero tuition fees.</li>
                    <li>Bespoke Statement of Purpose (SOP) tailored to each university’s specific research focus.</li>
                    <li>Letter of Recommendation (LOR) and academic CV formatting per European/North American standards.</li>
                </ul>',
                'features' => [
                    '400+ partner universities worldwide',
                    'Customized Statement of Purpose (SOP)',
                    'Letter of Recommendation (LOR) structuring',
                    'Application fee waiver possibilities'
                ],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Certificate Attestation & Apostille',
                'slug' => 'certificate-attestation',
                'icon' => '📜',
                'image' => 'images/service-1.jpg',
                'excerpt' => 'End-to-end Notary, State HRD, MEA Apostille, and Embassy legalization for degree certificates, transcripts, marriage certificates, and medical nursing council registrations.',
                'description' => '<p>Embassy and international university admissions mandate verified certificate attestations. Avoid administrative rejections with our verified, fast-track processing.</p>
                <h4>Services Included:</h4>
                <ul>
                    <li>Kerala Higher Education Department & State HRD attestation.</li>
                    <li>Ministry of External Affairs (MEA) Apostille sticker authentication.</li>
                    <li>German Consulate, UAE, Saudi, and European Embassy legalizations.</li>
                    <li>Nursing Council Registration Certificate verification.</li>
                </ul>',
                'features' => [
                    'State HRD & Higher Education attestation',
                    'MEA Apostille authentication for Hague nations',
                    'Embassy legalizations & translations',
                    'Expedited courier tracking'
                ],
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Flight Ticketing & Student Baggage',
                'slug' => 'flight-ticketing',
                'icon' => '✈️',
                'image' => 'images/service-flights.jpg',
                'excerpt' => 'Special student fare airline bookings with additional baggage allowance (up to 40kg–46kg), flexible cancellation terms, and verified transit visa itineraries.',
                'description' => '<p>Flying abroad for studies requires flexible travel arrangements. We partner directly with leading international airlines including Emirates, Qatar Airways, Lufthansa, and Air India to provide verified student allowances.</p>',
                'features' => [
                    'Extra student baggage allowances (40kg+)',
                    'Flexible date change and cancellation policies',
                    'Non-transit Schengen hassle-free flight paths',
                    'Group student departure discounts'
                ],
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Travel & Overseas Health Insurance',
                'slug' => 'travel-health-insurance',
                'icon' => '🛡️',
                'image' => 'images/service-insurance.jpg',
                'excerpt' => 'Embassy-compliant mandatory student health insurance and comprehensive international travel cover covering medical emergencies, lost baggage, and travel interruptions.',
                'description' => '<p>Every country requires specific health insurance cover before granting a student visa. We configure seamless packages covering both mandatory public/statutory insurance (TK, Barmer, DAK in Germany) and private incoming travel insurance.</p>',
                'features' => [
                    'German statutory health cover (TK/Barmer/Coracle)',
                    'Canadian UHIP and provincial plan coverage',
                    'Embassy-compliant zero deductible policies',
                    'Instant digital insurance confirmation certificates'
                ],
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Healthcare DataFlow & PSV Verification',
                'slug' => 'healthcare-dataflow',
                'icon' => '🏥',
                'image' => 'images/service-dataflow.jpg',
                'excerpt' => 'Specialized Primary Source Verification (PSV) and Dataflow processing for nurses, doctors, pharmacists, and allied healthcare professionals heading to Europe and the Middle East.',
                'description' => '<p>DataFlow verification is an essential requirement for healthcare professionals practicing overseas. Our healthcare department handles your credential checks directly with your issuing colleges and state nursing councils.</p>',
                'features' => [
                    'Primary Source Verification (PSV) management',
                    'German Defizitbescheid adaptation support',
                    'UK NMC portal verification assistance',
                    'Middle East DHA, HAAD & MOH DataFlow processing'
                ],
                'order' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'German Nursing Ausbildung (Stipend Program)',
                'slug' => 'german-nursing-ausbildung',
                'icon' => '🩺',
                'image' => 'images/service-placement.jpg',
                'excerpt' => 'A 100% tuition-free 3-year government vocational nursing apprenticeship in German state hospitals with a guaranteed monthly stipend of €1,000–€1,250 and direct PR upon graduation.',
                'description' => '<p>The German Nursing Ausbildung is one of the most lucrative healthcare pathways in the world. As a student apprentice, you pay <strong>zero tuition</strong> and receive a guaranteed monthly stipend throughout your 3 years of clinical training.</p>',
                'features' => [
                    '€1,000 – €1,250 monthly stipend from Month 1',
                    '100% tuition-free vocational training',
                    'Hospital placement contract guaranteed prior to visa',
                    'Direct European PR eligibility within 3 years'
                ],
                'order' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Post-Landing Settlement & Accommodation',
                'slug' => 'post-landing-accommodation',
                'icon' => '🏡',
                'image' => 'images/gallery-student-lounge.jpg',
                'excerpt' => 'Airport pickup, student dormitory or WG room booking, bank account activation, city registration (Anmeldung/SIN), and local SIM card setup upon your international arrival.',
                'description' => '<p>Landing in a new country can feel intimidating. Our local student network and on-ground coordinators ensure you are welcomed at the airport and guided through your first 14 days of city registration.</p>',
                'features' => [
                    'Airport pickup and accommodation check-in',
                    'City registration (Anmeldung in Germany / SIN in Canada)',
                    'Local bank account activation and blocked fund release',
                    'Part-time job search orientation and CV adaptation'
                ],
                'order' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(['slug' => $srv['slug']], $srv);
        }

        // 3. Seed Courses / In-Demand Programs
        $courses = [
            [
                'title' => 'MSc Automotive & Mechanical Systems',
                'slug' => 'msc-automotive-engineering-germany',
                'country' => 'Germany',
                'country_code' => 'DE',
                'degree_level' => 'Master\'s Degree',
                'duration' => '2 Years',
                'intake' => 'Winter (October) & Summer (April)',
                'tuition_fee' => '€0 (Tuition Free / Public)',
                'stipend' => 'Part-time earnings: €900–€1,200/mo',
                'language_requirement' => 'English (IELTS 6.5) or German B2',
                'career_pathway' => '18-Month Job Search Visa & Fast PR in 21–24 Months',
                'excerpt' => 'Study at world-renowned German technical universities with state-of-the-art laboratories and direct placement partnerships with BMW, Mercedes, and Bosch.',
                'description' => '<p>Germany remains the world undisputed powerhouse for automotive engineering and advanced manufacturing. State-funded universities like TU Munich, RWTH Aachen, and University of Stuttgart offer English-taught Master’s degrees with zero tuition.</p>',
                'image' => 'images/dest-germany.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'MSc Computer Science, AI & Data Analytics',
                'slug' => 'msc-computer-science-germany',
                'country' => 'Germany',
                'country_code' => 'DE',
                'degree_level' => 'Master\'s Degree',
                'duration' => '2 Years',
                'intake' => 'Winter (October) & Summer (April)',
                'tuition_fee' => '€0 (Tuition Free / Public)',
                'stipend' => 'Working student earnings: €1,100/mo',
                'language_requirement' => 'IELTS 6.5 / Duolingo 115',
                'career_pathway' => 'EU Blue Card eligible with €45,000+ entry packages',
                'excerpt' => 'Specialized English-taught masters in Artificial Intelligence, Cloud Computing, and Cybersecurity across German tech universities.',
                'description' => '<p>Tech professionals are among Germany’s most sought-after workforce. Graduates qualify for fast EU Blue Card processing and immediate permanent residency opportunities.</p>',
                'image' => 'images/gallery-germany-tech.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Postgraduate Diploma in Cloud Computing & Cybersecurity',
                'slug' => 'pgd-cloud-cybersecurity-canada',
                'country' => 'Canada',
                'country_code' => 'CA',
                'degree_level' => 'Postgraduate Diploma',
                'duration' => '2 Years (with Co-op)',
                'intake' => 'January / May / September',
                'tuition_fee' => 'CAD $16,500 – $18,500 / Year',
                'stipend' => 'Co-op paid terms: $22–$28/hour',
                'language_requirement' => 'IELTS 6.5 (no band less than 6.0)',
                'career_pathway' => 'Up to 3-Year Open Work Permit (PGWP) & Express Entry CEC',
                'excerpt' => 'Hands-on practical diploma from designated Ontario colleges with mandatory industry co-op placements and 3-year PGWP eligibility.',
                'description' => '<p>Designed for IT graduates seeking fast career entry into the booming Toronto and Vancouver tech ecosystems. Includes paid co-op semesters that give you real Canadian work experience before graduation.</p>',
                'image' => 'images/dest-canada.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 3,
            ],
            [
                'title' => 'Healthcare Administration & Nursing Leadership',
                'slug' => 'healthcare-admin-canada',
                'country' => 'Canada',
                'country_code' => 'CA',
                'degree_level' => 'Postgraduate Certificate / Diploma',
                'duration' => '2 Years',
                'intake' => 'January & September',
                'tuition_fee' => 'CAD $17,000 / Year',
                'stipend' => 'Part-time work permitted',
                'language_requirement' => 'IELTS Academic 6.5',
                'career_pathway' => '3-Year PGWP with high PR demand under Healthcare Category-Based Express Entry',
                'excerpt' => 'Ideal pathway for Indian BSc Nurses and health graduates to enter the Canadian healthcare system while preparing for NCLEX-RN licensing.',
                'description' => '<p>Healthcare is Canada’s number one priority category in Express Entry immigration draws. This program allows international nurses to settle legally and gain Canadian clinical management experience.</p>',
                'image' => 'images/service-placement.jpg',
                'is_featured' => false,
                'is_active' => true,
                'order' => 4,
            ],
            [
                'title' => '1-Year Fast MSc Project Management / MBA',
                'slug' => '1-year-msc-project-management-uk',
                'country' => 'United Kingdom',
                'country_code' => 'UK',
                'degree_level' => 'Master\'s Degree (Fast Track)',
                'duration' => '1 Year',
                'intake' => 'September & January',
                'tuition_fee' => '£13,500 – £17,000 (Scholarships up to £4,000)',
                'stipend' => '20 hrs/week part-time work rights',
                'language_requirement' => 'IELTS 6.0–6.5 (English MOI waivers accepted)',
                'career_pathway' => '2-Year Post-Study Graduate Route Visa',
                'excerpt' => 'Complete your British Master’s in just 12 months, saving a whole year of living expenses while qualifying for a 2-year post-study Graduate Route visa.',
                'description' => '<p>Save time and money with the UK world-famous 1-year Master’s format. Accredited by APM and CMI, preparing you for leadership roles across London and international consulting firms.</p>',
                'image' => 'images/dest-uk.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 5,
            ],
            [
                'title' => 'Master of Construction Management & Civil Infrastructure',
                'slug' => 'master-construction-management-nz',
                'country' => 'New Zealand',
                'country_code' => 'NZ',
                'degree_level' => 'Master\'s Degree',
                'duration' => '1.5 – 2 Years',
                'intake' => 'February & July',
                'tuition_fee' => 'NZD $34,000 – $38,000 / Year',
                'stipend' => 'Part-time earnings: NZD $23.15/hour',
                'language_requirement' => 'IELTS 6.5 (no band below 6.0)',
                'career_pathway' => 'Tier 1 Green List Occupation: Direct Pathway to Residence (PR)',
                'excerpt' => 'Direct to Residence Green List program from top New Zealand universities in Auckland and Christchurch with guaranteed post-study work permits.',
                'description' => '<p>New Zealand is investing billions in infrastructure and civil engineering. Civil and Construction Managers are listed under Tier 1 of the Green List, qualifying graduates for fast-tracked permanent residence upon a valid job offer.</p>',
                'image' => 'images/dest-nz.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 6,
            ],
            [
                'title' => 'German General Nursing Ausbildung (Pflegefachmann/-frau)',
                'slug' => 'german-general-nursing-ausbildung',
                'country' => 'Germany',
                'country_code' => 'DE',
                'degree_level' => 'Vocational Nursing Apprenticeship',
                'duration' => '3 Years',
                'intake' => 'March, April, September, October',
                'tuition_fee' => '€0 (Tuition Free)',
                'stipend' => 'Guaranteed €1,000–€1,250/Month',
                'language_requirement' => 'German B2 Goethe / TELC / ÖSD',
                'career_pathway' => 'Direct European Nursing License & Fast PR in 3 Years',
                'excerpt' => 'Government-accredited 3-year vocational training program in German hospitals. Earn €1,000+ monthly from day one with 100% free tuition and guaranteed job offer.',
                'description' => '<p>The most sought-after program for Plus-Two (12th Science) and healthcare aspirants in Kerala. All Land provides German language coaching (A1–B2), hospital interviews, contract processing, and German visa filing.</p>',
                'image' => 'images/service-placement.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 7,
            ],
        ];

        foreach ($courses as $c) {
            Course::updateOrCreate(['slug' => $c['slug']], $c);
        }

        // 4. Seed Events
        $events = [
            [
                'title' => 'Study in Germany — Free Seminar & 1:1 Counselling',
                'slug' => 'study-in-germany-free-seminar-aluva',
                'type' => 'seminar',
                'type_label' => 'Free Seminar',
                'event_date' => Carbon::now()->addDays(8),
                'start_time' => '10:00 AM',
                'end_time' => '1:00 PM',
                'location' => 'All Land Office, Laxmanas Tower, Aluva',
                'mode' => 'offline',
                'description' => 'Comprehensive guidance on German public universities with €0 tuition fees, APS certificate filing, blocked account requirements, and winter 2027 intakes.',
                'registration_link' => '#enquire',
                'seats_available' => 45,
                'is_active' => true,
            ],
            [
                'title' => 'UK January & September Intake — Spot Admission Day',
                'slug' => 'uk-intake-spot-admission-day',
                'type' => 'spot',
                'type_label' => 'Spot Admission',
                'event_date' => Carbon::now()->addDays(15),
                'start_time' => '10:00 AM',
                'end_time' => '4:00 PM',
                'location' => 'All Land Office, Aluva',
                'mode' => 'offline',
                'description' => 'Meet official university representatives from Russell Group and leading UK universities. Carry academic transcripts for instant offer letters and scholarship evaluations up to £4,000.',
                'registration_link' => '#enquire',
                'seats_available' => 35,
                'is_active' => true,
            ],
            [
                'title' => 'Canada Study Permit & PGWP Updates: Live Webinar',
                'slug' => 'canada-study-permit-pgwp-webinar',
                'type' => 'webinar',
                'type_label' => 'Live Webinar',
                'event_date' => Carbon::now()->addDays(21),
                'start_time' => '7:30 PM IST',
                'end_time' => '9:00 PM IST',
                'location' => 'Online · Zoom Live',
                'mode' => 'online',
                'description' => 'Detailed analysis of IRCC provincial attestation letters (PAL), SDS filing rules, living fund proofs, and strategies to secure 3-year PGWP upon graduation.',
                'registration_link' => '#enquire',
                'seats_available' => 150,
                'is_active' => true,
            ],
            [
                'title' => 'New Zealand Education & Green List PR Fair',
                'slug' => 'new-zealand-green-list-pr-fair',
                'type' => 'fair',
                'type_label' => 'Education Fair',
                'event_date' => Carbon::now()->addDays(29),
                'start_time' => '10:00 AM',
                'end_time' => '4:00 PM',
                'location' => 'Kochi · Venue to be announced',
                'mode' => 'offline',
                'description' => 'Direct interaction with New Zealand university delegates. Explore Tier 1 Green List programs in Civil Engineering, IT, Healthcare, and Construction with direct permanent residency pathways.',
                'registration_link' => '#enquire',
                'seats_available' => 100,
                'is_active' => true,
            ],
            [
                'title' => 'Scholarships, Education Loans & Blocked Accounts — Live Q&A',
                'slug' => 'scholarships-education-loans-live-qa',
                'type' => 'webinar',
                'type_label' => 'Live Webinar',
                'event_date' => Carbon::now()->addDays(36),
                'start_time' => '6:30 PM IST',
                'end_time' => '8:00 PM IST',
                'location' => 'Online · Zoom Live',
                'mode' => 'online',
                'description' => 'Financial planning masterclass covering collateral & non-collateral overseas student loans with leading Indian nationalised & private banks, DAAD scholarships, and blocked accounts.',
                'registration_link' => '#enquire',
                'seats_available' => 200,
                'is_active' => true,
            ],
            [
                'title' => 'Pre-Departure Orientation for Flying Students',
                'slug' => 'pre-departure-orientation-aluva',
                'type' => 'pre-departure',
                'type_label' => 'Pre-Departure',
                'event_date' => Carbon::now()->addDays(43),
                'start_time' => '11:00 AM',
                'end_time' => '1:00 PM',
                'location' => 'All Land Office, Aluva',
                'mode' => 'offline',
                'description' => 'Essential checklist for departing students: forex card management, baggage packaging guidelines, airport customs procedures, SIM card activation, and initial accommodation advice.',
                'registration_link' => '#enquire',
                'seats_available' => 60,
                'is_active' => true,
            ],
        ];

        foreach ($events as $ev) {
            Event::updateOrCreate(['slug' => $ev['slug']], $ev);
        }

        // 5. Seed Blogs
        $blogs = [
            [
                'title' => 'Complete Guide to German Blocked Accounts: Fintiba vs Expatrio vs Coracle',
                'slug' => 'guide-to-german-blocked-accounts',
                'category' => 'Germany • Visa Guide',
                'excerpt' => 'A breakdown of the mandatory €11,904 blocked account rule for German student visas. Compare opening fees, processing speeds, and health insurance bundles.',
                'content' => '<p>Every international student aspiring to study in Germany must demonstrate sufficient financial funds to cover living expenses for at least their first academic year. The German Federal Foreign Office currently requires a minimum of <strong>€11,904 per year (€992 per month)</strong> deposited into an officially recognized blocked account (Sperrkonto).</p>
                <h3>Comparing the Top Providers:</h3>
                <h4>1. Expatrio</h4>
                <p>One of the most popular providers among Indian students. Expatrio offers a Value Package combining the blocked account with mandatory Techniker Krankenkasse (TK) public health insurance and free incoming travel insurance.</p>
                <h4>2. Coracle</h4>
                <p>Renowned for exceptionally fast processing times (often within 24 to 48 hours) and zero monthly buffer fees. Excellent customer support for students from Kerala.</p>
                <h4>3. Fintiba</h4>
                <p>The pioneer in digital blocked accounts in Germany. Regulated by BaFin with high institutional credibility and multilingual support.</p>
                <h3>Step-by-Step Blocked Account Process:</h3>
                <ol>
                    <li>Register online using your passport details.</li>
                    <li>Transfer the required funds via international wire transfer (Flywire or bank SWIFT).</li>
                    <li>Receive the official Blocked Confirmation (Sperrbestätigung) document required for your German VFS visa interview.</li>
                    <li>Activate the account upon arrival in Germany after completing city registration (Anmeldung).</li>
                </ol>',
                'image' => 'images/gallery-germany-tech.jpg',
                'author' => 'Ajith Kumar, Senior German Education Specialist',
                'read_time' => '6 min read',
                'published_at' => Carbon::now()->subDays(5),
                'is_published' => true,
                'views_count' => 342,
            ],
            [
                'title' => 'Germany Nursing Recruitment: Step-by-Step B2 Licensing & Salary Expectations',
                'slug' => 'germany-nursing-recruitment-guide',
                'category' => 'Healthcare Placement',
                'excerpt' => 'How Indian BSc and GNM nurses can secure direct hospital employment in Germany, pass the adaptation course, and earn €3,000+ monthly with free family settlement.',
                'content' => '<p>Germany is facing a shortage of over 200,000 certified healthcare professionals. Indian nurses with a BSc Nursing or GNM qualification are warmly welcomed by German state and private university hospital networks.</p>
                <h3>Eligibility & Requirements:</h3>
                <ul>
                    <li>Completed BSc Nursing or 3-year GNM from a recognized Indian Nursing Council institution.</li>
                    <li>Active State Nursing Council registration.</li>
                    <li>German language proficiency at <strong>B2 level</strong> (Goethe-Institut, TELC, or ÖSD).</li>
                    <li>Clean criminal background check and medical fitness report.</li>
                </ul>
                <h3>Salary & Career Trajectory:</h3>
                <p>While completing your adaptation qualification (Anerkennung), starting salaries range from <strong>€2,400 to €2,700 per month</strong>. Once your full German registered nurse license (Urkunde) is issued, base salaries climb to <strong>€3,300 – €3,800 per month</strong> plus overtime and night shift allowances.</p>',
                'image' => 'images/service-placement.jpg',
                'author' => 'Sister Mary T., Healthcare Career Director',
                'read_time' => '8 min read',
                'published_at' => Carbon::now()->subDays(12),
                'is_published' => true,
                'views_count' => 520,
            ],
            [
                'title' => 'UK 1-Year Master\'s vs Canada 2-Year PGWP: Which Destination is Right for You?',
                'slug' => 'uk-1-year-masters-vs-canada-2-year-pgwp',
                'category' => 'Study Abroad Comparison',
                'excerpt' => 'An objective financial and immigration comparison analyzing tuition expenditure, cost of living, post-study work rights, and permanent residency probabilities.',
                'content' => '<p>Deciding between the UK and Canada is one of the most common dilemmas faced by graduate students in Kerala. Both nations offer world-class universities and multicultural societies, but their financial structures and immigration pathways differ substantially.</p>
                <h3>Key Factor 1: Duration & Cost</h3>
                <p>In the UK, full-time Master’s degrees take just <strong>1 year (12 months)</strong> to complete. This means you only pay 1 year of tuition and 1 year of living costs. In Canada, standard postgraduate diplomas and Master’s programs take <strong>2 years (16–24 months)</strong>, requiring double the living expenses but offering paid co-op semesters.</p>
                <h3>Key Factor 2: Post-Study Work Permits</h3>
                <p>Graduates from UK universities receive a <strong>2-year Graduate Route visa</strong>. In Canada, graduating from an eligible 2-year program grants up to a <strong>3-year Open Post-Graduation Work Permit (PGWP)</strong>.</p>',
                'image' => 'images/dest-uk.jpg',
                'author' => 'Rahul Pillai, Head of Admissions',
                'read_time' => '5 min read',
                'published_at' => Carbon::now()->subDays(19),
                'is_published' => true,
                'views_count' => 610,
            ],
            [
                'title' => 'New Zealand Green List: Fast-Track Direct PR for Engineers, IT & Nurses',
                'slug' => 'new-zealand-green-list-pr-guide',
                'category' => 'Immigration & PR',
                'excerpt' => 'Explore how New Zealand’s Green List immigration system enables eligible international students to transition directly from degree graduation to permanent residence.',
                'content' => '<p>Immigration New Zealand introduced the Green List to fast-track permanent residence for highly skilled migrants in critical shortage occupations. If you graduate in an eligible Tier 1 or Tier 2 profession, your path to NZ citizenship is among the clearest in the world.</p>
                <h3>Tier 1 Direct to Residence Occupations:</h3>
                <ul>
                    <li>Civil, Structural, Electrical & Chemical Engineers</li>
                    <li>Software Engineers, Cloud Architects & Security Specialists</li>
                    <li>Registered Nurses, Doctors & General Practitioners</li>
                    <li>Construction Project Managers & Quantity Surveyors</li>
                </ul>',
                'image' => 'images/dest-nz.jpg',
                'author' => 'Deepak Nair, NZ Licensed Advisory Coordinator',
                'read_time' => '7 min read',
                'published_at' => Carbon::now()->subDays(28),
                'is_published' => true,
                'views_count' => 418,
            ],
        ];

        foreach ($blogs as $b) {
            Blog::updateOrCreate(['slug' => $b['slug']], $b);
        }

        // 6. Seed Sample Inquiries
        $inquiries = [
            [
                'name' => 'Adarsh Varma',
                'email' => 'adarsh.varma@gmail.com',
                'phone' => '+91 98471 23456',
                'destination' => 'Germany',
                'qualification' => 'B.Tech Mechanical (CGPA 8.2)',
                'service_interest' => 'Tuition-Free Master’s Admission',
                'preferred_intake' => 'Winter 2027 (October)',
                'message' => 'Looking for public university admissions in Germany for MSc Automotive / Mechatronics. Need APS certificate and blocked account guidance.',
                'status' => 'new',
                'admin_notes' => 'Called initial consultation on WhatsApp. Student has IELTS 7.0 score.',
            ],
            [
                'name' => 'Revathy S. Kumar',
                'email' => 'revathy.nurse@gmail.com',
                'phone' => '+91 97450 88214',
                'destination' => 'Germany',
                'qualification' => 'BSc Nursing with 3 years hospital experience',
                'service_interest' => 'Germany Nursing Recruitment & B2 Coaching',
                'preferred_intake' => 'Immediate / 2027',
                'message' => 'Currently working in a private hospital in Ernakulam. Interested in direct hospital placement in Germany and B2 language coaching in Aluva.',
                'status' => 'contacted',
                'admin_notes' => 'Invited to Saturday seminar at Aluva office for document verification.',
            ],
            [
                'name' => 'Joel Thomas Mathew',
                'email' => 'joel.mathew22@yahoo.com',
                'phone' => '+91 94960 11223',
                'destination' => 'Canada',
                'qualification' => 'B.Com (65%) with 2 backlogs cleared',
                'service_interest' => 'Postgraduate Diploma & PGWP Pathway',
                'preferred_intake' => 'May 2027 / September 2027',
                'message' => 'Seeking 2-year business/project management PG diploma in Ontario or British Columbia with 3-year PGWP.',
                'status' => 'in_progress',
                'admin_notes' => 'Shortlisted Conestoga and Seneca colleges. Awaiting updated bank statement.',
            ],
        ];

        foreach ($inquiries as $inq) {
            Inquiry::updateOrCreate(['email' => $inq['email']], $inq);
        }
    }
}
