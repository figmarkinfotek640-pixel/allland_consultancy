<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin Dashboard') - All Land Consultancy</title>
  
  <!-- Favicon / Tab Icon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700;800&display=swap">
  
  <style>
    :root {
      --primary: #0580C1;
      --primary-dark: #0369A1;
      --accent: #D9561A;
      --dark: #0f172a;
      --dark-card: #1e293b;
      --bg: #f8fafc;
      --text: #334155;
      --border: #e2e8f0;
      --sidebar-width: 260px;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Manrope', system-ui, -apple-system, sans-serif;
      background: var(--bg);
      color: var(--text);
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar */
    .admin-sidebar {
      width: var(--sidebar-width);
      background: var(--dark);
      color: #cbd5e1;
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
      min-height: 100vh;
    }
    .admin-brand {
      padding: 22px 20px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      display: flex;
      align-items: center;
    }
    .admin-brand img {
      height: 38px;
      max-width: 100%;
      width: auto;
      object-fit: contain;
    }
    .admin-nav {
      padding: 20px 12px;
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    .admin-nav-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 14px;
      color: #94a3b8;
      text-decoration: none;
      font-size: 13.5px;
      font-weight: 600;
      border-radius: 10px;
      transition: all 0.2s ease;
    }
    .admin-nav-item:hover {
      background: rgba(255,255,255,0.06);
      color: #ffffff;
    }
    .admin-nav-item.active {
      background: var(--primary);
      color: #ffffff;
      font-weight: 700;
    }
    .admin-nav-badge {
      margin-left: auto;
      background: var(--accent);
      color: #fff;
      font-size: 11px;
      font-weight: 800;
      padding: 2px 7px;
      border-radius: 999px;
    }

    .admin-sidebar-footer {
      padding: 16px 20px;
      border-top: 1px solid rgba(255,255,255,0.08);
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .admin-user-pill {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .admin-avatar {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: var(--primary);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 14px;
    }

    /* Main Content Area */
    .admin-main {
      flex: 1;
      display: flex;
      flex-direction: column;
      min-width: 0;
      overflow-x: hidden;
    }
    .admin-topbar {
      height: 64px;
      background: #ffffff;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 32px;
    }
    .admin-content {
      padding: 32px;
      flex: 1;
    }

    /* Common Components */
    .card {
      background: #ffffff;
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.04);
      padding: 24px;
      margin-bottom: 24px;
    }
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    .card-title {
      font-size: 18px;
      font-weight: 800;
      color: var(--dark);
    }
    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 18px;
      border-radius: 10px;
      font-size: 13.5px;
      font-weight: 700;
      cursor: pointer;
      text-decoration: none;
      border: none;
      transition: all 0.2s ease;
    }
    .btn-primary {
      background: var(--primary);
      color: #fff;
    }
    .btn-primary:hover {
      background: var(--primary-dark);
    }
    .btn-outline {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--text);
    }
    .btn-outline:hover {
      background: #f1f5f9;
    }
    .btn-danger {
      background: #ef4444;
      color: #fff;
    }
    .btn-danger:hover {
      background: #dc2626;
    }
    .btn-sm {
      padding: 5px 12px;
      font-size: 12px;
      border-radius: 7px;
    }

    /* Tables */
    .admin-table-wrap {
      overflow-x: auto;
    }
    table.admin-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      font-size: 13.5px;
    }
    table.admin-table th {
      padding: 12px 16px;
      background: #f8fafc;
      font-size: 11.5px;
      font-weight: 800;
      color: #64748b;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      border-bottom: 1px solid var(--border);
    }
    table.admin-table td {
      padding: 14px 16px;
      border-bottom: 1px solid var(--border);
      color: var(--text);
      vertical-align: middle;
    }
    table.admin-table tr:hover td {
      background: #fafafa;
    }

    /* Status Badges */
    .badge {
      display: inline-block;
      padding: 3px 10px;
      border-radius: 999px;
      font-size: 11px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }
    .badge-success { background: #dcfce7; color: #166534; }
    .badge-warning { background: #fef3c7; color: #92400e; }
    .badge-info { background: #e0f2fe; color: #0369a1; }
    .badge-danger { background: #fee2e2; color: #991b1b; }
    .badge-purple { background: #ede9fe; color: #5b21b6; }

    /* Form Fields */
    .form-group {
      margin-bottom: 20px;
    }
    .form-label {
      display: block;
      font-size: 12.5px;
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 6px;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }
    .form-control {
      width: 100%;
      padding: 11px 14px;
      border: 1px solid var(--border);
      border-radius: 10px;
      font-size: 14px;
      font-family: inherit;
      color: var(--dark);
      background: #fff;
    }
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(5,128,193,0.15);
    }
    textarea.form-control {
      resize: vertical;
    }
    .form-grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    /* Off-canvas & Responsive Sidebar */
    .admin-menu-toggle {
      display: none;
      background: transparent;
      border: none;
      color: var(--dark);
      padding: 8px;
      margin-left: -8px;
      border-radius: 8px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      transition: background 0.15s ease;
    }
    .admin-menu-toggle:hover {
      background: #f1f5f9;
    }
    .admin-sidebar-close {
      display: none;
      background: transparent;
      border: none;
      color: #94a3b8;
      margin-left: auto;
      padding: 6px;
      border-radius: 6px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      transition: all 0.15s ease;
    }
    .admin-sidebar-close:hover {
      color: #ffffff;
      background: rgba(255,255,255,0.1);
    }
    .admin-sidebar-backdrop {
      display: none;
    }

    .admin-page-title {
      font-weight: 800;
      font-size: 16px;
      color: var(--dark);
    }
    .admin-topbar-meta {
      display: flex;
      align-items: center;
      gap: 14px;
      flex-shrink: 0;
    }

    /* Responsive Utilities */
    .admin-dashboard-split {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 24px;
    }
    .admin-metrics-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 16px;
      margin-bottom: 24px;
    }
    .admin-quick-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 14px;
    }
    .admin-quick-btns {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .admin-filter-bar {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    @media (max-width: 991px) {
      .admin-sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        width: 280px;
        max-width: 85vw;
        height: 100vh;
        height: 100dvh;
        transform: translateX(-100%);
        transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.35);
        overflow-y: auto;
      }
      body.sidebar-open .admin-sidebar {
        transform: translateX(0);
      }
      .admin-sidebar-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.65);
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
        z-index: 1040;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.25s ease;
      }
      body.sidebar-open .admin-sidebar-backdrop {
        display: block;
        opacity: 1;
        pointer-events: auto;
      }
      body.sidebar-open {
        overflow: hidden;
      }
      .admin-menu-toggle {
        display: inline-flex;
      }
      .admin-sidebar-close {
        display: inline-flex;
      }
    }

    @media (max-width: 1024px) {
      .admin-dashboard-split {
        grid-template-columns: 1fr;
        gap: 18px;
      }
    }

    @media (max-width: 768px) {
      .admin-topbar {
        height: 56px;
        padding: 0 16px;
      }
      .admin-db-status {
        display: none;
      }
      .admin-page-title {
        font-size: 14.5px;
        max-width: 180px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .admin-content {
        padding: 16px 12px;
      }
      .card {
        padding: 16px 14px;
        border-radius: 12px;
        margin-bottom: 16px;
      }
      .card-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
      }
      .card-header .btn,
      .card-header > div:last-child {
        width: 100%;
        justify-content: center;
      }
      .form-grid-2 {
        grid-template-columns: 1fr;
        gap: 14px;
      }
      table.admin-table {
        min-width: 620px;
      }
      .admin-metrics-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
      }
      .admin-quick-btns {
        width: 100%;
      }
      .admin-quick-btns .btn {
        flex: 1 1 calc(50% - 10px);
        justify-content: center;
        text-align: center;
      }
    }

    @media (max-width: 640px) {
      .admin-filter-bar {
        width: 100%;
        overflow-x: auto;
        flex-wrap: nowrap;
        padding-bottom: 6px;
        -webkit-overflow-scrolling: touch;
      }
      .admin-filter-bar .btn {
        flex-shrink: 0;
      }
    }

    @media (max-width: 480px) {
      .admin-page-title {
        max-width: 130px;
      }
      .admin-metrics-grid {
        grid-template-columns: 1fr;
      }
      .admin-quick-btns .btn {
        flex: 1 1 100%;
      }
    }
  </style>
  @yield('styles')
</head>
<body>

  <!-- Sidebar -->
  <aside class="admin-sidebar" id="adminSidebar">
    <div class="admin-brand">
      <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Logo">
      <button type="button" class="admin-sidebar-close" aria-label="Close navigation" onclick="toggleAdminSidebar()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <nav class="admin-nav">
      <a href="{{ route('admin.dashboard') }}" class="admin-nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <span>📊</span> Dashboard
      </a>
      <a href="{{ route('admin.inquiries.index') }}" class="admin-nav-item {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
        <span>📥</span> Inquiries
        @php $newInqCount = \App\Models\Inquiry::where('status', 'new')->count(); @endphp
        @if($newInqCount > 0)
          <span class="admin-nav-badge">{{ $newInqCount }}</span>
        @endif
      </a>
      <a href="{{ route('admin.services.index') }}" class="admin-nav-item {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
        <span>🛂</span> Services
      </a>
      <a href="{{ route('admin.destinations.index') }}" class="admin-nav-item {{ request()->routeIs('admin.destinations.*') ? 'active' : '' }}">
        <span>🌍</span> Destinations
      </a>
      <a href="{{ route('admin.courses.index') }}" class="admin-nav-item {{ request()->routeIs('admin.courses.*') ? 'active' : '' }}">
        <span>🎓</span> Courses &amp; Programs
      </a>
      <a href="{{ route('admin.events.index') }}" class="admin-nav-item {{ request()->routeIs('admin.events.*') ? 'active' : '' }}">
        <span>📅</span> Events &amp; Seminars
      </a>
      <a href="{{ route('admin.blogs.index') }}" class="admin-nav-item {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">
        <span>✍️</span> Blogs &amp; Articles
      </a>
      <a href="{{ route('admin.reels.index') }}" class="admin-nav-item {{ request()->routeIs('admin.reels.*') ? 'active' : '' }}">
        <span>📱</span> Instagram Reels
      </a>
      
      <div style="height: 1px; background: rgba(255,255,255,0.08); margin: 12px 0;"></div>

      <a href="{{ route('home') }}" target="_blank" class="admin-nav-item">
        <span>🌐</span> View Public Website ↗
      </a>
    </nav>

    <div class="admin-sidebar-footer">
      <div class="admin-user-pill">
        <div class="admin-avatar">{{ substr(Auth::user()->name ?? 'A', 0, 1) }}</div>
        <div>
          <div style="font-weight:700;color:#fff;font-size:13px;">{{ Auth::user()->name ?? 'Admin' }}</div>
          <div style="font-size:11px;color:#94a3b8;">{{ Auth::user()->email ?? '' }}</div>
        </div>
      </div>
      <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline btn-sm" style="width:100%;color:#ef4444;border-color:rgba(239,68,68,0.3);justify-content:center;">
          Log Out
        </button>
      </form>
    </div>
  </aside>

  <!-- Sidebar Mobile Backdrop -->
  <div class="admin-sidebar-backdrop" id="adminSidebarBackdrop" onclick="toggleAdminSidebar()"></div>

  <!-- Main Area -->
  <div class="admin-main">
    <header class="admin-topbar">
      <div style="display:flex;align-items:center;gap:10px;min-width:0;">
        <button type="button" class="admin-menu-toggle" aria-label="Toggle navigation" onclick="toggleAdminSidebar()">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
        <div class="admin-page-title">
          @yield('page_title', 'Admin Dashboard')
        </div>
      </div>
      <div class="admin-topbar-meta">
        <span class="admin-db-status" style="font-size:12px;color:#64748b;">MySQL Database: <strong>allland_consultancy</strong></span>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-outline btn-sm">Website Front ↗</a>
      </div>
    </header>

    <div class="admin-content">
      @include('partials.flash')
      @yield('content')
    </div>
  </div>

  <script>
    function toggleAdminSidebar() {
      document.body.classList.toggle('sidebar-open');
    }

    // Dismiss sidebar when pressing ESC
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && document.body.classList.contains('sidebar-open')) {
        toggleAdminSidebar();
      }
    });

    // Automatically close sidebar on click of any nav link on mobile/tablet
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.admin-sidebar .admin-nav-item').forEach(function(item) {
        item.addEventListener('click', function() {
          if (window.innerWidth <= 991) {
            document.body.classList.remove('sidebar-open');
          }
        });
      });
    });
  </script>

  @yield('scripts')
</body>
</html>

