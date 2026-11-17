@extends('admin.layouts.admin')

@section('title', 'Events & Webinars')
@section('page_title', 'Events & Seminars Management')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Events &amp; Admissions Seminars</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Scheduled physical seminars, spot admission drives, and online Zoom webinars</p>
    </div>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">+ Add New Event</a>
  </div>

  <!-- Filter by Type -->
  <div style="display:flex;gap:10px;margin-bottom:20px;flex-wrap:wrap;">
    <a href="{{ route('admin.events.index') }}" class="btn btn-sm {{ empty(request('type')) ? 'btn-primary' : 'btn-outline' }}">All Events</a>
    <a href="{{ route('admin.events.index', ['type' => 'seminar']) }}" class="btn btn-sm {{ request('type') == 'seminar' ? 'btn-primary' : 'btn-outline' }}">Seminars</a>
    <a href="{{ route('admin.events.index', ['type' => 'webinar']) }}" class="btn btn-sm {{ request('type') == 'webinar' ? 'btn-primary' : 'btn-outline' }}">Webinars</a>
    <a href="{{ route('admin.events.index', ['type' => 'spot']) }}" class="btn btn-sm {{ request('type') == 'spot' ? 'btn-primary' : 'btn-outline' }}">Spot Admissions</a>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Title &amp; Location</th>
          <th>Type</th>
          <th>Time</th>
          <th>Mode</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($events as $e)
          <tr>
            <td>
              <strong style="color:var(--dark);">{{ $e->event_date->format('M d, Y') }}</strong>
              <div style="font-size:11.5px;color:#64748b;">{{ $e->day_of_week }}</div>
            </td>
            <td>
              <strong style="color:var(--dark);">{{ $e->title }}</strong>
              <div style="font-size:11.5px;color:#64748b;">📍 {{ $e->location }}</div>
            </td>
            <td>
              <span class="badge badge-info">{{ $e->type_label }}</span>
            </td>
            <td>{{ $e->formatted_time }}</td>
            <td>
              <span class="badge {{ $e->mode == 'online' ? 'badge-purple' : 'badge-warning' }}">
                {{ ucfirst($e->mode) }}
              </span>
            </td>
            <td>
              @if($e->is_active)
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Inactive</span>
              @endif
            </td>
            <td>
              <div style="display:flex;gap:8px;">
                <a href="{{ route('events.show', $e->slug) }}" target="_blank" class="btn btn-outline btn-sm">View</a>
                <a href="{{ route('admin.events.edit', $e->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin.events.destroy', $e->id) }}" method="POST" onsubmit="return confirm('Delete this event?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" style="text-align:center;padding:30px;color:#64748b;">No events scheduled. Click "+ Add New Event" to create one.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:20px;">
    {{ $events->links() }}
  </div>
</div>

@endsection

