<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Service;
use App\Models\Course;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Destination;
use App\Models\Inquiry;

class AlllandAppTest extends TestCase
{
    protected $adminUser;

    protected function setUp(): void
    {
        parent::setUp();
        $this->adminUser = User::where('email', 'admin@alllandconsultancy.com')->first();
    }

    public function test_homepage_loads_successfully_with_data(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('All Land Consultancy');
        $response->assertSee('Germany');
    }

    public function test_about_page_loads(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('About Us');
    }

    public function test_services_index_and_detail(): void
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertSee('Visa Assistance');
        $response->assertSee('Placement Assistance');

        $responseDetail = $this->get('/services/visa-assistance');
        $responseDetail->assertStatus(200);
        $responseDetail->assertSee('Visa Assistance');

        // Test Placement Assistance detail page with Israel Caregiver content
        $responsePlacement = $this->get('/services/placement-assistance');
        $responsePlacement->assertStatus(200);
        $responsePlacement->assertSee('Placement Assistance');
        $responsePlacement->assertSee('Caregiver Jobs in Israel');
        $responsePlacement->assertSee('Competitive Salary');
        $responsePlacement->assertSee('Police Clearance Certificate');
    }

    public function test_courses_index_and_detail(): void
    {
        $response = $this->get('/courses');
        $response->assertStatus(200);

        $responseDetail = $this->get('/courses/msc-automotive-engineering-germany');
        $responseDetail->assertStatus(200);
        $responseDetail->assertSee('Automotive');
    }

    public function test_events_index_and_detail(): void
    {
        $response = $this->get('/events');
        $response->assertStatus(200);

        $responseDetail = $this->get('/events/study-in-germany-free-seminar-aluva');
        $responseDetail->assertStatus(200);
        $responseDetail->assertSee('Seminar');
    }

    public function test_blog_index_and_detail(): void
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);

        $responseDetail = $this->get('/blog/guide-to-german-blocked-accounts');
        $responseDetail->assertStatus(200);
        $responseDetail->assertSee('Blocked Accounts');
    }

    public function test_student_inquiry_submission_stores_in_mysql(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Kavya Nair',
            'email' => 'kavya.test@gmail.com',
            'phone' => '+91 99955 12345',
            'destination' => 'Germany',
            'service_interest' => 'Tuition-Free Admissions',
            'message' => 'Looking for winter intake masters programs in computer science.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('inquiries', [
            'email' => 'kavya.test@gmail.com',
            'destination' => 'Germany',
        ]);

        // Cleanup
        Inquiry::where('email', 'kavya.test@gmail.com')->delete();
    }

    public function test_guest_cannot_access_admin_dashboard(): void
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_login_and_access_dashboard(): void
    {
        $response = $this->actingAs($this->adminUser)->get('/admin');
        $response->assertStatus(200);
        $response->assertSee('Dashboard Overview');
    }

    public function test_admin_can_create_and_delete_service(): void
    {
        $serviceData = [
            'title' => 'Temporary Test Service',
            'slug' => 'temp-test-service',
            'icon' => '🚀',
            'excerpt' => 'Temporary excerpt for test',
            'description' => '<p>Temporary description</p>',
            'order' => 99,
            'is_active' => '1',
        ];

        $response = $this->actingAs($this->adminUser)->post('/admin/services', $serviceData);
        $response->assertRedirect('/admin/services');
        $this->assertDatabaseHas('services', ['slug' => 'temp-test-service']);

        $service = Service::where('slug', 'temp-test-service')->first();
        $this->actingAs($this->adminUser)->delete("/admin/services/{$service->id}");
        $this->assertDatabaseMissing('services', ['slug' => 'temp-test-service']);
    }

    public function test_admin_can_create_and_delete_course(): void
    {
        $courseData = [
            'title' => 'Test Robotics Engineering',
            'slug' => 'test-robotics-engineering',
            'country' => 'Germany',
            'country_code' => 'DE',
            'degree_level' => 'Master\'s Degree',
            'duration' => '2 Years',
            'tuition_fee' => '€0',
            'excerpt' => 'Test course',
            'is_active' => '1',
        ];

        $response = $this->actingAs($this->adminUser)->post('/admin/courses', $courseData);
        $response->assertRedirect('/admin/courses');
        $this->assertDatabaseHas('courses', ['slug' => 'test-robotics-engineering']);

        $course = Course::where('slug', 'test-robotics-engineering')->first();
        $this->actingAs($this->adminUser)->delete("/admin/courses/{$course->id}");
        $this->assertDatabaseMissing('courses', ['slug' => 'test-robotics-engineering']);
    }

    public function test_admin_can_create_and_delete_event(): void
    {
        $eventData = [
            'title' => 'Test Spot Admission Seminar',
            'slug' => 'test-spot-admission-seminar',
            'type' => 'seminar',
            'event_date' => now()->addDays(10)->format('Y-m-d'),
            'start_time' => '11:00 AM',
            'end_time' => '2:00 PM',
            'location' => 'Aluva Office',
            'mode' => 'offline',
            'seats_available' => 30,
            'is_active' => '1',
        ];

        $response = $this->actingAs($this->adminUser)->post('/admin/events', $eventData);
        $response->assertRedirect('/admin/events');
        $this->assertDatabaseHas('events', ['slug' => 'test-spot-admission-seminar']);

        $event = Event::where('slug', 'test-spot-admission-seminar')->first();
        $this->actingAs($this->adminUser)->delete("/admin/events/{$event->id}");
        $this->assertDatabaseMissing('events', ['slug' => 'test-spot-admission-seminar']);
    }

    public function test_admin_can_create_and_delete_blog(): void
    {
        $blogData = [
            'title' => 'Test Visa Advice Article',
            'slug' => 'test-visa-advice-article',
            'category' => 'Visa Guide',
            'excerpt' => 'Test article excerpt',
            'content' => '<p>Test article content</p>',
            'author' => 'Test Author',
            'is_published' => '1',
        ];

        $response = $this->actingAs($this->adminUser)->post('/admin/blogs', $blogData);
        $response->assertRedirect('/admin/blogs');
        $this->assertDatabaseHas('blogs', ['slug' => 'test-visa-advice-article']);

        $blog = Blog::where('slug', 'test-visa-advice-article')->first();
        $this->actingAs($this->adminUser)->delete("/admin/blogs/{$blog->id}");
        $this->assertDatabaseMissing('blogs', ['slug' => 'test-visa-advice-article']);
    }

    public function test_destinations_detail_pages_load(): void
    {
        $countries = ['germany', 'georgia', 'austria', 'united-kingdom', 'uk', 'tajikistan', 'canada', 'new-zealand'];
        foreach ($countries as $slug) {
            $response = $this->get("/study-abroad/{$slug}");
            $response->assertStatus(200);
            $response->assertSee('Key Advantages');
            $response->assertSee('Admission &');
        }

        // Specific checks for new destinations
        $this->get('/study-abroad/georgia')->assertSee('Nursing');
        $this->get('/study-abroad/austria')->assertSee('Nursing');
        $this->get('/study-abroad/tajikistan')->assertSee('MBBS');
    }

    public function test_admin_can_create_and_delete_destination(): void
    {
        $destData = [
            'name' => 'Ireland Test',
            'slug' => 'ireland-test',
            'country_code' => 'IE',
            'flag' => '🇮🇪',
            'tab_badge' => '2-Yr PSW',
            'hero_badge' => '2-YEAR POST STUDY WORK',
            'eyebrow' => 'European Tech Capital',
            'title' => 'Study in Ireland — Silicon Valley of Europe',
            'blurb' => 'Test overview for Ireland.',
            'description' => '<p>Test guide for Ireland higher education.</p>',
            'order' => 10,
            'is_active' => '1',
        ];

        $response = $this->actingAs($this->adminUser)->post('/admin/destinations', $destData);
        $response->assertRedirect('/admin/destinations');
        $this->assertDatabaseHas('destinations', ['slug' => 'ireland-test']);

        $dest = Destination::where('slug', 'ireland-test')->first();
        $this->actingAs($this->adminUser)->delete("/admin/destinations/{$dest->id}");
        $this->assertDatabaseMissing('destinations', ['slug' => 'ireland-test']);
    }
}

