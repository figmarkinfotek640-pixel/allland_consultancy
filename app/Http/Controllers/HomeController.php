<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Course;
use App\Models\Event;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::active()->take(6)->get();
        $events = Event::active()->take(6)->get();
        $blogs = Blog::published()->take(3)->get();
        $featuredCourses = Course::featured()->take(4)->get();

        // Country destination data for interactive tabs
        $countries = [
            'DE' => [
                'code' => 'DE',
                'name' => 'Germany',
                'flag' => '🇩🇪',
                'tabBadge' => 'Zero Tuition',
                'heroBadge' => 'ZERO TUITION FEES',
                'eyebrow' => 'Europe’s Premier Tech & Engineering Hub',
                'title' => 'Study in Germany — World-Class Education with €0 Tuition',
                'image' => asset('images/dest-germany.jpg'),
                'blurb' => 'Gain internationally recognized degrees from prestigious TU9 and state universities without paying tuition fees. Germany offers unmatched engineering excellence, high living standards, and clear post-graduation career opportunities across Europe.',
                'stats' => [
                    ['val' => '€0 / Year', 'lbl' => 'Public Tuition'],
                    ['val' => '18 Months', 'lbl' => 'Job Search Visa'],
                    ['val' => '21–24 Mo', 'lbl' => 'Fast PR Pathway'],
                ],
                'features' => [
                    ['title' => 'Tuition-Free Higher Education', 'desc' => 'Over 400 state-funded universities offer English-taught Bachelor’s & Master’s programs with zero tuition fees.'],
                    ['title' => 'Generous 18-Month Job Search Visa', 'desc' => 'Graduates receive 1.5 years to secure employment in Europe’s strongest economy with full work rights.'],
                    ['title' => 'Fast-Track PR Settlement in 21–24 Months', 'desc' => 'Secure permanent residency in under two years of qualified employment after graduation.'],
                ],
                'tags' => ['Automotive & Mechanical', 'Computer Science & AI', 'Renewable Energy', 'Business Analytics', 'DAAD Scholarships'],
            ],
            'CA' => [
                'code' => 'CA',
                'name' => 'Canada',
                'flag' => '🇨🇦',
                'tabBadge' => '3-Yr PGWP',
                'heroBadge' => 'UP TO 3-YR PGWP',
                'eyebrow' => 'Top Global Immigration & Career Pathways',
                'title' => 'Study in Canada — Renowned Universities & Clear PR Pathways',
                'image' => asset('images/dest-canada.jpg'),
                'blurb' => 'World-renowned for top-ranking research universities, safe multicultural communities, and progressive post-study work regulations. International graduates can gain up to a 3-year Open Work Permit (PGWP) and leverage Canadian education for permanent residency.',
                'stats' => [
                    ['val' => 'Up to 3 Yrs', 'lbl' => 'PGWP Work Permit'],
                    ['val' => 'Open Work', 'lbl' => 'Spousal Work Rights'],
                    ['val' => 'Bonus Points', 'lbl' => 'Express Entry & PNP'],
                ],
                'features' => [
                    ['title' => 'Post-Graduation Work Permit (PGWP)', 'desc' => 'Qualify for up to 3 years of open, unrestricted Canadian work experience upon graduation.'],
                    ['title' => 'Paid Co-op & Internship Terms', 'desc' => 'Gain Canadian industry work experience while earning a competitive student wage during your studies.'],
                    ['title' => 'Spousal Open Work Permit & Direct PR', 'desc' => 'Your spouse can work full-time in Canada, while your degree grants significant CRS bonus points for permanent residency.'],
                ],
                'tags' => ['Software Engineering', 'Healthcare & Nursing', 'Project Management', 'Supply Chain Logistics', 'Business Administration'],
            ],
            'UK' => [
                'code' => 'UK',
                'name' => 'United Kingdom',
                'flag' => '🇬🇧',
                'tabBadge' => '1-Yr Master’s',
                'heroBadge' => '1-YEAR FAST MASTERS',
                'eyebrow' => 'Venerable Russell Group Academic Heritage',
                'title' => 'Study in the UK — 1-Year Fast Master’s & 2-Year Graduate Visa',
                'image' => asset('images/dest-uk.jpg'),
                'blurb' => 'Home to historic Russell Group institutions and innovative modern universities. Complete your Master’s degree in just 12 months, saving a full year of living expenses while qualifying for a 2-year post-study Graduate Route work visa.',
                'stats' => [
                    ['val' => '1 Year', 'lbl' => 'Fast-Track Master’s'],
                    ['val' => '2 Years', 'lbl' => 'Graduate Visa (PSW)'],
                    ['val' => 'NHS Direct', 'lbl' => 'Healthcare Sponsorships'],
                ],
                'features' => [
                    ['title' => 'Time & Cost-Efficient 1-Year Master’s', 'desc' => 'Graduate a full year earlier than in the US or Australia, cutting tuition and living expenses in half.'],
                    ['title' => '2-Year Post-Study Graduate Route Visa', 'desc' => 'Work full-time across London and the UK without requiring company sponsorship during the initial 2 years.'],
                    ['title' => 'NHS Healthcare & STEM Direct Sponsorships', 'desc' => 'Exceptional recruitment channels and tier-2 sponsorship for nurses, allied health workers, and engineers.'],
                ],
                'tags' => ['1-Year MSc & MBA', 'NHS Nursing & Healthcare', 'Fintech & Investment Banking', 'Cybersecurity & Cloud', 'Law & Commercial Mgmt'],
            ],
            'NZ' => [
                'code' => 'NZ',
                'name' => 'New Zealand',
                'flag' => '🇳🇿',
                'tabBadge' => 'Green List PR',
                'heroBadge' => 'GREEN LIST FAST TRACK',
                'eyebrow' => 'Unmatched Living Standard & Fast-Track PR',
                'title' => 'Study in New Zealand — Scenic Living & Green List Residence',
                'image' => asset('images/dest-nz.jpg'),
                'blurb' => 'Combine top 3% world-ranked universities with an unmatched quality of life. New Zealand’s Green List immigration framework fast-tracks direct permanent residency for in-demand roles in IT, construction, engineering, and healthcare.',
                'stats' => [
                    ['val' => 'Green List', 'lbl' => 'Direct to Residence'],
                    ['val' => 'Up to 3 Yrs', 'lbl' => 'Post-Study Work Visa'],
                    ['val' => 'Top 10', 'lbl' => 'Global Quality of Life'],
                ],
                'features' => [
                    ['title' => 'Green List Fast-Track Permanent Residence', 'desc' => 'Graduates in eligible Tier 1 and Tier 2 high-demand occupations can apply directly for NZ residence upon job offer.'],
                    ['title' => 'Up to 3-Year Open Post-Study Work Visa', 'desc' => 'Enjoy unrestricted employment rights across Auckland, Wellington, and Christchurch after completing your degree.'],
                    ['title' => 'Safe, Progressive & Welcoming Nation', 'desc' => 'Ranked among the safest countries in the world with high minimum wages, pristine nature, and family work rights.'],
                ],
                'tags' => ['Civil & Structural Eng.', 'Cloud & Software Dev', 'Nursing & Public Health', 'Hospitality & Tourism', 'Agri-Technology'],
            ],
        ];

        $selectedCountry = $request->query('dest', 'DE');
        if (!array_key_exists($selectedCountry, $countries)) {
            $selectedCountry = 'DE';
        }
        $activeCountry = $countries[$selectedCountry];

        return view('home', compact('services', 'events', 'blogs', 'featuredCourses', 'countries', 'activeCountry', 'selectedCountry'));
    }
}

