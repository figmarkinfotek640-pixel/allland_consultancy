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
                'video_url' => 'videos/banner-video.mp4',
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
                'video_url' => 'videos/banner-video.mp4',
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
                'video_url' => 'videos/banner-video.mp4',
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
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'Tajikistan • Medical Desk',
                'likes_count' => '2.4K',
                'comments_count' => '168',
                'display_order' => 4,
                'status' => true,
            ],
        ];

        // Deactivate old demo reels if any
        InstagramReel::whereNotIn('reel_url', [
            'https://www.instagram.com/reel/DgNJX2bR5oy/',
            'https://www.instagram.com/reel/Df9CngDR0FN/',
            'https://www.instagram.com/reel/Df3s_r2RfD4/',
            'https://www.instagram.com/reel/Dfg51NdRihS/',
        ])->update(['status' => false]);

        foreach ($reels as $data) {
            InstagramReel::updateOrCreate(
                ['reel_url' => $data['reel_url']],
                $data
            );
        }
    }
}
