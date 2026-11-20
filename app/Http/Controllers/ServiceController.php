<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();
        return view('services.index', compact('services'));
    }

    public function show($slug)
    {
        $aliases = [
            'visa-documentation' => 'visa-assistance',
            'flight-tickets' => 'flight-ticketing',
            'travel-insurance' => 'travel-health-insurance',
            'dataflow-service' => 'healthcare-dataflow',
            'pre-departure' => 'pre-departure-and-post-landing-service',
            'post-landing-accommodation' => 'pre-departure-and-post-landing-service',
            'university-selection-sop' => 'application-process',
        ];

        $targetSlug = $aliases[$slug] ?? $slug;

        $service = Service::where(function ($q) use ($slug, $targetSlug) {
                $q->where('slug', $slug)
                  ->orWhere('slug', $targetSlug);
            })
            ->where('is_active', true)
            ->firstOrFail();

        $allServices = Service::active()->get();
        $relatedServices = Service::where('id', '!=', $service->id)->where('is_active', true)->take(4)->get();
        return view('services.show', compact('service', 'allServices', 'relatedServices'));
    }
}

