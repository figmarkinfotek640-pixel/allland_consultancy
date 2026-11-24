@extends('admin.layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard Overview')

@section('content')

<!-- Metric Cards Grid -->
<div class="admin-metrics-grid">
  
  <div class="card" style="margin-bottom:0;">
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <span style="font-size:12px;font-weight:800;color:#64748b;text-transform:uppercase;">Student Leads</span>
      <span style="font-size:22px;">📥</span>
    </div>
    <div style="font-size:32px;font-weight:800;color:#0f172a;margin:10px 0 4px;">{{ $stats['inquiries_count'] }}</div>
    <div style="font-size:12px;color:#D9561A;font-weight:700;">{{ $stats['new_inquiries_count'] }} new uncontacted</div>
  </div>

  <div class="card" style="margin-bottom:0;">
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <span style="font-size:12px;font-weight:800;color:#64748b;text-transform:uppercase;">Services</span>
      <span style="font-size:22px;">🛂</span>
    </div>
    <div style="font-size:32px;font-weight:800;color:#0f172a;margin:10px 0 4px;">{{ $stats['services_count'] }}</div>
    <a href="{{ route('admin.services.index') }}" style="font-size:12px;color:#0580C1;text-decoration:none;font-weight:700;">Manage Services →</a>
  </div>

  <div class="card" style="margin-bottom:0;">
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <span style="font-size:12px;font-weight:800;color:#64748b;text-transform:uppercase;">Courses &amp; Programs</span>
      <span style="font-size:22px;">🎓</span>
    </div>
    <div style="font-size:32px;font-weight:800;color:#0f172a;margin:10px 0 4px;">{{ $stats['courses_count'] }}</div>
    <a href="{{ route('admin.courses.index') }}" style="font-size:12px;color:#0580C1;text-decoration:none;font-weight:700;">Manage Courses →</a>
  </div>

  <div class="card" style="margin-bottom:0;">
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <span style="font-size:12px;font-weight:800;color:#64748b;text-transform:uppercase;">Events &amp; Webinars</span>
      <span style="font-size:22px;">📅</span>
    </div>
    <div style="font-size:32px;font-weight:800;color:#0f172a;margin:10px 0 4px;">{{ $stats['events_count'] }}</div>
    <a href="{{ route('admin.events.index') }}" style="font-size:12px;color:#0580C1;text-decoration:none;font-weight:700;">Manage Events →</a>
  </div>

  <div class="card" style="margin-bottom:0;">
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <span style="font-size:12px;font-weight:800;color:#64748b;text-transform:uppercase;">Published Blogs</span>
      <span style="font-size:22px;">✍️</span>
    </div>
    <div style="font-size:32px;font-weight:800;color:#0f172a;margin:10px 0 4px;">{{ $stats['blogs_count'] }}</div>
    <a href="{{ route('admin.blogs.index') }}" style="font-size:12px;color:#0580C1;text-decoration:none;font-weight:700;">Manage Blogs →</a>
  </div>

</div>

<!-- Quick Action Shortcuts -->
<div class="card" style="background:#0f172a;color:#fff;">
  <div class="admin-quick-actions">
    <div>
      <h3 style="font-size:16px;font-weight:800;color:#fff;margin-bottom:4px;">Quick Actions &amp; Content Management</h3>
      <p style="font-size:13px;color:#94a3b8;margin:0;">Add new entries directly to MySQL database and update website instantly.</p>
    </div>
    <div class="admin-quick-btns">
      <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm">+ Add Service</a>
      <a href="{{ route('admin.courses.create') }}" class="btn btn-primary btn-sm" style="background:#D9561A;">+ Add Course</a>
      <a href="{{ route('admin.events.create') }}" class="btn btn-primary btn-sm" style="background:#14B8A6;">+ Add Event</a>
      <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm" style="background:#6366F1;">+ Write Blog</a>
    </div>
  </div>
</div>

<!-- Two Columns: Recent Inquiries & Upcoming Events -->
<div class="admin-dashboard-split">

  <!-- Left Column: Recent Student Inquiries -->
  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Recent Student Inquiries</h2>
      <a href="{{ route('admin.inquiries.index') }}" class="btn btn-outline btn-sm">View All Leads</a>
    </div>

    <div class="admin-table-wrap">
      <table class="admin-table">
        <thead>
          <tr>
            <th>Student</th>
            <th>Contact</th>
            <th>Interest</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($recentInquiries as $inq)
            <tr>
              <td>
                <strong style="color:var(--dark);">{{ $inq->name }}</strong>
                <div style="font-size:11.5px;color:#64748b;">{{ $inq->destination ?: 'Not specified' }}</div>
              </td>
              <td>
                <div>{{ $inq->phone }}</div>
                <div style="font-size:11.5px;color:#64748b;">{{ $inq->email }}</div>
              </td>
              <td>
                <div style="font-size:12.5px;">{{ $inq->service_interest ?: 'General Counselling' }}</div>
              </td>
              <td>
                @if($inq->status == 'new')
                  <span class="badge badge-danger">New</span>
                @elseif($inq->status == 'contacted')
                  <span class="badge badge-warning">Contacted</span>
                @elseif($inq->status == 'in_progress')
                  <span class="badge badge-info">In Progress</span>
                @elseif($inq->status == 'enrolled')
                  <span class="badge badge-success">Enrolled</span>
                @else
                  <span class="badge" style="background:#e2e8f0;color:#475569;">Closed</span>
                @endif
              </td>
              <td>
                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn btn-outline btn-sm">View</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" style="text-align:center;color:#64748b;padding:24px;">No inquiries received yet.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <!-- Right Column: Upcoming Events & Seminars -->
  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Scheduled Events</h2>
      <a href="{{ route('admin.events.create') }}" class="btn btn-primary btn-sm">+ New</a>
    </div>

    <div style="display:flex;flex-direction:column;gap:14px;">
      @forelse($upcomingEvents as $ev)
        <div style="border-bottom:1px solid var(--border);padding-bottom:12px;">
          <div style="display:flex;justify-content:space-between;align-items:flex-start;">
            <span class="badge badge-info" style="font-size:10px;">{{ $ev->type_label }}</span>
            <span style="font-size:11px;font-weight:700;color:#64748b;">{{ $ev->event_date->format('M d') }}</span>
          </div>
          <h4 style="font-size:13.5px;font-weight:700;color:var(--dark);margin:6px 0 2px;">{{ $ev->title }}</h4>
          <div style="font-size:11.5px;color:#64748b;">{{ $ev->location }} · {{ $ev->start_time }}</div>
        </div>
      @empty
        <p style="color:#64748b;font-size:13px;">No events scheduled.</p>
      @endforelse
    </div>
  </div>

</div>

@endsection

