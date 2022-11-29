<?php use App\Models\Product;?>
@extends('layouts.app')
@section('content')


<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        <div class="mt-3">
            <h3 class="p-3 text-center">CHỈNH SỬA SẢN PHẨM</H3>
        </div>
    
    <div class="container">
        <!-- SECTION HEADING -->
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-6 offset-md-3">
                    <div class="col-4 mb-3">
                        <a href="/admin/product" class="btn btn-dark">Trở về</a>
                    </div>
    
                    <!-- Form Edit Product -->
                    <form action="{{ route('editProduct') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="product_id" class="fs-5">ID sản phẩm</label>
                            <input type="text" id="product_id" name="product_id" readonly value="<?= $data['id'] ?>" class="form-control form-input">
                        </div>
    
                        <div class="form-group mb-4">
                            <label for="product_name" class="fs-5">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control form-input mt-2 mb-1 p-3" value="{{ $data['name'] }}" />
                        </div>
    
                        <div class="form-group mb-4">
                            <label for="product_price" class="fs-5">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control mt-2 mb-1 p-3 price_format" maxlen="255" id="product_price"  value="{{ $data['price'] }}" />
                        </div>
    
                        <div class="form-group mb-4">
                            <label for="product_image" class="fs-5">Hình ảnh sản phẩm hiện tại</label>
                            <img src="{{ asset("storage/images")}}/{{ $data['image'] }}" alt="" class='d-block' width='200px' height='100px'>    
                            <label for="product_image" class="fs-5">Bạn có thể thay đổi hình ảnh tại đây</label>
                            <input type="file" name="product_image" class="form-control mt-2 mb-1 p-3" id="product_image"  value="" />
                        </div>
    
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-dark rounded-pill p-3 mt-3" type="submit" name="submit" value="Lưu thay đổi">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    </div>
</div>


@endsection
