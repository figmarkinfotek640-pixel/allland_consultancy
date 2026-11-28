@extends('admin.layouts.admin')

@section('title', 'Instagram Reels Management')
@section('page_title', 'Instagram Reels Module')

@section('content')

<!-- Metric Summary Cards -->
<div class="admin-metrics-grid" style="margin-bottom:24px;">
  <div class="card" style="padding:18px 20px;margin-bottom:0;display:flex;align-items:center;gap:16px;">
    <div style="width:46px;height:46px;border-radius:12px;background:#F0F9FF;color:#0284C7;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
      📱
    </div>
    <div>
      <div style="font-size:12px;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Total Reels</div>
      <div style="font-size:24px;font-weight:800;color:#1E293B;line-height:1.2;">{{ $totalCount }}</div>
    </div>
  </div>

  <div class="card" style="padding:18px 20px;margin-bottom:0;display:flex;align-items:center;gap:16px;">
    <div style="width:46px;height:46px;border-radius:12px;background:#ECFDF5;color:#059669;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
      ✅
    </div>
    <div>
      <div style="font-size:12px;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Active / Live</div>
      <div style="font-size:24px;font-weight:800;color:#059669;line-height:1.2;">{{ $activeCount }}</div>
    </div>
  </div>

  <div class="card" style="padding:18px 20px;margin-bottom:0;display:flex;align-items:center;gap:16px;">
    <div style="width:46px;height:46px;border-radius:12px;background:#FFFBEB;color:#D97706;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">
      ⏸️
    </div>
    <div>
      <div style="font-size:12px;font-weight:700;color:#64748B;text-transform:uppercase;letter-spacing:0.04em;">Inactive / Drafts</div>
      <div style="font-size:24px;font-weight:800;color:#D97706;line-height:1.2;">{{ $inactiveCount }}</div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" style="flex-wrap:wrap;gap:14px;">
    <div>
      <h2 class="card-title">All Instagram Reels</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Add, edit, reorder, or toggle live status of Instagram Reels displayed across the website</p>
    </div>
    <div style="display:flex;gap:10px;flex-wrap:wrap;">
      <a href="{{ route('admin.reels.create') }}" class="btn btn-primary">+ Add New Reel</a>
    </div>
  </div>

  <!-- Filter & Search Bar -->
  <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;margin-bottom:20px;padding-bottom:16px;border-bottom:1px solid var(--border);">
    <div class="admin-filter-bar">
      <a href="{{ route('admin.reels.index') }}" class="btn btn-sm {{ !request('status') ? 'btn-primary' : 'btn-outline' }}">All ({{ $totalCount }})</a>
      <a href="{{ route('admin.reels.index', ['status' => 'active']) }}" class="btn btn-sm {{ request('status') === 'active' ? 'btn-primary' : 'btn-outline' }}">Active ({{ $activeCount }})</a>
      <a href="{{ route('admin.reels.index', ['status' => 'inactive']) }}" class="btn btn-sm {{ request('status') === 'inactive' ? 'btn-primary' : 'btn-outline' }}">Inactive ({{ $inactiveCount }})</a>
    </div>

    <form method="GET" action="{{ route('admin.reels.index') }}" style="display:flex;gap:8px;">
      @if(request('status'))
        <input type="hidden" name="status" value="{{ request('status') }}">
      @endif
      <input type="text" name="search" class="form-control" style="padding:6px 12px;font-size:13px;width:220px;" placeholder="Search title or tag..." value="{{ request('search') }}">
      <button type="submit" class="btn btn-outline btn-sm">Search</button>
      @if(request('search'))
        <a href="{{ route('admin.reels.index', request('status') ? ['status' => request('status')] : []) }}" class="btn btn-outline btn-sm" title="Clear search">✕</a>
      @endif
    </form>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th style="width:70px;">Media</th>
          <th>Title &amp; Caption</th>
          <th>Location / Tag</th>
          <th style="width:140px;">Instagram Link</th>
          <th style="width:80px;text-align:center;">Order</th>
          <th style="width:110px;text-align:center;">Status</th>
          <th style="width:170px;text-align:right;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($reels as $reel)
          <tr>
            <td>
              <div style="width:52px;height:72px;border-radius:8px;overflow:hidden;background:#0F172A;position:relative;box-shadow:0 2px 6px rgba(0,0,0,0.12);flex-shrink:0;">
                <img src="{{ $reel->thumbnail_url }}" alt="{{ $reel->title }}" style="width:100%;height:100%;object-fit:cover;" onerror="this.onerror=null;this.src='{{ asset('images/student-1.jpg') }}';">
                <div style="position:absolute;bottom:3px;right:3px;background:rgba(0,0,0,0.6);border-radius:4px;padding:1px 3px;font-size:9px;color:#fff;line-height:1;">
                  ▶
                </div>
              </div>
            </td>
            <td>
              <strong style="color:var(--dark);font-size:14px;display:block;margin-bottom:3px;">{{ $reel->title }}</strong>
              @if($reel->description)
                <div style="font-size:12px;color:#64748B;line-height:1.4;">{{ Str::limit($reel->description, 75) }}</div>
              @endif
            </td>
            <td>
              @if($reel->location_tag)
                <span class="badge badge-info" style="font-size:11px;padding:3px 8px;">{{ $reel->location_tag }}</span>
              @else
                <span style="color:#94A3B8;font-size:12px;">—</span>
              @endif
            </td>
            <td>
              <a href="{{ $reel->reel_url }}" target="_blank" rel="noopener noreferrer" style="font-size:12px;color:#0284C7;text-decoration:none;display:inline-flex;align-items:center;gap:4px;word-break:break-all;">
                <span>View Reel</span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/></svg>
              </a>
            </td>
            <td style="text-align:center;">
              <span style="display:inline-block;padding:2px 8px;border-radius:6px;background:#F1F5F9;font-weight:700;font-size:12px;color:#334155;">
                {{ $reel->display_order }}
              </span>
            </td>
            <td style="text-align:center;">
              <form action="{{ route('admin.reels.toggle', $reel->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('PATCH')
                <button type="submit" class="badge {{ $reel->status ? 'badge-success' : 'badge-warning' }}" style="cursor:pointer;border:none;font-size:11px;padding:4px 9px;" title="Click to toggle status">
                  {{ $reel->status ? 'Active' : 'Inactive' }}
                </button>
              </form>
            </td>
            <td style="text-align:right;">
              <div style="display:inline-flex;gap:6px;align-items:center;">
                <a href="{{ route('admin.reels.edit', $reel->id) }}" class="btn btn-primary btn-sm" style="padding:5px 12px;font-size:12px;">Edit</a>
                <form action="{{ route('admin.reels.destroy', $reel->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Instagram reel?');" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" style="padding:5px 10px;font-size:12px;">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" style="text-align:center;padding:45px 20px;color:#64748B;">
              <div style="font-size:36px;margin-bottom:8px;">📱</div>
              <div style="font-weight:700;font-size:15px;color:#1E293B;margin-bottom:4px;">No Instagram Reels found</div>
              <div style="font-size:13px;color:#94A3B8;margin-bottom:16px;">Add student reels, visa celebration clips, and campus tours to engage website visitors.</div>
              <a href="{{ route('admin.reels.create') }}" class="btn btn-primary btn-sm">+ Add Your First Reel</a>
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  @if($reels->hasPages())
    <div style="margin-top:20px;padding-top:14px;border-top:1px solid var(--border);">
      {{ $reels->links() }}
    </div>
  @endif
</div>

@endsection
