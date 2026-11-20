<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin Dashboard') - All Land Consultancy</title>
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
      padding: 24px 20px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .admin-brand img {
      height: 32px;
      width: auto;
    }
    .admin-brand-text {
      font-weight: 800;
      color: #ffffff;
      font-size: 15px;
      letter-spacing: 0.02em;
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
  </style>
  @yield('styles')
</head>
<body>

  <!-- Sidebar -->
  <aside class="admin-sidebar">
    <div class="admin-brand">
      <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Logo">
      <div class="admin-brand-text">All Land Admin</div>
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

  <!-- Main Area -->
  <div class="admin-main">
    <header class="admin-topbar">
      <div style="font-weight:800;font-size:16px;color:var(--dark);">
        @yield('page_title', 'Admin Dashboard')
      </div>
      <div style="display:flex;align-items:center;gap:14px;">
        <span style="font-size:12px;color:#64748b;">MySQL Database: <strong>allland_consultancy</strong></span>
        <a href="{{ route('home') }}" target="_blank" class="btn btn-outline btn-sm">Website Front</a>
      </div>
    </header>

    @include('partials.flash')

    <div class="admin-content">
      @yield('content')
    </div>
  </div>

  @yield('scripts')
</body>
</html>

