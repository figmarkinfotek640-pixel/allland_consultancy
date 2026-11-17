@extends('admin.layouts.admin')

@section('title', 'Edit Event - ' . $event->title)
@section('page_title', 'Edit Event')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Edit: {{ $event->title }}</h2>
    <a href="{{ route('admin.events.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label class="form-label" for="title">Event Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="type">Event Type *</label>
        <select name="type" id="type" class="form-control" required>
          <option value="seminar" {{ old('type', $event->type) == 'seminar' ? 'selected' : '' }}>Free Seminar</option>
          <option value="webinar" {{ old('type', $event->type) == 'webinar' ? 'selected' : '' }}>Live Webinar (Zoom/Meet)</option>
          <option value="spot" {{ old('type', $event->type) == 'spot' ? 'selected' : '' }}>Spot Admission Day</option>
          <option value="fair" {{ old('type', $event->type) == 'fair' ? 'selected' : '' }}>Education Fair</option>
          <option value="pre-departure" {{ old('type', $event->type) == 'pre-departure' ? 'selected' : '' }}>Pre-Departure Orientation</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label" for="type_label">Badge Label</label>
        <input type="text" name="type_label" id="type_label" class="form-control" value="{{ old('type_label', $event->type_label) }}">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="event_date">Date of Event *</label>
        <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date', $event->event_date->format('Y-m-d')) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="mode">Mode *</label>
        <select name="mode" id="mode" class="form-control" required>
          <option value="offline" {{ old('mode', $event->mode) == 'offline' ? 'selected' : '' }}>Offline (In-Person / Office)</option>
          <option value="online" {{ old('mode', $event->mode) == 'online' ? 'selected' : '' }}>Online (Zoom / Webinar)</option>
        </select>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="start_time">Start Time *</label>
        <input type="text" name="start_time" id="start_time" class="form-control" value="{{ old('start_time', $event->start_time) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="end_time">End Time</label>
        <input type="text" name="end_time" id="end_time" class="form-control" value="{{ old('end_time', $event->end_time) }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="location">Location / Venue *</label>
      <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $event->location) }}" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Event Description &amp; Agenda</label>
      <textarea name="description" id="description" rows="4" class="form-control">{{ old('description', $event->description) }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="seats_available">Total Seats Available</label>
        <input type="number" name="seats_available" id="seats_available" class="form-control" value="{{ old('seats_available', $event->seats_available) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="registration_link">Custom Link</label>
        <input type="text" name="registration_link" id="registration_link" class="form-control" value="{{ old('registration_link', $event->registration_link) }}">
      </div>
    </div>

    <div class="form-group">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $event->is_active) ? 'checked' : '' }}> Active / Display on Schedule
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Update Event</button>
      <a href="{{ route('admin.events.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

