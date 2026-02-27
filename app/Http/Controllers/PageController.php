<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // Handle quote form submission
        // You can add validation and email sending here
        return redirect()->route('quote')->with('success', 'Thank you! We will call you within 2 hours.');
    }

    public function submitContact(Request $request)
    {
        // Handle contact form submission
        // You can add validation and email sending here
        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
