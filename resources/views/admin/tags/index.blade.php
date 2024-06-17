@extends('layouts.admin')

@section('content')
<div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
    <h3 class="mb-sm-0 mb-1 fs-18">Services Table</h3>
    <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
        <li>
            <a href="index.html" class="text-decoration-none">
                <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                <span>Acceuil</span>
            </a>
        </li>
        <li>
            <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Services Table</span>
        </li>
    </ul>
</div>

<div class="row justify-content-center">
    <div class="col-lg-12">
        
<div class="card bg-white border-0 rounded-10 mb-4">
   @include('components.backend.alerte')

    <div class="card-body p-4">
        <div class="d-sm-flex text-center justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-semibold fs-18 mb-sm-0">Users List</h4>
            <a href="{{route('admin.tags.create')}}" class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3">
                <span class="py-sm-1 d-block">
                    <i class="ri-add-line text-white"></i>
                    <span>Create New User</span>
                </span>
            </a>
        </div>

        <div class="default-table-area members-list">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" class="text-primary text-start">
                                ID
                            </th>
                            <th scope="col">Tags</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $tags as $tag )
                        <tr class="text-center">
                          
                            <td>
                                <span>{{$tag->id}}</span>
                            </td>
                            {{-- <td>
                                <span class="bg-danger bg-opacity-10 text-danger fs-13 fw-semibold py-1 px-2 rounded-1">Deactive</span>
                            </td> --}}
                            <td>
                                <span>{{$tag->title}}</span>

                            </td>
                            <td>
                                <div class="dropdown action-opt">
                                    <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                      
                                        <li>
                                            <a class="dropdown-item" href="
                                            {{ route('admin.tags.edit', $tag->id) }}
                                          
                                            ">
                                                <i data-feather="edit-3"></i>
                                                Mofifier
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="download"></i>
                                                Download
                                            </a>
                                        </li>
                                        <li>
                                            <form action="
                                            {{ route('admin.tags.destroy', $tag->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash-2"></i>
                                                    Remove
                                                </button>
                                            </form>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
           {{ $tags->links() }}
        </div>
    </div>
</div>


        
    </div>
</div>
@endsection