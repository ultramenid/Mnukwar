<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <meta name="title" content="{{$title}}"/>
    <meta name="description" content="Sistem yang belum jadi. Sedang dibangun. Sabar, ya! " />


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AURIGA_ID">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="Sistem yang belum jadi. Sedang dibangun. Sabar, ya! ">
    <meta name="twitter:image"  content="{{ asset('img/ogimage.png') }}">



    <meta property="og:description" content="Sistem yang belum jadi. Sedang dibangun. Sabar, ya! " />
    <meta property="og:site_name" content="{{$title}}" />
    <meta property="og:image" content="{{ asset('img/ogimage.png') }}" />

  {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
  @vite('resources/css/app.css')
</head>

<body class="font-sans">

    @yield('content')
    @stack('scripts')

</body>
</html>
