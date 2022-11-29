@extends('layouts.app')

@section('content')
<div class="container-fluid mt-50">
    <div class="mt-5">
        <h3 class="p-3 text-center">CHỈNH SỬA  NHÀ SẢN XUẤT</h3>
    </div>
</div>

<div class="container">
    <!-- SECTION HEADING -->
    <div class="card-body">
        <div class="row mb-5">
            <div class="col-md-6 offset-md-3">

                <div class="col-4 mb-3">
                    <a href="/admin/producer" class="btn btn-dark">Trở về</a>
                </div>

                <!-- Form Edit Producer -->
                @if(session('danger'))
                    <div class="alert alert-danger" role="alert">
                         {{ session('danger') }}
                    </div>
                @endif
                <form action = "{{ route('editProducer') }}"  method="post" enctype="multipart/form-data">
                    @csrf                    
                    <div class="form-group mb-4">
                        <label for="producer_id" class="fs-5">ID nhà sản xuất</label>
                        <input type="text" id="producer_id" name="id" readonly value="{{ $data['id'] }}" class="form-control form-input">
                    </div>

                    <div class="form-group mb-4">
                        <label for="producer_name" class="fs-5">Tên nhà sản xuất</label>
                        <input type="text" name="producer_name" placeholder="{{ $data['name'] }}" class="form-control form-input mt-2 mb-1 p-3" value="" />
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
