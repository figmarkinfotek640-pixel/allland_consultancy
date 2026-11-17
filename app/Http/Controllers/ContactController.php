<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'destination' => 'nullable|string|max:100',
            'qualification' => 'nullable|string|max:255',
            'service_interest' => 'nullable|string|max:255',
            'preferred_intake' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:3000',
        ]);

        $inquiry = Inquiry::create($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your enquiry has been received. Our senior counsellor in Aluva will contact you shortly.',
                'inquiry_id' => $inquiry->id,
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been received. Our senior counsellor in Aluva will contact you shortly on WhatsApp or phone.');
    }
}

