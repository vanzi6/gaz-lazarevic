@extends('layouts.main')

@section('description', config('meta.products.description'))
@section('keywords', config('meta.products.keywords'))

@section('content')
<div class="container-fluid">
    <div class="mt-2 content p-3 bg-white rounded">
        <em>* mleveno na kamenu i prosejano na mašinskom situ</em>
        <br />
        <em>* upakovano u papirnatu ambalažu od 1kg, 5kg ili 10kg</em>
    </div>
    <hr />
    <div class="row">
        @foreach (config('products') as $product)
            <div class="col-md-4 pb-3">
                <div class="card">
                    <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ env('APP_NAME') }}">
                    <div class="card-body">
                        <h5 class="card-title">{!! $product['name'] !!}</h5>
                        <p class="card-text">{!! $product['price'] !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection