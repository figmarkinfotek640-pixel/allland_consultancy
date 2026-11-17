@extends('admin.layouts.admin')

@section('title', 'Edit Blog - ' . $blog->title)
@section('page_title', 'Edit Blog Article')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Edit Article: {{ Str::limit($blog->title, 40) }}</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label class="form-label" for="title">Article Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="category">Category *</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $blog->category) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="read_time">Estimated Read Time</label>
        <input type="text" name="read_time" id="read_time" class="form-control" value="{{ old('read_time', $blog->read_time) }}">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="author">Author Name</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $blog->author) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="slug">URL Slug *</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $blog->slug) }}" required>
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Excerpt / Preview Summary *</label>
      <textarea name="excerpt" id="excerpt" rows="2" class="form-control" required>{{ old('excerpt', $blog->excerpt) }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="content">Full Article Content (HTML Supported) *</label>
      <textarea name="content" id="content" rows="10" class="form-control" required>{{ old('content', $blog->content) }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Featured Image Path</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $blog->image) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="image_file">Replace Image</label>
        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div class="form-group">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}> Publish and display publicly
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Update Article</button>
      <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

