@extends('layouts.default')

@section('title', 'Каталог')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center ">
  <h1 class="display-4">Каталог товаров</h1>
</div>
<div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center ">
</div>
<div class="text-center p-3">
  <a href="{{ Request::url()}}?sort=name&order={{ ($sortName == 'name') ? $sortOrder : '0' }}">сортировать по названию</a>
  <a href="{{ Request::url()}}?sort=price&order={{ ($sortName == 'price') ? $sortOrder : '0' }}">сортировать по цене</a>
</div>
<div class="row row-cols-1 row-cols-md-3">
    @foreach ($products as $product)
    <div class="col mb-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <div style="height: 210px;">
              <img src="/bg.jpg" srcset="{{$product->getPicture()}}" alt="product" class="img-fluid" style="max-height: 210px;">
            </div>
          <div class="text-center font-weight-bold"><a href="{{route('product', ['id' => $product->id])}}">{{ $product->name }}</a></div>
            <hr>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h5 class="card-title text-sm-left">{{ $product->price }} руб.</h5>
                </div>
                <div class="col-md-6">
                      @if ($product->available)
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary add-cart-action" data-id-product="{{ $product->id }}">{{ ($product->inCart()) ? 'удалить':'в корзину'}}</button>
                        @else
                        <div class="text-right">нет в наличии</div>
                      @endif
                </div>
            </div>
          </div>
          </div>
        </div>
          @endforeach
    </div>
    <div class="d-flex justify-content-center">
    {{ $links->links() }}
    </div>
@endsection

