@extends('admin.layouts.admin')

@section('title', 'Edit Course - ' . $course->title)
@section('page_title', 'Edit Course / Program')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Edit: {{ $course->title }}</h2>
    <a href="{{ route('admin.courses.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label class="form-label" for="title">Program / Course Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $course->title) }}" required>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="country">Country Name *</label>
        <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $course->country) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="country_code">Country Code (2 letters) *</label>
        <input type="text" name="country_code" id="country_code" class="form-control" value="{{ old('country_code', $course->country_code) }}" required>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="degree_level">Degree Level *</label>
        <input type="text" name="degree_level" id="degree_level" class="form-control" value="{{ old('degree_level', $course->degree_level) }}" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="duration">Duration *</label>
        <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration', $course->duration) }}" required>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="tuition_fee">Tuition Fees</label>
        <input type="text" name="tuition_fee" id="tuition_fee" class="form-control" value="{{ old('tuition_fee', $course->tuition_fee) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="stipend">Stipend / Part-time Earnings</label>
        <input type="text" name="stipend" id="stipend" class="form-control" value="{{ old('stipend', $course->stipend) }}">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="intake">Intakes</label>
        <input type="text" name="intake" id="intake" class="form-control" value="{{ old('intake', $course->intake) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="language_requirement">Language Requirement</label>
        <input type="text" name="language_requirement" id="language_requirement" class="form-control" value="{{ old('language_requirement', $course->language_requirement) }}">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="career_pathway">Post-Study Career &amp; PR Pathway</label>
      <input type="text" name="career_pathway" id="career_pathway" class="form-control" value="{{ old('career_pathway', $course->career_pathway) }}">
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Short Summary</label>
      <textarea name="excerpt" id="excerpt" rows="2" class="form-control">{{ old('excerpt', $course->excerpt) }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Full Description &amp; Curricula (HTML Supported)</label>
      <textarea name="description" id="description" rows="5" class="form-control">{{ old('description', $course->description) }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Image Path</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $course->image) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="image_file">Replace Image File</label>
        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div style="display:flex;gap:24px;margin-bottom:20px;">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $course->is_featured) ? 'checked' : '' }}> Featured on Homepage
      </label>
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $course->is_active) ? 'checked' : '' }}> Active / Visible
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Update Course</button>
      <a href="{{ route('admin.courses.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection

