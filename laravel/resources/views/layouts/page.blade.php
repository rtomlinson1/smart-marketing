<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Smart Marketing | Modern Marketing Solutions'}}</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.typekit.net/kxg3qlo.css">
    <script type="text/javascript" src="/js/app.js">

    </script>
  </head>
  <body>
    <header>
      @include('components.navigation')
    </header>
    <main>
      @yield('content')
    </main>
    @include('components.footer')
  </body>
</html>
