@extends("layouts.admin")

@section('content')
    
<form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
     
        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Titre</label>
                <div class="form-group position-relative">
                    <input type="text" class="form-control text-dark ps-5 h-58" name="title" placeholder="Entrer le Titre de l'aticle" value="{{ $article->title }}">
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
                    <textarea class="form-control ps-5 text-dark" placeholder="Some demo text ... " cols="30" rows="5" id="summernote" name="description"> {{ $article->description }}</textarea>
                    <i class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mt-4  mb-3">
                
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Modifier</button>
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