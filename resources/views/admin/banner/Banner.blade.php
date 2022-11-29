@extends('layouts.app')
@section('content')


<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
        <div class="containter row justify-content-center">
            <div class="row">
                <div class="col-12 ">
                    <h3 class=" text-center mt-5 mb-4">DANH SÁCH ẢNH BÌA</h3>
                </div>
            </div>
        </div>
        @if(session('sussces'))
            <div class="alert alert-success" role="alert">
                 {{ session('sussces') }}
            </div>
        @endif

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
                        @foreach ($data as $value)                     
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>{{ $value['id']; }}</td>
                            <td >
                                <img src="{{ asset("storage/images")}}/{{ $value['image'] }} " alt="" class='d-block' width='300px' height='150px'>    
                            </td>                   
                            <td>
                                <a href="/admin/banner/edit/{{ $value['id'] }}" class="btn btn-xs btn-warning d-inline-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                    <span>Chỉnh sửa</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
