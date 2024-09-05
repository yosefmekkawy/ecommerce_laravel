@extends('products.save')
@section('title','Edit Product')
@section('page_title','Edit Product')
@if(session('success'))
    <p class="alert alert-success">{{session('success')}}</p>
@endif
@section('product_name',$product->name)
@section('product_info',$product->info)
@section('product_price',$product->price)
@section('product_images')
    @foreach($product->image as $productImage)
        <img src="{{ asset('images/'.$productImage->name) }}" alt="">

    @endforeach

@endsection
