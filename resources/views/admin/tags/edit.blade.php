
@extends('layouts.admin')

@section("content")
<div class="row">
    <div class="col-lg-8">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h3 class="fs-18 mb-4 border-bottom pb-20 mb-20">Modifier Tags</h3>
               
                <form action= " {{ route('admin.tags.update', $tag->id) }}" method="post" enctype="multipart/form-data"> 
                    {{-- {{ route('admin.tags.update', $tag->id) }} --}}
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                
                                <label class="label">Tags</label>
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control text-dark ps-5 h-58 @error('title') is-invalid @enderror"
                                        placeholder="Editer un tag" name="title" value="{{$tag->title}}">
                                    <i
                                        class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                                                        @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                                    </div>
                      
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-primary py-3 px-5 fw-semibold text-white">Create
                                    Tags</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   
</div>
 
@endsection
