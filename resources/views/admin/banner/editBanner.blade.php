@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="mt-3">
        <h3 class=" p-3 text-center ">CHỈNH SỬA ẢNH BÌA</h3>
    </div>
</div>

<div class="container">
    <!-- SECTION HEADING -->
    <div class="card-body">
        <div class="row mb-5">
            <div class="col-md-6 offset-md-3">

                <div class="col-4 mb-3">
                    <a href="/admin/banner" class="btn btn-dark">Trở về</a>
                </div>

                <!-- Form Edit banner -->
                <form action="{{ route('editBanner') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="banner_id" class="fs-5">ID Ảnh bìa</label>
                        <input type="text" id="banner_id" name="banner_id" readonly value="<?= $data['id'] ?>" class="form-control form-input">
                    </div>

                    <div class="form-group mb-4">
                        <label for="banner_image" class="fs-5">Hình ảnh hiện tại</label>
                        <img src="{{ asset("storage/images")}}/{{ $data['image'] }}" alt="" class='d-block' width='300px' height='200px'>    
                        <label for="banner_image" class="fs-5">Bạn có thể thay đổi ảnh tại đây</label>
                        <input type="file" name="banner_image" class="form-control mt-2 mb-1 p-3" id="banner_image"  value="" />
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input class="btn btn-dark rounded-pill p-3 mt-3" type="submit" name="submit" value="Lưu thay đổi">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>


@endsection
