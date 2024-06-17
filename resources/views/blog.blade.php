@extends('layouts.front')

@section('title', '
    Articles
')
@section('contente')
<div class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1100px] bg-gradient-to-b from-primary-light-950/15 to-transparent max-h-[1100px] overflow-hidden"></div>


 <!--Blog 2 Section 1 -->
 <section class="relative pt-20 py-10 lg:pt-12 lg:pb-24">
  <div class="container px-4">
    <h3 class="heading-2 text-center mb-16"><span class="font-light">Découvrez nos articles</span><br> récents sur le fétichisme</h3>
    <!--Post list 1-->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[65px]">
      @if ($images->isEmpty())
      <p class="flex justify-center font-bold text-xl">Veillez Patientez un peu</p>  
      
      @else
      @foreach ($images as $image )
      <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
        <a class='rounded-3xl overflow-hidden max-h-[606px]' href=' {{ route('detail',  ['id' => $image->article_id]) }}  '>
          <img src="{{ asset('/storage/images/articles/'.$image->image) }}" alt="" class="img-fluid" width="100">

         
        </a>
        <div class="flex-col justify-start items-start gap-3.5 flex">
          <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link' >{{$image->nom}}</a></h3>
        </div>
        <div class="flex flex-col md:flex-row gap-4">
          <a class='group btn bg-primary-light-950 dark:bg-primary-dark-950 rounded-full px-8 py-2 text-xl text-neutral-950 dark:text-neutral-dark-950 flex gap-2 items-center' href='{{ route('detail',  ['id' => $image->article_id]) }}'>
            <span>Vois plus</span>
            
          </a>
        </div>
      </div>
      @endforeach
      @endif
      
      
   
    </div>
</section>

@endsection