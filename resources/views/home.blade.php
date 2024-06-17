 @extends("layouts.front")

 @section('title', '
   Acceuile
')

 @section('contente')
  <div class="header-bg absolute top-0 left-0 right-0 -z-50 w-full h-[1100px] bg-gradient-to-b from-primary-light-950/15 to-transparent max-h-[1100px] overflow-hidden"></div>


<!--HTML CODE-->

<div class="w-full relative">
  <div class="swiper progress-slide-carousel swiper-container relative">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
      <img src="
       {{ asset('assets/imgs/pages/carousel2.jpg') }}" alt="">
    </div>
  </div>
  <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
      <img src="{{ asset('assets/imgs/pages/carousel.jpeg') }}" alt="">
    </div>
  </div>
  <div class="swiper-slide">
    <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
      <img src="{{ asset('assets/imgs/pages/image013.jpg') }}" alt="">>
    </div>
  </div>
  </div>
  <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
  </div>
  </div>

  <section class="relative py-20 lg:py-24 lg:mb-16">
    <div class="container px-4">

      <h1 class="heading-1">Découvrez des solutions ancestrales <span class="font-light">pour transformer votre vie dès maintenant.</span></h1>
      <div class="swiper-container post-slider-4">
        <div class="swiper-wrapper pt-4">
          @foreach ($services as $service )
          <div class="swiper-slide hover-up">
            
            <div class="w-full h-52 relative rounded-3xl overflow-hidden">
              {{-- <a href='category'><img class="left-0 top-0 absolute rounded-3xl" src="assets/imgs/pages/img-01.png" /></a> --}}
              <div class="px-[13px] py-[9px] left-[10px] top-[150px] absolute bg-neutral-0 dark:bg-neutral-dark-0 rounded-[26px] justify-center items-center gap-2.5 inline-flex">
                <a class='text-neutral-950 dark:text-neutral-dark-950 text-sm font-medium' href=''>{{$service->title}}</a>
                {{-- <div class="w-[22px] h-[22px] relative">
                  <div class="w-7 h-7 left-[-3px] top-[-3px] absolute bg-primary-light-950 rounded-full"></div>
                  <div class="left-[3px] top-[5px] absolute text-center text-neutral-950 text-xs font-medium  leading-3">17</div>
                </div> --}}
              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
      {{-- <div class="flex justify-between items-center gap-8 lg:gap-32 mt-12 flex-col lg:flex-row">
        <p class="text-neutral-950 dark:text-neutral-dark-950 text-base font-medium lg:w-2/4">Goods and services. It involves entrepreneurship, management, marketing, finance, and many other aspects. Businesses aim to generate profit while meeting</p>
        <form class="max-w-full overflow-hidden" action="index.html">
          <div class="flex flex-col md:flex-row mb-4 md:bg-neutral-0 dark:bg-neutral-dark-200 rounded-full p-1">
            <input class="focus:outline-none transition duration-200 py-4 bg-neutral-0 dark:bg-neutral-dark-200 rounded-full pl-6 w-full mb-2 md:mb-0" type="text" placeholder="Your email address">
            <button class="w-full sm:w-auto h-14 py-4 px-6 rounded-full bg-neutral-950 transition duration-200 flex items-center justify-center gap-2" type="submit">
              <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 fill-primary-light-950" preserveAspectRatio="none">
                <path d="M19.8829 0.671875H2.8827C2.35277 0.673442 1.84497 0.890991 1.47025 1.277C1.09552 1.663 0.884334 2.18609 0.882812 2.73198V15.6118C0.884334 16.1577 1.09552 16.6807 1.47025 17.0668C1.84497 17.4528 2.35277 17.6703 2.8827 17.6719H19.8829C20.4129 17.6703 20.9207 17.4528 21.2954 17.0668C21.6701 16.6807 21.8813 16.1577 21.8828 15.6118V2.73198C21.8813 2.18609 21.6701 1.663 21.2954 1.277C20.9207 0.890991 20.4129 0.673442 19.8829 0.671875ZM19.6326 5.04989L11.3828 10.7158L3.13182 5.04989V2.98979L11.3817 8.65566L19.6315 2.98979L19.6326 5.04989Z"></path>
              </svg>
              <span class="text-neutral-0 font-medium text-2xl">Subscribe</span>
            </button>
          </div>
          <p class="text-neutral-700 text-sm pl-4">* Unsubscribe anytime</p>
        </form>
      </div> --}}
    </div> <!--.container-->
    <div class="header-bg absolute bottom-0 left-0 right-0 -z-50 w-full h-full bg-gradient-to-t from-primary-light-950/15 to-transparent"></div>
  </section>

    <!--Blog 2 Section 1 -->
 


    <section class="relative pt-20 py-10 lg:pt-12 lg:pb-24">
      <div class="container px-4">
        <h3 class="heading-2 text-center mb-16"><span class="font-light">Découvrez nos articles</span><br> récents sur le fétichisme</h3>
        <!--Post list 1-->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[65px]">
          @if ($images ->isEmpty())
          <p class="flex justify-center font-bold text-xl">Veillez Patientez un peu</p>  
           
          @else
          @foreach ($images as $image )
          <div class="flex-col justify-start items-start gap-5 inline-flex hover-up">
            <a class='rounded-3xl overflow-hidden max-h-[606px]' href='{{ route('detail',  ['id' => $image->article_id]) }}'>
              {{-- <img src="{{ Storage::url($image->image) }}" /> --}}
              {{-- <img src="{{ asset('storage/' . $image->image) }}" /> --}}
              <img src="{{ asset('/storage/images/articles/'.$image->image) }}" alt="" class="img-fluid" width="100">

             
            </a>
            <div class="flex-col justify-start items-start gap-3.5 flex">
              <div class="justify-start items-center gap-5 inline-flex">
                {{-- <a class='px-3 py-[8px] bg-neutral-200 dark:bg-neutral-dark-200 rounded-3xl border border-neutral-200 dark:border-neutral-dark-300 justify-center items-center gap-2.5 flex' href='category'>
                  <div class="text-neutral-900 dark:text-neutral-dark-950 text-sm font-medium leading-none">Trending</div>
                </a> --}}
              </div>
              <h3><a class='text-neutral-950 dark:text-neutral-dark-950 text-2xl font-bold leading-snug item-link' href='single'>{{$image->nom}}</a></h3>
            </div>
          </div>
          @endforeach 
          @endif
         
          
       
        </div>
    </section>


     <!--Home 2 Section 2 -->
  <section class="relative pt-20 py-10 lg:pt-12 lg:pb-24">
    <div class="container px-4">
        {{-- categories --}}
      <div class="flex flex-col justify-start mb-16 items-start lg:flex-row lg:justify-between lg:items-end">
        <h3 class="heading-3 text-left mb-8 lg:mb-0 leading-none"><span class="font-light">Tous les </span> References</h3>
        <div class="justify-start items-start gap-2 inline-flex flex-wrap">
          @foreach ($tags as $tag )
                  <a class='button-7 hover-up' href=''>{{$tag->title}}</a>
                    
                  @endforeach
        </div>
      </div>
      <!--Grid-->
      
    </div>
  </section>


  <section class="py-24 ">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-14  flex flex-col justify-center items-center sm:flex-row sm:items-center sm:justify-between max-sm:gap-8">
            <!-- Slider controls -->
            <div class="flex items-center gap-8">
                <button id="slider-button-left"
                    class="swiper-button-prev group flex justify-center items-center border border-solid border-indigo-600 w-12 h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 "
                    data-carousel-prev>
                    <svg class="h-6 w-6 text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9999 12L4.99992 12M9.99992 6L4.70703 11.2929C4.3737 11.6262 4.20703 11.7929 4.20703 12C4.20703 12.2071 4.3737 12.3738 4.70703 12.7071L9.99992 18"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
                <button id="slider-button-right"
                    class="swiper-button-next group flex justify-center items-center border border-solid border-indigo-600 w-12 h-12 transition-all duration-500 rounded-full hover:bg-indigo-600"
                    data-carousel-next>
                    <svg class="h-6 w-6 text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 12L19 12M14 18L19.2929 12.7071C19.6262 12.3738 19.7929 12.2071 19.7929 12C19.7929 11.7929 19.6262 11.6262 19.2929 11.2929L14 6"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
            </div>
        </div>
        <!--Slider wrapper-->
        <div class="lg:flex    my-14 grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-8 swiper mySwiper">
            <div class="swiper-wrapper">

              @if ($testimonials->isEmpty())
              @else
              @foreach ($testimonials as $test)
              {{-- @dd($test) --}}
              <div
                  class="swiper-slide group bg-white border border-solid h-auto border-gray-300 rounded-2xl p-6 transition-all duration-500 w-full hover:border-indigo-600 slide-active:border-indigo-600">
                  
                  <p
                      class="text-lg text-gray-500 leading-8 h-24 transition-all duration-500 mb-9 group-hover:text-gray-800">
                      {{$test->temoignage}}
                  </p>
                  <div class="flex items-center gap-5">
                    {{-- <img src="{{ asset('/storage/images/services/'.$service->image) }}" alt="" class="img-fluid" width="100"> --}}
          

                      <img src="{{ asset('/storage/images/testimonials/' . $test->image) }}" alt="avatar" />
                      <div class="grid gap-1">
                          <h5
                              class="text-gray-900 font-medium transition-all duration-500  group-hover:text-indigo-600 swiper-slide-active:text-indigo-600">
                              {{$test->nom}} {{$test->prenom}}</h5>
                      </div>
                  </div>
              </div>

            @endforeach  
              @endif
             
                
             
              
            </div>
        </div>
    </div>
</section>


<section class="py-24 ">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
     
   
      <div class="lg:flex    my-14 grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-8 swiper mySwiper">
        <div class="swiper-wrapper">
              @if ($videos->isEmpty())
                  <p class="flex justify-center font-bold text-xl">Pas De Temoignages Video Disponible</p>
              @else
                  @foreach ($videos as $video )
                  
                  @endforeach
              @endif
        </div>
    </div>
  </div>
</section>




    <section class="relative pt-20 py-10 lg:pt-12 lg:pb-24">
      @if (session()->has('stauts'))
      <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
        <span class="font-medium">{{session('stauts')}}</span> 
      </div>
   
      @endif
      <div class="container px-4">
        <div class="flex justify-center ">
          <h1 class="text-sm font-bold md:text-lg">Ajouter Une Témoignages</h1>
        </div>
        <div class="flex justify-center">
         <form  action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{-- @method('POST') --}}
          <div class="mb-3">
            <label for="">Nom</label>
            <input type="text" name="nom" id="" class="input-default">  
            @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="">Prenom</label>
            <input type="text" name="prenom" id="" class="input-default">
            @error('prenom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="input-default">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
          </div>

          <div class="mb-3">
            <label for="">Témoignage</label>
            <textarea id="" cols="30" rows="10" name="temoignage" class="textarea-default" placeholder="entrez  votre temoignage">
            </textarea>
            @error('temoignage')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            
          </div>

          <div class="mb-3">
            <button type="submit"  class="group btn bg-primary-light-950 dark:bg-primary-dark-950 rounded-full px-8 py-4 text-xl text-neutral-950 dark:text-neutral-dark-950 flex gap-2 items-center">Envoyez</button>
          </div>

         </form>
        </div>
      </div>
    </section>



    <div class="w-full relative">
      <div class="swiper progress-slide-carousel swiper-container relative">
      <div class="swiper-wrapper">
            
        
                  @if ($videos->isEmpty())
                      <p class="flex justify-center font-bold text-xl">Pas De Temoignages Video Disponible</p>
                  @else
                      
                  @endif
        
    
                @foreach ($videos as $video )
                      <iframe src=" https://www.youtube.com/embed/ {{$video->description}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen style="width: 100%; height: 500px;"></iframe>
                     
      <div class="swiper-slide">
        <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
         
        </div>
      </div>
       @endforeach
      </div>
     
      </div>
    </div>

   

    <div class="w-full relative">
      <div class="swiper progress-slide-carousel swiper-container relative">
          <div class="swiper-wrapper">
            @if ($videos->isEmpty())
            <p class="flex justify-center font-bold text-xl">Pas De Temoignages Video Disponible</p>
            @else
              @foreach ( as )
              <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                    <iframe src=" https://www.youtube.com/embed/ {{$video->description}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen style="width: 100%; height: 500px;"></iframe>
                 
                </div>
              </div>
              @endforeach
            @endif
          </div>
      <div class="swiper-pagination !bottom-2 !top-auto !w-80 right-0 mx-auto bg-gray-100"></div>
      </div>
    </div>










<style>
        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
            content: '' !important;
        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
            content: '' !important;
        }

        .swiper-button-next svg,
        .swiper-button-prev svg {
            width: 24px !important;
            height: 24px !important;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: relative !important;
        }

        .swiper-slide.swiper-slide-active {
            --tw-border-opacity: 1 !important;
            border-color: rgb(79 70 229 / var(--tw-border-opacity)) !important;
        }

        .swiper-slide.swiper-slide-active>.swiper-slide-active\:text-indigo-600 {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity));
        }

        .swiper-slide.swiper-slide-active>.flex .grid .swiper-slide-active\:text-indigo-600 {
            --tw-text-opacity: 1;
            color: rgb(79 70 229 / var(--tw-text-opacity));
        }
    </style>


  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 28,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 28,
                centeredSlides: true,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 32,
            },
        },
    });
</script>

<script>
  var swiper = new Swiper(".progress-slide-carousel", {
  loop: true,
  fraction: true,
  autoplay: {
    delay: 1200,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".progress-slide-carousel .swiper-pagination",
    type: "progressbar",
  },
  });
  </script>
 @endsection