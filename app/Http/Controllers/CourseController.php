<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::active();

        if ($request->filled('country')) {
            $query->where('country_code', strtoupper($request->country));
        }

        if ($request->filled('level')) {
            $query->where('degree_level', 'LIKE', '%' . $request->level . '%');
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('country', 'LIKE', "%{$search}%")
                  ->orWhere('career_pathway', 'LIKE', "%{$search}%");
            });
        }

        $courses = $query->paginate(9)->withQueryString();
        $selectedCountry = $request->country ?? 'all';

        return view('courses.index', compact('courses', 'selectedCountry'));
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedCourses = Course::where('id', '!=', $course->id)
            ->where('is_active', true)
            ->where('country_code', $course->country_code)
            ->take(3)
            ->get();

        return view('courses.show', compact('course', 'relatedCourses'));
    }
}

