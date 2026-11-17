@extends('admin.layouts.admin')

@section('title', 'Add New Service')
@section('page_title', 'Create Service')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Add New Service</h2>
    <a href="{{ route('admin.services.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="title">Service Title *</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Visa Assistance & Mock Interviews" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="icon">Icon (Emoji or Code)</label>
        <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon', '🛂') }}" placeholder="e.g. 🛂, 🎓, 📜">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="slug">Custom URL Slug (Optional)</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" placeholder="auto-generated if empty">
      </div>

      <div class="form-group">
        <label class="form-label" for="order">Display Order</label>
        <input type="number" name="order" id="order" class="form-control" value="{{ old('order', 0) }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Brief Summary / Excerpt *</label>
      <textarea name="excerpt" id="excerpt" rows="2" class="form-control" placeholder="Short description for homepage and listings..." required>{{ old('excerpt') }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Detailed Description (HTML Supported)</label>
      <textarea name="description" id="description" rows="6" class="form-control" placeholder="Full service explanation, procedures, requirements...">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="features_text">Feature Highlights (One per line)</label>
      <textarea name="features_text" id="features_text" rows="4" class="form-control" placeholder="German National Visa & APS guidance&#10;Canada Study Permit & SDS filing&#10;UK Student Visa & CAS verification">{{ old('features_text') }}</textarea>
      <small style="color:#64748b;font-size:11.5px;">Each line will appear as a checkmark bullet point on service cards.</small>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Image Path</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', 'images/service-visa.jpg') }}" placeholder="e.g. images/service-visa.jpg">
      </div>

      <div class="form-group">
        <label class="form-label" for="image_file">Or Upload Image File</label>
        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div class="form-group">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" checked> Active and visible on website
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Save Service</button>
      <a href="{{ route('admin.services.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

