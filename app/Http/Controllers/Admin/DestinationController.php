<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::orderBy('order', 'asc')->paginate(12);
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:destinations,slug',
            'country_code' => 'required|string|max:10|unique:destinations,country_code',
            'flag' => 'nullable|string|max:20',
            'tab_badge' => 'nullable|string|max:100',
            'hero_badge' => 'nullable|string|max:100',
            'eyebrow' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'blurb' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'banner_image' => 'nullable|string|max:255',
            'banner_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'living_cost' => 'nullable|string|max:255',
            'post_study_work' => 'nullable|string|max:255',
            'requirements' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('destinations', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        if ($request->hasFile('banner_file')) {
            $path = $request->file('banner_file')->store('destinations', 'public');
            $validated['banner_image'] = 'storage/' . $path;
        }

        // Parse stats: JSON string or lines of "Value | Label"
        if (!empty($request->stats_text)) {
            $stats = [];
            foreach (explode("\n", $request->stats_text) as $line) {
                $line = trim($line);
                if (!empty($line)) {
                    $parts = array_map('trim', explode('|', $line, 2));
                    $stats[] = [
                        'val' => $parts[0] ?? '',
                        'lbl' => $parts[1] ?? '',
                    ];
                }
            }
            $validated['stats'] = $stats;
        } elseif (!empty($request->stats_json)) {
            $validated['stats'] = json_decode($request->stats_json, true) ?: [];
        }

        // Parse features: lines of "Title | Description"
        if (!empty($request->features_text)) {
            $features = [];
            foreach (explode("\n", $request->features_text) as $line) {
                $line = trim($line);
                if (!empty($line)) {
                    $parts = array_map('trim', explode('|', $line, 2));
                    $features[] = [
                        'title' => $parts[0] ?? '',
                        'desc' => $parts[1] ?? '',
                    ];
                }
            }
            $validated['features'] = $features;
        }

        // Parse popular courses tags: comma or newline separated
        if (!empty($request->popular_courses_text)) {
            $tags = preg_split('/[\r\n,]+/', $request->popular_courses_text);
            $validated['popular_courses'] = array_values(array_filter(array_map('trim', $tags)));
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? 0;

        Destination::create($validated);

        return redirect()->route('admin.destinations.index')->with('success', 'Destination created successfully.');
    }

    public function edit(Destination $destination)
    {
        return view('admin.destinations.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:destinations,slug,' . $destination->id,
            'country_code' => 'required|string|max:10|unique:destinations,country_code,' . $destination->id,
            'flag' => 'nullable|string|max:20',
            'tab_badge' => 'nullable|string|max:100',
            'hero_badge' => 'nullable|string|max:100',
            'eyebrow' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'blurb' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'banner_image' => 'nullable|string|max:255',
            'banner_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'living_cost' => 'nullable|string|max:255',
            'post_study_work' => 'nullable|string|max:255',
            'requirements' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('destinations', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        if ($request->hasFile('banner_file')) {
            $path = $request->file('banner_file')->store('destinations', 'public');
            $validated['banner_image'] = 'storage/' . $path;
        }

        // Parse stats: lines of "Value | Label"
        if ($request->has('stats_text')) {
            $stats = [];
            foreach (explode("\n", $request->stats_text) as $line) {
                $line = trim($line);
                if (!empty($line)) {
                    $parts = array_map('trim', explode('|', $line, 2));
                    $stats[] = [
                        'val' => $parts[0] ?? '',
                        'lbl' => $parts[1] ?? '',
                    ];
                }
            }
            $validated['stats'] = $stats;
        }

        // Parse features: lines of "Title | Description"
        if ($request->has('features_text')) {
            $features = [];
            foreach (explode("\n", $request->features_text) as $line) {
                $line = trim($line);
                if (!empty($line)) {
                    $parts = array_map('trim', explode('|', $line, 2));
                    $features[] = [
                        'title' => $parts[0] ?? '',
                        'desc' => $parts[1] ?? '',
                    ];
                }
            }
            $validated['features'] = $features;
        }

        // Parse popular courses tags
        if ($request->has('popular_courses_text')) {
            $tags = preg_split('/[\r\n,]+/', $request->popular_courses_text);
            $validated['popular_courses'] = array_values(array_filter(array_map('trim', $tags)));
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? 0;

        $destination->update($validated);

        return redirect()->route('admin.destinations.index')->with('success', 'Destination updated successfully.');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('admin.destinations.index')->with('success', 'Destination deleted successfully.');
    }
}
