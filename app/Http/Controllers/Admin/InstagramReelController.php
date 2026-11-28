<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstagramReel;
use Illuminate\Http\Request;

class InstagramReelController extends Controller
{
    public function index(Request $request)
    {
        $query = InstagramReel::query();

        if ($request->filled('status')) {
            if ($request->status === 'active') {
                $query->where('status', true);
            } elseif ($request->status === 'inactive') {
                $query->where('status', false);
            }
        }

        if ($request->filled('search')) {
            $term = '%' . $request->search . '%';
            $query->where(function ($q) use ($term) {
                $q->where('title', 'like', $term)
                  ->orWhere('description', 'like', $term)
                  ->orWhere('location_tag', 'like', $term);
            });
        }

        $totalCount = InstagramReel::count();
        $activeCount = InstagramReel::where('status', true)->count();
        $inactiveCount = InstagramReel::where('status', false)->count();

        $reels = $query->orderBy('display_order', 'asc')->latest('id')->paginate(10);

        return view('admin.reels.index', compact('reels', 'totalCount', 'activeCount', 'inactiveCount'));
    }

    public function create()
    {
        return view('admin.reels.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'reel_url' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|string|max:255',
            'thumbnail_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'video_file' => 'nullable|mimes:mp4,mov,webm|max:25600',
            'video_url' => 'nullable|string|max:255',
            'location_tag' => 'nullable|string|max:150',
            'display_order' => 'nullable|integer',
            'status' => 'nullable',
        ]);

        if ($request->hasFile('thumbnail_file')) {
            $path = $request->file('thumbnail_file')->store('reels', 'public');
            $validated['thumbnail'] = 'storage/' . $path;
        }

        if ($request->hasFile('video_file')) {
            $path = $request->file('video_file')->store('reels/videos', 'public');
            $validated['video_url'] = 'storage/' . $path;
        }

        $validated['display_order'] = $request->filled('display_order') ? (int)$request->display_order : 0;
        $validated['status'] = $request->has('status') && (string)$request->status !== '0';

        InstagramReel::create($validated);

        return redirect()->route('admin.reels.index')->with('success', 'Instagram Reel added successfully.');
    }

    public function edit(InstagramReel $reel)
    {
        return view('admin.reels.edit', compact('reel'));
    }

    public function update(Request $request, InstagramReel $reel)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'reel_url' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|string|max:255',
            'thumbnail_file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'video_file' => 'nullable|mimes:mp4,mov,webm|max:25600',
            'video_url' => 'nullable|string|max:255',
            'location_tag' => 'nullable|string|max:150',
            'display_order' => 'nullable|integer',
            'status' => 'nullable',
        ]);

        if ($request->hasFile('thumbnail_file')) {
            $path = $request->file('thumbnail_file')->store('reels', 'public');
            $validated['thumbnail'] = 'storage/' . $path;
        }

        if ($request->hasFile('video_file')) {
            $path = $request->file('video_file')->store('reels/videos', 'public');
            $validated['video_url'] = 'storage/' . $path;
        }

        $validated['display_order'] = $request->filled('display_order') ? (int)$request->display_order : 0;
        $validated['status'] = $request->has('status') && (string)$request->status !== '0';

        $reel->update($validated);

        return redirect()->route('admin.reels.index')->with('success', 'Instagram Reel updated successfully.');
    }

    public function destroy(InstagramReel $reel)
    {
        $reel->delete();
        return redirect()->route('admin.reels.index')->with('success', 'Instagram Reel deleted successfully.');
    }

    public function toggleStatus(InstagramReel $reel)
    {
        $reel->status = !$reel->status;
        $reel->save();

        $statusText = $reel->status ? 'activated' : 'deactivated';
        return redirect()->route('admin.reels.index')->with('success', "Instagram Reel has been {$statusText}.");
    }
}
