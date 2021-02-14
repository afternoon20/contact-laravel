<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @hasSection('title')
      <title>@yield('title') | お問い合わせフォーム</title>
    @else
      <title>お問い合わせフォーム</title>
    @endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <!-- header -->
    <header class="header">
      <div class="inner">
        <div class="header-wrapper">
          <from action="/" method="POST" class="header__ttl">
            @csrf
            <button type="submit" class="header__link">お問い合わせ</button>
          </from>
      </div>
    </header>
    <main id="main" class="main">
      <div class="form">
        <div class="inner">
          <p>@yield('text')</p>
          @yield('content')
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer">
      <div class="inner">
        <div class="footer-wrapper">
          <p class="footer__copy">
            © Copyright 2020 <br class="br-sp" />
            <a href="https://github.com/afternoon20" class="footer__link">Afternoon20</a> All rights reserved.
          </p>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
