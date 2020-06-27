<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="{{ mix('/css/app.css') }}"  rel="stylesheet">

        <title>Тестовое задание - @yield('title')</title>
    </head>
    <body>
    <div class="navbar navbar-expand-md navbar-ligth box-shadow px-md-5 p-3 sticky-top nav-bar-custom ">
      <nav class="my-2 my-md-0 mr-md-auto">
        <a class="p-2 text-dark" href="/">Главная</a>
        <a class="p-2 text-dark" href="/catalog">Каталог</a>
      </nav>
      <a type="button" class="btn btn-outline-secondary position-relative">
        Корзина
        <img class="header__button-icon" src="/cart.svg">
        <span title="Количество товаров в корзине: 1" class="count" id="cart-product-count">0</span>
      </a>
    </div>
        <div class="container">
            @yield('content')
        </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="text-center">Тестовое задание</div>
      </footer>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>