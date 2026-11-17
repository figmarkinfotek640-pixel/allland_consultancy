@extends('admin.layouts.admin')

@section('title', 'Write New Blog Article')
@section('page_title', 'Create Blog Article')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Publish New Blog Article</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label class="form-label" for="title">Article Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Complete Guide to German Blocked Accounts in 2026/2027" required>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="category">Category *</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ old('category', 'Study Abroad Guide') }}" placeholder="e.g. Germany • Visa Guide, Healthcare Placement" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="read_time">Estimated Read Time</label>
        <input type="text" name="read_time" id="read_time" class="form-control" value="{{ old('read_time', '5 min read') }}" placeholder="e.g. 6 min read">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="author">Author Name</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ old('author', 'All Land Senior Counsellor') }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="published_at">Publication Date</label>
        <input type="datetime-local" name="published_at" id="published_at" class="form-control" value="{{ date('Y-m-d\TH:i') }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Excerpt / Preview Summary *</label>
      <textarea name="excerpt" id="excerpt" rows="2" class="form-control" placeholder="Short 1-2 sentence overview for cards..." required>{{ old('excerpt') }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="content">Full Article Content (HTML Supported) *</label>
      <textarea name="content" id="content" rows="10" class="form-control" placeholder="Write full article here. Supports paragraphs, headings <h3>, lists <ul> <li>, and formatting..." required>{{ old('content') }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Featured Image Path</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', 'images/gallery-germany-tech.jpg') }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="image_file">Or Upload Image File</label>
        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div class="form-group">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_published" value="1" checked> Publish immediately and display publicly
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Publish Article</button>
      <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

