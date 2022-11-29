<nav x-data="{ open: false }">
    
    <button type="button" class="btn btn-primary btn-floating btn-lg" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <div class="container-xxl position-relative bg-white d-flex p-0">
           <!-- Sidebar Start -->
           <div class="sidebar pe-4 pb-3">
            <nav class="navbar  d-block">
                <a href="/" class="navbar-brand mx-4 mb-3 text-decoration-none">
                    {{-- <h2 class="text-primary fw-bold">LOGO</h2> --}}
                    <i class="fa-solid fa-music fa-2x text-primary py-3"></i>
                </a>
             
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <i class="fa-solid text-secondary fa-2x  mt-2 fa-user"></i>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>                        
                    </div>
                    
                </div>
              

                <div class="navbar-nav w-100">
                    <a href="/admin/dashboard" class="nav-item nav-link">Thống kê</a>
                    <a href="/admin/banner" class="nav-item nav-link">Ảnh Bìa</a>
                    <a href="/admin/users" class="nav-item nav-link">Người dùng</a>
                    <a href="/admin/producer" class="nav-item nav-link">Nhà sản xuất</a>
                    <a href="/admin/category" class="nav-item nav-link">Danh mục</a>
                    <a href="/admin/product" class="nav-item nav-link">Sản Phẩm</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> --}}
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            
              <!-- Navbar Start -->
              <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                {{-- <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a> --}}
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Tìm kiếm">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell text-primary me-lg-2"></i>
                            <span class="d-none  d-lg-inline-flex">Thông báo</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid text-secondary fs-4 fa-user"></i>
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end ">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf            
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
          
        </div>
    </div>

      


</nav>

