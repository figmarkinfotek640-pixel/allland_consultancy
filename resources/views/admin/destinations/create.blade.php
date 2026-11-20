@extends('admin.layouts.admin')

@section('title', 'Add New Destination')
@section('page_title', 'Create Study Abroad Destination')

@section('content')

<div class="card" style="max-width:920px;margin:0 auto;">
  <div class="card-header">
    <div>
      <h2 class="card-title">Add New Country Destination</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">This creates a dynamic country page and dropdown entry in the navbar</p>
    </div>
    <a href="{{ route('admin.destinations.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.destinations.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="name">Country Name *</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="e.g. France, Ireland, Australia" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="country_code">Country Code (2-4 letters) *</label>
        <input type="text" name="country_code" id="country_code" class="form-control" value="{{ old('country_code') }}" placeholder="e.g. FR, IE, AU" required style="text-transform:uppercase;">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="flag">Flag Emoji / Icon</label>
        <input type="text" name="flag" id="flag" class="form-control" value="{{ old('flag', '🌐') }}" placeholder="e.g. 🇫🇷, 🇮🇪, 🇦🇺">
      </div>

      <div class="form-group">
        <label class="form-label" for="slug">Custom URL Slug (Optional)</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" placeholder="auto-generated from name if left empty">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="tab_badge">Short Tab Badge</label>
        <input type="text" name="tab_badge" id="tab_badge" class="form-control" value="{{ old('tab_badge') }}" placeholder="e.g. 2-Yr PSW, Top Ranked, Fast PR">
      </div>

      <div class="form-group">
        <label class="form-label" for="hero_badge">Prominent Hero Badge</label>
        <input type="text" name="hero_badge" id="hero_badge" class="form-control" value="{{ old('hero_badge') }}" placeholder="e.g. 2-YEAR POST STUDY WORK">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="eyebrow">Eyebrow / Header Tagline</label>
      <input type="text" name="eyebrow" id="eyebrow" class="form-control" value="{{ old('eyebrow') }}" placeholder="e.g. Europe’s Cultural & Innovation Leader">
    </div>

    <div class="form-group">
      <label class="form-label" for="title">Hero Title</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Study in France — Affordable Degrees & Career Gateways">
    </div>

    <div class="form-group">
      <label class="form-label" for="blurb">Short Summary / Blurb *</label>
      <textarea name="blurb" id="blurb" rows="3" class="form-control" placeholder="Compelling 2-3 sentence overview of why students should study here..." required>{{ old('blurb') }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Comprehensive Study Guide (HTML Allowed)</label>
      <textarea name="description" id="description" rows="8" class="form-control" placeholder="Detailed guide on higher education system, university rankings, post-study work regulations, and permanent residency pathways...">{{ old('description') }}</textarea>
    </div>

    <!-- Dynamic Stats Definition -->
    <div class="form-group">
      <label class="form-label" for="stats_text">
        Quick Key Stats (One per line: <code>Value | Label</code>)
      </label>
      <textarea name="stats_text" id="stats_text" rows="4" class="form-control" placeholder="€0 / Year | Public Tuition&#10;18 Months | Job Search Visa&#10;21–24 Mo | Fast PR Pathway&#10;20 Hrs/Wk | Part-Time Work">{{ old('stats_text') }}</textarea>
      <small style="color:#64748b;font-size:11.5px;">Format each stat as: <strong>Big Value | Small Label</strong> (e.g. <code>Up to 3 Yrs | PGWP Work Permit</code>)</small>
    </div>

    <!-- Key Highlights / Advantages Definition -->
    <div class="form-group">
      <label class="form-label" for="features_text">
        Key Advantages / Feature Cards (One per line: <code>Card Title | Card Description</code>)
      </label>
      <textarea name="features_text" id="features_text" rows="4" class="form-control" placeholder="Tuition-Free Higher Education | Over 400 state-funded universities offer English-taught programs.&#10;Generous Job Search Visa | Graduates receive 1.5 years to secure employment.">{{ old('features_text') }}</textarea>
    </div>

    <!-- Popular Specialization Tags -->
    <div class="form-group">
      <label class="form-label" for="popular_courses_text">Popular Fields of Study (Comma or line separated)</label>
      <input type="text" name="popular_courses_text" id="popular_courses_text" class="form-control" value="{{ old('popular_courses_text') }}" placeholder="Computer Science, Mechanical Eng., Business Analytics, Luxury Brand Mgmt">
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="living_cost">Monthly Living Cost Estimate</label>
        <input type="text" name="living_cost" id="living_cost" class="form-control" value="{{ old('living_cost') }}" placeholder="e.g. €850 – €1,100 / month">
      </div>

      <div class="form-group">
        <label class="form-label" for="post_study_work">Post-Study Work Permit</label>
        <input type="text" name="post_study_work" id="post_study_work" class="form-control" value="{{ old('post_study_work') }}" placeholder="e.g. 2 Years Graduate Route, Up to 3 Years PGWP">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="requirements">Key Eligibility &amp; Admission Checklist</label>
      <textarea name="requirements" id="requirements" rows="3" class="form-control" placeholder="e.g. Minimum 60% in Bachelor's, IELTS 6.5, Financial proof via Blocked Account/GIC...">{{ old('requirements') }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Featured Card Image Path or URL</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', 'images/dest-germany.jpg') }}" placeholder="images/dest-germany.jpg">
        <div style="margin-top:8px;">
          <input type="file" name="image_file" class="form-control" accept="image/*">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="banner_image">Hero Banner Image Path (Optional)</label>
        <input type="text" name="banner_image" id="banner_image" class="form-control" value="{{ old('banner_image') }}" placeholder="images/banner-02.jpg">
        <div style="margin-top:8px;">
          <input type="file" name="banner_file" class="form-control" accept="image/*">
        </div>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="order">Display Sort Order</label>
        <input type="number" name="order" id="order" class="form-control" value="{{ old('order', 1) }}">
      </div>

      <div class="form-group" style="display:flex;align-items:center;margin-top:28px;">
        <label style="display:flex;align-items:center;gap:10px;cursor:pointer;font-weight:700;">
          <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="width:18px;height:18px;">
          <span>Show on Website &amp; Navbar Dropdown</span>
        </label>
      </div>
    </div>

    <div style="margin-top:24px;display:flex;gap:12px;">
      <button type="submit" class="btn btn-primary">Save Destination</button>
      <a href="{{ route('admin.destinations.index') }}" class="btn btn-outline">Cancel</a>
    </div>
  </form>
</div>

@endsection
