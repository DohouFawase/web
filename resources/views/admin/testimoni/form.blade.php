@extends('layouts.admin')
@section('title', 'Ajouter un Témoignages')

@section('content')
   <div class="row">
    <div class="col-lg-8">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body py-4">
                <h3 class="fs-18 mb-4 border-bottom pb-20 mb-20">@yield('title')</h3>
                    <form action="{{ route('admin.temoignages.store') }}" method="post" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Nom</label>
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control text-dark ps-5 h-58 @error('nom') is-invalid @enderror"
                                            placeholder="Entre Nom" name="nom">
                                        <i
                                            class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                                 @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Prénom</label>
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control text-dark ps-5 h-58 @error('prenom') is-invalid @enderror"
                                            placeholder="Entrer Prenoms" name="prenom">
                                        <i
                                            class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                                 @error('prenom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Témoignages Notes :</label>
                                    <div class="form-group position-relative">
                                        <textarea class="form-control ps-5 text-dark" placeholder="Rediger le Témoignages... " cols="30" rows="5" name="temoignage"></textarea>
                                        <i class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2 @error('temoignage') is-invalid @enderror"></i>
                                    </div>
                                </div>
                                @error('temoignage')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Témoignages Image</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-upload" class="file-upload mb-0">
                                                <span
                                                    class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
                                                    <i class="ri-camera-line wh-38 bg-gray-div7 d-inline-block text-gray-light rounded-circle position-absolute bottom-0 end-0"
                                                        style="right: -10px !important; bottom: -10px !important;"></i>
                                                </span>
                                            </label>
                                            <input id="file-upload" type="file" name="image" class="">
                                        </div>
                                    </div>
                                    @error('image')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-primary py-3 px-5 fw-semibold text-white">Create
                                        Témoignages</button>
                                </div>
                            </div>

                        </div>
                    </form>
            </div>
        </div>
    </div>
</div> 
@endsection



