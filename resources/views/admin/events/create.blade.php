@extends('admin.layouts.admin')

@section('title', 'Add New Event')
@section('page_title', 'Create Event / Seminar')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Schedule New Event</h2>
    <a href="{{ route('admin.events.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.events.store') }}" method="POST">
    @csrf

    <div class="form-group">
      <label class="form-label" for="title">Event Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Study in Germany — Free Seminar & 1:1 Counselling" required>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="type">Event Type *</label>
        <select name="type" id="type" class="form-control" required>
          <option value="seminar">Free Seminar</option>
          <option value="webinar">Live Webinar (Zoom/Google Meet)</option>
          <option value="spot">Spot Admission Day</option>
          <option value="fair">Education Fair</option>
          <option value="pre-departure">Pre-Departure Orientation</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label" for="type_label">Badge Label (Optional)</label>
        <input type="text" name="type_label" id="type_label" class="form-control" value="{{ old('type_label') }}" placeholder="e.g. Free Seminar, Spot Admission">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="event_date">Date of Event *</label>
        <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date', date('Y-m-d', strtotime('+7 days'))) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="mode">Mode *</label>
        <select name="mode" id="mode" class="form-control" required>
          <option value="offline">Offline (In-Person / Office)</option>
          <option value="online">Online (Zoom / Webinar)</option>
        </select>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="start_time">Start Time *</label>
        <input type="text" name="start_time" id="start_time" class="form-control" value="{{ old('start_time', '10:00 AM') }}" placeholder="e.g. 10:00 AM" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="end_time">End Time</label>
        <input type="text" name="end_time" id="end_time" class="form-control" value="{{ old('end_time', '1:00 PM') }}" placeholder="e.g. 1:00 PM">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="location">Location / Venue *</label>
      <input type="text" name="location" id="location" class="form-control" value="{{ old('location', 'All Land Office, Laxmanas Tower, Aluva') }}" placeholder="e.g. All Land Office, Aluva or Online · Zoom" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Event Description &amp; Agenda</label>
      <textarea name="description" id="description" rows="4" class="form-control" placeholder="Key topics covered, invited delegates, required student documents...">{{ old('description') }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="seats_available">Total Seats Available</label>
        <input type="number" name="seats_available" id="seats_available" class="form-control" value="{{ old('seats_available', 50) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="registration_link">Custom Link (Leave blank for internal booking)</label>
        <input type="text" name="registration_link" id="registration_link" class="form-control" value="{{ old('registration_link') }}" placeholder="optional custom URL">
      </div>
    </div>

    <div class="form-group">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" checked> Active / Display on Schedule
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Save Event</button>
      <a href="{{ route('admin.events.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

