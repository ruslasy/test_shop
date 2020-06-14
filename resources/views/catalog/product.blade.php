@extends('layouts.default')

@section('title', $product->name )

@section('content')

<div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center ">
  <h1 class="display-4">Каталог товаров</h1>
</div>
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/bg.jpg" srcset="{{ $product->getPicture()}}" alt="product" class="card-img-top">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text">{{ $product->price }} руб.</p>
        <p class="card-text">
          @if ($product->available)
          <button type="button" class="btn btn-lg btn-outline-primary add-cart-action" data-id-product="{{ $product->id }}">{{ ($product->inCart()) ? 'удалить':'в корзину'}}</button>
          @else
          <div class="text-right">нет в наличии</div>
          @endif
        </p>
      </div>
    </div>
  </div>
</div>
@endsection

