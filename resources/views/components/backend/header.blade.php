<header class="header-area bg-white mb-4 rounded-bottom-10" id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="left-header-content">
                <ul
                    class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button class="header-burger-menu bg-transparent p-0 border-0"
                            id="header-burger-menu">
                            <i data-feather="menu"></i>
                        </button>
                    </li>
                    <li>
                        <form class="src-form position-relative">
                            <input type="text" class="form-control" placeholder="Search here..">
                            <button type="submit"
                                class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <i data-feather="search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul
                    class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                  
                    
                  
                    <li class="header-right-item d-none d-md-block">
                        <div class="today-date">
                            <span id="digitalDate"></span>
                            <i data-feather="calendar"></i>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown admin-profile">
                            <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                                
                            </div>
                            <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                               
                                <li>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i data-feather="log-out"></i>
                                            <span class="ms-2">
                                                {{ __('Log Out') }}
                                            </span>
                                    </a>
                                    </form>
                                    {{-- <a class="dropdown-item d-flex align-items-center text-body"
                                        href="" >
                                       
                                        <span >Logout</span>
                                    </a> --}}
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>