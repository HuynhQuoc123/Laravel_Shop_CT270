<?php use App\Models\Category;?>
<?php use App\Models\Producer;?>
@extends('layouts.app')
@section('content')


<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        <div class="container-fluid">
            <div class="mt-4">
                <h3 class="p-3 text-center">THÊM SẢN PHẨM</h3>
            </div>
        </div>
        
        <div class="container">
            <!-- SECTION HEADING -->
            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-6 offset-md-3">
        
                        <div class="col-4 mb-3">
                            <a href="/admin/product" class="btn btn-dark">Trở về</a>
                        </div>
        
                        <!-- Form Add Product -->
                        <form name="frm" id="frm" action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if(session('danger'))
                                <div class="alert alert-danger" role="alert">
                                     {{ session('danger') }}
                                </div>
                            @endif
                            <div class="form-group mb-3 row">
                                <label for="product_category" class="fs-5 col-4">Danh mục</label>
                                <select id="product_category" name="product_category" class="ms-5 w-50 col-8">
                                    <?php 
                                    $categories = Category::all()->toArray();
                                    ?>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}"><?= $category['name'];?></option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3 row">
                                <label for="producer" class="fs-5 col-4">Nhà sản xuất</label>
                                <select id="producer" name="producer" class="col-8 ms-5 w-50">
                                    <?php 
                                    $producers = Producer::all()->toArray();
                                    ?>
                                    @foreach ($producers as $producer)
                                    <option value="{{ $producer['id'] }}"><?= $producer['name'];?></option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="form-group mb-3">
                                <label for="product_name" class="fs-5">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control mt-2 mb-1 p-3" maxlen="255" id="product_name" 
                                    placeholder="Nhập vào tên sản phẩm" value="" />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for="product_price" class="fs-5">Giá sản phẩm</label>
                                <input type="text" name="product_price" class="price_format form-control mt-2 mb-1 p-3" maxlen="255" id="product_price" 
                                    placeholder="Nhập vào giá sản phẩm" value="" />
                            </div>
        
                            <div class="form-group mb-3">
                                <label for="product_image" class="fs-5">Hình ảnh sản phẩm</label>
                                <input type="file" name="product_image" class="form-control mt-2 mb-1 p-3" id="product_image"  value="" />
                            </div>        
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-dark rounded-pill p-3 mt-3" type="submit" name="submit" value="Thêm mới">
                            </div>
                        </form>
        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection
