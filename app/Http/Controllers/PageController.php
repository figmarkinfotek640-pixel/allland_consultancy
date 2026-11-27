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
}

