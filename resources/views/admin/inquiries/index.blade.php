@extends('admin.layouts.admin')

@section('title', 'Student Inquiries & Leads')
@section('page_title', 'Inquiries & Counselling Requests')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Student Leads &amp; Counselling Bookings</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Submitted via homepage, course forms, and contact page</p>
    </div>

    <!-- Filter by Status -->
    <div class="admin-filter-bar">
      <a href="{{ route('admin.inquiries.index') }}" class="btn btn-sm {{ empty(request('status')) ? 'btn-primary' : 'btn-outline' }}">All Leads</a>
      <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="btn btn-sm {{ request('status') == 'new' ? 'btn-primary' : 'btn-outline' }}">New</a>
      <a href="{{ route('admin.inquiries.index', ['status' => 'contacted']) }}" class="btn btn-sm {{ request('status') == 'contacted' ? 'btn-primary' : 'btn-outline' }}">Contacted</a>
      <a href="{{ route('admin.inquiries.index', ['status' => 'in_progress']) }}" class="btn btn-sm {{ request('status') == 'in_progress' ? 'btn-primary' : 'btn-outline' }}">In Progress</a>
      <a href="{{ route('admin.inquiries.index', ['status' => 'enrolled']) }}" class="btn btn-sm {{ request('status') == 'enrolled' ? 'btn-primary' : 'btn-outline' }}">Enrolled</a>
    </div>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Contact Info</th>
          <th>Country Interest</th>
          <th>Qualification / Query</th>
          <th>Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($inquiries as $inq)
          <tr>
            <td>
              <strong style="color:var(--dark);">{{ $inq->name }}</strong>
              <div style="font-size:11.5px;color:#0580C1;font-weight:700;">{{ $inq->service_interest ?: 'General Counselling' }}</div>
            </td>
            <td>
              <div><strong>{{ $inq->phone }}</strong></div>
              <div style="font-size:12px;color:#64748b;">{{ $inq->email }}</div>
            </td>
            <td>
              <span class="badge badge-info">{{ $inq->destination ?: 'Not specified' }}</span>
            </td>
            <td>
              <div style="font-size:12px;color:#475569;">{{ Str::limit($inq->qualification ?: $inq->message, 45) }}</div>
            </td>
            <td style="font-size:12px;color:#64748b;">
              {{ $inq->created_at->format('M d, Y') }}<br>
              <span style="font-size:11px;">{{ $inq->created_at->diffForHumans() }}</span>
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
              <div style="display:flex;gap:6px;">
                <a href="{{ route('admin.inquiries.show', $inq->id) }}" class="btn btn-outline btn-sm">Manage</a>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inq->phone) }}" target="_blank" rel="noopener" class="btn btn-sm" style="background:#22c55e;color:#fff;" title="Chat with student on WhatsApp">WA</a>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" style="text-align:center;padding:30px;color:#64748b;">No inquiries found matching this filter.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:20px;">
    {{ $inquiries->links() }}
  </div>
</div>

@endsection

