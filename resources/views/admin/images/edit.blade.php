
@extends('layouts.admin')
@section('title', '
    Ajouter une Image
')
@section("content")
<div class="row">
    <div class="col-lg-8">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h3 class="fs-18 mb-4 border-bottom pb-20 mb-20">@yield('title')</h3>
                <form action= " {{ route('admin.image.update', $image->id) }}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method('put')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Service</label>
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control text-dark ps-5 h-58 @error('nom') is-invalid @enderror"
                                            placeholder="Enter Services Tilte" name="nom" value="{{$image->nom}}">
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
                                    <label class="label">Article</label>
                                    <div class="form-group position-relative">
                                        <select id="multiple" multiple name="article_id">
                                            @foreach ($articles as $id => $tag )
                                            <option value="{{$id}}">{{$tag}}</option>
                                           
                                            @endforeach
                                          </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Services Image</label>
                               
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
                              
                            </div>
                        </div>
                      
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-primary py-3 px-5 fw-semibold text-white">Create
                                    Images</button>
                            </div>
                        </div>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   @if ("/storage/images/{{ $image->image }}")
                   <img src="{{ asset('/storage/images/articles/'.$image->image) }}" alt="" class="img-fluid" width="100">

                   @else
                       <p>No image found</p>
                   @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</div>
 

<script>
  
    new SlimSelect({
        select: '#multiple'
      })
</script>
@endsection
