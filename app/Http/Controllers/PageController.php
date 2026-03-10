<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function electrical()
    {
        return view('pages.electrical');
    }

    public function plumbing()
    {
        return view('pages.plumbing');
    }

    public function roofing()
    {
        return view('pages.roofing');
    }

    public function quote()
    {
        return view('pages.quote');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitQuote(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:40'],
            'email' => ['required', 'email', 'max:120'],
            'service_type' => ['required', 'string', 'max:40'],
            'description' => ['required', 'string', 'max:5000'],
            'address' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:10'],
            'preferred_callback_time' => ['nullable', 'string', 'max:40'],
            'photos.*' => ['nullable', 'file', 'max:51200'], // 50MB
        ]);

        // Capture submission (no mail transport assumptions): log + persist JSON to storage
        $payload = [
            'submitted_at' => now()->toIso8601String(),
            'ip' => $request->ip(),
            'user_agent' => (string) $request->userAgent(),
            'data' => $data,
        ];

        Log::info('Quote submission received', $payload);

        try {
            $dir = storage_path('app/quote_submissions');
            if (!is_dir($dir)) {
                @mkdir($dir, 0755, true);
            }
            $id = now()->format('Ymd_His') . '_' . Str::random(8);
            file_put_contents($dir . '/' . $id . '.json', json_encode($payload, JSON_PRETTY_PRINT));
        } catch (\Throwable $e) {
            Log::warning('Failed to persist quote submission', ['error' => $e->getMessage()]);
        }

        return redirect()->route('quote')->with('success', 'Thank you! We will call you within 2 hours.');
    }

    public function submitContact(Request $request)
    {
        // Handle contact form submission
        // You can add validation and email sending here
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
