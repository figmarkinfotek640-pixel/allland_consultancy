@extends('admin.layouts.admin')

@section('title', 'Blogs & Knowledge Hub')
@section('page_title', 'Blogs & Articles Management')

@section('content')

<div class="card">
  <div class="card-header">
    <div>
      <h2 class="card-title">Published Articles &amp; Student Guides</h2>
      <p style="font-size:13px;color:#64748b;margin-top:2px;">Articles displayed on the knowledge hub and blog section</p>
    </div>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">+ Write New Article</a>
  </div>

  <div class="admin-table-wrap">
    <table class="admin-table">
      <thead>
        <tr>
          <th>Article Title</th>
          <th>Category</th>
          <th>Author</th>
          <th>Published Date</th>
          <th>Views</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($blogs as $b)
          <tr>
            <td>
              <strong style="color:var(--dark);">{{ $b->title }}</strong>
              <div style="font-size:11.5px;color:#64748b;">{{ Str::limit($b->excerpt, 65) }}</div>
            </td>
            <td>
              <span class="badge badge-info">{{ $b->category }}</span>
            </td>
            <td>{{ $b->author }}</td>
            <td>{{ $b->published_at ? $b->published_at->format('M d, Y') : 'Draft' }}</td>
            <td>{{ $b->views_count }}</td>
            <td>
              @if($b->is_published)
                <span class="badge badge-success">Published</span>
              @else
                <span class="badge badge-warning">Draft</span>
              @endif
            </td>
            <td>
              <div style="display:flex;gap:8px;">
                <a href="{{ route('blog.show', $b->slug) }}" target="_blank" class="btn btn-outline btn-sm">Preview</a>
                <a href="{{ route('admin.blogs.edit', $b->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin.blogs.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Delete this blog post?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" style="text-align:center;padding:30px;color:#64748b;">No blog articles published yet. Click "+ Write New Article" to post one.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:20px;">
    {{ $blogs->links() }}
  </div>
</div>

@endsection

