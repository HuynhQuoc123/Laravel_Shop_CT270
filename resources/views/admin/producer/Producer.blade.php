@extends('layouts.app')
@section('content')

<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        
        
        <div class="containter row justify-content-center">
            <div class="row">
                <div class="col-12 ">
                    <h3 class=" text-center mt-5">NHÀ SẢN XUẤT</h3>
                </div>
            </div>
            <div class="col-10 row align-items-start ">
                <div class="col-4 mb-3 mt-3 ">
                    <a href="/admin/producer/add" class="btn btn-dark">Thêm nhà sản xuất mới</a>
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
        <table id="table" class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tên nhà sản xuất</th>
                    <th colspan="2" scope="col">Hành động</th>
                    <!-- <th scope="col"></th> -->
                </tr>
            </thead>
            <tbody>
                    <?php $i=1; ?>
                    @foreach ($data as $value)
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td> 
                        <td>
                            <a href="/admin/producer/edit/{{ $value['id'] }}" class="btn btn-xs btn-warning d-inline-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                                <span>Chỉnh sửa</span>
                            </a>
                            <a data-bs-toggle="modal" href="#myModal" class="btn btn-xs btn-danger d-inline-flex align-items-center justify-content-center"  title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                    <span>Xóa</span>
                            </a>        
                                                  
                        </td>
                        {{-- href="/admin/producer/delete/{{ $value['id'] }}" --}}
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bạn có chắc chắn muốn xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Khi xóa nhà sản xuất sẽ xóa tất cả sản phẩm thuộc nhà sản xuất</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">
                    <a class="text-light text-decoration-none" href="/admin/producer/delete/{{ $value['id'] }}">Đồng ý</a>
                </button>
            </div>
        </div>
    </div>
</div>
    


    
</div>

@endsection