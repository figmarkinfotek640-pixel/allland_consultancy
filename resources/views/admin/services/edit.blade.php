@extends('admin.layouts.admin')

@section('title', 'Edit Service - ' . $service->title)
@section('page_title', 'Edit Service')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Edit: {{ $service->title }}</h2>
    <a href="{{ route('admin.services.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="title">Service Title *</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $service->title) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="icon">Icon (Emoji or Code)</label>
        <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon', $service->icon) }}">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="slug">URL Slug *</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $service->slug) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="order">Display Order</label>
        <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $service->order) }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Brief Summary / Excerpt *</label>
      <textarea name="excerpt" id="excerpt" rows="2" class="form-control" required>{{ old('excerpt', $service->excerpt) }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Detailed Description (HTML Supported)</label>
      <textarea name="description" id="description" rows="6" class="form-control">{{ old('description', $service->description) }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="features_text">Feature Highlights (One per line)</label>
      @php
        $featuresString = is_array($service->features) ? implode("\n", $service->features) : '';
      @endphp
      <textarea name="features_text" id="features_text" rows="4" class="form-control">{{ old('features_text', $featuresString) }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Image Path</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $service->image) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="image_file">Replace Image</label>
        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div class="form-group">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}> Active and visible on website
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Update Service</button>
      <a href="{{ route('admin.services.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

