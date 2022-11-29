@extends('layouts.app')
@section('content')


<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        <div class="container-fluid mt-50">
            <div class="mt-5">
                <h3 class="p-3 text-center">THÊM ẢNH CHI TIẾT</h3>
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
                        <form name="frm" id="frm" action="{{ route('addGalleryImage') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                @if(session('sussces'))
                                <div class="alert alert-success" role="alert">
                                     {{ session('sussces') }}
                                </div>
                                @endif
                                @if(session('danger'))
                                <div class="alert alert-danger" role="alert">
                                     {{ session('danger') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group mb-4">
                                <label for="product_name" class="fs-5">ID sản phẩm</label>
                                <input type="text" name="product_id" class="form-control mt-2 mb-1 p-3" maxlen="255" id="product_name" 
                                    readonly value="{{ $product['id']; }}" />
                            </div>
        
                            <div class="form-group mb-4">
                                <label for="product_name" class="fs-5">Tên sản phẩm</label>
                                <input type="text" name="product_name" class="form-control mt-2 mb-1 p-3" maxlen="255" id="product_name" 
                                    readonly value="{{ $product['name']; }}" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="product_image" class="fs-5">Hình ảnh chính</label>
                                <img src="{{ asset("storage/images")}}/{{ $product['image'] }}" alt="" class='d-block' width='200px' height='100px'>    
                            </div>        
                            <div class="form-group mb-4">
                                <label for="product_image" class="fs-5">Ảnh chi tiết </label>
                                <input type="file" name="product_image" class="form-control mt-2 mb-1 p-3" id="product_image"  value="" />
                            </div>     
             
                            {{-- <div class="form-group">
                                <label for="product_image" class="form-label">Choose one or more images for the product:</label>
                                <div class="field-wrapper">
                                    <input type="file" name="images[]" multiple="" id="images">
                                </div>
                            </div> --}}

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-dark rounded-pill p-3 mt-3" type="submit" name="submit" value="Thêm mới">
                            </div>
                        </form>
        
                    </div>
                </div>
            </div>
            

            <div class="product-list list">
                <table class="table table-striped table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $i=1; ?>
                            @foreach ($images as $value)                     
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td>{{ $value['id']; }}</td>
                                <td >
                                    <img src="{{ asset("storage/images")}}/{{ $value['image'] }} " alt="" class='d-block' width='100px' height='150px'>    
                                </td>                   
                                <td>
                                    <a href="/admin/image/delete/{{ $value['id'] }}" class="btn btn-xs btn-danger d-inline-flex align-items-center justify-content-center delete-product" data-id="" 
                                    title="Delete" data-name="" data-return-url="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                        <span>Xóa</span>
                                </a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
