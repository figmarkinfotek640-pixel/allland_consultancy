@extends('admin.layouts.admin')

@section('title', 'Add New Instagram Reel')
@section('page_title', 'Create Instagram Reel')

@section('content')

<div class="card" style="max-width:850px;margin:0 auto;">
  <div class="card-header">
    <div>
      <h2 class="card-title">Add New Instagram Reel</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Publish a new reel to showcase on the homepage video slider</p>
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

  <form action="{{ route('admin.reels.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label class="form-label" for="title">Reel Title *</label>
      <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. Germany Visa Celebration • Technical University Munich" required>
      <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">Descriptive title for the video reel card</div>
    </div>

    <div class="form-group">
      <label class="form-label" for="reel_url">Instagram Reel URL *</label>
      <input type="url" name="reel_url" id="reel_url" class="form-control" value="{{ old('reel_url') }}" placeholder="https://www.instagram.com/reel/C..." required>
      <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">Full link to the reel or post on Instagram (e.g. https://www.instagram.com/reel/...)</div>
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Description / Caption</label>
      <textarea name="description" id="description" rows="3" class="form-control" placeholder="Write student feedback, university details, or reel caption here...">{{ old('description') }}</textarea>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="location_tag">Location / Institution Tag</label>
        <input type="text" name="location_tag" id="location_tag" class="form-control" value="{{ old('location_tag', 'Germany • Munich') }}" placeholder="e.g. Germany • Munich or UK • London">
      </div>

      <div class="form-group">
        <label class="form-label" for="display_order">Display Order</label>
        <input type="number" name="display_order" id="display_order" class="form-control" value="{{ old('display_order', 1) }}" min="0" placeholder="0, 1, 2...">
        <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">Lower numbers appear first in the reel slider</div>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="likes_count">Display Likes Count</label>
        <input type="text" name="likes_count" id="likes_count" class="form-control" value="{{ old('likes_count', '1.4K') }}" placeholder="e.g. 1.4K, 850">
      </div>

      <div class="form-group">
        <label class="form-label" for="comments_count">Display Comments Count</label>
        <input type="text" name="comments_count" id="comments_count" class="form-control" value="{{ old('comments_count', '48') }}" placeholder="e.g. 48, 120">
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="thumbnail">Thumbnail Image Path or URL</label>
        <input type="text" name="thumbnail" id="thumbnail" class="form-control" value="{{ old('thumbnail', 'images/student-1.jpg') }}" placeholder="images/student-1.jpg or https://...">
        <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">Existing asset path or external image URL</div>
      </div>

      <div class="form-group">
        <label class="form-label" for="thumbnail_file">Or Upload Custom Thumbnail</label>
        <input type="file" name="thumbnail_file" id="thumbnail_file" class="form-control" accept="image/*">
        <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">Recommended: 9:16 vertical cover image (JPG, PNG, WebP)</div>
      </div>
    </div>

    <div class="form-grid-2">
      <div class="form-group">
        <label class="form-label" for="video_url">Video Path or Direct MP4 URL</label>
        <input type="text" name="video_url" id="video_url" class="form-control" value="{{ old('video_url', 'videos/banner-video.mp4') }}" placeholder="videos/banner-video.mp4">
        <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">For website hover playback preview</div>
      </div>

      <div class="form-group">
        <label class="form-label" for="video_file">Or Upload Short MP4 Clip</label>
        <input type="file" name="video_file" id="video_file" class="form-control" accept="video/mp4,video/webm">
        <div style="font-size:11.5px;color:#94a3b8;margin-top:4px;">Optional short vertical video preview (max 25MB)</div>
      </div>
    </div>

    <div class="form-group" style="margin-top:10px;">
      <label style="display:flex;align-items:center;gap:10px;font-size:14px;font-weight:700;color:var(--dark);cursor:pointer;background:#F8FAFC;border:1px solid #E2E8F0;padding:12px 16px;border-radius:10px;">
        <input type="checkbox" name="status" value="1" {{ old('status', '1') ? 'checked' : '' }} style="width:18px;height:18px;accent-color:var(--primary);">
        <span>Active &amp; Published (Make this reel visible on website)</span>
      </label>
    </div>

    <div style="display:flex;gap:12px;margin-top:28px;">
      <button type="submit" class="btn btn-primary" style="padding:12px 28px;">Save &amp; Publish Reel</button>
      <a href="{{ route('admin.reels.index') }}" class="btn btn-outline" style="padding:12px 20px;">Cancel</a>
    </div>
  </form>
</div>

@endsection
