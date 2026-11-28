<?php

namespace Database\Seeders;

use App\Models\InstagramReel;
use Illuminate\Database\Seeder;

class InstagramReelsSeeder extends Seeder
{
    public function run(): void
    {
        $reels = [
            [
                'title' => '🎓 Choosing the Right Course is the First Step Towards the Right Future!',
                'reel_url' => 'https://www.instagram.com/reel/DgNJX2bR5oy/',
                'description' => "Confused about which course to choose? Don't just follow trends - understand your interests, explore career opportunities, and make an informed decision with All-Land Consultancy!",
                'thumbnail' => 'images/reels/reel-1-choosing-course.jpg',
                'video_url' => null,
                'location_tag' => 'Career Guidance • All Land Desk',
                'likes_count' => '3.5K',
                'comments_count' => '240',
                'display_order' => 1,
                'status' => true,
            ],
            [
                'title' => '✨ All-Land Adoor Branch Inauguration!',
                'reel_url' => 'https://www.instagram.com/reel/Df9CngDR0FN/',
                'description' => "All-Land's 3rd branch inaugurated in Adoor by Hon. MLA Mr. C. V. Santhakumar! A new milestone turning your global education and travel dreams into reality.",
                'thumbnail' => 'images/reels/reel-2-adoor-inauguration.jpg',
                'video_url' => null,
                'location_tag' => '📍 Adoor Branch Launch',
                'likes_count' => '2.8K',
                'comments_count' => '185',
                'display_order' => 2,
                'status' => true,
            ],
            [
                'title' => '🇦🇹 Your Future Starts in Austria!',
                'reel_url' => 'https://www.instagram.com/reel/Df3s_r2RfD4/',
                'description' => "Dreaming of studying in Austria? Affordable course fees, European high-standard education, and international career opportunities in business, engineering, and healthcare!",
                'thumbnail' => 'images/reels/reel-3-austria-future.jpg',
                'video_url' => null,
                'location_tag' => 'Austria • European Admissions',
                'likes_count' => '1.9K',
                'comments_count' => '142',
                'display_order' => 3,
                'status' => true,
            ],
            [
                'title' => '🩺 Admissions Open for MBBS in Tajikistan!',
                'reel_url' => 'https://www.instagram.com/reel/Dfg51NdRihS/',
                'description' => "Dream of becoming a doctor? Secure your medical seat with affordable tuition fees, NMC/WHO approved universities, English medium instruction, and top-notch clinical exposure!",
                'thumbnail' => 'images/reels/reel-4-tajikistan-mbbs.jpg',
                'video_url' => null,
                'location_tag' => 'Tajikistan • Medical Desk',
                'likes_count' => '2.4K',
                'comments_count' => '168',
                'display_order' => 4,
                'status' => true,
            ],
            [
                'title' => '🇩🇪 Another Successful Ausbildung Journey in Germany! 🎓✈️',
                'reel_url' => 'https://www.instagram.com/reel/De_gMK8RwVM/',
                'description' => "Another successful Ausbildung journey through All Land Consultancy, Aluva. Turning global career aspirations into achievable milestones! Ready to start your German success story?",
                'thumbnail' => 'images/reels/reel-5-nurse-career.jpg',
                'video_url' => null,
                'location_tag' => 'Germany • Ausbildung Program',
                'likes_count' => '2.6K',
                'comments_count' => '134',
                'display_order' => 5,
                'status' => true,
            ],
            [
                'title' => '✈️ Airport Smiles: Proud Nursing Journey to Germany! 🇩🇪👩‍⚕️',
                'reel_url' => 'https://www.instagram.com/reel/DdN0ZedRCV_/',
                'description' => "Airport smiles… നാളെയുടെ proud moments ആകട്ടെ! Germanyയിലേക്ക് ഒരു യാത്ര, Nurse ആകാനുള്ള ഒരു വലിയ സ്വപ്നവുമായി… All-Land Chirikal!",
                'thumbnail' => 'images/reels/reel-6-student-success.jpg',
                'video_url' => null,
                'location_tag' => 'Cochin Airport • Germany Departure',
                'likes_count' => '3.1K',
                'comments_count' => '176',
                'display_order' => 6,
                'status' => true,
            ],
            [
                'title' => '🇩🇪 Germany & 🇦🇹 Austria: Your Degree, Your Future! 🎓✨',
                'reel_url' => 'https://www.instagram.com/reel/DdI8AAyxCjv/',
                'description' => "Bachelor’s & Master’s opportunities in Europe! Build your international career and turn your study abroad dream into reality. Germany or Austria — your journey starts here!",
                'thumbnail' => 'images/reels/reel-7-visa-grant.jpg',
                'video_url' => null,
                'location_tag' => 'Germany & Austria Admissions',
                'likes_count' => '1.8K',
                'comments_count' => '98',
                'display_order' => 7,
                'status' => true,
            ],
            [
                'title' => '🥹✈️ This Is What a Dream Looks Like: Airport Send-off! 🇩🇪❤️',
                'reel_url' => 'https://www.instagram.com/reel/DdG3QxKR1dH/',
                'description' => "ഒരു ദിവസം Germany പോകണമെന്ന് സ്വപ്നം കണ്ടു… ഇന്ന് അതേ സ്വപ്നവുമായി Airport-ൽ നിൽക്കുന്നു. The destination is Germany, but the real destination is a better future!",
                'thumbnail' => 'images/reels/reel-8-study-abroad.jpg',
                'video_url' => null,
                'location_tag' => 'International Airport • Send-off',
                'likes_count' => '4.5K',
                'comments_count' => '215',
                'display_order' => 8,
                'status' => true,
            ],
        ];

        // Deactivate old demo reels if any
        $activeUrls = array_column($reels, 'reel_url');
        InstagramReel::whereNotIn('reel_url', $activeUrls)->update(['status' => false]);

        foreach ($reels as $data) {
            InstagramReel::updateOrCreate(
                ['reel_url' => $data['reel_url']],
                $data
            );
        }
    }
}
