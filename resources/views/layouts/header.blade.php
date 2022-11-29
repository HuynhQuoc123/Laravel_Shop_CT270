<nav class="navbar navbar-expand-lg fixed-top py-3" id="mainnav"  >
    <div class="d-flex justify-content-between container fw-bold">
        <div class="logo">
            <a href="/">
                {{-- <h2>logo</h2> --}}
                <i class="fa-solid fa-music fa-2x"></i>
                {{-- <img src="{{asset('storage/images/logo.png')}}" width="50px" alt=""> --}}
            </a>
        </div>

        <div  class="" >
            <a class="" href="/">Trang chủ</a>
            <a class="mr-5 ml-5 " href="/product">Sản phẩm</a>
            <a class="" href="">Giới thiệu</a>
        </div>


       <div class="d-flex">
            @if (Route::has('login'))
            @auth

                @if(Auth::user()->id_role == 1)     
                    <div>
                        <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>                    
                    </div>                
                @else
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fs-5 fa-shopping-cart "></i>                        
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" style="width: 350px">
                            <div class="cart-item border-bottom">
                                <img src="{{ asset("storage/images")}}/Epiphone PR-5E_640x640-1.jpg" alt="">
                                <div class="cart-item-info">
                                    <div class="cart-item-head">
                                        <h5 class="cart-item-name fw-bold">Epiphone PR-5E</h5>
                                        <div class="cart-item-price-wrap mt-1">
                                            <span class="cart-item-price">200.000đ</span>
                                            <span class="cart-item-multiply">X</span>
                                            <span class="cart-item-qnt">2</span>
                                        </div>
                                    </div>
                                    <div class="cart-item-body">
                                        <span class="cart-item-dsr">
                                            Guitar
                                        </span>
                                        <span class="header-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item border-bottom">
                                <img src="{{ asset("storage/images")}}/Epiphone PR-5E_640x640-1.jpg" alt="">
                                <div class="cart-item-info">
                                    <div class="cart-item-head">
                                        <h5 class="cart-item-name fw-bold">Epiphone PR-5E</h5>
                                        <div class="cart-item-price-wrap mt-1">
                                            <span class="cart-item-price">200.000đ</span>
                                            <span class="cart-item-multiply">X</span>
                                            <span class="cart-item-qnt">2</span>
                                        </div>
                                    </div>
                                    <div class="cart-item-body">
                                        <span class="cart-item-dsr">
                                        Guitar
                                        </span>
                                        <span class="header-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn btn-dark mt-2 w-50">View cart</button>
                            </div>                                
                        </div>
                    </div>
                    
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fs-5 fa-user"></i>
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end text-center">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf            
                                <a class="text-dark d-block" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Đăng xuất') }}
                                </a>
                            </form>
                        </div>
                    </div>
                @endif

            @else
                <a href="{{ route('login') }}" class="">Đăng Nhập</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-3 ">Đăng kí</a>
                @endif
                @endauth
                </div>
            @endif
       </div>
    </div>
</nav>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>











   
      

 
      
    
