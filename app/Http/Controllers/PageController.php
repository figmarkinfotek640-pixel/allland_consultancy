<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function exclusives()
    {
        $exclusiveCourses = Course::where('is_active', true)
            ->where(function ($q) {
                $q->where('degree_level', 'LIKE', '%Ausbildung%')
                  ->orWhere('title', 'LIKE', '%Nursing%')
                  ->orWhere('career_pathway', 'LIKE', '%Green List%');
            })
            ->get();

        return view('exclusives', compact('exclusiveCourses'));
    }
}

