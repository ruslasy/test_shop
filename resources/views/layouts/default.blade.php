<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <script src="{{ mix('/js/app.js') }}"></script>
        <link href="https://bootstrap-4.ru/dist/css/bootstrap.min.css"  rel="stylesheet">
        <link href="{{ mix('/css/app.css') }}"  rel="stylesheet">

        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <nav class="my-2 my-md-0 mr-md-auto">
        <a class="p-2 text-dark" href="/">Главная</a>
        <a class="p-2 text-dark" href="/catalog">Каталог</a>
      </nav>
      <a type="button" class="btn btn-outline-secondary">
        Корзина
        <img class="header__button-icon" src="/cart.svg">
        <span title="Количество товаров в корзине: 1" class="count">1</span>
      </a>

    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Каталог товаров</h1>
    </div>
        <div class="container">
            @yield('content')
        </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="text-center">Тестовое задание на должность "WEB-программист PHP(middle)"</div>
      </footer>
    </div>

    </body>
</html>