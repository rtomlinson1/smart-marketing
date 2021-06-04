<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$title ?? 'Smart Marketing | Modern Marketing Solutions'}}</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.typekit.net/kxg3qlo.css">
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
