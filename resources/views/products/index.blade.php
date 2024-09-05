@extends('layout')
@section('title','Products')

@section('content')
    <div class="products">
        <h2 class="text-center mb-5">
            All Products
        </h2>

        <div class="container">
@if(Auth::check() && Auth::user()->type === 'admin')
   <a href="{{route('products.create')}}" class="btn btn-primary mb-5 align-self-center">Add Product</a>
@endif
            <div class="row gx-5 gy-5 justify-content-start flex-wrap all-products mb-5">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card product-card">
                            <img src="{{ asset('images/'.$product->image->first()->name) }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between text-center">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">{{$product->info}}</p>
                                <p class="card-text">{{$product->price}}<span>$</span></p>
                                @if(Auth::check() && Auth::user()->type === 'admin')
                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary stretched-link mx-auto">Edit</a>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach

    </div>
        </div>
    </div>
@endsection
