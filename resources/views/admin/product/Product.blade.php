<?php use App\Models\Product;?>
<?php use App\Models\Category;?>

@extends('layouts.app')
@section('content')


<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        <div class="containter row justify-content-center">
            <div class="row">
                <div class="col-12 ">
                    <h3 class="text-center mt-5 mb-3">DANH SÁCH SẢN PHẨM</h3>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4 mt-3 mb-3 ">
                    <a href="/admin/product/add" class="btn btn-dark">Thêm sản phẩm mới</a>
                </div>

                <div class="col-4 mt-3 mb-3 d-flex">
                    <form id="form-filter" method="get" action="">
                        <label for="product_category" class="fs-5  mr-3">Lọc theo: </label>
                        <select id="filterBy" class="" name="idCat">
                            <option value="aaa" href="/product">--Lựa chọn--</option>
                            <option value="-1" href="/product">Tất cả</option>
                            <?php $categories = Category::all()->toArray();?>
                            @foreach ($categories as $category)
                                <option  value="{{ $category['id'] }}"><?= $category['name'];?></option>
                            @endforeach
                        </select>
                    </form>
                </div>

            </div>
            
           
        </div>

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

        <div class="product-list list">
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Tên nhà sản xuất</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Ảnh chi tiết</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($data as $value)                     
                        <tr>
                            <td>{{ $value['id']; }}</td>
                            <td>{{Product::find($value['id'])->category->toArray()['name']; }}</td>
                            <td>{{ Product::find($value['id'])->producer->toArray()['name']; }}</td>
                            <td><?= $value['name']; ?></td>
                            <td class="price_format"><?= $value['price']; ?></td>
                            <td >
                                <img src="{{ asset("storage/images")}}/{{ $value['image'] }} " alt="" class='d-block' width='100px' height='100px'>    
                            </td>                   
                            <td><a class="btn btn-info" href="/admin/product/addImage/{{ $value['id'] }}">Xem</a></td>
                            <td>
                                <a href="/admin/product/edit/{{ $value['id'] }}" class="btn btn-xs btn-warning d-inline-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                    <span>Chỉnh sửa</span>
                                </a>
                                <a data-bs-toggle="modal" href="#myModal" class="btn btn-xs btn-danger d-inline-flex align-items-center justify-content-center delete-product" data-id="" 
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
         
        <div class="mb-5">
            @if(isset($_GET['idCat']))
            <div>{{ $data->appends(['idCat'=>$_GET['idCat']])->links() }}</div>
            @else
            <div>{{ $data->links() }}</div>
            @endif
        </div>


    </div>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bạn có chắc chắn muốn xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                {{-- <div class="modal-body">
                    <p>Khi xóa danh mục sẽ xóa tất cả sản phẩm thuộc danh mục</p>
                </div> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">
                        <a class="text-light text-decoration-none" href="/admin/product/delete/{{ $value['id'] }}">Đồng ý</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
