@extends("layouts.admin")

@section('content')
    
<form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    
        <div class="col-lg-12">
            <div class="form-group mb-0">
                <label class="label">Description :</label>
                <div class="form-group position-relative">
                    <textarea class="form-control ps-5 text-dark" placeholder="Some demo text ... " cols="30" rows="5" id="summernote" name="description"></textarea>
                </div>
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



