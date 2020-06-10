@extends('layouts.default')

@section('title', 'Catalog')

@section('content')
    <h1>hello world!!!!!</h1>
    @foreach ($products as $product)
        <p>{{ $product->name }}</p>
    @endforeach
@endsection