@if (session()->has('status'))
<div class="alert alert-primary alert-dismissible" role="alert">
   {{session('status')}}
	<button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


