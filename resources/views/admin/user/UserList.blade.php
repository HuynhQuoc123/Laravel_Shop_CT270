<?php use App\Models\User; ?>
@extends('layouts.app')

@section('content')


<div class="container-xxl position-relative bg-white d-flex p-0">
    <div class="content">
 
          

        <div class="containter row justify-content-center">
            <div class="row">
                <div class="col-12 ">
                    <h3 class="text-center mt-5 mb-5">DANH SÁCH NGƯỜI DÙNG</h3>
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
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Vai trò</th>
        
             
                </tr>
            </thead>
            <tbody>
                    @foreach ($data as $value)
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td> 
                        <td><?= User::find($value['id'])->getRole->toArray()['name']; ?></td>
           
                        
                    </tr>
                    @endforeach
            </tbody>
        </table>

    </div> 
</div>

@endsection