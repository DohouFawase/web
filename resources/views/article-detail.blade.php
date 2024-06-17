@extends('layouts.front')
@section('title', $article->title)
@section('contente')
<div class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1100px] bg-gradient-to-b from-primary-light-950/15 to-transparent max-h-[1100px] overflow-hidden"></div>
<!-- Content -->
<section class="relative py-12">
  <div class="container px-4">
    <div class=" justify-center">
          {!!$article->description!!}
    </div>
    
  </div>
</section>
@endsection