<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $blogs = $query->latest('published_at')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blogs,slug',
            'category' => 'required|string|max:100',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'author' => 'nullable|string|max:150',
            'read_time' => 'nullable|string|max:50',
            'published_at' => 'nullable|date',
            'is_published' => 'nullable|boolean',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('blogs', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        $validated['author'] = $validated['author'] ?? 'All Land Senior Counsellor';
        $validated['read_time'] = $validated['read_time'] ?? '5 min read';
        $validated['published_at'] = $validated['published_at'] ?? now();
        $validated['is_published'] = $request->has('is_published');

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article published successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'category' => 'required|string|max:100',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'author' => 'nullable|string|max:150',
            'read_time' => 'nullable|string|max:50',
            'published_at' => 'nullable|date',
            'is_published' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('blogs', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        $validated['author'] = $validated['author'] ?? 'All Land Senior Counsellor';
        $validated['read_time'] = $validated['read_time'] ?? '5 min read';
        $validated['is_published'] = $request->has('is_published');

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog article deleted successfully.');
    }
}

