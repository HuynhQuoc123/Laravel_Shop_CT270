<?php use App\Models\Category;?>

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
    <div class="container mt-5 pb-5" id="main-product">
        <form id="form-filter" method="get" action="">
            <label for="product_category" class="fs-5  mr-3">Lọc theo: </label>
            <select id="filterBy" class="w-25" class="" name="idCat">
                <option value="aaa" href="/product">--Lựa chọn--</option>
                <option value="-1" href="/product">Tất cả</option>
                <?php $categories = Category::all()->toArray();?>
                @foreach ($categories as $category)
                    <option  value="{{ $category['id'] }}"><?= $category['name'];?></option>
                @endforeach
            </select>
        </form>
  
        <div class="row py-4 ">
        @foreach ($data as $value)
            <div  class=" col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item bg-white mb-4">
                   <a  href="/product/detail/{{ $value['id'] }}">
                        <div class="position-relative  overflow-hidden image">
                            <img class="w-100" src="{{ asset("storage/images")}}/{{ $value['image'] }}"  alt="">
                            {{-- <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> --}}
                        </div>
                        <div class="text-center p-4">
                            <span class="d-block h6 name mb-2 text-uppercase">{{ $value['name']; }}</span>
                            <span class="h5 price_format">{{ $value['price'];  }}</span>
                            <span class="h6">đ</span>
                        </div>
                   </a>
                    <div class="d-flex border-top">
                        <small class="w-50 text-center border-end py-2">
                            <a class="text-body" href="/product/detail/{{ $value['id'] }}"><i class="fa fa-eye text-primary me-2"></i>Xem chi tiết</a>
                        </small>
                        <small class="w-50 text-center py-2">
                            <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Thêm vào giỏ hàng</a>
                        </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="">
            @if(isset($_GET['idCat']))
            <div>{{ $data->appends(['idCat'=>$_GET['idCat']])->links() }}</div>
            @else
            <div>{{ $data->links() }}</div>
            @endif
 
        </div>
    </div>
</div>

@endsection