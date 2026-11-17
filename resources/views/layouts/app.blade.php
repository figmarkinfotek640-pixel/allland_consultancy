<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'All Land Consultancy – Study Abroad & Overseas Education')</title>
  <meta name="description" content="@yield('meta_description', 'Study, work and settle in Germany, Canada, the UK and New Zealand. Tuition-free university admissions, nursing ausbildung, and visa guidance from Aluva, Kerala.')">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700;800&display=swap">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  @yield('styles')
</head>
<body id="top">

  @include('partials.topbar')
  @include('partials.header')
  @include('partials.flash')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <script src="{{ asset('site-scripts.js') }}"></script>
  @yield('scripts')
</body>
</html>

