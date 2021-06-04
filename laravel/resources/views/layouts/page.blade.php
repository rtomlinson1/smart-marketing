<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$title ?? 'Smart Marketing | Modern Marketing Solutions'}}</title>
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
