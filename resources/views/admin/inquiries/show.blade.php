@extends('admin.layouts.admin')

@section('title', 'Inquiry from ' . $inquiry->name)
@section('page_title', 'Student Inquiry Details')

@section('content')

<div style="max-width:850px;margin:0 auto;">
  <div style="margin-bottom:16px;">
    <a href="{{ route('admin.inquiries.index') }}" class="btn btn-outline btn-sm">← Back to All Inquiries</a>
  </div>

  <div class="card">
    <div class="card-header">
      <div>
        <h2 class="card-title">{{ $inquiry->name }}</h2>
        <span style="font-size:12px;color:#64748b;">Received: {{ $inquiry->created_at->format('F d, Y \a\t h:i A') }} ({{ $inquiry->created_at->diffForHumans() }})</span>
      </div>
      <div>
        @if($inquiry->status == 'new')
          <span class="badge badge-danger">New Lead</span>
        @elseif($inquiry->status == 'contacted')
          <span class="badge badge-warning">Contacted</span>
        @elseif($inquiry->status == 'in_progress')
          <span class="badge badge-info">In Progress</span>
        @elseif($inquiry->status == 'enrolled')
          <span class="badge badge-success">Enrolled Student</span>
        @else
          <span class="badge" style="background:#e2e8f0;color:#475569;">Closed</span>
        @endif
      </div>
    </div>

    <!-- Student Info Grid -->
    <div class="form-grid-2" style="margin-bottom:28px;">
      <div style="background:#f8fafc;border-radius:12px;padding:16px;">
        <span style="font-size:11px;font-weight:800;color:#64748b;text-transform:uppercase;display:block;">Phone / WhatsApp</span>
        <strong style="font-size:16px;color:var(--dark);">{{ $inquiry->phone }}</strong>
        <div style="margin-top:8px;">
          <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" rel="noopener" class="btn btn-sm" style="background:#22c55e;color:#fff;">
            💬 Open WhatsApp Chat
          </a>
          <a href="tel:{{ $inquiry->phone }}" class="btn btn-outline btn-sm" style="margin-left:6px;">
            📞 Call
          </a>
        </div>
      </div>

      <div style="background:#f8fafc;border-radius:12px;padding:16px;">
        <span style="font-size:11px;font-weight:800;color:#64748b;text-transform:uppercase;display:block;">Email Address</span>
        <strong style="font-size:16px;color:var(--dark);">{{ $inquiry->email }}</strong>
        <div style="margin-top:8px;">
          <a href="mailto:{{ $inquiry->email }}" class="btn btn-outline btn-sm">✉️ Send Email</a>
        </div>
      </div>
    </div>

    <!-- Application Preferences -->
    <div style="background:#fff;border:1px solid var(--border);border-radius:14px;padding:20px;margin-bottom:28px;">
      <h3 style="font-size:14px;font-weight:800;color:var(--dark);text-transform:uppercase;margin-bottom:14px;letter-spacing:0.04em;">Application Profile</h3>
      
      <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(160px, 1fr));gap:16px;font-size:13.5px;">
        <div>
          <span style="color:#64748b;display:block;font-size:12px;">Country of Choice:</span>
          <strong>{{ $inquiry->destination ?: 'Not specified' }}</strong>
        </div>
        <div>
          <span style="color:#64748b;display:block;font-size:12px;">Service / Course Needed:</span>
          <strong>{{ $inquiry->service_interest ?: 'General Counselling' }}</strong>
        </div>
        <div>
          <span style="color:#64748b;display:block;font-size:12px;">Preferred Intake:</span>
          <strong>{{ $inquiry->preferred_intake ?: 'Flexible' }}</strong>
        </div>
        <div>
          <span style="color:#64748b;display:block;font-size:12px;">Academic Background:</span>
          <strong>{{ $inquiry->qualification ?: 'Not provided' }}</strong>
        </div>
      </div>

      @if($inquiry->message)
        <div style="margin-top:18px;border-top:1px solid var(--border);padding-top:14px;">
          <span style="color:#64748b;display:block;font-size:12px;margin-bottom:4px;">Student's Message:</span>
          <p style="font-size:14px;color:#1e293b;line-height:1.6;background:#f8fafc;padding:12px 16px;border-radius:10px;">{{ $inquiry->message }}</p>
        </div>
      @endif
    </div>

    <!-- Status Update & Admin Notes Form -->
    <form action="{{ route('admin.inquiries.status', $inquiry->id) }}" method="POST" style="background:#f8fafc;border:1px solid var(--border);border-radius:14px;padding:22px;">
      @csrf
      @method('PATCH')

      <h3 style="font-size:14px;font-weight:800;color:var(--dark);text-transform:uppercase;margin-bottom:14px;">Update Status &amp; Counselling Notes</h3>

      <div class="form-grid-2">
        <div class="form-group">
          <label class="form-label" for="status">Lead Status</label>
          <select name="status" id="status" class="form-control">
            <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>New</option>
            <option value="contacted" {{ $inquiry->status == 'contacted' ? 'selected' : '' }}>Contacted (Follow Up)</option>
            <option value="in_progress" {{ $inquiry->status == 'in_progress' ? 'selected' : '' }}>In Progress (Documents collecting)</option>
            <option value="enrolled" {{ $inquiry->status == 'enrolled' ? 'selected' : '' }}>Enrolled (Applied to University)</option>
            <option value="closed" {{ $inquiry->status == 'closed' ? 'selected' : '' }}>Closed (Completed or dropped)</option>
          </select>
        </div>

        <div class="form-group">
          <label class="form-label" for="admin_notes">Internal Counsellor Notes</label>
          <textarea name="admin_notes" id="admin_notes" rows="3" class="form-control" placeholder="e.g. Called student on WhatsApp. B.Tech 2024 passout, IELTS 7.0. Shortlisted TU Munich and RWTH Aachen...">{{ old('admin_notes', $inquiry->admin_notes) }}</textarea>
        </div>
      </div>

      <div style="display:flex;justify-content:space-between;align-items:center;">
        <button type="submit" class="btn btn-primary">Save Notes &amp; Status</button>
      </div>
    </form>

    <!-- Delete Inquiry -->
    <div style="margin-top:20px;text-align:right;">
      <form action="{{ route('admin.inquiries.destroy', $inquiry->id) }}" method="POST" onsubmit="return confirm('Permanently delete this inquiry?');" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete Inquiry Lead</button>
      </form>
    </div>
  </div>
</div>

@endsection

