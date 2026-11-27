<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Get configured details for all international placement sectors.
     */
    protected function getPlacementData(): array
    {
        return [
            'germany' => [
                'key' => 'germany',
                'slug' => 'germany-placement',
                'route_name' => 'placement.germany',
                'country_code' => 'DE',
                'country_name' => 'Germany',
                'flag' => '🇩🇪',
                'title' => 'Placement in Germany',
                'meta_title' => 'Nursing Placement in Germany | Job Opportunities - All Land Consultancy',
                'meta_description' => 'Comprehensive nursing placement assistance in Germany. Average salary €44,000/yr, German Nursing Association (Deutscher Pflegerat) registration, adaptation program support.',
                'hero_image' => 'images/dest-germany.jpg',
                'badge' => 'European Healthcare Pathways',
                'lead' => 'Advance your healthcare career with registered nursing adaptation, prestigious hospital contracts, and comprehensive settlement support in Germany.',
                'stats' => [
                    ['label' => 'Average Salary', 'value' => '€44,000 / yr', 'note' => 'Plus overtime & night allowances'],
                    ['label' => 'Standard Work Week', 'value' => 'Max 48 Hours', 'note' => 'Strict labor law protections'],
                    ['label' => 'Paid Annual Leave', 'value' => '20 - 30 Days', 'note' => 'Plus statutory public holidays'],
                    ['label' => 'Language Benchmark', 'value' => 'B2 German', 'note' => 'Goethe / telc certification'],
                ],
                'intro_paragraphs' => [
                    'Germany is located in central Europe and is globally renowned for its advanced, well-funded healthcare system. As a nurse in Germany, understanding local nursing practices and hospital systems is essential. The healthcare system operates on a solid social health insurance model where individuals contribute via statutory employment, ensuring universal healthcare coverage funded through combined public and private funding.',
                    'To practice as a registered nurse in Germany, candidates must be recognized by the German Nursing Association (Deutscher Pflegerat) and complete the state adaptation qualification (Anerkennung). German healthcare offers diverse paths including acute hospital care, specialized intensive care, surgical theaters, and geriatric rehabilitation, where nurses are respected and valued as pivotal decision-makers in clinical teams.',
                    'Indian nurses are held in high esteem across German clinics for their clinical dedication and technical skills. Every year, thousands of international nurses migrate to Germany to achieve full registration. The German government actively supports foreign-educated healthcare workers through preparatory grants, subsidized adaptation courses, and direct employer integration programs.'
                ],
                'advantages' => [
                    [
                        'title' => 'Competitive Salaries',
                        'desc' => 'Nurses in Germany receive competitive, legally protected remuneration that is among the highest in Europe. Statistics indicate an average salary of around €44,000 per year, scaling with postgraduate experience, specialized certifications, and shift allowances.',
                        'icon' => '💶'
                    ],
                    [
                        'title' => 'Excellent Working Conditions',
                        'desc' => 'German hospitals are equipped with cutting-edge medical technology, modern ward infrastructures, and ergonomic patient-handling equipment. Nurses work in collaborative multidisciplinary environments with continuous hospital-funded training.',
                        'icon' => '🏥'
                    ],
                    [
                        'title' => 'Generous Benefits & Social Security',
                        'desc' => 'Enjoy comprehensive statutory social protections: complete health insurance coverage for you and your dependents, statutory retirement pensions, paid sick leave, and generous parental benefits.',
                        'icon' => '🛡️'
                    ],
                    [
                        'title' => 'Opportunities for Professional Growth',
                        'desc' => 'Wide avenues for career advancement including specialization in ICU, Oncology, Pediatrics, OT Management, Nurse Leadership, and university-level healthcare research or academic instruction.',
                        'icon' => '📈'
                    ],
                    [
                        'title' => 'Healthy Work-Life Balance',
                        'desc' => 'German work culture places paramount emphasis on well-being, strictly regulating maximum weekly hours to 48 hours and guaranteeing a minimum of 20 to 30 paid vacation days every year.',
                        'icon' => '⚖️'
                    ],
                ],
                'criteria' => [
                    [
                        'category' => 'Academic Qualification',
                        'title' => 'GNM Diploma or BSc / MSc Degree',
                        'detail' => 'GNM Diploma or BSc / MSc Degree in Nursing from a recognized institution with complete official academic transcripts.',
                        'icon' => '🎓',
                        'badge' => 'Essential Degree'
                    ],
                    [
                        'category' => 'Language Benchmark',
                        'title' => 'German Language Proficiency (B2 Level)',
                        'detail' => 'German language proficiency certificate at B2 level (Goethe-Institut, telc, or ÖSD) for nursing adaptation (Anerkennung).',
                        'icon' => '🗣️',
                        'badge' => 'B2 Certified'
                    ],
                    [
                        'category' => 'Clinical Practice',
                        'title' => 'Clinical Nursing Experience',
                        'detail' => 'Minimum six months of verified clinical nursing experience in a recognized inpatient hospital environment.',
                        'icon' => '🩺',
                        'badge' => '6+ Months Exp'
                    ],
                    [
                        'category' => 'Council Registration',
                        'title' => 'Valid Nursing Registration License',
                        'detail' => 'Valid Nursing License / State Nursing Council Registration Certificate with active standing.',
                        'icon' => '📜',
                        'badge' => 'Active License'
                    ],
                    [
                        'category' => 'Medical Clearance',
                        'title' => 'Medical Fitness Certificate',
                        'detail' => 'Medical fitness certificate from an authorized medical examiner confirming suitability for hospital ward responsibilities.',
                        'icon' => '🏥',
                        'badge' => 'Physically Fit'
                    ],
                    [
                        'category' => 'Background Check',
                        'title' => 'Police Clearance Certificate (PCC)',
                        'detail' => 'Clean Police Clearance Certificate (PCC) issued by Regional Passport Office for German employment visa endorsement.',
                        'icon' => '🛡️',
                        'badge' => 'RPO Clearance'
                    ],
                ],
                'roadmap' => [
                    [
                        'step' => '01',
                        'title' => 'Free Profile Evaluation & German Language Training',
                        'desc' => 'Assessment of nursing credentials, syllabus review, and enrollment in focused German language courses from A1 through B2.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Defizitbescheid (Deficit Assessment) & Translation',
                        'desc' => 'Official German sworn translation and submission of nursing credentials to the relevant state nursing council for the adaptation assessment letter.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'Hospital Interviews & Job Offer Contract',
                        'desc' => 'Direct video interviews with leading German hospital groups and care clinics with binding employment contracts and adaptation sponsorship.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Visa Application & Relocation Clearance',
                        'desc' => 'Fast-track visa processing under the Skilled Immigration Act (Fachkräfteeinwanderungsgesetz), flight ticketing, and pre-departure orientation.'
                    ],
                    [
                        'step' => '05',
                        'title' => 'Adaptation Course (Anerkennung) & Full Registration',
                        'desc' => 'Airport reception, initial accommodation, adaptation practical training in the hospital, and licensing as a full Registered Nurse (Pflegefachkraft).'
                    ]
                ],
                'whatsapp_text' => 'Hello All Land Consultancy, I am interested in Nursing Placement in Germany. Please guide me through eligibility and German B2 requirements.',
            ],

            'uk' => [
                'key' => 'uk',
                'slug' => 'uk-placement',
                'route_name' => 'placement.uk',
                'country_code' => 'GB',
                'country_name' => 'United Kingdom',
                'flag' => '🇬🇧',
                'title' => 'Placement in United Kingdom',
                'meta_title' => 'Nursing Jobs in UK | UK Placement Services - All Land Consultancy',
                'meta_description' => 'Official UK Nursing Placement with NHS Trust hospital sponsorships. Starting salary £24,910 - £30,615+, CBT & OSCE coaching, and Tier 2 / Skilled Worker Visa support.',
                'hero_image' => 'images/dest-uk.jpg',
                'badge' => 'NHS Trust Sponsorship Pathways',
                'lead' => 'Secure permanent nursing roles in the UK National Health Service (NHS) and leading private healthcare groups with full visa sponsorship, CBT coaching, and OSCE guidance.',
                'stats' => [
                    ['label' => 'Starting Band 5 Salary', 'value' => '£24,910 - £30,615', 'note' => 'Band 6 & 7 roles reach £45,000+'],
                    ['label' => 'English Benchmark', 'value' => 'OET B / IELTS 7.0', 'note' => 'Clubbed scores accepted per NMC rules'],
                    ['label' => 'Annual Leave Entitlement', 'value' => '27 Days + 8 Holidays', 'note' => 'Increases to 33 days after 10 years'],
                    ['label' => 'Visa Category', 'value' => 'Health & Care Visa', 'note' => 'Direct 5-year pathway to UK ILR / PR'],
                ],
                'intro_paragraphs' => [
                    'The United Kingdom (UK) is situated in northwestern Europe and comprises four nations: England, Scotland, Wales, and Northern Ireland. The National Health Service (NHS) is the world-renowned publicly funded healthcare system providing comprehensive medical care free at the point of delivery to all residents. Nurses form the backbone of the NHS, delivering compassionate care across emergency wards, specialized surgical units, clinics, and community health networks.',
                    'To work as a registered nurse in the UK, foreign-trained candidates must gain registration with the Nursing and Midwifery Council (NMC). This involves completing an eligibility assessment, clearing the Computer Based Test (CBT), and undertaking the Objective Structured Clinical Examination (OSCE) upon arriving in the UK. The UK healthcare sector offers unparalleled avenues for career progression into Nurse Practitioner, Clinical Nurse Specialist, and Ward Manager positions.',
                    'Indian healthcare professionals represent one of the largest and most respected demographics in the NHS. NHS Trusts actively recruit nurses by offering full Certificate of Sponsorship (CoS), reimbursement of visa fees, inbound flight tickets, initial furnished accommodation, and dedicated paid preparation for the OSCE licensing examination.'
                ],
                'advantages' => [
                    [
                        'title' => 'Competitive Salary & NHS Pay Bands',
                        'desc' => 'Nurses in the UK are fairly and transparently compensated under the NHS Agenda for Change pay scale, with starting salaries ranging from £24,910 to £30,615 per year (Band 5), advancing to over £45,000+ for experienced and charge nurses, plus London weighting allowances.',
                        'icon' => '💷'
                    ],
                    [
                        'title' => 'Guaranteed Job Security & Permanent Contracts',
                        'desc' => 'With consistent national demand for healthcare staffing, registered nurses enjoy exceptional job stability, permanent full-time positions, and rapid clearance under the UK Health & Care Worker Visa.',
                        'icon' => '🔒'
                    ],
                    [
                        'title' => 'Structured Professional Development',
                        'desc' => 'NMC nurses receive dedicated preceptorship periods, funded post-graduate certificates, mentorship programs, and ongoing clinical training designed for rapid promotion to Band 6 and clinical leadership roles.',
                        'icon' => '🎓'
                    ],
                    [
                        'title' => 'Generous Holiday & Work Benefits',
                        'desc' => 'Receive 27 days of paid annual leave plus 8 bank holidays from day one, which rises to 29 days after five years and 33 days after ten years of NHS service.',
                        'icon' => '🏖️'
                    ],
                    [
                        'title' => 'World-Class NHS Pension Scheme',
                        'desc' => 'Automatic enrollment in the defined-benefit NHS Pension Scheme, providing guaranteed retirement income and comprehensive family life assurance protection.',
                        'icon' => '🏛️'
                    ],
                    [
                        'title' => 'Modern Clinical Facilities',
                        'desc' => 'Work in state-of-the-art hospitals with cutting-edge surgical robotics, high-dependency units, digitized health record infrastructure, and rigorous patient safety protocols.',
                        'icon' => '🩺'
                    ],
                ],
                'criteria' => [
                    [
                        'category' => 'Nursing Degree',
                        'title' => 'GNM Diploma or BSc / MSc Degree',
                        'detail' => 'GNM Diploma or BSc/MSc degree in Nursing from an accredited institution with valid degree certificate and mark sheets.',
                        'icon' => '🎓',
                        'badge' => 'Accredited Degree'
                    ],
                    [
                        'category' => 'Council Registration',
                        'title' => 'State Nursing Council License',
                        'detail' => 'Valid registration certificate from State Nursing Council with active status and good standing record.',
                        'icon' => '📜',
                        'badge' => 'Active RN'
                    ],
                    [
                        'category' => 'English Proficiency',
                        'title' => 'OET Grade B or IELTS 7.0',
                        'detail' => 'English Language Proficiency: OET with minimum Grade B (or IELTS Academic Overall 7.0) accepted by the NMC UK.',
                        'icon' => '🇬🇧',
                        'badge' => 'OET / IELTS'
                    ],
                    [
                        'category' => 'NMC Assessment',
                        'title' => 'NMC CBT Exam Clearance',
                        'detail' => 'NMC Test of Competence Part 1: CBT (Computer Based Test) clearance prior to UK Certificate of Sponsorship issuance.',
                        'icon' => '💻',
                        'badge' => 'NMC Part 1'
                    ],
                    [
                        'category' => 'Security Verification',
                        'title' => 'Police Clearance Certificate (PCC)',
                        'detail' => 'Clean Police Clearance Certificate (PCC) issued by Regional Passport Office for UK Health and Care Worker visa.',
                        'icon' => '🛡️',
                        'badge' => 'RPO Clearance'
                    ],
                    [
                        'category' => 'Health & Background',
                        'title' => 'Occupational Health & References',
                        'detail' => 'Satisfactory occupational health assessment, immunisation records, and verified clinical references from past employers.',
                        'icon' => '🏥',
                        'badge' => 'NHS Approved'
                    ],
                ],
                'roadmap' => [
                    [
                        'step' => '01',
                        'title' => 'OET / IELTS Coaching & Clearing',
                        'desc' => 'Focused exam preparation to achieve NMC required scores in Reading, Listening, Speaking, and Writing.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'NMC Portal Registration & CBT Clearance',
                        'desc' => 'Submission of credentials to the NMC UK portal, eligibility verification, and scheduling the CBT examination in India.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'NHS Trust Interview & Certificate of Sponsorship (CoS)',
                        'desc' => 'Official panel interviews with UK NHS Trusts, issuance of unconditional offer letter and government Certificate of Sponsorship (CoS).'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Health & Care Visa & Flight to the UK',
                        'desc' => 'Expedited UK visa stamping with lower visa fees and NHS surcharge exemption, flight booking, and relocation briefing.'
                    ],
                    [
                        'step' => '05',
                        'title' => 'OSCE Coaching & NMC PIN Registration',
                        'desc' => 'Trust-sponsored OSCE practical training, passing the exam, receiving full NMC PIN, and transitioning to Band 5 Registered Nurse.'
                    ]
                ],
                'whatsapp_text' => 'Hello All Land Consultancy, I am interested in NHS Nursing Placement in the UK. Please guide me regarding CBT, OET, and Trust sponsorship.',
            ],

            'saudi-arabia' => [
                'key' => 'saudi-arabia',
                'slug' => 'saudi-arabia-placement',
                'route_name' => 'placement.saudi-arabia',
                'country_code' => 'SA',
                'country_name' => 'Saudi Arabia & Gulf',
                'flag' => '🇸🇦',
                'title' => 'Placement in Saudi Arabia & Gulf',
                'meta_title' => 'Healthcare & Nursing Jobs in Saudi Arabia & Gulf | All Land Consultancy',
                'meta_description' => 'Tax-free nursing and allied health placements across Saudi Arabia Ministry of Health (MOH), DHA Dubai, HAAD Abu Dhabi, with DataFlow verification and Prometric licensing.',
                'hero_image' => 'images/banner-02.jpg',
                'badge' => 'MOH & GCC Accredited Placements',
                'lead' => 'Secure lucrative tax-free hospital positions across Saudi Arabia and the GCC with full accommodation, annual return flight tickets, DataFlow verification, and Prometric exam support.',
                'stats' => [
                    ['label' => 'Income Tax Rate', 'value' => '0% Tax-Free', 'note' => 'Take home 100% of your earnings'],
                    ['label' => 'Housing & Transport', 'value' => '100% Provided', 'note' => 'Furnished living quarters or allowance'],
                    ['label' => 'Annual Leave Flights', 'value' => 'Free Return Tickets', 'note' => 'Annual paid leave to India'],
                    ['label' => 'Credential Check', 'value' => 'DataFlow PSV', 'note' => 'End-to-end document verification'],
                ],
                'intro_paragraphs' => [
                    'The Kingdom of Saudi Arabia and the broader Gulf Cooperation Council (GCC) countries — including UAE, Qatar, Kuwait, and Oman — maintain some of the most dynamic, state-of-the-art healthcare infrastructures in the Middle East. With visionary initiatives like Saudi Vision 2030, government Ministry of Health (MOH) medical clusters, military hospitals, and top private healthcare chains are continuously expanding their clinical teams.',
                    'Working in the Gulf allows Indian nursing professionals and medical technologists to gain prestigious international hospital experience while accumulating significant tax-free savings. Professional practice requires Primary Source Verification (PSV) through the DataFlow Group, followed by licensing through statutory healthcare councils like the Saudi Commission for Health Specialties (SCFHS / Mumaris+), Dubai Health Authority (DHA), or UAE Department of Health (DOH/HAAD).',
                    'All Land Consultancy provides end-to-end guidance for Gulf placements: from complete DataFlow verification and Prometric test booking to Ministry interview delegations, contract vetting, visa medical stamping, and seamless arrival in the Gulf.'
                ],
                'advantages' => [
                    [
                        'title' => '100% Tax-Free Salaries & Savings',
                        'desc' => 'Keep everything you earn. Remuneration in the Gulf is completely exempt from income tax, complemented by duty allowances, annual increments, and substantial End of Service Gratuity (ESB).',
                        'icon' => '💰'
                    ],
                    [
                        'title' => 'Free Furnished Accommodation & Utilities',
                        'desc' => 'Hospitals provide modern, fully furnished bachelor or family quarters with high-speed internet, air conditioning, and recreational facilities, or generous cash housing allowances.',
                        'icon' => '🏢'
                    ],
                    [
                        'title' => 'Annual Paid Leave with Return Flights',
                        'desc' => 'Enjoy 30 to 45 days of paid annual vacation each year, complete with complimentary round-trip flight tickets between your Gulf base and India.',
                        'icon' => '✈️'
                    ],
                    [
                        'title' => 'World-Class Healthcare Technology',
                        'desc' => 'Practice in internationally accredited hospitals (JCI, CBAHI) featuring advanced robotic surgery centers, neonatal intensive care units, and cutting-edge diagnostic suites.',
                        'icon' => '🏥'
                    ],
                    [
                        'title' => 'Complete Medical Insurance & Health Care',
                        'desc' => 'Full health and emergency dental coverage provided by the employing medical institution for staff and eligible family members.',
                        'icon' => '🛡️'
                    ],
                    [
                        'title' => 'Rapid Deployment & Structured Onboarding',
                        'desc' => 'With prompt DataFlow clearance and computerized Prometric exams, qualified candidates can transition from application to hospital reporting within 60 to 90 days.',
                        'icon' => '⚡'
                    ],
                ],
                'criteria' => [
                    [
                        'category' => 'Degree Qualification',
                        'title' => 'GNM Diploma or BSc / MSc Degree',
                        'detail' => 'GNM Diploma or BSc / MSc Degree in Nursing / Allied Health Sciences from an authorized university.',
                        'icon' => '🎓',
                        'badge' => 'Recognized Degree'
                    ],
                    [
                        'category' => 'Council Registration',
                        'title' => 'Valid State Nursing License',
                        'detail' => 'Valid registration license with the State Nursing / Medical Council with current active validity.',
                        'icon' => '📜',
                        'badge' => 'Active Status'
                    ],
                    [
                        'category' => 'Clinical Experience',
                        'title' => 'Bedside Hospital Experience',
                        'detail' => 'Minimum two years of documented clinical experience in a 100+ bed tertiary or multispecialty hospital.',
                        'icon' => '🩺',
                        'badge' => '2+ Years Exp'
                    ],
                    [
                        'category' => 'Primary Source Verification',
                        'title' => 'DataFlow PSV Report Clearance',
                        'detail' => 'DataFlow Primary Source Verification (PSV) report clearance for degrees, council registrations, and experience credentials.',
                        'icon' => '🔍',
                        'badge' => 'DataFlow PSV'
                    ],
                    [
                        'category' => 'Licensing Exam',
                        'title' => 'Prometric Exam Scorecard',
                        'detail' => 'Prometric exam scorecard clearance (SCFHS / DHA / HAAD / OMSB per target Gulf healthcare authority).',
                        'icon' => '📝',
                        'badge' => 'Prometric Pass'
                    ],
                    [
                        'category' => 'Medical & Legal',
                        'title' => 'Medical Fitness & Police Clearance',
                        'detail' => 'GAMCA approved medical fitness certificate and clean Police Clearance Certificate (PCC) for Gulf visa stamping.',
                        'icon' => '🛡️',
                        'badge' => 'GAMCA & PCC'
                    ],
                ],
                'roadmap' => [
                    [
                        'step' => '01',
                        'title' => 'Document Audit & DataFlow PSV Submission',
                        'desc' => 'Verification of nursing degree, transcripts, and experience certificates through DataFlow Primary Source Verification.'
                    ],
                    [
                        'step' => '02',
                        'title' => 'Prometric Licensing Exam Booking & Preparation',
                        'desc' => 'Registration on Mumaris+ / DHA portal, scheduling Prometric computerized test, and mock test preparation.'
                    ],
                    [
                        'step' => '03',
                        'title' => 'MOH & Premier Hospital Interviews',
                        'desc' => 'Direct interview participation with visiting Saudi Ministry of Health delegations or top private hospital networks.'
                    ],
                    [
                        'step' => '04',
                        'title' => 'Visa Endorsement & GAMCA Medical Test',
                        'desc' => 'GAMCA medical examination clearance, embassy document attestation, and fast-track employment visa stamping.'
                    ],
                    [
                        'step' => '05',
                        'title' => 'Airport Reception & Hospital Induction',
                        'desc' => 'Meet and assist at destination airport, transport to hospital accommodation, and HR orientation.'
                    ]
                ],
                'whatsapp_text' => 'Hello All Land Consultancy, I am interested in Healthcare Placement in Saudi Arabia & Gulf. Please guide me regarding DataFlow and Prometric requirements.',
            ],
        ];
    }

    /**
     * Display Germany placement detail page.
     */
    public function germany()
    {
        return $this->renderPlacement('germany');
    }

    /**
     * Display UK placement detail page.
     */
    public function uk()
    {
        return $this->renderPlacement('uk');
    }

    /**
     * Display Saudi Arabia & Gulf placement detail page.
     */
    public function saudiArabia()
    {
        return $this->renderPlacement('saudi-arabia');
    }

    /**
     * Render the placement country view with full context and navigation.
     */
    protected function renderPlacement(string $key)
    {
        $allData = $this->getPlacementData();

        if (!isset($allData[$key])) {
            abort(404, 'Placement destination not found.');
        }

        $placement = $allData[$key];
        $allPlacements = $allData;
        $allServices = Service::active()->get();

        return view('placements.show', compact('placement', 'allPlacements', 'allServices'));
    }
}
