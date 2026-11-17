@extends('admin.layouts.admin')

@section('title', 'Courses & Programs')
@section('page_title', 'Courses & Programs Management')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Study Programs &amp; Degrees</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Undergraduate, Postgraduate, and Vocational programs listed on the site</p>
    </div>
    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">+ Add New Course</a>
  </div>

  <!-- Filter by Country -->
  <div style="display:flex;gap:10px;margin-bottom:20px;flex-wrap:wrap;">
    <a href="{{ route('admin.courses.index') }}" class="btn btn-sm {{ empty(request('country')) ? 'btn-primary' : 'btn-outline' }}">All Countries</a>
    <a href="{{ route('admin.courses.index', ['country' => 'DE']) }}" class="btn btn-sm {{ request('country') == 'DE' ? 'btn-primary' : 'btn-outline' }}">🇩🇪 Germany</a>
    <a href="{{ route('admin.courses.index', ['country' => 'CA']) }}" class="btn btn-sm {{ request('country') == 'CA' ? 'btn-primary' : 'btn-outline' }}">🇨🇦 Canada</a>
    <a href="{{ route('admin.courses.index', ['country' => 'UK']) }}" class="btn btn-sm {{ request('country') == 'UK' ? 'btn-primary' : 'btn-outline' }}">🇬🇧 United Kingdom</a>
    <a href="{{ route('admin.courses.index', ['country' => 'NZ']) }}" class="btn btn-sm {{ request('country') == 'NZ' ? 'btn-primary' : 'btn-outline' }}">🇳🇿 New Zealand</a>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Country</th>
          <th>Program Title</th>
          <th>Degree Level</th>
          <th>Duration</th>
          <th>Tuition Fee</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($courses as $c)
          <tr>
            <td>
              <strong>{{ $c->country }}</strong>
              <div style="font-size:11px;color:#64748b;">Code: {{ $c->country_code }}</div>
            </td>
            <td>
              <strong style="color:var(--dark);">{{ $c->title }}</strong>
              @if($c->is_featured)
                <span class="badge badge-purple" style="margin-left:6px;font-size:10px;">Featured</span>
              @endif
              <div style="font-size:11.5px;color:#64748b;">{{ $c->career_pathway ?: 'Work permit eligible' }}</div>
            </td>
            <td>{{ $c->degree_level }}</td>
            <td>{{ $c->duration }}</td>
            <td style="color:#D9561A;font-weight:700;">{{ $c->tuition_fee ?: 'Contact' }}</td>
            <td>
              @if($c->is_active)
                <span class="badge badge-success">Active</span>
              @else
                <span class="badge badge-danger">Hidden</span>
              @endif
            </td>
            <td>
              <div style="display:flex;gap:8px;">
                <a href="{{ route('courses.show', $c->slug) }}" target="_blank" class="btn btn-outline btn-sm">View</a>
                <a href="{{ route('admin.courses.edit', $c->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin.courses.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Delete this course?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" style="text-align:center;padding:30px;color:#64748b;">No courses found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:20px;">
    {{ $courses->links() }}
  </div>
</div>

@endsection

