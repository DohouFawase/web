@extends('layouts.front')

@section('contente')
<div class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1100px] bg-gradient-to-b from-primary-light-950/15 to-transparent max-h-[1100px] overflow-hidden"></div>
<!-- Content -->
<section class="py-16 lg:py-24">
  <div class="container px-4">
    <div class="md:w-3/4 lg:w-1/2">
      <h1 class="heading-2 max-w-7xl mb-12 text-neutral-950 dark:text-neutral-dark-950"><span class="font-light">Let's</span> explore <span class="font-light">and</span><br> create <span class="font-light">together!</span></h1>
      <p class="mb-8 text-base font-md text-neutral-950 dark:text-neutral-dark-950">Hello and welcome to my digital haven! I'm Sarah, your guide through the realms of content creation and storytelling. As a passionate content marketing maker and writer, I'm thrilled to have you here. Get ready to embark on a journey where words come to life, ideas unfold, and creativity knows no limits.</p>
      <p class="mb-8 text-base font-md text-neutral-950 dark:text-neutral-dark-950">Gratitude for joining me in this space! Together, let's delve into new adventures, forge meaningful connections, and craft moments of inspiration. Here's to our shared journey of exploration and creation!</p>
    </div>
    <div class="grid md:grid-col-2 lg:grid-cols-4 mt-24">
      <div class="flex flex-col">
        <h6 class="text-2xl font-bold mb-4 text-neutral-900 dark:text-neutral-dark-900">Address</h6>
        <p class="mb-8 text-base font-md text-neutral-950 dark:text-neutral-dark-950">4517 Washington Ave. <br>Manchester, Kentucky 39495</p>
      </div>
      <div class="flex flex-col">
        <h6 class="text-2xl font-bold mb-4 text-neutral-900 dark:text-neutral-dark-900">Email</h6>
        <p class="mb-8 text-base font-md text-neutral-950 dark:text-neutral-dark-950">sarah-emily@ideko.com</p>
      </div>
      <div class="flex flex-col">
        <h6 class="text-2xl font-bold mb-4 text-neutral-900 dark:text-neutral-dark-900">Phone</h6>
        <p class="mb-8 text-base font-md text-neutral-950 dark:text-neutral-dark-950">(239) 555-0108</p>
      </div>
      <div class="flex flex-col">
        <h6 class="text-2xl font-bold mb-4 text-neutral-900 dark:text-neutral-dark-900">Skype</h6>
        <p class="mb-8 text-base font-md text-neutral-950 dark:text-neutral-dark-950">sarahemily290</p>
      </div>
    </div>
    <img src=" {{ asset('assets/imgs/pages/img-29.png') }}" alt="" class="mt-12 rounded-3xl">
   
  </div>
</section>
@endsection