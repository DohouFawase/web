<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ url('admin/dashboard') }}" class="d-block text-decoration-none">
         
            <span class="logo-text fw-bold text-dark">DAHFIFONSI</span>

        </a>
        <button
            class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
            id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-item open">
                <a href="javascript:void(0);" class="  menu-link menu-toggle active">
                    <i data-feather="grid" class="menu-icon tf-icons"></i>
                    <span class="title">Aamin Panel</span>
                    <span class="count">7</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        
                        <a href=" {{ url('admin/dashboard') }}" class="  {{(Route::is('dashboard')) ? 'active': 'active'}}  menu-link ">
                           Dashboard
                        </a>
                    </li>

                   

                 
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Blogs</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/articles') }}" class="menu-link  
                    {{(Request::is('articles')) ? 'active': ''}} 
                    ">
                           Articles
                        </a>
                        {{-- {{ route('admin/articles') }} --}}
                    </li>
                    <li class="menu-item">
                        <a href="documents.html" class="menu-link">
                            Documents
                        </a>
                    </li>
                   
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Images</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/image') }} " class="menu-link">

                      
                           List Categorie

                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="documents.html" class="menu-link">
                            Documents
                        </a>
                    </li>
                 
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Tags</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/tags') }}" class="menu-link">
                            Liste Tags
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Services</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/services') }}" class="menu-link">
                            
                            Services  Liste
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="documents.html" class="menu-link">
                            Documents
                        </a>
                    </li>
                  
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Témoignages</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/temoignages') }}" class="menu-link">
                            Temoignages  Liste
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="documents.html" class="menu-link">
                            Documents
                        </a>
                    </li>
                  
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Clients</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/testi ') }}" class="menu-link">
                           Card Temoignage
                        </a>
                    </li>
                 
                  
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <i data-feather="folder-minus" class="menu-icon tf-icons"></i>
                    <span class="title">Temoignage Video</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ url('admin/video ') }}" class="menu-link">
                          Video
                        </a>
                    </li>
                 
                  
                </ul>
            </li>
            
            
            
        </ul>
    </aside>
    <div class="bg-white z-1 admin">
        <div class="d-flex align-items-center admin-info border-top">
            <div class="flex-grow-1 ms-3 info">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <span class="ms-2">
                            {{ __('Log Out') }}
                        </span>
                </a>
                </form>
            </div>
        </div>
    </div>
</div>