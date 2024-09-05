@extends('layout')
@section('title','Product | Create')

@section('content')
    <div class="create-product">
        <h2 class="text-center mb-5">
{{--            Create Product--}}
            @yield('page_title')
        </h2>
        @section('page_title','Create Product')

        <div class="container">
            @if(session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
            @endif
            <div class="row gx-5 gy-5  align-items-center">
                <div class="col-lg-6 my-5">
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="product-data-form">
                        @csrf
                        <div class="mb-2">
                            <label for="">Name</label>
                            <input type="text" class="form-control simulated" name="name" required value="@yield('product_name')">
                        </div>
{{--                        <div class="input-group mb-3">--}}
{{--                            <span class="input-group-text" id="basic-addon1">Name</span>--}}
{{--                            <input type="text" class="form-control simulated" placeholder="Enter Product Name" aria-label="name" >--}}
{{--                        </div>--}}
                        <div class="mb-2">
                            <label for="">Info</label>
                            <textarea class="form-control simulated" name="info" required >@yield('product_info')</textarea>
                        </div>
                        <div class="mb-2">
                            <label for="">Price</label>
                            <input type="number" class="form-control simulated" name="price" required value="@yield('product_price')">
                        </div>
                        <div class="mb-2">
                            <label for="">Images</label>
                            <input type="file" class="form-control simulated" name="images[]" accept="image/*" multiple required>
                        </div>
                        <input type="submit" class="form-control btn btn-success mt-3">
                    </form>
                </div>
                <div class="col-lg-6 my-5">
                    <div class="simulation d-block">

                        <div class="images d-flex flex-wrap justify-content-around">
                            @if(!isset($product))
                                <img src="{{asset('images/products/product-deafult.jpg')}}" alt="">
                            @endif

                            @yield('product_images')
                        </div>

                        <div class="info">
                            <p>
                                <span>Name:</span>
                                <span related_to="name"></span>
                            </p>
                            <p>
                                <span>Info:</span>
                                <span related_to="info"></span>
                            </p>
                            <p>
                                <span>Price:</span>
                                <span related_to="price"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
