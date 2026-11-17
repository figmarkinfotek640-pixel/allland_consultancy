@extends('admin.layouts.admin')

@section('title', 'Services Management')
@section('page_title', 'Services Management')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Allland Services</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Services displayed across website and individual service pages</p>
    </div>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">+ Add New Service</a>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Icon</th>
          <th>Service Title</th>
          <th>Slug</th>
          <th>Order</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($services as $srv)
          <tr>
            <td style="font-size:22px;">{{ $srv->icon ?: '🛂' }}</td>
            <td>
              <strong style="color:var(--dark);">{{ $srv->title }}</strong>
              <div style="font-size:11.5px;color:#64748b;">{{ Str::limit($srv->excerpt, 60) }}</div>
            </td>
            <td><code>{{ $srv->slug }}</code></td>
            <td>{{ $srv->order }}</td>
            <td>
              @if($srv->is_active)
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Hidden</span>
              @endif
            </td>
            <td>
              <div style="display:flex;gap:8px;">
                <a href="{{ route('services.show', $srv->slug) }}" target="_blank" class="btn btn-outline btn-sm">Preview</a>
                <a href="{{ route('admin.services.edit', $srv->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin.services.destroy', $srv->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="6" style="text-align:center;padding:30px;color:#64748b;">No services added yet. Click "+ Add New Service" to create one.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:20px;">
    {{ $services->links() }}
  </div>
</div>

@endsection

