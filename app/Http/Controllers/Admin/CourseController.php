<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::query();

        if ($request->filled('country')) {
            $query->where('country_code', $request->country);
        }

        $courses = $query->orderBy('order', 'asc')->latest()->paginate(10);
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:courses,slug',
            'country' => 'required|string|max:100',
            'country_code' => 'required|string|max:10',
            'degree_level' => 'required|string|max:100',
            'duration' => 'required|string|max:100',
            'intake' => 'nullable|string|max:150',
            'tuition_fee' => 'nullable|string|max:150',
            'stipend' => 'nullable|string|max:150',
            'language_requirement' => 'nullable|string|max:150',
            'career_pathway' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
            'order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title'] . '-' . $validated['country_code']);
        }

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('courses', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? 0;

        Course::create($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course / Program created successfully.');
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:courses,slug,' . $course->id,
            'country' => 'required|string|max:100',
            'country_code' => 'required|string|max:10',
            'degree_level' => 'required|string|max:100',
            'duration' => 'required|string|max:100',
            'intake' => 'nullable|string|max:150',
            'tuition_fee' => 'nullable|string|max:150',
            'stipend' => 'nullable|string|max:150',
            'language_requirement' => 'nullable|string|max:150',
            'career_pathway' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'is_featured' => 'nullable|boolean',
            'is_active' => 'nullable|boolean',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('courses', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? 0;

        $course->update($validated);

        return redirect()->route('admin.courses.index')->with('success', 'Course / Program updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}

