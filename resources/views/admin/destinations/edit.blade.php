@extends('admin.layouts.admin')

@section('title', 'Edit ' . $destination->name)
@section('page_title', 'Edit Destination: ' . $destination->name)

@section('content')

<div class="card" style="max-width:920px;margin:0 auto;">
  <div class="card-header">
    <div>
      <h2 class="card-title">Edit {{ $destination->name }} {{ $destination->flag }}</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">URL: <code>/study-abroad/{{ $destination->slug }}</code></p>
    </div>
    <div style="display:flex;gap:10px;">
      <a href="{{ route('destinations.show', $destination->slug) }}" target="_blank" class="btn btn-outline btn-sm">Preview Live ↗</a>
      <a href="{{ route('admin.destinations.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
    </div>
  </div>

  <form action="{{ route('admin.destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="name">Country Name *</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $destination->name) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="country_code">Country Code (2-4 letters) *</label>
        <input type="text" name="country_code" id="country_code" class="form-control" value="{{ old('country_code', $destination->country_code) }}" required style="text-transform:uppercase;">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="flag">Flag Emoji / Icon</label>
        <input type="text" name="flag" id="flag" class="form-control" value="{{ old('flag', $destination->flag) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="slug">Custom URL Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $destination->slug) }}">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="tab_badge">Short Tab Badge</label>
        <input type="text" name="tab_badge" id="tab_badge" class="form-control" value="{{ old('tab_badge', $destination->tab_badge) }}" placeholder="e.g. Zero Tuition, 3-Yr PGWP">
      </div>

      <div class="form-group">
        <label class="form-label" for="hero_badge">Prominent Hero Badge</label>
        <input type="text" name="hero_badge" id="hero_badge" class="form-control" value="{{ old('hero_badge', $destination->hero_badge) }}" placeholder="e.g. ZERO TUITION FEES">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="eyebrow">Eyebrow / Header Tagline</label>
      <input type="text" name="eyebrow" id="eyebrow" class="form-control" value="{{ old('eyebrow', $destination->eyebrow) }}">
    </div>

    <div class="form-group">
      <label class="form-label" for="title">Hero Title</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $destination->title) }}">
    </div>

    <div class="form-group">
      <label class="form-label" for="blurb">Short Summary / Blurb *</label>
      <textarea name="blurb" id="blurb" rows="3" class="form-control" required>{{ old('blurb', $destination->blurb) }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Comprehensive Study Guide (HTML Allowed)</label>
      <textarea name="description" id="description" rows="8" class="form-control">{{ old('description', $destination->description) }}</textarea>
    </div>

    <!-- Quick Stats -->
    @php
      $statsLines = '';
      if (!empty($destination->stats) && is_array($destination->stats)) {
          foreach ($destination->stats as $st) {
              $statsLines .= ($st['val'] ?? '') . ' | ' . ($st['lbl'] ?? '') . "\n";
          }
      }
    @endphp
    <div class="form-group">
      <label class="form-label" for="stats_text">
        Quick Key Stats (One per line: <code>Value | Label</code>)
      </label>
      <textarea name="stats_text" id="stats_text" rows="4" class="form-control">{{ old('stats_text', trim($statsLines)) }}</textarea>
      <small style="color:#64748b;font-size:11.5px;">Format each stat as: <strong>Big Value | Small Label</strong> (e.g. <code>€0 / Year | Public Tuition</code>)</small>
    </div>

    <!-- Key Advantages / Feature Cards -->
    @php
      $featLines = '';
      if (!empty($destination->features) && is_array($destination->features)) {
          foreach ($destination->features as $ft) {
              $featLines .= ($ft['title'] ?? '') . ' | ' . ($ft['desc'] ?? '') . "\n";
          }
      }
    @endphp
    <div class="form-group">
      <label class="form-label" for="features_text">
        Key Advantages / Feature Cards (One per line: <code>Card Title | Card Description</code>)
      </label>
      <textarea name="features_text" id="features_text" rows="4" class="form-control">{{ old('features_text', trim($featLines)) }}</textarea>
    </div>

    <!-- Popular Specialization Tags -->
    @php
      $popTags = is_array($destination->popular_courses) ? implode(', ', $destination->popular_courses) : '';
    @endphp
    <div class="form-group">
      <label class="form-label" for="popular_courses_text">Popular Fields of Study (Comma separated)</label>
      <input type="text" name="popular_courses_text" id="popular_courses_text" class="form-control" value="{{ old('popular_courses_text', $popTags) }}">
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="living_cost">Monthly Living Cost Estimate</label>
        <input type="text" name="living_cost" id="living_cost" class="form-control" value="{{ old('living_cost', $destination->living_cost) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="post_study_work">Post-Study Work Permit</label>
        <input type="text" name="post_study_work" id="post_study_work" class="form-control" value="{{ old('post_study_work', $destination->post_study_work) }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="requirements">Key Eligibility &amp; Admission Checklist</label>
      <textarea name="requirements" id="requirements" rows="3" class="form-control">{{ old('requirements', $destination->requirements) }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Featured Card Image</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $destination->image) }}">
        @if($destination->image)
          <div style="margin-top:6px;display:flex;align-items:center;gap:10px;">
            <img src="{{ $destination->image_url }}" alt="" style="height:44px;border-radius:6px;border:1px solid #cbd5e1;">
            <span style="font-size:11.5px;color:#64748b;">Current image preview</span>
          </div>
        @endif
        <div style="margin-top:8px;">
          <input type="file" name="image_file" class="form-control" accept="image/*">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="banner_image">Hero Banner Image (Optional)</label>
        <input type="text" name="banner_image" id="banner_image" class="form-control" value="{{ old('banner_image', $destination->banner_image) }}">
        <div style="margin-top:8px;">
          <input type="file" name="banner_file" class="form-control" accept="image/*">
        </div>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="order">Display Sort Order</label>
        <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $destination->order) }}">
      </div>

      <div class="form-group" style="display:flex;align-items:center;margin-top:28px;">
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;font-weight:700;">
          <input type="checkbox" name="is_active" value="1" {{ old('is_active', $destination->is_active) ? 'checked' : '' }} style="width:18px;height:18px;">
          <span>Show on Website &amp; Navbar Dropdown</span>
        </label>
      </div>
    </div>

    <div style="margin-top:24px;display:flex;gap:12px;">
      <button type="submit" class="btn btn-primary">Update Destination</button>
      <a href="{{ route('admin.destinations.index') }}" class="btn btn-outline">Cancel</a>
    </div>
  </form>
</div>

@endsection
