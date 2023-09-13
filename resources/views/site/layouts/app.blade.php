<!DOCTYPE html>
<html lang="pt-br">

  {{-- META HEAD --}}
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DC Shopping')</title>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    {{-- EM PRODUÇÃO --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-6c7b938c.css') }}">
    {{-- EM DESENVOLVIMENTO --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
  </head>
  {{-- /META HEAD --}}

<body>

  {{-- HEADER --}}
  @include('site.partials.header')
  {{-- /HEADER --}}

  <main>

    @yield ('content')

  </main>

  {{-- FOOTER --}}
  @include('site.partials.footer')
  {{-- /FOOTER --}}

  {{-- MODAIS --}}
  @include('site.partials.modal-estacionamento')
  @include('site.partials.modal-locacao')

  {{-- Scripts --}}
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  {{-- EM PRODUÇÃO --}}
  <script type="text/javascript" src="{{ asset('build/assets/app-1841da2b.js')}}"></script>

</body>


</html>