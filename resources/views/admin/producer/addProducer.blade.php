@extends('layouts.app')

@section('content')
   
<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
      
        <div class="mt-5">
            <div class="text-dark p-3 text-center fs-1">THÊM NHÀ SẢN XUẤT MỚI</div>
        </div>
        <form name="frm" id="frm" action="{{ route('addProducer') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-4 mt-5 mb-3">
                <a href="/admin/producer" class="btn btn-dark">Trở về </a>
            </div>

            <div class="form-group mb-4">   
                <label for="producer_name" class="fs-5">Thêm nhà sản xuất</label>
                @if(session('danger'))
                    <div class="alert alert-danger" role="alert">
                         {{ session('danger') }}
                    </div>
                @endif
                <input type="text" name="producer_name" class="form-control mt-2 mb-1 p-3" maxlen="255" id="category_name" 
                    placeholder="Nhập vào tên danh mục" value="" />
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-dark rounded-pill p-3 mt-3" type="submit" name="submit" value="Thêm mới">
            </div>
        </form>
    </div>
</div>


@endsection
