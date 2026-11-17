<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::published();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('excerpt', 'LIKE', "%{$search}%")
                  ->orWhere('content', 'LIKE', "%{$search}%");
            });
        }

        $blogs = $query->paginate(6)->withQueryString();
        $categories = Blog::published()->pluck('category')->unique();

        return view('blog.index', compact('blogs', 'categories'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $blog->increment('views_count');

        $recentBlogs = Blog::where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->take(3)
            ->get();

        return view('blog.show', compact('blog', 'recentBlogs'));
    }
}

