<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

  @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
      <main class="py-4">
        @yield('contents')
     </main>
    </div>
</body>
</html>