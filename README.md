# All Land Consultancy – Laravel Web Application

A full-stack Laravel web application for **All Land Consultancy** (Aluva, Kerala), featuring a modern responsive frontend for overseas education and healthcare placements, and a robust administrative backend with **MySQL database** for managing services, courses, events, blogs, and student inquiries.

---

## 🚀 Key Features

### 🌐 Frontend (Public Website)
- **Cinematic Banner & Destinations Showcase**: Interactive destination hubs (Germany, Canada, United Kingdom, New Zealand) with dynamic tuition info, work permits, and settlement pathways.
- **Dynamic Services Directory**: Detailed pages for Visa Assistance, SOP Drafting, MEA Certificate Attestation, Air Ticketing, Health Insurance, and Healthcare DataFlow.
- **Course & Program Finder**: Searchable and filterable courses across Germany, Canada, UK, and New Zealand with degree levels, tuition fees, and PR pathways.
- **Upcoming Events & Free Seminars**: Interactive filterable schedule for seminars in Aluva, spot admissions, and online Zoom webinars with direct seat booking.
- **Exclusives & Healthcare Placements**: German Nursing Ausbildung (€1,000–€1,250/mo stipend), UK NHS Band 5 sponsorships, and Chancenkarte pathways.
- **Knowledge Hub & Blog**: In-depth immigration advisories, blocked account guides, and student guides.
- **Interactive Lead Capture**: Integrated forms on home, course, event, and contact pages saving directly to MySQL.

### 🛡️ Backend Admin Panel (`/admin`)
- **Protected Dashboard**: Metric cards tracking total inquiries, active services, courses, events, and blogs.
- **Services Management**: Complete CRUD to add, edit, reorder, or hide services with feature checklists and images.
- **Courses & Programs Management**: Add, update, and categorize courses by country, duration, degree level, tuition fee, and PR pathways.
- **Events & Seminars Management**: Schedule new physical seminars or webinars with seat caps, venue details, and timings.
- **Blog / Knowledge Hub Editor**: Full article drafting and publishing with rich content, authors, categories, and read times.
- **Student Leads & Inquiries Manager**: Review contact requests with student phone, email, qualification, and update status (`New`, `Contacted`, `In Progress`, `Enrolled`, `Closed`) with internal notes and one-click WhatsApp chat.

---

## 🛠️ Technology Stack

- **Framework**: Laravel 12 (PHP 8.2+)
- **Database**: MySQL / MariaDB (Database: `allland_consultancy`)
- **Templating**: Laravel Blade with clean component hierarchy
- **Styling**: Responsive custom CSS with modern gradients, micro-interactions, and mobile drawer
- **Testing**: Automated PHPUnit / Pest test suite (14 feature tests covering all routes and CRUD)

---

## ⚙️ Quick Setup & Installation

### 1. Database Configuration
Ensure MySQL (e.g. XAMPP, Laragon, or standalone MySQL) is running on port `3306`.
In `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=allland_consultancy
DB_USERNAME=root
DB_PASSWORD=
```

### 2. Run Database Migrations & Seeds
```bash
php artisan migrate --seed
```
*This creates all tables and populates the initial database with 8 services, 7 courses, 6 events, 4 blogs, 3 sample student inquiries, and the admin account.*

### 3. Start Local Server
```bash
php artisan serve
```
Visit the website at: **`http://localhost:8000`**

---

## 🔐 Admin Portal Credentials

- **URL**: `http://localhost:8000/admin/login`
- **Email**: `admin@alllandconsultancy.com`
- **Password**: `admin123`

---

## 📁 Project Directory Structure

```text
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── ServiceController.php
│   │   ├── CourseController.php
│   │   ├── EventController.php
│   │   ├── BlogController.php
│   │   ├── ContactController.php
│   │   ├── PageController.php
│   │   └── Admin/
│   │       ├── AuthController.php
│   │       ├── DashboardController.php
│   │       ├── ServiceController.php
│   │       ├── CourseController.php
│   │       ├── EventController.php
│   │       ├── BlogController.php
│   │       └── InquiryController.php
│   └── Models/
│       ├── User.php
│       ├── Service.php
│       ├── Course.php
│       ├── Event.php
│       ├── Blog.php
│       └── Inquiry.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── DatabaseSeeder.php
├── public/
│   ├── images/
│   ├── videos/
│   ├── style.css
│   └── site-scripts.js
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── partials/
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── services/
│   ├── courses/
│   ├── events/
│   ├── blog/
│   ├── contact.blade.php
│   ├── exclusives.blade.php
│   └── admin/
│       ├── layouts/admin.blade.php
│       ├── login.blade.php
│       ├── dashboard.blade.php
│       ├── services/
│       ├── courses/
│       ├── events/
│       ├── blogs/
│       └── inquiries/
└── tests/Feature/AlllandAppTest.php
```

---

## 🧪 Running Automated Tests

Run the complete test suite:
```bash
php artisan test
```
All 14 tests verify public endpoints, database storage of student inquiries, admin authentication, and CRUD operations on MySQL.
# allland_consultancy
