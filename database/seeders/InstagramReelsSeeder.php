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
                'title' => '🇩🇪 €0 Tuition Visa Granted',
                'reel_url' => 'https://www.instagram.com/all_land_consultancy/',
                'description' => 'Landing at Munich airport was unreal! Handled everything from APS to zero-tuition admission.',
                'thumbnail' => 'images/student-1.jpg',
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'Germany • Munich Desk',
                'likes_count' => '1.4K',
                'comments_count' => '84',
                'display_order' => 1,
                'status' => true,
            ],
            [
                'title' => '🇨🇦 PGWP Visa Approval',
                'reel_url' => 'https://www.instagram.com/all_land_consultancy/',
                'description' => 'Got my SDS student visa stamp within 21 days! Toronto campus orientation starts next week.',
                'thumbnail' => 'images/student-2.jpg',
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'Canada • Ontario Desk',
                'likes_count' => '2.1K',
                'comments_count' => '116',
                'display_order' => 2,
                'status' => true,
            ],
            [
                'title' => '🇬🇧 Russell Group Master\'s Offer',
                'reel_url' => 'https://www.instagram.com/all_land_consultancy/',
                'description' => 'Unconditional offer letter from University of Birmingham with £4,000 international scholarship.',
                'thumbnail' => 'images/student-3.jpg',
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'UK • London Admissions',
                'likes_count' => '980',
                'comments_count' => '52',
                'display_order' => 3,
                'status' => true,
            ],
            [
                'title' => '🩺 German Nursing Ausbildung',
                'reel_url' => 'https://www.instagram.com/all_land_consultancy/',
                'description' => 'Stipend contract of €1,350/mo with free hospital accommodation signed in Kerala before flight.',
                'thumbnail' => 'images/student-1.jpg',
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'Germany • Healthcare Track',
                'likes_count' => '3.5K',
                'comments_count' => '240',
                'display_order' => 4,
                'status' => true,
            ],
            [
                'title' => '🇦🇹 Public University Admission',
                'reel_url' => 'https://www.instagram.com/all_land_consultancy/',
                'description' => 'Vienna public university enrollment complete. Low tuition fee of only €726 per semester!',
                'thumbnail' => 'images/student-2.jpg',
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'Austria • Vienna Desk',
                'likes_count' => '1.1K',
                'comments_count' => '63',
                'display_order' => 5,
                'status' => true,
            ],
            [
                'title' => '✈️ Winter Intake Flying Batch',
                'reel_url' => 'https://www.instagram.com/all_land_consultancy/',
                'description' => 'Cochin international airport send-off for our 18-student European master\'s batch.',
                'thumbnail' => 'images/student-3.jpg',
                'video_url' => 'videos/banner-video.mp4',
                'location_tag' => 'Aluva Headquarters',
                'likes_count' => '4.2K',
                'comments_count' => '210',
                'display_order' => 6,
                'status' => true,
            ],
        ];

        foreach ($reels as $data) {
            InstagramReel::updateOrCreate(
                ['title' => $data['title']],
                $data
            );
        }
    }
}
