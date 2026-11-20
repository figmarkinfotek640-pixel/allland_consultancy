@extends('admin.layouts.admin')

@section('title', 'Destinations Management')
@section('page_title', 'Study Abroad Destinations')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Study Abroad Destinations</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Manage country hubs, navbar dropdown sublinks, and dynamic detail pages</p>
    </div>
    <a href="{{ route('admin.destinations.create') }}" class="btn btn-primary">+ Add New Country</a>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Flag</th>
          <th>Country Name</th>
          <th>Code / Slug</th>
          <th>Badges</th>
          <th>Order</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($destinations as $dest)
          <tr>
            <td style="font-size:24px;">{{ $dest->flag ?: '🌐' }}</td>
            <td>
              <strong style="color:var(--dark);font-size:15px;">{{ $dest->name }}</strong>
              <div style="font-size:12px;color:#64748b;">{{ Str::limit($dest->title, 60) }}</div>
            </td>
            <td>
              <code>{{ $dest->country_code }}</code>
              <div style="font-size:11px;color:#64748b;margin-top:2px;">/study-abroad/{{ $dest->slug }}</div>
            </td>
            <td>
              @if($dest->tab_badge)
                <span class="badge" style="background:#E0F2FE;color:#0369A1;">{{ $dest->tab_badge }}</span>
              @endif
              @if($dest->hero_badge)
                <span class="badge" style="background:#FEF3C7;color:#92400E;">{{ $dest->hero_badge }}</span>
              @endif
            </td>
            <td>{{ $dest->order }}</td>
            <td>
              @if($dest->is_active)
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Hidden</span>
              @endif
            </td>
            <td>
              <div style="display:flex;gap:8px;">
                <a href="{{ route('destinations.show', $dest->slug) }}" target="_blank" class="btn btn-outline btn-sm">Preview ↗</a>
                <a href="{{ route('admin.destinations.edit', $dest->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin.destinations.destroy', $dest->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete {{ $dest->name }}?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" style="text-align:center;padding:30px;color:#64748b;">No destinations configured yet. Click "+ Add New Country" to create one.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  @if($destinations->hasPages())
    <div style="margin-top:20px;">
      {{ $destinations->links() }}
    </div>
  @endif
</div>

@endsection
