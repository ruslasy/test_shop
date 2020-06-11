@extends('layouts.default')

@section('title', 'Catalog')

@section('content')
    
<div class="row row-cols-1 row-cols-md-3">
    @foreach ($products as $product)
    <div class="col mb-4">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <img src="https://www.claires.com/dw/image/v2/BBTK_PRD/on/demandware.static/-/Sites-master-catalog/default/dw91a8534a/images/hi-res/35328_1.jpg" alt="..." class="card-img-top">
            <hr>
            <div class="row no-gutters">
                <div class="col-md-6">
                    <h5 class="card-title text-sm-left">{{ $product->price }} руб.</h5>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">в корзину</button>
                </div>
            </div>
          </div>
          </div>
        </div>
          @endforeach
        </div>
@endsection

