@extends('layouts.admin')
@section('title', 'Video Témoignages')
@section('content')
<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
    <h3 class="mb-sm-0 mb-1 fs-18">@yield('title')</h3>
    <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
        <li>
            <a href="index.html" class="text-decoration-none">
                <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                <span>Acceuil</span>
            </a>
        </li>
        <li>
            <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">@yield('title')</span>
        </li>
    </ul>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        
<div class="card bg-white border-0 rounded-10 mb-4">
   @include('components.backend.alerte')
    <div class="card-body p-4">
        <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-semibold fs-18 mb-sm-0">@yield('title')</h4>
            <a href="{{route('admin.video.create')}}" class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                <span class="py-sm-1 d-block">
                    <i class="ri-add-line text-white"></i>
                    <span>Create New User</span>
                </span>
            </a>
        </div>

        <div class="default-table-area members-list">
            <div class="table-responsive">
                

                    @if ($videos->isEmpty())
                           <p>Pas de Témoignages videos Disponible</p> 
                    @else
                          @foreach ($videos as $video) 
                                    <iframe src="https://www.youtube.com/embed/EOtPHxp6_Fg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="width: 100%; height: 500px;"></iframe>
                          @endforeach
                    @endif
                   
             
            </div>
            <div class="d-sm-flex justify-content-between align-items-center text-center">
                <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                        <li class="page-item">
                            <a class="page-link icon" href="members-list.html" aria-label="Previous">
                                <i data-feather="arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="members-list.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="members-list.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="members-list.html">3</a></li>
                        <li class="page-item">
                            <a class="page-link icon" href="members-list.html" aria-label="Next">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


        
    </div>
</div>
@endsection