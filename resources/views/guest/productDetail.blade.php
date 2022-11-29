@extends('layouts.default')
 
@section('content')
<style>
    .navbar{
        background-color: #fff;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
    .navbar a{
        color: #000 !important;
    }
</style>
<div class="container-fuild bg-light pt-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-5">
                <div class="" >
                    <div class="row py-3 shadow-5">
                        <div class="lightbox ">
                          <img id="img-full"
                            src="{{ asset("storage/images")}}/{{ $product['image'] }}"
                            alt="Gallery image 1"
                            class="full_img w-100 border-1"
                            />
                        </div>
    
                        <div class="row">
                            <div class="col-3 mt-1 ">
                                <img  
                                src="{{ asset("storage/images")}}/{{ $product['image'] }}" alt="Gallery image 1"                 
                                class="active w-100 sub_img border-1"
                                />
                            </div>
                            @foreach ($data as $value)
                                <div class="col-3 mt-1">
                                    <img src="{{ asset("storage/images")}}/{{ $value['image'] }}" alt="Gallery image 1" 
                                    class="active w-100 sub_img border-1"/>                          
                                </div>
                            @endforeach
                        </div>
                    </div>            
                </div>
            </div>
            
            <div class="col-7">
                <h1 class="mt-3">{{ $product['name'] }}</h1>
                <h2>Giá: {{ $product['price'] }} vnđ</h2>

                <div class="input-group w-25 mt-4">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-secondary btn-number"  data-type="minus" data-field="">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number mx-2" value="10" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-secondary btn-number" data-type="plus" data-field="">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </span>
                </div>

                <button class="btn btn-dark mt-3">Thêm vào giỏ hàng
                    <i class="fa-solid fa-cart-shopping pl-1"></i>
                </button>
            </div>            

            
        </div>     
    
    </div>
</div>
@endsection
