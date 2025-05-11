<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>@yield('title', 'Default Title') | {{ config('app.name') }}</title>
</head>

<body>
  @include('components.header')
  <main>
    @yield('content')
  </main>
  @include('components.footer')

  {{-- <script src="./assets/vendor/preline/dist/preline.js"></script> --}}
  {{-- iconify --}}
  <script src="https://code.iconify.design/iconify-icon/2.0.0/iconify-icon.min.js"></script>
</body>

</html>
