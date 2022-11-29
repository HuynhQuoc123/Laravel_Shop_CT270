<?php
    use App\Models\User;
    use App\Models\Producer;
    use App\Models\Category;
    use App\Models\Product;

        $userTotal = User::all()->count();
        $producerTotal = Producer::all()->count();
        $categoryTotal = Category::all()->count();
        $productTotal = Product::all()->count();
?>
<x-app-layout>
    <x-slot name="header">
        @section('content')        
        
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <div class="content">
         
    
    
                  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Tổng số người dùng</p>
                                <h6 class="mb-0">{{ $userTotal }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Tổng số nhà sản xuất</p>
                                <h6 class="mb-0">{{ $producerTotal}}</h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Tổng số danh mục</p>
                                <h6 class="mb-0">{{ $categoryTotal }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Tổng số sản phẩm</p>
                                <h6 class="mb-0">{{ $productTotal }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
                
              

            </div>
        </div>
        
        
        @endsection
    </x-slot>    
</x-app-layout>
