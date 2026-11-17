@extends('admin.layouts.admin')

@section('title', 'Add New Course / Program')
@section('page_title', 'Create Study Program')

@section('content')

<div class="card" style="max-width:800px;margin:0 auto;">
  <div class="card-header">
    <h2 class="card-title">Add New Course / Program</h2>
    <a href="{{ route('admin.courses.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label class="form-label" for="title">Program / Course Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. MSc Automotive Engineering" required>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="country">Country Name *</label>
        <select name="country" id="country" class="form-control" required onchange="updateCountryCode(this)">
          <option value="Germany" data-code="DE">Germany</option>
          <option value="Canada" data-code="CA">Canada</option>
          <option value="United Kingdom" data-code="UK">United Kingdom</option>
          <option value="New Zealand" data-code="NZ">New Zealand</option>
          <option value="Other" data-code="GL">Other Country</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label" for="country_code">Country Code (2 letters) *</label>
        <input type="text" name="country_code" id="country_code" class="form-control" value="{{ old('country_code', 'DE') }}" required>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="degree_level">Degree Level *</label>
        <input type="text" name="degree_level" id="degree_level" class="form-control" value="{{ old('degree_level', 'Master\'s Degree') }}" placeholder="e.g. Bachelor's, Master's, PG Diploma, Vocational Ausbildung" required>
      </div>

      <div class="form-group">
        <label class="form-label" for="duration">Duration *</label>
        <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration', '2 Years') }}" placeholder="e.g. 1 Year, 2 Years, 3 Years" required>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="tuition_fee">Tuition Fees</label>
        <input type="text" name="tuition_fee" id="tuition_fee" class="form-control" value="{{ old('tuition_fee', '€0 (Tuition Free)') }}" placeholder="e.g. €0 (Tuition Free), CAD $16,000/yr">
      </div>

      <div class="form-group">
        <label class="form-label" for="stipend">Stipend / Part-time Earnings</label>
        <input type="text" name="stipend" id="stipend" class="form-control" value="{{ old('stipend') }}" placeholder="e.g. €1,000–€1,250/mo (for Ausbildung)">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="intake">Intakes</label>
        <input type="text" name="intake" id="intake" class="form-control" value="{{ old('intake', 'Winter (Oct) / Summer (Apr)') }}" placeholder="e.g. Sep & Jan, Oct & Apr">
      </div>

      <div class="form-group">
        <label class="form-label" for="language_requirement">Language Requirement</label>
        <input type="text" name="language_requirement" id="language_requirement" class="form-control" value="{{ old('language_requirement', 'IELTS 6.5 / German B2') }}" placeholder="e.g. IELTS 6.5 / German B2 / MOI Waiver">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="career_pathway">Post-Study Career &amp; PR Pathway</label>
      <input type="text" name="career_pathway" id="career_pathway" class="form-control" value="{{ old('career_pathway') }}" placeholder="e.g. 18-Month Job Search Visa & Fast PR in 21 Mo">
    </div>

    <div class="form-group">
      <label class="form-label" for="excerpt">Short Summary</label>
      <textarea name="excerpt" id="excerpt" rows="2" class="form-control" placeholder="Brief summary of the course...">{{ old('excerpt') }}</textarea>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Full Description &amp; Curricula (HTML Supported)</label>
      <textarea name="description" id="description" rows="5" class="form-control" placeholder="Full course background, participating universities, laboratory access...">{{ old('description') }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="image">Image Path</label>
        <input type="text" name="image" id="image" class="form-control" value="{{ old('image', 'images/dest-germany.jpg') }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="image_file">Or Upload Image File</label>
        <input type="file" name="image_file" id="image_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div style="display:flex;gap:24px;margin-bottom:20px;">
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}> Featured on Homepage
      </label>
      <label style="display:flex;align-items:center;gap:8px;font-size:13.5px;font-weight:700;color:var(--dark);cursor:pointer;">
        <input type="checkbox" name="is_active" value="1" checked> Active / Visible
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Save Course</button>
      <a href="{{ route('admin.courses.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

<script>
  function updateCountryCode(select) {
    var option = select.options[select.selectedIndex];
    var code = option.getAttribute('data-code');
    if (code) {
      document.getElementById('country_code').value = code;
    }
  }
</script>

@endsection

