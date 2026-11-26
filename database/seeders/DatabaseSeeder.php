<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Course;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Destination;
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

        // 2. Seed Services (Matching Official All Land Consultancy Portfolio)
        $services = [
            [
                'title' => 'Visa Assistance',
                'slug' => 'visa-assistance',
                'icon' => '🛂',
                'image' => 'images/serv6.jpg',
                'excerpt' => 'Visa documentation is a crucial component of international travel. We assist with initial consultation, document verification, application submission, and embassy interview coaching.',
                'description' => '<p>Visa documentation is a crucial component of the international travel process. A visa is a document issued by a foreign country that allows an individual to enter, stay, or exit the country for a specific period, purpose, or both. The process of obtaining a visa can be complex and time-consuming with different requirements and regulations varying between countries. Visa assistance and documentation services help individuals and organizations navigate the visa application process and ensure that travelers comply with all relevant rules and regulations.</p>

<p>Our visa assistance services provide comprehensive guidance and support to individuals and organizations seeking visas for travel, work, study, or other purposes. These services include helping applicants understand requirements and restrictions associated with different visa categories, assisting with accurate completion of application forms and supporting documents, scheduling appointments with embassies and consulates, and providing structured coaching on how to prepare for visa interviews.</p>

<h3>Overview of Our Visa Documentation Process:</h3>
<ol>
  <li><strong>Initial Consultation:</strong> The first step is an initial consultation where we determine the applicant’s travel needs, background, and the exact visa category required.</li>
  <li><strong>Document Collection:</strong> Once we understand the requirements, we provide an exhaustive, tailored checklist of documents needed for submission.</li>
  <li><strong>Document Verification:</strong> Our documentation team thoroughly reviews all certificates, financial sponsors, and letters to ensure they meet stringent embassy requirements, suggesting corrections or supplementary filings.</li>
  <li><strong>Application Submission:</strong> We accurately complete visa applications, compile the official dossier, submit to the appropriate embassy or consulate, and book the biometric and interview appointment.</li>
  <li><strong>Follow-Up:</strong> We actively track and follow up with the embassy to ensure the application is processed smoothly in a timely manner.</li>
</ol>

<h3>Visa Categories We Handle:</h3>
<ul>
  <li>Student / Study Visa (Germany, Canada, UK, New Zealand, Europe)</li>
  <li>Employment / Work Visa (UK Skilled Worker, Germany Opportunity Card &amp; Work Visa)</li>
  <li>Visit &amp; Tourist Visa (Schengen, UK, USA, Canada)</li>
  <li>Family Reunion &amp; Resident Visa</li>
  <li>Dependent &amp; Spousal Work Visa</li>
  <li>Religious Visa</li>
</ul>',
                'features' => [
                    'Initial consultation & visa profiling',
                    'Document collection checklist & review',
                    'Official embassy application submission',
                    'Biometric & VFS appointment booking',
                    '1-on-1 embassy mock interview preparation',
                    'Continuous tracking & consular follow-up'
                ],
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Certificate Attestation',
                'slug' => 'certificate-attestation',
                'icon' => '📜',
                'image' => 'images/serv3.jpg',
                'excerpt' => 'Authentic document verification through Notary Public, State HRD, MEA Apostille, and Embassies for Hague countries, UAE, Saudi Arabia, Qatar, and Kuwait.',
                'description' => '<p>Certificate attestation is the process of verifying the authenticity of a document issued in one country so that it can be legally recognized and accepted in another country. This process involves verifying the document with relevant state and national authorities. The purpose of certificate attestation services is to ensure that documents used overseas are genuine and can be trusted. This is essential for immigration, overseas employment, and international higher education.</p>

<p>ALL-LAND CONSULTANCY provides end-to-end certificate attestation services for Hague Convention Apostille countries, United Arab Emirates (UAE), Bahrain, Kuwait, Qatar, Saudi Arabia, Taiwan, Egypt, and Vietnam from various authorized departments:</p>
<ul>
  <li>Ministry of External Affairs (MEA) Government of India</li>
  <li>Human Resources Development (HRD) &amp; State Higher Education Departments</li>
  <li>Notary Public Verification</li>
  <li>State Home Ministry &amp; General Administration Department (GAD)</li>
  <li>Sub-Divisional Magistrate (SDM) Legalization</li>
  <li>Respective Foreign Embassies and Consulates in India</li>
</ul>

<h3>Typical Steps in Our Attestation Process:</h3>
<ol>
  <li><strong>Notarization:</strong> Initial verification and witnessing by a certified Public Notary.</li>
  <li><strong>Authentication:</strong> Certification by the designated state government department (State HRD or Home Ministry) where the document originated.</li>
  <li><strong>MEA Apostille / Legalization:</strong> Central government validation by the Ministry of External Affairs for Hague convention members or standard MEA authentication.</li>
  <li><strong>Embassy Legalization:</strong> Final consular clearance and embassy seal from the destination nation\'s embassy or consulate.</li>
</ol>

<p>If you are planning to go abroad, we take care of your certificate attestation formalities at reasonable prices with fast turnaround times in a hassle-free manner.</p>',
                'features' => [
                    'Notary Public verification & witnessing',
                    'State HRD & Higher Education attestation',
                    'Ministry of External Affairs (MEA) Apostille',
                    'Embassy legalization (UAE, Saudi, Qatar, Kuwait)',
                    'Fast-track handling & secure courier tracking',
                    'Support for degree, birth, marriage & nursing certificates'
                ],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Air Ticketing',
                'slug' => 'flight-ticketing',
                'icon' => '✈️',
                'image' => 'images/serv1.jpg',
                'excerpt' => 'Domestic and international flight ticket bookings at competitive low airfares with dedicated pre-flight guidance, web check-in, and student baggage support.',
                'description' => '<p>A flight ticket is a document issued by an airline that allows passengers to travel by flight from one location to another, whether on domestic or international routes. Our expert travel desk reviews your requirements and confirms suitable flight tickets tailored to your convenience. We offer great discounts on domestic and international flight tickets with leading global carriers.</p>

<p>ALL-LAND CONSULTANCY focuses on providing a smooth, stress-free flight booking experience for students, families, and professionals. You can confirm your airline ticket booking at the lowest airfare by planning your journey with us.</p>

<h3>Our Booking Process:</h3>
<ol>
  <li><strong>Search:</strong> Our team collects your travel dates, preferred destination, transit preferences, and luggage requirements to identify optimal flight schedules.</li>
  <li><strong>Selection:</strong> We present transparent options comparing airfares, layover durations, and baggage allowances so you select the most convenient flight.</li>
  <li><strong>Confirmation:</strong> Once confirmed, we immediately provide electronic air tickets and verified booking references.</li>
</ol>

<h3>Pre-Flight Information &amp; Assistance:</h3>
<p>ALL-LAND CONSULTANCY briefs passengers with all vital travel details, including web check-in procedures, flight status alerts, luggage weight guidelines (special student 40kg–46kg baggage allowances), customs guidelines, and instructions on obtaining boarding passes seamlessly.</p>',
                'features' => [
                    'Domestic & international flight bookings',
                    'Lowest airfares & special student discounts',
                    'Extra baggage allowance coordination (40kg+)',
                    'Flexible cancellation & date change assistance',
                    'Web check-in & boarding pass guidance',
                    'Direct non-transit and student transit routes'
                ],
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Placement Assistance',
                'slug' => 'placement-assistance',
                'icon' => '💼',
                'image' => 'images/serv5.jpg',
                'excerpt' => 'Professional career guidance, resume enhancement, interview preparation, and overseas job placement support across healthcare, caregiving, engineering, and global industries.',
                'description' => '<p>Placement Assistance is a professional support service designed to help job seekers identify and secure suitable employment opportunities based on their educational qualifications, skills, experience, and career aspirations. Our goal is to bridge the gap between talented candidates and potential employers by providing reliable career guidance and structured job search support.</p>

<p>We assist candidates throughout their job search journey, including resume preparation, CV enhancement, interview preparation, career counselling, job application guidance, and access to relevant employment opportunities. Through our established connections with various companies, recruitment agencies, institutions, and professional networks, we help candidates connect with potential employers and explore suitable career opportunities across different industries.</p>

<p>Our placement assistance service focuses on understanding each candidate\'s profile and preferences to identify opportunities that match their qualifications and professional goals. We also guide candidates on interview techniques, workplace expectations, and essential skills required to improve their employability.</p>

<p>Whether you are a fresher seeking your first job or an experienced professional looking for better career opportunities, our placement assistance services aim to make your job search more organised and effective.</p>

<div class="placement-notice-box">
  <h4>Please Note:</h4>
  <p>Placement assistance is not a guarantee of employment. Final selection and recruitment decisions are entirely at the discretion of the respective employers. However, our guidance, professional support, and employer network can help improve your chances of finding suitable employment.</p>
</div>

<h3>Caregiver Jobs in Israel (For Male &amp; Female Candidates)</h3>
<p>Israel is a country in the Middle East, known for its advanced healthcare facilities, well-developed medical services and growing demand for elderly care professionals. The country offers employment opportunities for foreign workers in the caregiving sector, particularly for assisting elderly individuals and people with disabilities who require daily personal care and support. With an increasing need for home-based care services, foreign caregivers play an important role in supporting families and ensuring quality care for individuals who need assistance with their everyday lives.</p>

<p>Caregiver jobs in Israel are an excellent opportunity for both male and female candidates from India who are interested in working abroad in the healthcare and personal care sector. These employment opportunities allow candidates to gain international work experience while contributing to the well-being of elderly and dependent individuals. Caregiving is a responsible profession that requires patience, dedication, compassion and a genuine interest in helping others. Candidates with relevant training or previous experience in patient care and elderly assistance may have an added advantage during the selection process.</p>

<h4>Responsibilities of Caregivers in Israel:</h4>
<p>The responsibilities of caregivers include assisting with bathing, dressing, personal hygiene, mobility, meal preparation, feeding, medication reminders and providing emotional support and companionship. Depending on the care recipient\'s requirements, caregivers may work in private homes and provide live-in care. They may also assist individuals with physical limitations, age-related difficulties and other daily care needs. The nature of work can vary depending on the individual\'s health condition, level of independence and specific care requirements. Both male and female caregivers can explore suitable employment opportunities based on their qualifications and employer requirements.</p>

<h4>Overview of Advantages &amp; Benefits of Caregivers Working in Israel:</h4>
<ul>
  <li><strong>Competitive Salary:</strong> Caregivers receive wages according to Israeli employment regulations and their employment contracts. Earnings depend on working arrangements and employer requirements.</li>
  <li><strong>Accommodation Facilities:</strong> Many live-in caregiver positions provide accommodation at the care recipient\'s residence, subject to employment arrangements.</li>
  <li><strong>Employment Benefits:</strong> Foreign caregivers are entitled to applicable employment rights, including weekly rest periods, annual leave, sick leave and other statutory benefits.</li>
  <li><strong>International Work Experience:</strong> Working in Israel provides valuable international exposure in elderly care and personal assistance.</li>
  <li><strong>Opportunities for Men and Women:</strong> Both male and female candidates can apply, depending on the care recipient\'s requirements and employer preferences.</li>
  <li><strong>Professional Development:</strong> Caregivers gain practical experience in elderly care, patient assistance and disability support.</li>
</ul>

<h4>Eligibility Criteria for Caregiver Jobs in Israel:</h4>
<ul>
  <li>Male and female candidates can apply.</li>
  <li>Minimum age: 18 years.</li>
  <li>Basic educational qualification.</li>
  <li>Caregiving or elderly care training certificate.</li>
  <li>Previous caregiving experience is an advantage.</li>
  <li>Medical fitness certificate.</li>
  <li>Valid passport.</li>
  <li>Police Clearance Certificate (PCC).</li>
  <li>Patience, compassion and good communication skills.</li>
</ul>

<h3>Other International Placement Pathways</h3>
<ul>
  <li><strong>Germany:</strong> Healthcare adaptation courses for BSc/GNM nurses leading to full Urkunde licensing, and skilled vocational placements.</li>
  <li><strong>United Kingdom:</strong> NHS Trust staff nurse opportunities with CBT, OSCE coaching, and Tier 2 Health and Care Worker visas.</li>
  <li><strong>Saudi Arabia &amp; Middle East:</strong> Ministry of Health (MOH) and specialized hospital placements for healthcare workers with verified DataFlow credentials.</li>
</ul>',
                'features' => [
                    'Resume preparation & CV enhancement',
                    '1-on-1 interview technique coaching',
                    'Caregiver jobs in Israel (Male & Female)',
                    'Competitive Israeli wage & live-in accommodation',
                    'Healthcare placement in Germany, UK & Middle East',
                    'Established corporate & healthcare employer network'
                ],
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Insurance Service',
                'slug' => 'travel-health-insurance',
                'icon' => '🛡️',
                'image' => 'images/serv7.jpg',
                'excerpt' => 'Comprehensive international travel and health insurance protecting against medical emergencies, trip cancellations, lost baggage, and unforeseen overseas expenses.',
                'description' => '<p>Travel insurance is an essential insurance policy that provides financial protection for travelers and international students against unexpected events and emergencies that may occur during their overseas trip or academic tenure. Travel insurance typically covers a wide variety of potential risks, including trip cancellation or interruptions, medical emergencies, lost or stolen luggage, and other unforeseen overseas circumstances.</p>

<p>Depending on the specific policy, coverage may also include emergency medical evacuation, hospital stays, outpatient care, personal liability, and disruptions related to natural disasters or political unrest.</p>

<h3>Key Benefits of Our Insurance Service:</h3>
<ul>
  <li><strong>Comprehensive Medical Protection:</strong> Covers doctor visits, prescription medications, emergency hospitalization, and ICU care.</li>
  <li><strong>Trip Cancellation &amp; Delay:</strong> Reimburses non-refundable flight and accommodation costs if unforeseen emergencies interrupt your journey.</li>
  <li><strong>Baggage &amp; Document Loss:</strong> Compensation for lost, delayed, or stolen baggage and emergency passport replacement support.</li>
  <li><strong>Peace of Mind:</strong> Knowing you are covered in case of an emergency ensures a relaxed, confident travel and study experience.</li>
</ul>

<p>ALL-LAND CONSULTANCY assists you in comparing and choosing embassy-compliant policies tailored to your age, destination country (such as German statutory health insurance TK/Barmer or Canadian UHIP), and study duration.</p>',
                'features' => [
                    'International student health insurance',
                    'Emergency hospitalization & medical evacuation',
                    'Trip cancellation & delay compensation',
                    'Lost or delayed baggage reimbursement',
                    'Schengen & embassy visa compliant certificates',
                    'Instant digital policy issuance'
                ],
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Application Process',
                'slug' => 'application-process',
                'icon' => '🎓',
                'image' => 'images/service-university-selection.jpg',
                'excerpt' => 'Step-by-step guidance for overseas university and employment applications, compelling SOP crafting, documentation review, and mock interview coaching.',
                'description' => '<p>The application process is an essential step towards obtaining any job or enrolling in an overseas university degree program. It is the primary means through which you showcase your academic capabilities, skills, qualifications, and personal suitability for the chosen role or program. A well-structured application can make you stand out from the pool of global applicants and substantially increase your chances of selection.</p>

<p>However, applicants are often unaware of intricate international application procedures and specific documentation formats. ALL-LAND CONSULTANCY assists candidates in preparing and fine-tuning every document required for error-free submission.</p>

<h3>Essential Steps in Our Application Support:</h3>
<ol>
  <li><strong>Requirement Research:</strong> Before starting your application, we research the precise entry criteria for your target university or position, including required GPA, work experience, language proficiency, and institutional deadlines.</li>
  <li><strong>Document Preparation:</strong> We professionally format your resume, CV according to European/North American standards, tailor your Statement of Purpose (SOP), and draft compelling Letters of Recommendation (LOR).</li>
  <li><strong>Application Form Filing:</strong> We meticulously fill out the application forms and attach all certified supporting documents on your behalf to prevent administrative rejections.</li>
  <li><strong>Interview Preparation:</strong> After successful submission, we prepare candidates for direct interviews with university admission officers or employers, practicing commonly asked questions and articulate responses.</li>
</ol>',
                'features' => [
                    'Detailed institutional requirement profiling',
                    'Statement of Purpose (SOP) drafting & editing',
                    'Academic CV & European format resume creation',
                    'Error-free application submission on candidate behalf',
                    'Document attachment & verification checks',
                    'University & employer interview simulation'
                ],
                'order' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'Dataflow Service',
                'slug' => 'healthcare-dataflow',
                'icon' => '🏥',
                'image' => 'images/serv4.jpg',
                'excerpt' => 'Primary Source Verification (PSV) for healthcare professionals heading to Dubai (DHA), Abu Dhabi (HAAD), UAE (MOH), Saudi Arabia (KSA), Qatar, Oman, and Bahrain.',
                'description' => '<p>Dataflow assistance for healthcare workers is a specialized process that helps doctors, nurses, pharmacists, and allied healthcare professionals streamline their credential verification and licensing evaluation. The DataFlow process provides an efficient, globally trusted method to verify the authenticity of a healthcare worker\'s education, registration licenses, and employment experience directly from the issuing source.</p>

<p>The DataFlow Group is contracted by prominent healthcare regulatory bodies across the Gulf and Middle East to provide a centralized verification platform. ALL-LAND CONSULTANCY provides complete DataFlow services for:</p>
<ul>
  <li>Dubai Health Authority (DHA) — Dubai, UAE</li>
  <li>Health Authority Abu Dhabi (HAAD / DoH) — Abu Dhabi, UAE</li>
  <li>Ministry of Health (MOH) — United Arab Emirates</li>
  <li>Saudi Commission for Health Specialties (SCFHS / KSA) — Saudi Arabia</li>
  <li>Qatar Council for Healthcare Practitioners (QCHP) — Qatar</li>
  <li>Oman Medical Specialty Board (OMSB) — Oman</li>
  <li>National Health Regulatory Authority (NHRA) — Bahrain</li>
</ul>

<h3>The Dataflow Process:</h3>
<ol>
  <li><strong>Document Submission:</strong> Candidates submit their educational degrees, nursing or medical council registration, experience letters, and Good Standing Certificates.</li>
  <li><strong>Primary Source Verification:</strong> The issuing universities, nursing councils, and hospitals verify authenticity through secure channels.</li>
  <li><strong>Evaluation:</strong> Credentials are evaluated against regulatory standards.</li>
  <li><strong>Report Issuance:</strong> A finalized Primary Source Verification (PSV) report is issued to the candidate and regulatory authority.</li>
</ol>',
                'features' => [
                    'Primary Source Verification (PSV) management',
                    'DHA, HAAD, and UAE MOH verification',
                    'Saudi Arabia (KSA / SCFHS) processing',
                    'Qatar, Oman & Bahrain healthcare verification',
                    'Nursing Council Good Standing Certificate support',
                    'Dedicated document compilation & tracking'
                ],
                'order' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'Pre-Departure & Post-Landing Services',
                'slug' => 'pre-departure-and-post-landing-service',
                'icon' => '🏡',
                'image' => 'images/serv8.jpg',
                'excerpt' => 'End-to-end relocation guidance including travel checklists, flight & baggage rules, forex cards, airport pickup, accommodation bookings, and city registration.',
                'description' => '<p>Pre-departure and post-landing assistance are two essential services that ensure travelers, students, and workers have a smooth, comfortable international transition. Our pre-departure assistance helps you avoid last-minute panic and prepares you with practical knowledge for travel and border customs.</p>

<h3>Pre-Departure Assistance Includes:</h3>
<ul>
  <li>Visa and passport validity checks and travel folder preparation.</li>
  <li>Flight itineraries, transit visa advice, and baggage restriction guidelines.</li>
  <li>Foreign exchange (Forex) cards, international SIM card setup, and blocked account activation.</li>
  <li>Travel health insurance verification and emergency medical contacts.</li>
  <li>Comprehensive cultural orientation and climate preparation for destination countries.</li>
  <li>Essential packing tips and prohibited items guidelines.</li>
</ul>

<h3>Post-Landing Assistance:</h3>
<p>Post-landing assistance ensures your new journey begins flawlessly once you arrive at your destination. We assist with airport pickups, secure student dormitory or shared apartment (WG) check-in, city registration (Anmeldung in Germany / SIN in Canada), local bank account opening, and public transit navigation.</p>',
                'features' => [
                    'Pre-departure luggage & customs orientation',
                    'Forex card & international SIM card setup',
                    'Airport pickup & transport coordination',
                    'Safe accommodation & student dormitory booking',
                    'City registration (Anmeldung/SIN) assistance',
                    'Local bank account & blocked fund activation'
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
            [
                'title' => 'Bachelor of Nursing (BSc) — 4-Year English Medium',
                'slug' => 'bachelor-of-nursing-georgia',
                'country' => 'Georgia',
                'country_code' => 'GE',
                'degree_level' => 'Bachelor\'s Degree',
                'duration' => '4 Years',
                'intake' => 'September & February',
                'tuition_fee' => '€3,500 – €4,200 / Year',
                'stipend' => 'Clinical hospital rotations included',
                'language_requirement' => 'English Medium (No Georgian required)',
                'career_pathway' => 'European ECTS Credit Recognition & Global Healthcare Opportunities',
                'excerpt' => 'English-medium 4-year Bachelor of Nursing combining rigorous anatomy, patient care, and clinical hospital practice across accredited Georgian teaching hospitals.',
                'description' => '<p>Several prestigious Georgian universities offer English-medium Bachelor of Nursing programmes, generally lasting four years and comprising theoretical and practical components. Students gain comprehensive knowledge in patient care, anatomy, healthcare practices, clinical nursing and medical ethics.</p>',
                'image' => 'images/dest-georgia.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 8,
            ],
            [
                'title' => 'MD General Medicine (MBBS Equivalent) — European Framework',
                'slug' => 'md-general-medicine-georgia',
                'country' => 'Georgia',
                'country_code' => 'GE',
                'degree_level' => 'Undergraduate Medical (MD)',
                'duration' => '6 Years (360 ECTS)',
                'intake' => 'September / October',
                'tuition_fee' => '€4,500 – €5,500 / Year',
                'stipend' => 'Internship & hospital rotations',
                'language_requirement' => 'English Medium (IELTS / University interview)',
                'career_pathway' => 'WHO / NMC Recognised Pathway for Global Licensing',
                'excerpt' => 'European Higher Education Area compliant 6-year medical degree in English, featuring modern simulation centres and multi-specialty clinical rotations.',
                'description' => '<p>Georgian medical universities offer world-class General Medicine programmes structured under the European ECTS system. Affordable tuition fees and modern hospital affiliations make Georgia a prime choice for Indian medical aspirants.</p>',
                'image' => 'images/dest-georgia.jpg',
                'is_featured' => false,
                'is_active' => true,
                'order' => 9,
            ],
            [
                'title' => 'BSc Professional Nursing (BSc in Nursing — 6 Semesters)',
                'slug' => 'bsc-nursing-austria',
                'country' => 'Austria',
                'country_code' => 'AT',
                'degree_level' => 'Bachelor\'s Degree (BSc)',
                'duration' => '3 Years (6 Semesters)',
                'intake' => 'September & March',
                'tuition_fee' => '~€726 / Semester (Public Universities)',
                'stipend' => 'Clinical training allowances during internships',
                'language_requirement' => 'German B1/B2 (for clinical patient communication)',
                'career_pathway' => 'Full Austrian & EU Registered Nurse License + Red-White-Red Card',
                'excerpt' => 'Unlike traditional vocational pathways, Austria offers professional nursing education through 3-year Bachelor’s degrees combining theory with practical hospital clinical training.',
                'description' => '<p>Nursing is one of the most promising fields of study in Austria. Austria offers professional nursing education through Bachelor\'s degree programmes lasting three years (six semesters), combining theoretical education with extensive practical clinical training. Graduates can also pursue Master\'s programmes in Nursing Science and Advanced Nursing Practice.</p>',
                'image' => 'images/dest-austria.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 10,
            ],
            [
                'title' => 'MSc Software Engineering & Cloud Computing',
                'slug' => 'msc-software-engineering-austria',
                'country' => 'Austria',
                'country_code' => 'AT',
                'degree_level' => 'Master\'s Degree (MSc)',
                'duration' => '2 Years',
                'intake' => 'October (Winter Semester)',
                'tuition_fee' => '€726 / Semester (State Universities)',
                'stipend' => 'Part-time student jobs: €1,000–€1,400/mo',
                'language_requirement' => 'English (IELTS 6.5) / MOI accepted',
                'career_pathway' => 'Red-White-Red Card 12-Month Job Search Visa & Fast EU Settlement',
                'excerpt' => 'English-taught Master’s in Computer Science & Cloud Architectures at top Austrian universities in Vienna and Graz with direct Central European tech placements.',
                'description' => '<p>Study at world-renowned Austrian universities of applied sciences. Benefit from low public tuition fees, a safe living environment, and strong connections to Central Europe’s tech industry.</p>',
                'image' => 'images/dest-austria.jpg',
                'is_featured' => false,
                'is_active' => true,
                'order' => 11,
            ],
            [
                'title' => 'MBBS / MD General Medicine (5+1 Years English Medium)',
                'slug' => 'mbbs-general-medicine-tajikistan',
                'country' => 'Tajikistan',
                'country_code' => 'TJ',
                'degree_level' => 'Medical Degree (MBBS / MD)',
                'duration' => '5 Years + 1 Year Internship (6 Years Total)',
                'intake' => 'September / October',
                'tuition_fee' => '₹3,50,000 – ₹4,20,000 / Year',
                'stipend' => 'Hospital clinical internship included',
                'language_requirement' => 'English Medium (NEET Qualified for Indian students)',
                'career_pathway' => 'NMC Compliant Curriculum & NEXT / FMGE Eligibility',
                'excerpt' => 'Highly affordable English-medium MBBS program with 5 years of academic instruction and 1 year of compulsory hospital internship complying with NMC regulations.',
                'description' => '<p>Medical universities in Tajikistan offer General Medicine programmes with 5 years of academic study and 1 year of compulsory internship. Students study Anatomy, Physiology, Biochemistry, Pathology, Pharmacology, Medicine, and Surgery with practical clinical training in teaching hospitals. Provides an economical alternative to high Indian private medical college fees.</p>',
                'image' => 'images/dest-tajikistan.jpg',
                'is_featured' => true,
                'is_active' => true,
                'order' => 12,
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
                'image' => 'images/events/event-germany-seminar.jpg',
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
                'image' => 'images/events/event-uk-spot-admission.jpg',
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
                'image' => 'images/events/event-canada-webinar.jpg',
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
                'image' => 'images/events/event-nz-education-fair.jpg',
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
                'image' => 'images/events/event-scholarships-webinar.jpg',
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
                'image' => 'images/events/event-pre-departure-orientation.jpg',
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

        // 7. Seed Destinations / Study Abroad Countries
        $destinations = [
            [
                'name' => 'Germany',
                'slug' => 'germany',
                'country_code' => 'DE',
                'flag' => '🇩🇪',
                'tab_badge' => 'Zero Tuition',
                'hero_badge' => 'ZERO TUITION FEES',
                'eyebrow' => 'Europe’s Premier Tech & Engineering Hub',
                'title' => 'Study in Germany — World-Class Education with €0 Tuition',
                'image' => 'images/dest-germany.jpg',
                'banner_image' => 'images/dest-germany.jpg',
                'blurb' => 'Gain internationally recognized degrees from prestigious TU9 and state universities without paying tuition fees. Germany offers unmatched engineering excellence, high living standards, and clear post-graduation career opportunities across Europe.',
                'description' => '<p>Germany has emerged as the premier higher education destination for Indian and international students seeking world-class academic rigour without exorbitant tuition debts. With over 400 state-accredited universities offering more than 2,000 English-taught degree programs, international scholars receive identical zero-tuition privileges as domestic German citizens.</p><h3>Why Choose Germany?</h3><ul><li><strong>€0 Tuition at Public Universities:</strong> Save ₹30–₹50 Lakhs compared to universities in the US, UK, or Australia.</li><li><strong>World-Class TU9 & Applied Science Universities:</strong> Renowned worldwide for mechanical engineering, computer science, automotive, mechatronics, and biotechnology.</li><li><strong>18-Month Post-Study Job Seeker Visa:</strong> Ample time to transition from graduate status into a high-paying European engineering or management contract.</li><li><strong>Fast-Track Permanent Residence:</strong> Graduates who work in Germany and contribute to pension insurance can apply for settlement permits (Niederlassungserlaubnis) in as little as 21 to 24 months.</li></ul>',
                'stats' => [
                    ['val' => '€0 / Year', 'lbl' => 'Public Tuition'],
                    ['val' => '18 Months', 'lbl' => 'Job Search Visa'],
                    ['val' => '21–24 Mo', 'lbl' => 'Fast PR Pathway'],
                    ['val' => '20 Hrs/Wk', 'lbl' => 'Part-Time Work'],
                ],
                'features' => [
                    ['title' => 'Tuition-Free Higher Education', 'desc' => 'Over 400 state-funded universities offer English-taught Bachelor’s & Master’s programs with zero tuition fees.'],
                    ['title' => 'Generous 18-Month Job Search Visa', 'desc' => 'Graduates receive 1.5 years to secure employment in Europe’s strongest economy with full work rights.'],
                    ['title' => 'Fast-Track PR Settlement in 21–24 Months', 'desc' => 'Secure permanent residency in under two years of qualified employment after graduation.'],
                ],
                'popular_courses' => ['Automotive & Mechanical', 'Computer Science & AI', 'Renewable Energy', 'Business Analytics', 'Vocational Nursing (Ausbildung)', 'DAAD Scholarships'],
                'requirements' => 'APS Certificate (mandatory for Indian applicants), minimum 60%-70% in Bachelor\'s, IELTS 6.5 or TOEFL 90 (or MOI where accepted), €11,904 Blocked Account (Sperrkonto) for living expenses.',
                'living_cost' => '€934 – €1,000 / month (Blocked Account covers accommodation, food, and public transport)',
                'post_study_work' => '18 Months open Job Search Visa with full work rights, leading to EU Blue Card',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Georgia',
                'slug' => 'georgia',
                'country_code' => 'GE',
                'flag' => '🇬🇪',
                'tab_badge' => 'Affordable Degrees',
                'hero_badge' => 'ENGLISH-MEDIUM NURSING & MEDICINE',
                'eyebrow' => 'Crossroads of Eastern Europe & Western Asia',
                'title' => 'Study in Georgia — Affordable Higher Education & English-Medium Degrees',
                'image' => 'images/dest-georgia.jpg',
                'banner_image' => 'images/dest-georgia.jpg',
                'blurb' => 'Georgia is a beautiful country located at the crossroads of Eastern Europe and Western Asia, known for its rich culture, natural beauty, welcoming environment and quality education system. It has become an attractive destination for international students seeking affordable higher education abroad.',
                'description' => '<p>Georgia is a beautiful country located at the crossroads of Eastern Europe and Western Asia, known for its rich culture, natural beauty, welcoming environment and quality education system. It has become an attractive destination for international students seeking affordable higher education abroad. Georgian universities offer a wide range of academic programmes, including Bachelor\'s, Master\'s and Doctoral degrees in various disciplines. Many universities also provide English-medium programmes, making Georgia a convenient destination for Indian students.</p>

<h3>What is after Plus Two?</h3>
<p>Every year, lakhs of students face confusion about choosing the right career path, higher education opportunities and future employment prospects. If you are looking for an internationally recognised educational experience at an affordable cost, Georgia can be an excellent option.</p>

<h3>Nursing in Georgia (4-Year Professional Bachelor Degree)</h3>
<p>If you are planning to pursue a career in nursing, studying Nursing in Georgia offers an opportunity to obtain a professional Bachelor\'s degree through academic learning and practical clinical training. Several Georgian universities offer English-medium Bachelor of Nursing programmes, generally lasting four years and comprising theoretical and practical components. Students gain knowledge in patient care, anatomy, healthcare practices, clinical nursing and medical ethics. Admission requirements and English proficiency criteria vary between universities.</p>

<h3>Diverse Bachelor\'s &amp; Master\'s Degree Programmes</h3>
<p>Apart from Nursing, Georgia offers various Bachelor\'s degree programmes in fields such as Medicine, Business Administration, Information Technology, Engineering, Pharmacy and other disciplines. Students who have completed their undergraduate education can also pursue Master\'s degree programmes in specialised fields, including healthcare, public health, business management and technology. Master\'s programmes generally take one to two years, depending on the course and university.</p>

<h3>Overview of Key Student Advantages in Georgia</h3>
<ul>
  <li><strong>Quality Education:</strong> Georgian universities offer structured academic programmes with theoretical instruction, practical training and modern learning facilities.</li>
  <li><strong>Affordable Tuition Fees:</strong> Compared with several popular international study destinations, Georgia offers relatively affordable higher education and living expenses.</li>
  <li><strong>English-Medium Programmes:</strong> Many universities offer courses in English, helping international students pursue higher education without necessarily knowing Georgian.</li>
  <li><strong>Practical Training:</strong> Nursing students receive clinical exposure and practical training to develop professional healthcare skills.</li>
  <li><strong>International Exposure:</strong> Students experience a multicultural environment and interact with people from different nationalities and backgrounds.</li>
  <li><strong>Wide Range of Courses:</strong> Students can choose from Bachelor\'s and Master\'s programmes in Nursing, Medicine, Business, IT, Engineering and other disciplines.</li>
  <li><strong>European Education Framework:</strong> Georgia follows the European Higher Education Area structure and the ECTS credit system, supporting academic transparency and student mobility.</li>
</ul>

<h3>Eligibility Criteria</h3>
<ul>
  <li>Plus Two or equivalent qualification for Bachelor\'s programmes.</li>
  <li>Relevant Bachelor\'s degree for Master\'s programmes.</li>
  <li>Academic transcripts and certificates.</li>
  <li>Valid passport.</li>
  <li>English language proficiency as required by the university.</li>
  <li>Additional entrance examinations or interviews, if applicable.</li>
</ul>',
                'stats' => [
                    ['val' => '€3k–€5k', 'lbl' => 'Annual Tuition'],
                    ['val' => '4 Years', 'lbl' => 'BSc Nursing'],
                    ['val' => 'ECTS / EHEA', 'lbl' => 'European Framework'],
                    ['val' => '100% English', 'lbl' => 'Medium of Instruction'],
                ],
                'features' => [
                    ['title' => 'Quality Education & Modern Facilities', 'desc' => 'Structured academic programmes with theoretical instruction, practical clinical training and modern university facilities.'],
                    ['title' => 'Affordable Tuition & Living Expenses', 'desc' => 'Compared with several popular international destinations, Georgia offers relatively affordable higher education and living costs.'],
                    ['title' => 'English-Medium Nursing & Medicine', 'desc' => 'English-medium 4-year Bachelor of Nursing with clinical exposure in patient care, anatomy, and healthcare ethics.'],
                    ['title' => 'European Higher Education Framework', 'desc' => 'Georgia follows the European Higher Education Area (EHEA) structure and ECTS credit system, supporting international mobility.'],
                ],
                'popular_courses' => ['Bachelor of Nursing (4 Yrs)', 'General Medicine (MD/MBBS)', 'Business Administration (BBA)', 'Information Technology & CS', 'Pharmacy & Health Sciences', 'Public Health (Master’s)'],
                'requirements' => 'Plus Two or equivalent qualification for Bachelor\'s programmes, relevant Bachelor\'s degree for Master\'s, academic transcripts & certificates, valid passport, English language proficiency as required by university.',
                'living_cost' => '$300 – $450 / month (covers student hostel/apartment accommodation, meals, and local transit)',
                'post_study_work' => 'European ECTS credit mobility & post-graduation residency pathways across Europe',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Austria',
                'slug' => 'austria',
                'country_code' => 'AT',
                'flag' => '🇦🇹',
                'tab_badge' => 'Central Europe Hub',
                'hero_badge' => 'WORLD-CLASS EU DEGREE',
                'eyebrow' => 'Heart of Central Europe & High Living Standard',
                'title' => 'Study in Austria — World-Class Central European Higher Education & Nursing Degrees',
                'image' => 'images/dest-austria.jpg',
                'banner_image' => 'images/dest-austria.jpg',
                'blurb' => 'Studying in Austria is a dream for many international students. Austria is known for its high standard of living, excellent education system, rich cultural heritage and beautiful natural landscapes. It offers world-class public universities, 3-year professional nursing degrees, and European career pathways.',
                'description' => '<p>Studying in Austria is a dream for many international students. Austria is a beautiful country located in Central Europe, known for its high standard of living, excellent education system, rich cultural heritage and beautiful natural landscapes. It is recognised as an attractive destination for international students seeking quality higher education in Europe. Austria offers a wide range of educational institutions, including public universities, universities of applied sciences and private universities, providing various programmes at Bachelor\'s, Master\'s and doctoral levels.</p>

<p>Austria has become an increasingly attractive destination for international students seeking quality higher education in Europe. With a wide range of academic programmes, internationally recognised qualifications and opportunities for practical learning, the country offers excellent options for students planning to pursue their Bachelor\'s or Master\'s degrees abroad. Its affordable education system, safe living environment and access to European career opportunities make Austria a preferred destination for students looking to build a successful international career.</p>

<h3>Academic Opportunities Across Diverse Disciplines</h3>
<p>If you are planning to pursue a Bachelor\'s or Master\'s degree in Austria, the country offers various opportunities across different academic disciplines. Students who have completed Plus Two can apply for suitable Bachelor\'s programmes, subject to university admission requirements and recognition of their academic qualifications. Students who have already completed a relevant Bachelor\'s degree can explore Master\'s programmes in their respective fields. Courses are available in different disciplines, including nursing, healthcare, engineering, business management, information technology and social sciences. Depending on the programme, students can choose between English and German-taught courses.</p>

<h3>Professional Nursing Degree in Austria (3 Years / 6 Semesters)</h3>
<p>Nursing is one of the promising fields of study in Austria. Unlike Germany\'s traditional nursing Ausbildung pathway, Austria offers professional nursing education through Bachelor\'s degree programmes, generally lasting three years (six semesters). These programmes combine theoretical education with practical clinical training. Students who have completed a relevant Bachelor\'s degree in nursing can also explore Master\'s programmes such as Nursing Science, Advanced Nursing Practice and Nursing Management. German language proficiency is particularly important for clinical training and patient communication.</p>

<h3>Overview of Key Advantages in Austria</h3>
<ul>
  <li><strong>High-Quality Education:</strong> Austria offers internationally recognised higher education through well-established universities and universities of applied sciences.</li>
  <li><strong>Career Opportunities:</strong> Students can explore career opportunities in healthcare, engineering, business, IT and other professional sectors.</li>
  <li><strong>Practical Training:</strong> Many programmes include internships, laboratory sessions and practical industry exposure.</li>
  <li><strong>Multicultural Environment:</strong> Students experience a diverse international community and European lifestyle.</li>
  <li><strong>Affordable Education:</strong> Public university tuition fees are comparatively affordable (~€726 per semester for non-EU students), although fees vary depending on nationality and institution.</li>
  <li><strong>International Exposure:</strong> Studying in Austria provides opportunities to develop language skills, professional knowledge and cross-cultural experience.</li>
</ul>

<h3>Eligibility Criteria</h3>
<ul>
  <li>Plus Two or equivalent qualification for Bachelor\'s programmes.</li>
  <li>Relevant Bachelor\'s degree for Master\'s programmes.</li>
  <li>Academic transcripts, school leaving certificates, and valid passport.</li>
  <li>German language proficiency (B1/B2) for clinical nursing programmes or English proficiency for English-taught degrees.</li>
  <li>Additional entrance examinations or interviews, if applicable.</li>
</ul>',
                'stats' => [
                    ['val' => '~€726/Sem', 'lbl' => 'Public Univ Tuition'],
                    ['val' => '3 Years', 'lbl' => 'BSc Nursing (6 Sem)'],
                    ['val' => 'Top 5', 'lbl' => 'Global Living Index'],
                    ['val' => 'Red-White-Red', 'lbl' => 'Post-Study Card'],
                ],
                'features' => [
                    ['title' => 'High-Quality European Education', 'desc' => 'Internationally recognised higher education through well-established public universities and universities of applied sciences.'],
                    ['title' => 'Professional Nursing Degree (3 Yrs / 6 Semesters)', 'desc' => 'Unlike traditional vocational pathways, Austria offers professional nursing education through 3-year Bachelor’s degrees combining theory with clinical training.'],
                    ['title' => 'Practical Training & Industry Exposure', 'desc' => 'Internships, laboratory sessions and practical industry exposure across healthcare, engineering, IT, and business.'],
                    ['title' => 'Affordable Education & Safe Living', 'desc' => 'Public university tuition fees are comparatively affordable (~€726/semester) with a very high safety index and European career access.'],
                ],
                'popular_courses' => ['BSc Professional Nursing (3 Yrs)', 'Advanced Nursing Practice & Mgmt', 'Software Engineering & IT', 'Mechanical & Industrial Eng', 'International Business Administration', 'Biotechnology & Life Sciences'],
                'requirements' => 'Plus Two with required subjects for Bachelor\'s programmes (with recognition/nostrification), relevant Bachelor\'s degree for Master\'s, German language proficiency (B1/B2 for nursing clinicals) or English proficiency for English-taught degrees.',
                'living_cost' => '€850 – €1,050 / month (covers student housing/WG, student transit ticket, food, and Austrian public health insurance)',
                'post_study_work' => '12 Months Red-White-Red Card job seeker visa transitioning directly into Austrian EU settlement',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'UK',
                'slug' => 'united-kingdom',
                'country_code' => 'UK',
                'flag' => '🇬🇧',
                'tab_badge' => '1-Yr Master’s',
                'hero_badge' => '1-YEAR FAST MASTERS',
                'eyebrow' => 'Venerable Russell Group Academic Heritage',
                'title' => 'Study in the UK — 1-Year Fast Master’s & 2-Year Graduate Visa',
                'image' => 'images/dest-uk.jpg',
                'banner_image' => 'images/dest-uk.jpg',
                'blurb' => 'Home to historic Russell Group institutions and innovative modern universities. Complete your Master’s degree in just 12 months, saving a full year of living expenses while qualifying for a 2-year post-study Graduate Route work visa.',
                'description' => '<p>With 4 of the world\'s top 10 universities and centuries of academic prestige, the United Kingdom offers unparalleled global recognition. UK degrees are designed for speed and career acceleration: intensive 1-year Master’s courses allow students to graduate and enter the workforce 12 months faster than in other nations, saving tens of thousands of pounds in living expenses.</p><h3>Why Choose the UK?</h3><ul><li><strong>1-Year Intensive Master’s:</strong> Complete your postgraduate education in 12 months, drastically reducing tuition fees and living accommodation outlays.</li><li><strong>2-Year Graduate Route Post-Study Visa:</strong> Work or seek employment in the UK without needing company visa sponsorship during the two-year period.</li><li><strong>Lucrative NHS & STEM Opportunities:</strong> High demand across NHS healthcare trusts, financial technology, aerospace, and software engineering.</li><li><strong>Scholarships Up to £10,000+:</strong> Generous merit and commonwealth scholarships available across leading Russell Group institutions.</li></ul>',
                'stats' => [
                    ['val' => '1 Year', 'lbl' => 'Fast-Track Master’s'],
                    ['val' => '2 Years', 'lbl' => 'Graduate Visa (PSW)'],
                    ['val' => 'NHS Direct', 'lbl' => 'Healthcare Sponsorships'],
                    ['val' => '20 Hrs/Wk', 'lbl' => 'Term-Time Work'],
                ],
                'features' => [
                    ['title' => 'Time & Cost-Efficient 1-Year Master’s', 'desc' => 'Graduate a full year earlier than in the US or Australia, cutting tuition and living expenses in half.'],
                    ['title' => '2-Year Post-Study Graduate Route Visa', 'desc' => 'Work full-time across London and the UK without requiring company sponsorship during the initial 2 years.'],
                    ['title' => 'NHS Healthcare & STEM Direct Sponsorships', 'desc' => 'Exceptional recruitment channels and tier-2 sponsorship for nurses, allied health workers, and engineers.'],
                ],
                'popular_courses' => ['1-Year MSc & MBA', 'NHS Nursing & Healthcare', 'Fintech & Investment Banking', 'Cybersecurity & Cloud', 'Law & Commercial Mgmt', 'Artificial Intelligence'],
                'requirements' => 'Minimum 55%-65% in Bachelor\'s, IELTS 6.0–6.5 (or waiver based on 70%+ in Class 12 English), CAS letter from university, 28-day maintenance funds.',
                'living_cost' => '£9,207 (£1,023/mo outside London) or £12,006 (£1,334/mo inside London)',
                'post_study_work' => '2-Year Graduate Route visa (3 years for PhD graduates)',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Tajikistan',
                'slug' => 'tajikistan',
                'country_code' => 'TJ',
                'flag' => '🇹🇯',
                'tab_badge' => 'Affordable MBBS',
                'hero_badge' => 'ENGLISH-MEDIUM 5+1 MBBS',
                'eyebrow' => 'Central Asia’s Affordable Medical Hub',
                'title' => 'Study in Tajikistan — Affordable English-Medium MBBS (5+1 Years)',
                'image' => 'images/dest-tajikistan.jpg',
                'banner_image' => 'images/dest-tajikistan.jpg',
                'blurb' => 'Studying in Tajikistan is becoming an attractive option for international students, particularly those aspiring to pursue medical education abroad. Tajikistan offers public and medical universities providing affordable MBBS (General Medicine 5+1 years) in English with clinical hospital exposure.',
                'description' => '<p>Studying in Tajikistan is becoming an attractive option for many international students, particularly those aspiring to pursue medical education abroad. Tajikistan is a country located in Central Asia, known for its beautiful mountainous landscapes, cultural heritage and developing educational sector. It offers various higher educational institutions, including public universities and medical universities, providing opportunities for international students to pursue higher education in different academic fields. Among these, MBBS (Bachelor of Medicine and Bachelor of Surgery) is one of the most popular choices among Indian students.</p>

<p>Tajikistan has emerged as a destination for Indian students looking for affordable international medical education. Its medical universities offer opportunities to study medicine in English, along with practical clinical exposure in healthcare institutions. The availability of international student programmes, comparatively affordable living expenses and a multicultural learning environment makes Tajikistan an option worth considering for students planning to pursue their medical careers abroad.</p>

<h3>General Medicine (MBBS) Course Structure: 5 Years + 1 Year Internship</h3>
<p>If you are planning to pursue MBBS abroad, Tajikistan can be one of the options to explore. Medical universities in Tajikistan offer General Medicine programmes, with a typical course structure of five years of academic education followed by one year of compulsory internship, subject to the university and applicable regulations. Students study subjects such as Anatomy, Physiology, Biochemistry, Pathology, Pharmacology, Medicine and Surgery, along with practical clinical training.</p>

<h3>MBBS in Tajikistan Compared with India</h3>
<p>In India, the MBBS programme generally consists of 4.5 years of academic education followed by one year of compulsory internship, making it a total of 5.5 years. In Tajikistan, the commonly followed structure is approximately five years of academic study and one year of internship, making it around six years. While the academic structure and admission procedures differ, both pathways aim to prepare students for professional medical careers. Indian students planning to return to India must ensure that their chosen foreign medical qualification meets the requirements specified by the National Medical Commission (NMC), including the total course duration, medium of instruction and internship criteria.</p>

<h3>Affordable Fee Structure vs Indian Private Colleges</h3>
<p>One of the major advantages of studying MBBS in Tajikistan is its comparatively affordable fee structure. In India, tuition fees at some of the highest-priced private and deemed medical colleges can reach approximately ₹26 lakh per year, excluding additional expenses. Tajikistan offers a more economical alternative for medical education, making it an attractive option for Indian students.</p>

<h3>Overview of Key Advantages in Tajikistan</h3>
<ul>
  <li><strong>Affordable Education:</strong> Tajikistan offers comparatively affordable medical education and living expenses compared with several other international destinations.</li>
  <li><strong>English-Medium Education:</strong> Selected medical universities offer English-medium programmes for international students.</li>
  <li><strong>Clinical Training:</strong> Students receive practical exposure through clinical training and hospital-based learning.</li>
  <li><strong>International Exposure:</strong> Students interact with peers from different countries and experience a multicultural academic environment.</li>
  <li><strong>Recognised Qualifications:</strong> Students should verify the university\'s eligibility under applicable medical education and licensing requirements before admission.</li>
  <li><strong>Career Opportunities:</strong> Graduates can explore further licensing and medical practice opportunities, subject to the regulations of the country where they intend to work.</li>
</ul>

<h3>Eligibility Criteria</h3>
<ul>
  <li>Completed 10+2 (Plus Two Science) with Physics, Chemistry, Biology and English with minimum 50% aggregate.</li>
  <li>Qualified NEET-UG score as mandated by the National Medical Commission (NMC) for Indian students.</li>
  <li>Minimum age of 17 years as of 31st December of the admission year.</li>
  <li>Valid Indian Passport with minimum 18 months validity.</li>
  <li>Medical fitness certificate and negative HIV / infectious disease report.</li>
</ul>',
                'stats' => [
                    ['val' => '5 + 1 Yrs', 'lbl' => 'MBBS + Internship'],
                    ['val' => '₹3.5L–₹4.5L', 'lbl' => 'Tuition / Year'],
                    ['val' => 'NMC Aligned', 'lbl' => 'Indian Medical Board'],
                    ['val' => '100% English', 'lbl' => 'Medium of Instruction'],
                ],
                'features' => [
                    ['title' => 'Affordable Medical Education', 'desc' => 'Tajikistan offers comparatively affordable medical education and living expenses compared with several other international destinations.'],
                    ['title' => 'English-Medium Education', 'desc' => 'Selected medical universities offer English-medium programmes for international students with clinical hospital exposure.'],
                    ['title' => 'Clinical Hospital Training', 'desc' => 'Students receive practical exposure through clinical training and hospital-based learning across major disciplines.'],
                    ['title' => 'Recognised Global Qualifications', 'desc' => 'Curriculum aligned with WHO, NMC guidelines, and international licensing examination prerequisites.'],
                ],
                'popular_courses' => ['MBBS / MD (General Medicine - 5+1 Yrs)', 'Dental Surgery (BDS)', 'Pharmacy (B.Pharm)', 'Pediatric Medicine', 'Public Health & Epidemiology'],
                'requirements' => 'Completed Plus Two (Science) with 50%+ in Physics, Chemistry, Biology; qualified NEET-UG as mandated by NMC; valid passport; medical fitness certificate.',
                'living_cost' => '$150 – $250 / month (covers government hostel accommodation, Indian mess food, and local transit)',
                'post_study_work' => '1-Year compulsory hospital clinical internship, eligible to sit for NEXT/FMGE and international licensing exams (PLAB, USMLE)',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Canada',
                'slug' => 'canada',
                'country_code' => 'CA',
                'flag' => '🇨🇦',
                'tab_badge' => '3-Yr PGWP',
                'hero_badge' => 'UP TO 3-YR PGWP',
                'eyebrow' => 'Top Global Immigration & Career Pathways',
                'title' => 'Study in Canada — Renowned Universities & Clear PR Pathways',
                'image' => 'images/dest-canada.jpg',
                'banner_image' => 'images/dest-canada.jpg',
                'blurb' => 'World-renowned for top-ranking research universities, safe multicultural communities, and progressive post-study work regulations. International graduates can gain up to a 3-year Open Work Permit (PGWP) and leverage Canadian education for permanent residency.',
                'description' => '<p>Canada stands as one of the world\'s most welcoming nations for international students. Combining cutting-edge education at U15 research universities and renowned colleges with transparent, points-based permanent residency pathways, Canada provides a direct route from student life to permanent settlement.</p><h3>Why Study in Canada?</h3><ul><li><strong>Up to 3-Year Post-Graduation Work Permit (PGWP):</strong> Gain unrestricted Canadian work experience upon completing a 2-year degree or diploma program.</li><li><strong>Paid Co-op & Internship Integrations:</strong> Alternate between academic terms and full-time paid Canadian work placements directly tied to your field of study.</li><li><strong>Spousal Open Work Visa:</strong> Eligible graduate students can bring spouses on full-time open work permits, allowing both partners to earn in Canada.</li><li><strong>Express Entry & Provincial Nominee Program (PNP) Advantage:</strong> Canadian educational credentials grant substantial CRS points toward Canadian Permanent Residence.</li></ul>',
                'stats' => [
                    ['val' => 'Up to 3 Yrs', 'lbl' => 'PGWP Work Permit'],
                    ['val' => 'Open Work', 'lbl' => 'Spousal Work Rights'],
                    ['val' => 'Bonus CRS', 'lbl' => 'Express Entry & PNP'],
                    ['val' => '20 Hrs/Wk', 'lbl' => 'Off-Campus Work'],
                ],
                'features' => [
                    ['title' => 'Post-Graduation Work Permit (PGWP)', 'desc' => 'Qualify for up to 3 years of open, unrestricted Canadian work experience upon graduation.'],
                    ['title' => 'Paid Co-op & Internship Terms', 'desc' => 'Gain Canadian industry work experience while earning a competitive student wage during your studies.'],
                    ['title' => 'Spousal Open Work Permit & Direct PR', 'desc' => 'Your spouse can work full-time in Canada, while your degree grants significant CRS bonus points for permanent residency.'],
                ],
                'popular_courses' => ['Software Engineering', 'Healthcare & Practical Nursing', 'Project Management', 'Supply Chain & Logistics', 'Data Analytics & Cloud', 'Business Administration'],
                'requirements' => 'Provincial Attestation Letter (PAL), minimum 55%-65% in previous qualification, IELTS 6.0-6.5 overall (SDS route), GIC of CAD $20,635 for living cost proof.',
                'living_cost' => 'CAD $1,500 – $1,800 / month (covers accommodation, transit, groceries, and utilities)',
                'post_study_work' => 'Up to 3 Years Post-Graduation Work Permit (PGWP)',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'New Zealand',
                'slug' => 'new-zealand',
                'country_code' => 'NZ',
                'flag' => '🇳🇿',
                'tab_badge' => 'Green List PR',
                'hero_badge' => 'GREEN LIST FAST TRACK',
                'eyebrow' => 'Unmatched Living Standard & Fast-Track PR',
                'title' => 'Study in New Zealand — Scenic Living & Green List Residence',
                'image' => 'images/dest-nz.jpg',
                'banner_image' => 'images/dest-nz.jpg',
                'blurb' => 'Combine top 3% world-ranked universities with an unmatched quality of life. New Zealand’s Green List immigration framework fast-tracks direct permanent residency for in-demand roles in IT, construction, engineering, and healthcare.',
                'description' => '<p>Ranked consistently among the world\'s most peaceful and corruption-free countries, New Zealand offers a welcoming, forward-thinking educational environment. All eight of New Zealand\'s state universities rank in the top 3% globally (QS World Rankings), and its innovative Green List immigration framework provides clear, guaranteed fast-track residence pathways for international graduates.</p><h3>Why Choose New Zealand?</h3><ul><li><strong>Green List Direct-to-Residence Pathway:</strong> Fast-track permanent residency for graduates in engineering, construction, IT, nursing, and medicine.</li><li><strong>Up to 3-Year Post-Study Open Work Visa:</strong> Unrestricted employment rights across Auckland, Christchurch, Wellington, and beyond.</li><li><strong>Unsurpassed Safety & Quality of Life:</strong> Top-tier global safety index, pristine natural environment, and warm multicultural campus communities.</li><li><strong>Family & Partner Benefits:</strong> Eligible post-graduate students can bring spouses on full work visas, while dependent children study tuition-free as domestic students.</li></ul>',
                'stats' => [
                    ['val' => 'Green List', 'lbl' => 'Direct to Residence'],
                    ['val' => 'Up to 3 Yrs', 'lbl' => 'Post-Study Work Visa'],
                    ['val' => 'Top 10', 'lbl' => 'Global Quality of Life'],
                    ['val' => 'NZ$23.15/Hr', 'lbl' => 'High Min Wage'],
                ],
                'features' => [
                    ['title' => 'Green List Fast-Track Permanent Residence', 'desc' => 'Graduates in eligible Tier 1 and Tier 2 high-demand occupations can apply directly for NZ residence upon job offer.'],
                    ['title' => 'Up to 3-Year Open Post-Study Work Visa', 'desc' => 'Enjoy unrestricted employment rights across Auckland, Wellington, and Christchurch after completing your degree.'],
                    ['title' => 'Safe, Progressive & Welcoming Nation', 'desc' => 'Ranked among the safest countries in the world with high minimum wages, pristine nature, and family work rights.'],
                ],
                'popular_courses' => ['Civil & Structural Eng.', 'Cloud & Software Dev', 'Nursing & Public Health', 'Hospitality & Tourism', 'Agri-Technology & Environmental Science'],
                'requirements' => 'Minimum 55%-65% in previous qualification, IELTS 6.0–6.5, Offer of Place from NZQA-approved institution, NZ$20,000/year living cost proof via FTS.',
                'living_cost' => 'NZ$1,600 – NZ$1,900 / month (covers accommodation, meals, transport, and utilities)',
                'post_study_work' => 'Up to 3 Years Post-Study Work Visa (PSWV)',
                'order' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($destinations as $dest) {
            Destination::updateOrCreate(['slug' => $dest['slug']], $dest);
        }
    }
}
