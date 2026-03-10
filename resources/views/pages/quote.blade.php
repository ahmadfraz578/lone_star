@extends('layouts.app')

@section('title', 'Get Your Free Quote — Lone Star Solutions')

@section('content')
<div style="background:var(--navy);padding:48px 24px;text-align:center"><div class="accent-line" style="margin:0 auto 16px"></div><h1 style="font-family:'Oswald',sans-serif;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:#fff;font-size:clamp(32px,4vw,52px);margin-bottom:10px">GET YOUR FREE QUOTE</h1><p style="font-family:'Oswald',sans-serif;color:var(--orange);font-size:16px;letter-spacing:.1em;text-transform:uppercase;margin-bottom:12px">We'll Call Within 2 Hours</p><p style="color:#aaa;font-size:15px;max-width:500px;margin:0 auto">Describe your issue, we'll review it, and a licensed professional will call you back with an honest assessment. No obligation.</p></div>
@include('pages.partials.quote-form')
@endsection
