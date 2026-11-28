@extends('admin.layouts.admin')

@section('title', 'Edit Instagram Reel')
@section('page_title', 'Edit Instagram Reel')

@section('content')

<div class="card" style="max-width:850px;margin:0 auto;">
  <div class="card-header">
    <div>
      <h2 class="card-title">Edit Reel: {{ $reel->title }}</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Update details, video links, or publication status</p>
    </div>
    <a href="{{ route('admin.reels.index') }}" class="btn btn-outline btn-sm">← Back to List</a>
  </div>

  @if($errors->any())
    <div style="background:#FEF2F2;border:1px solid #FCA5A5;color:#991B1B;padding:12px 16px;border-radius:10px;margin-bottom:20px;font-size:13px;">
      <strong style="display:block;margin-bottom:4px;">Please correct the errors below:</strong>
      <ul style="margin:0;padding-left:18px;">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.reels.update', $reel->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label class="form-label" for="title">Reel Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $reel->title) }}" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="reel_url">Instagram Reel URL *</label>
      <input type="url" name="reel_url" id="reel_url" class="form-control" value="{{ old('reel_url', $reel->reel_url) }}" required>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Description / Caption</label>
      <textarea name="description" id="description" rows="3" class="form-control">{{ old('description', $reel->description) }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="location_tag">Location / Institution Tag</label>
        <input type="text" name="location_tag" id="location_tag" class="form-control" value="{{ old('location_tag', $reel->location_tag) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="display_order">Display Order</label>
        <input type="number" name="display_order" id="display_order" class="form-control" value="{{ old('display_order', $reel->display_order) }}" min="0">
      </div>
    </div>

    <div style="display:flex;gap:18px;align-items:flex-start;margin-bottom:18px;padding:14px;background:#F8FAFC;border:1px solid #E2E8F0;border-radius:12px;">
      <div style="width:70px;height:100px;border-radius:8px;overflow:hidden;background:#0F172A;flex-shrink:0;">
        <img src="{{ $reel->thumbnail_url }}" alt="Current cover" style="width:100%;height:100%;object-fit:cover;" onerror="this.onerror=null;this.src='{{ asset('images/student-1.jpg') }}';">
      </div>
      <div style="flex:1;">
        <div style="font-weight:700;font-size:13px;color:#1E293B;margin-bottom:3px;">Current Thumbnail</div>
        <div style="font-size:12px;color:#64748B;margin-bottom:8px;word-break:break-all;">{{ $reel->thumbnail ?? 'Default cover' }}</div>
        <div style="font-size:11.5px;color:#94A3B8;">To replace, choose a new file below or enter a new path.</div>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="thumbnail">Thumbnail Image Path or URL</label>
        <input type="text" name="thumbnail" id="thumbnail" class="form-control" value="{{ old('thumbnail', $reel->thumbnail) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="thumbnail_file">Or Upload New Thumbnail</label>
        <input type="file" name="thumbnail_file" id="thumbnail_file" class="form-control" accept="image/*">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="video_url">Video Path or Direct MP4 URL</label>
        <input type="text" name="video_url" id="video_url" class="form-control" value="{{ old('video_url', $reel->video_url) }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="video_file">Or Upload New Video File</label>
        <input type="file" name="video_file" id="video_file" class="form-control" accept="video/mp4,video/webm">
      </div>
    </div>

    <div class="form-group" style="margin-top:10px;">
      <label style="display:flex;align-items:center;gap:10px;font-size:14px;font-weight:700;color:var(--dark);cursor:pointer;background:#F8FAFC;border:1px solid #E2E8F0;padding:12px 16px;border-radius:10px;">
        <input type="checkbox" name="status" value="1" {{ old('status', $reel->status) ? 'checked' : '' }} style="width:18px;height:18px;accent-color:var(--primary);">
        <span>Active &amp; Published (Make this reel visible on website)</span>
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Update Reel</button>
      <a href="{{ route('admin.reels.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection
