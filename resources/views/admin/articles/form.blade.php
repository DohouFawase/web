@extends("layouts.admin")

@section('content')
    
<form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
     
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Titre</label>
                <div class="form-group position-relative">
                    <input type="text" class="form-control text-dark ps-5 h-58" name="title" placeholder="Entrer le Titre de l'aticle">
                </div>
            </div>
        </div>
       
       
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Reférences</label>
                <div class="form-group position-relative">
                   
                    <select id="multiple" multiple>
                        @foreach ($tags as $id => $tag )
                        <option value="{{$id}}">{{$tag}}</option>
                      
                        @endforeach
                      </select>
                </div>
            </div>
        </div>
      
        <div class="col-lg-12">
            <div class="form-group mb-0">
                <label class="label">Description :</label>
                <div class="form-group position-relative">
                    <textarea class="form-control ps-5 text-dark" placeholder="Some demo text ... " cols="30" rows="5" id="summernote" name="description"></textarea>
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
                @error('image')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mt-4  mb-3">
                
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Créer l'article</button>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
    new SlimSelect({
        select: '#multiple'
      })

     $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 300
      });
</script>


@endsection



