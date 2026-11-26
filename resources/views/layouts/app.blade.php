<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'All Land Consultancy – Study Abroad & Overseas Education')</title>
  <meta name="description" content="@yield('meta_description', 'Study, work and settle in top global destinations. University admissions, career pathways, and complete visa guidance from Aluva, Kerala.')">
  
  <!-- Favicon / Tab Icon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700;800&display=swap">
  <link rel="stylesheet" href="{{ asset('style.css') }}?v={{ file_exists(public_path('style.css')) ? filemtime(public_path('style.css')) : time() }}">
  @yield('styles')
</head>
<body id="top">

  @include('partials.topbar')
  @include('partials.header')
  
  @if(session('success') || session('error') || $errors->any())
    <div class="wrap" style="padding-top:20px;">
      @include('partials.flash')
    </div>
  @endif

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script>
    window.__NAV_DESTINATIONS__ = @json($navDestinations ?? []);
  </script>
  <script src="{{ asset('site-scripts.js') }}?v={{ file_exists(public_path('site-scripts.js')) ? filemtime(public_path('site-scripts.js')) : time() }}"></script>
  @yield('scripts')
</body>
</html>

