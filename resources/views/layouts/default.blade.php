<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','SyncLookDoor') - My first laravel project!</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  @include('layouts._header')

  <div class="container">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
  </div>

  <script src="/js/app.js"></script>
  </body>
</html>
